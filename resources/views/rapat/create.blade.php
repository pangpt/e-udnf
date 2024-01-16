@extends('layouts.master')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Tambah Undangan
                            <small>UDNF elektronik</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Digital</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Undangan Rapat</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> No. Agenda Rapat</label>
                                <input class="form-control" id="validationCustom01" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Waktu</label>
                                <input class="form-control" id="validationCustomtitle" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Tanggal</label>
                                <input class="form-control" id="validationCustomtitle" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Agenda Rapat</label>
                                <textarea rows="3" cols="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Perihal</label>
                                <textarea rows="3" cols="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"><span>*</span> Penanggungjawab</label>
                                <select class="custom-select" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">eBooks</option>
                                    <option value="2">Graphic Design</option>
                                    <option value="3">3D Impact</option>
                                    <option value="4">Application</option>
                                    <option value="5">Websites</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Peserta Rapat <small>(pisahkan dengan koma)</small></label>
                                <textarea rows="3" cols="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Keterangan</label>
                                <input class="form-control" id="validationCustom02" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Link Website</label>
                                <input class="form-control" id="validationCustom02" type="text" required="">
                            </div>
                            <div class="form-group mb-0">
                                <div class="product-buttons">
                                    <button type="button" class="btn btn-primary">Tambah</button>
                                    <button type="button" class="btn btn-light">Batal</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection
