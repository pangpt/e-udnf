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
                        <table class="display" id="basic-1">
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
                            <tr>
                                <td>1</td>
                                <td>12/KPA.W20/I/2024</td>
                                <td>12 Januari 2024</td>
                                <td>-</td>
                                <td>Undangan Rapat Tim ZI</td>
                                <td>Senin, 16 Januari 2024</td>
                                <td>Pembentukan Tim ZI</td>
                                <td>HERIYAH -Ketua PA</td>
                                <td>
                                    <div>
                                        <a href="">
                                            <i class="fa fa-print font-alert"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-edit font-success"></i>
                                        </a>
                                        {{-- <i class="fa fa-trash font-danger"></i> --}}
                                    </div>
                                </td>
                            </tr>
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
