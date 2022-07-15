@extends('dashboard.layouts.app')
   @section('main-content')
   <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="card-title">Product Information</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Brand</label>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="brand_id">
                                                        <option value="">--Select--</option>
                                                        <option value="Current">Brand-1</option>
                                                        <option value="Saving">Brand-</option>
                                                        <option value="Loan">Brand-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Color</label>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="color_id">
                                                        <option value="">--Select--</option>
                                                        <option value="Current">Color-1</option>
                                                        <option value="Saving">Color-2</option>
                                                        <option value="Loan">Color-3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Get Pass Token</label>
                                                <div class="col-md-9">
                                                    <input name="get_pass_token" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Chassis Number</label>
                                                <div class="col-md-9">
                                                    <input name="chassis_no" class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Engin Number</label>
                                                <div class="col-md-9">
                                                    <input name="engin_number" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Date Of Store</label>
                                                <div class="col-md-9">
                                                    <input name="date_of_store" class="form-control" type="Date">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Frame Name</label>
                                                <div class="col-md-9">
                                                    <input name="frame_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Quantity</label>
                                                <div class="col-md-9">
                                                    <input name="product_quantity" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Motorcycle">
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
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
            <!-- end main content-->
@endsection
