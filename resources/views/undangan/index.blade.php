@extends('layouts.master')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Orders
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Order</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <div class="btn-popup pull-right">
                            <a href="{{route('undangan-create')}}" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Undangan</a>
                        </div>
                        <table class="display" id="tableInv">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Lampiran</th>
                                <th>Perihal</th>
                                <th>Hari, Tanggal Kegiatan</th>
                                <th>Tujuan Undangan</th>
                                <th>Yang Bertandatangan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($inv as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->no_surat}}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tanggal_surat)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                </td>
                                <td>{{$data->lampiran}}</td>
                                <td>{{$data->perihal}}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tanggal_pelaksanaan)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                </td>
                                <td>{{$data->tujuan_undangan}}</td>
                                <td>{{$data->ttd}}</td>
                                <td>
                                    <div>
                                        <a href="{{route('undangan-cetak',['id' => $data->id])}}">
                                            <i class="fa fa-print font-alert"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-edit font-success"></i>
                                        </a>
                                        {{-- <i class="fa fa-trash font-danger"></i> --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection
@section('script-after')
<script>
$   (document).ready(function() {
      $('#tableInv').DataTable({
        "ordering": false, // Menonaktifkan fitur pengurutan (sort)
        "language": {
          "searchPlaceholder": "NIP / Nama" // Menambahkan placeholder pada input search
        }
      });
    });
</script>
@endsection
