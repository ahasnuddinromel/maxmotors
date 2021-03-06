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
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <h4 class="text-white">Md Saiful Islam</h4>
                                    <p class="text-white font-size-18 ">Top<strong> Seler</strong> Of  The Month</p>

                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-4 mt-sm-0">
                                        <img src="{{asset('assets/images/users/avatar-1.jpg')}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

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
                                        <span class="text-muted">Search By<i class="small expand_less"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Top Inquery</h4>

                            <div data-simplebar style="max-height: 336px;">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-centered table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                </td>
                                                <td><span class="badge bg-soft-danger font-size-12">Terget-50</span></td>
                                                <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>23</td>
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
