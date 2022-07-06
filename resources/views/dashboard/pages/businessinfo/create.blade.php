@extends('dashboard.layouts.app')
 @section('main-content')


             <div class="main-content">
                 <div class="page-content">
                     <div class="container-fluid">

                         <div class="row">
                             <div class="col-12">
                                <a class="btn btn-dark" href="{{route('setup.info')}} ">Edit</a>
                                 <div class="card">
                                     <div class="card-body">
                                         <h2>Business History</h2>
                                         <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                             <thead>
                                             <tr>
                                                 <th>Business Name</th>
                                                 <th>Contact Number</th>
                                                 <th>Logo</th>
                                                 <th>Email</th>
                                                 <th>Address</th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                             <tr>
                                                 <td>Max Plus</td>
                                                 <td>01711565544</td>
                                                 <td><img src="#" alt=""></td>
                                                 <td>maxplus@gmail.com</td>
                                                 <td>Sadar Road Barishal</td>
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
