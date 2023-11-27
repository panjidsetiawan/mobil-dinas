@extends('layouts.app')

@section('content')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Asset Mobil Dinas PT. Desain dan Teknik Indonesia</h4>
                        <p class="text-muted mb-4 font-13">Pada halaman ini menampilkan data dan juga sebagai management data mobil dinas yang dimiliki oleh PT. Desain dan Teknik Indonesia</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tipe Mobil</th>
                                <th>Merk Mobil</th>
                                <th>Nomor Polisi (Plat Nomor)</th>
                                <th>Tahun Kendaran</th>
                                <th>Status Pajak Kendaraan</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Minibus</td>
                                <td>Toyota Avanza</td>
                                <td>D 0001 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Minibus</td>
                                <td>Toyota Innova</td>
                                <td>D 0002 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Minibus</td>
                                <td>Suzuki Ertiga</td>
                                <td>D 0003 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Minibus</td>
                                <td>Toyota Veloz</td>
                                <td>D 0004 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pick Up</td>
                                <td>Suzuki Carry</td>
                                <td>D 0005 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Pick Up</td>
                                <td>Suzuki Carry</td>
                                <td>D 0006 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pick Up</td>
                                <td>Suzuki Carry</td>
                                <td>D 0007 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Pick Up</td>
                                <td>Suzuki Carry</td>
                                <td>D 0008 DTI</td>
                                <td>2015</td>
                                <td>Active until 2025</td>
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