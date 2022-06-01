@extends('dashboard.layouts.app')



@section('main-content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box ">
                        <h4 class="mb-0">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="total-revenue-chart"></div>
                            </div>
                            <div>
                                <h5 class="mb-1 mt-1">BDT-<span data-plugin="counterup">3415234</span></h5>
                                <p class="text-muted mb-0">Total Revenue</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-success me-1"></i>2.65%</span> Since Last Month
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="orders-chart"> </div>
                            </div>
                            <div>
                                <h5 class="mb-1 mt-1">
                                    MC-<span data-plugin="counterup">561</span>
                                    SP-<span data-plugin="counterup">3343</span>
                                </h5>
                                <p class="text-muted mb-0">Seles</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"></i>0.82%</span> Since Last Month
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="customers-chart"> </div>
                            </div>
                            <div>
                                <h5 class="mb-1 mt-1"><span data-plugin="counterup">45</span></h5>
                                <p class="text-muted mb-0">Service</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"></i>6.24%</span> Since Last Month
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h5 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h5>
                                <p class="text-muted mb-0">Growth</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-success me-1"></i>10.51%</span> since last week
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Sales Analytics</h4>

                            <div class="mt-1">
                                <ul class="list-inline main-chart mb-0">
                                    <li class="list-inline-item chart-border-left me-0 border-0">
                                        <h4 class="text-primary">BDT-<span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Income</span></h4>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                        </h3>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h3><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-3">
                                <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-4">
                    {{--<div class="card bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Account!</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-4 mt-sm-0">
                                        <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->--}}

                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                    </div>
                                </div>
                            </div>

                            <h4 class="card-title mb-4">Top Selling Products</h4>


                            <div class="row align-items-center g-0 mt-3">
                                <div class="col-sm-4">
                                    <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Motorcycle </p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                            style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                            aria-valuemax="72">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                            <div class="row align-items-center g-0 mt-3">
                                <div class="col-sm-4">
                                    <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i> Spear Parts </p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar progress-bar bg-info" role="progressbar"
                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                            aria-valuemax="45">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                            <div class="row align-items-center g-0 mt-3">
                                <div class="col-sm-4">
                                    <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i> Services </p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar progress-bar bg-success" role="progressbar"
                                            style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                            aria-valuemax="48">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                            <div class="row align-items-center g-0 mt-3">
                                <div class="col-sm-3">
                                    <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning me-2"></i> Tablets </p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                            style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                            aria-valuemax="78">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                            <div class="row align-items-center g-0 mt-3">
                                <div class="col-sm-3">
                                    <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-purple me-2"></i> Cables </p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                            style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                                            aria-valuemax="63">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end Col -->
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">All Members<i class="small expand_less"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Locations</a>
                                        <a class="dropdown-item" href="#">Revenue</a>
                                        <a class="dropdown-item" href="#">Join Date</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Top Users</h4>

                            <div data-simplebar style="max-height: 336px;">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-centered table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                </td>
                                                <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                </td>
                                                <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                </td>
                                                <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                </td>
                                                <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                </td>
                                                <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-2.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                </td>
                                                <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                </td>
                                                <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- enbd table-responsive-->
                            </div> <!-- data-sidebar-->
                        </div><!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">Search By<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Seles</a>
                                        <a class="dropdown-item" href="#">Inquiry</a>
                                        <a class="dropdown-item" href="#">Service</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Seller Performence</h4>

                            <div data-simplebar style="max-height: 336px;">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-centered table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                </td>
                                                <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                </td>
                                                <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                </td>
                                                <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                </td>
                                                <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                </td>
                                                <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div> <!-- enbd table-responsive-->
                            </div> <!-- data-sidebar-->
                        </div><!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <!-- Seles Table row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Today Sales</h4>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Invoice NO</th>
                                            <th>Customer Name</th>
                                            <th>Seler Name</th>
                                            <th>Model</th>
                                            <th>Amount</th>
                                            <th>Seles Point</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Plas</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Motors</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Plas</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Motors</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Plas</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Motors</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Plas</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                            <td>Md Morshed</td>
                                            <td>Md Rakib</td>
                                            <td>X-Blade</td>
                                            <td>BDT-2,56,000</td>
                                            <td>Max Motors</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of Seles Table row -->



            <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">
                                  <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>Copy</span></button>
                                  <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>Excel</span></button>
                                  <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>PDF</span></button>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button>
                                    </div>
                                 </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable-buttons_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="card-title">Buttons example</h4>
                                            <p class="card-title-desc">The Buttons extension for DataTables
                                                provides a common set of options, API methods and styling to display
                                                buttons on a page that will interact with a DataTable. The core library
                                                provides the based framework upon which plug-ins can built.
                                            </p>

                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="row">
                            <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
                            Showing 11 to 20 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous" id="datatable-buttons_previous">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="datatable-buttons_next">
                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>2022 &copy; ahsan.romel6@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
