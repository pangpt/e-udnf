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
                            <button class="btn btn-primary"><i class="fa fa-plus"></i> Buat Undangan</button>
                        </div>
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Agenda Rapat</th>
                                <th>Waktu</th>
                                <th>Tempat</th>
                                <th>Tanggal</th>
                                <th>Agenda Rapat</th>
                                <th>Perihal</th>
                                <th>Peserta Rapat</th>
                                <th>Penanggung Jawab</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#51261</td>
                                <td>#51261</td>
                                <td>12 Januari 2024</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>Credit Card</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>May 1,18</td>
                                <td>$17.84</td>
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
