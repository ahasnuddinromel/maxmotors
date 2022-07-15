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
                                    <h4 class="card-title">Business Information</h4>
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
                                                <label for="example-text-input" class="col-md-3 col-form-label">Vehicle Or Trailer(Motorcycle)</label>
                                                <div class="col-md-9">
                                                    <input name="vehicle_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Model</label>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="brand">
                                                        <option value="">--Select--</option>
                                                        <option value="Current">Model-1</option>
                                                        <option value="Saving">Model-2</option>
                                                        <option value="Loan">Model-3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Type Of Body</label>
                                                <div class="col-md-9">
                                                    <input name="type_of_body" class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Year of Manufacture</label>
                                                <div class="col-md-9">
                                                    <input name="year_of_manufacture" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Number Of Cylinders</label>
                                                <div class="col-md-9">
                                                    <input name="number_Of_cylinders" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Fuel Used</label>
                                                <div class="col-md-9">
                                                    <input name="fuel" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Horse Power</label>
                                                <div class="col-md-9">
                                                    <input name="horse_power" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">RPM</label>
                                                <div class="col-md-9">
                                                    <input name="rpm" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Cabin Capacity</label>
                                                <div class="col-md-9">
                                                    <input name="cabin_capacity" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Seats (Includ Driver)</label>
                                                <div class="col-md-9">
                                                    <input name="number_Of_cylinders" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Number Of Standee</label>
                                                <div class="col-md-9">
                                                    <input name="number_Of_standee" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Wheel Base</label>
                                                <div class="col-md-9">
                                                    <input name="wheel_base" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Unloaded Weight</label>
                                                <div class="col-md-9">
                                                    <input name="unloaded_weight" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Max Load train Weight</label>
                                                <div class="col-md-9">
                                                    <input name="max_load_train_weight" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Frame Name</label>
                                                <div class="col-md-9">
                                                    <input name="frame_name" class="form-control" type="text">
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
