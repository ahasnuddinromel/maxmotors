@extends('dashboard.layouts.app')
 @section('main-content')


             <div class="main-content">
                 <div class="page-content">
                     <div class="container-fluid">

                         <div class="row">
                             <div class="col-12">
                                <a class="btn btn-dark" href="#"> Add Transjection</a>
                                <a class="btn btn-dark" href="#"> Create Account</a>
                                <a class="btn btn-dark" href="#"> View Account</a><br>
                                 <div class="card">
                                     <div class="card-body">
                                         <h2>Tranjection History</h2>
                                         <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                             <thead>
                                             <tr>
                                                 <th>Bank Name</th>
                                                 <th>Account Name</th>
                                                 <th>Account Number</th>
                                                 <th>Tranjection Date</th>
                                                 <th>Tranjection Amount</th>
                                                 <th>Tranjection By</th>
                                                 <th>Tranjection Reason</th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                             <tr>
                                                 <td>Brac Bank Corporate</td>
                                                 <td>Max Plus</td>
                                                 <td>120.222.4567</td>
                                                 <td>23/5/2022</td>
                                                 <td>320,800 BDT</td>
                                                 <td>Mr Ibrahim</td>
                                                 <td>Due Payment</td>
                                             </tr>

                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div> <!-- end col -->
                         </div> <!-- end row -->
                     </div> <!-- container-fluid -->
                 </div>
                 <!-- End Page-content -->
             </div>
             <!-- end main content-->






    @endsection
