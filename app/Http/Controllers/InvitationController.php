<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use App\Models\Invitation;

class InvitationController extends Controller
{
    //
    public function index()
    {
        $inv = Invitation::orderBy('tanggal_surat', 'desc')->get();

        return view('undangan.index', [
            'inv' => $inv,
        ]);
    }

    public function create()
    {
        return view('undangan.create');
    }

    public function store(Request $request)
    {
        $inv = new Invitation;
        $inv->no_surat = $request->no_surat;
        $inv->tanggal_surat = $request->tanggal_surat;
        $inv->lampiran = $request->lampiran;
        $inv->perihal = $request->perihal;
        $inv->tempat = $request->tempat;
        $inv->pukul = $request->pukul;
        $inv->daftar_peserta = $request->daftar_peserta;
        $inv->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $inv->tujuan_undangan = $request->tujuan_undangan;
        $inv->ttd = $request->ttd;
        $inv->save();

        return redirect()->route('undangan-index');

    }

    public function cetak($id)
    {
        $inv = Invitation::where('id', $id)->first();
        $templatePath = resource_path('views/template/template_undangan.docx');
        $templateProcessor = new TemplateProcessor($templatePath);
        // Fungsi untuk memformat tanggal dalam Bahasa Indonesia

        function tentukanTriwulan($tanggal) {
            $bulan = date('n', strtotime($tanggal)); // Mengubah tanggal menjadi bulan dalam format angka (1-12)

            if ($bulan >= 1 && $bulan <= 3) {
                return "I";
            } else if ($bulan >= 4 && $bulan <= 6) {
                return "II";
            } else if ($bulan >= 7 && $bulan <= 9) {
                return "III";
            } else {
                return "IV";
            }
        }

        function formatTanggalIndonesia($tanggal) {
            $hariIndonesia = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            $bulanIndonesia = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

            $tanggalTimestamp = strtotime($tanggal);
            $hari = $hariIndonesia[date('w', $tanggalTimestamp)];
            $tanggalFormatted = date('d', $tanggalTimestamp);
            $bulan = $bulanIndonesia[date('n', $tanggalTimestamp) - 1];
            $tahun = date('Y', $tanggalTimestamp);

            return "$hari, $tanggalFormatted $bulan $tahun";
        }

        // Mengisi template dengan data
        // setlocale(LC_TIME, 'id_ID'); // Set locale ke Indonesia
        $formattedDate = formatTanggalIndonesia($inv->tanggal_surat);
        $tanggal_pelaksanaan = formatTanggalIndonesia($inv->tanggal_pelaksanaan);
        $tanggalSurat = $inv->tanggal_surat; // Misalkan ini adalah tanggal surat
        $triwulan = tentukanTriwulan($tanggalSurat);

        $peserta = explode(',', $inv->daftar_peserta);
        // Membuat daftar bernomor
        $daftarPesertaBernomor = '';
        foreach ($peserta as $index => $namaPeserta) {
            $daftarPesertaBernomor .= ($index + 1) . '. ' . trim($namaPeserta);
            if ($index < count($peserta) - 1) {
                $daftarPesertaBernomor .= '</w:t><w:br/><w:t>';
            }
        }

        $templateProcessor->setValue('tanggal_surat', $formattedDate);
        $templateProcessor->setValue('lampiran', $inv->lampiran);
        $templateProcessor->setValue('perihal', $inv->perihal);
        $templateProcessor->setValue('tujuan_undangan', $inv->tujuan_undangan);
        $templateProcessor->setValue('tanggal_pelaksanaan', $tanggal_pelaksanaan);
        $templateProcessor->setValue('triwulan', $triwulan);
        $templateProcessor->setValue('daftar_peserta', $daftarPesertaBernomor);
        $templateProcessor->setValue('tempat', $inv->tempat);
        $templateProcessor->setValue('pukul', $inv->pukul);

        // Simpan file sementara
        $fileName = 'hasil_cetak.docx';
        $templateProcessor->saveAs($fileName);

        // Kirim file ke browser
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
}
