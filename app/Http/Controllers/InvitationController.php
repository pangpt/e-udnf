<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //
    public function index()
    {
        return view('undangan.index');
    }

    public function create()
    {
        return view('undangan.create');
    }

    public function cetak()
    {
        $templatePath = resource_path('views/template/template_undangan.docx');
        $templateProcessor = new TemplateProcessor($templatePath);

        // Mengisi template dengan data
        $templateProcessor->setValue('placeholder1', 'Nilai1');
        $templateProcessor->setValue('placeholder2', 'Nilai2');
        // ... isi sesuai dengan placeholder di template

        // Simpan file sementara
        $fileName = 'hasil_cetak.docx';
        $templateProcessor->saveAs($fileName);

        // Kirim file ke browser
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
}
