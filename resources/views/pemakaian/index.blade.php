@extends('layouts.app')

@section('content')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Pemakaian Mobil Dinas PT. Desain dan Teknik Indonesia</h4>
                        <p class="text-muted mb-4 font-13">Pada halaman ini menampilkan data dan juga sebagai management data mobil dinas yang dimiliki oleh PT. Desain dan Teknik Indonesia</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Agenda Pemakaian</th>
                                <th>Tipe Mobil</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pemakaian</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Tujuan</th>
                                <th>Approval UTO</th>
                                <th>Approval BOM</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Perjalanan Dinas ke Jogja</td>
                                <td>Minibus</td>
                                <td>Agus</td>
                                <td>01-01-2024</td>
                                <td>05-01-2024</td>
                                <td>Kantor Customer di Yogyakarta</td>
                                <td>Waiting Approval</td>
                                <td>Waiting Approval</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mengantar Hasil Produksi ke Jakarta</td>
                                <td>Pick Up</td>
                                <td>Andi</td>
                                <td>01-01-2024</td>
                                <td>05-01-2024</td>
                                <td>Kantor Customer di Jakarta</td>
                                <td>Waiting Approval</td>
                                <td>Waiting Approval</td>
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