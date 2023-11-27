@extends('layouts.app')

@section('content')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 class="mt-0">Hello!, Administrator</h4>  
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-account-card-details font-24 text-secondary"></i>
                                                </div> 
                                                <span class="badge badge-danger">Jumlah Supir</span>
                                                <h3 class="font-weight-bold">10 Orang</h3>
                                                <p class="mb-0 text-muted">Masih tersedia <span class="text-success">5</span> supir yang standby saat ini</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-car-multiple  font-20 text-secondary"></i>
                                                </div> 
                                                <span class="badge badge-info">Jumlah Minibus</span>
                                                <h3 class="font-weight-bold">5</h3>
                                                <p class="mb-0 text-muted">Masih tersedia <span class="text-danger">5</span> Minibus saat ini yang dapat digunakan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-truck-check font-20 text-secondary"></i>
                                                </div> 
                                                <span class="badge badge-warning">Jumlah Mobil Pick Up</span>
                                                <h3 class="font-weight-bold">10</h3>
                                                <p class="mb-0 text-muted">Masih tersedia <span class="text-danger">5</span> Mobil Pick Up saat ini</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="dripicons-wallet font-20 text-secondary"></i>
                                                </div> 
                                                <span class="badge badge-success">Jumlah Pengguna Bulan Ini</span>
                                                <h3 class="font-weight-bold">20</h3>
                                                <p class="mb-0 text-muted">Mengalami kenaikan <span class="text-success"><i class="mdi mdi-trending-up"></i>10%</span> Dari bulan sebelumnya</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <img src="assets/images/dash.svg" alt="" class="img-fluid">
                            </div>
                        </div>                                                                              
                    </div><!--end card-body-->
                </div><!--end card--> 
            </div> <!--end col-->                               
        </div><!--end row-->  
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Overview</h4>                                         
                        <div class="chart-demo dash-apex-chart">
                            <div id="d2_overview" class="apex-charts"></div>
                        </div>                                      
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->                               
        </div><!--end row-->

        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-4">Basic Column Chart</h4>
                        <div class="chart-demo">
                            <div id="apex_column1" class="apex-charts"></div>
                        </div>                                        
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->                        
        </div><!--end row--> --}}
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Social Report</h4> 
                        <div class="table-responsive dash-social">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Network</th>
                                    <th>Sessions</th>
                                    <th>Con.Rate</th>                                                    
                                    <th>Avg.Time</th>
                                    <th>Bounce Rate</th>
                                    <th>%Change</th>
                                </tr><!--end tr-->
                                </thead>

                                <tbody>
                                <tr>
                                    <td><i class="mdi mdi-google text-danger mr-1 font-18"></i>Google</td>
                                    <td>4541</td>
                                    <td>3.2%</td>
                                    <td>3:20</td>
                                    <td>57.8%</td>
                                    <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-yahoo text-info mr-1 font-18"></i>Yahoo</td>
                                    <td>1522</td>
                                    <td>4.2%</td>
                                    <td>4:20</td>
                                    <td>62.8%</td>
                                    <td>-12.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-web text-info mr-1 font-18"></i>UC Browser</td>
                                    <td>1292</td>
                                    <td>3.2%</td>
                                    <td>5:20</td>
                                    <td>33.8%</td>
                                    <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-facebook text-primary mr-1 font-18"></i>Facebook</td>
                                    <td>2241</td>
                                    <td>4.9%</td>
                                    <td>2:20</td>
                                    <td>48.8%</td>
                                    <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-twitter text-primary mr-1 font-18"></i>Twitter</td>
                                    <td>6806</td>
                                    <td>3.2%</td>
                                    <td>3:20</td>
                                    <td>57.8%</td>
                                    <td>-11.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-linkedin text-info mr-1 font-18"></i>LinkedIn</td>
                                    <td>4541</td>
                                    <td>3.2%</td>
                                    <td>3:20</td>
                                    <td>52.8%</td>
                                    <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-pinterest text-pink mr-1 font-18"></i>Pinterest</td>
                                    <td>3542</td>
                                    <td>8.2%</td>
                                    <td>6:20</td>
                                    <td>61.8%</td>
                                    <td>23.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-google-plus text-danger mr-1 font-18"></i>Google+</td>
                                    <td>1124</td>
                                    <td>9.2%</td>
                                    <td>4:10</td>
                                    <td>20.8%</td>
                                    <td>-9.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-instagram text-success mr-1 font-18"></i>Instagram</td>
                                    <td>3521</td>
                                    <td>1.2%</td>
                                    <td>6:45</td>
                                    <td>66.2%</td>
                                    <td>34.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-whatsapp text-success mr-1 font-18"></i>WhatsApp</td>
                                    <td>96547</td>
                                    <td>9.2%</td>
                                    <td>1:20</td>
                                    <td>57.8%</td>
                                    <td>48.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><i class="mdi mdi-google-play text-warning mr-1 font-18"></i>Other</td>
                                    <td>3214</td>
                                    <td>6.2%</td>
                                    <td>4:40</td>
                                    <td>36.8%</td>
                                    <td>11.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                </tr><!--end tr-->
                                                                                
                                </tbody>
                            </table>                    
                        </div>                                         
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->                               
        </div><!--end row--> 

    </div><!-- container -->
@endsection