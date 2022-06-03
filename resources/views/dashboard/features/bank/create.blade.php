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
                                <h4 class="card-title">Bank Information</h4>
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
                                            <label for="example-text-input" class="col-md-3 col-form-label">Bank Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Branch Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Account Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Account Type</label>
                                            <div class="col-md-9">
                                                <select class="form-select">
                                                    <option value="">--Select--</option>
                                                    <option value="Current">Current</option>
                                                    <option value="Saving">Saving</option>
                                                    <option value="Loan">Loan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Account Number</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="number">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Present Deposit</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-md-3 col-form-label">Account Opening Date</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="date"  id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="exampleDataList" class="col-md-3 col-form-label">Area</label>
                                            <div class="col-md-9">
                                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="datalistOptions">
                                                    <option value="Dhaka">
                                                    <option value="Barishal">
                                                    <option value="Potuakhali">
                                                    <option value="Jalokathi">
                                                    <option value="Vola">
                                                    <option value="Pirojpur">
                                                    <option value="Borguna">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-tel-input" class="col-md-3 col-form-label">Bank Contact No.</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" id="example-tel-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-12">
                                                <input class="form-control btn btn-outline-danger" type="submit" value="Create An Account">
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
