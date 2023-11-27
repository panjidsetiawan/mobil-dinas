@extends('layouts.app')

@section('content')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Supir PT. Desain dan Teknik Indonesia</h4>
                        <p class="text-muted mb-4 font-13">Pada halaman ini menampilkan data dan juga sebagai management data mobil dinas yang dimiliki oleh PT. Desain dan Teknik Indonesia</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Number</th>
                                <th>Nama Supir</th>
                                <th>Alamat</th>
                                <th>Surat Izin Mengemudi</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>202300001</td>
                                <td>Abdi</td>
                                <td>Bandung</td>
                                <td>Active</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>202300002</td>
                                <td>Agus</td>
                                <td>Bandung</td>
                                <td>Active</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
@endsection