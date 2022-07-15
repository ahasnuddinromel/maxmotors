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
                                    <h4 class="card-title">Customer Inquery Information</h4>
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
                                                    <input name="customer_name" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Contact</label>
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
                                                <label for="example-text-input" class="col-md-3 col-form-label">Address</label>
                                                <div class="col-md-9">
                                                    <input name="address" class="form-control" type="number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Model</label>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="model">
                                                        <option value="">--Select--</option>
                                                        <option value="Current">Model-1</option>
                                                        <option value="Saving">Model-2</option>
                                                        <option value="Loan">Model-3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Color</label>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="color">
                                                        <option value="">--Select--</option>
                                                        <option value="Current">Color-1</option>
                                                        <option value="Saving">Color-2</option>
                                                        <option value="Loan">Color-3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Wish To Buy</label>
                                                <div class="col-md-9">
                                                    <input name="buy_date" class="form-control" type="date">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Inquery Info">
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
