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
                                    <h4 class="card-title">Employee Information</h4>
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
                                                <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Designation</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_degi" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Father's Name</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_fathers_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Mother's Name</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_mothers_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Business Contact </label>
                                                <div class="col-md-9">
                                                    <input name="phone_number" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Email</label>
                                                <div class="col-md-9">
                                                    <input name="email" class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Present Address</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_pr_address" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Permanent Address</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_permanent_address" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">NID No.</label>
                                                <div class="col-md-9">
                                                    <input name="nid_no" class="form-control" type="text">
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-3 col-form-label">Photo</label>
                                                <div class="col-md-9">
                                                    <input name="emplyee_photo"  class="form-control" type="file" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Employee Info">
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
