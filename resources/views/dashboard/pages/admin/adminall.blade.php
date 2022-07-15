@extends('dashboard.layouts.app')
 @section('main-content')


             <div class="main-content">
                 <div class="page-content">
                     <div class="container-fluid">

                         <div class="row">
                             <div class="col-12">
                                <a class="btn btn-dark" href="#"> Add Role</a>
                                <a class="btn btn-dark" href="#"> Add Parmition</a>
                                <a class="btn btn-dark" href="{{route('admin.create')}}"> Add New Admin</a>
                                 <div class="card my-5">
                                     <div class="card-body">
                                         <h2>Admins</h2>
                                         <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                             <thead>
                                             <tr>
                                                 <th>Sl No</th>
                                                 <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Username</th>
                                                 <th>Contact</th>
                                                 <th>Photo</th>
                                                 <th>Action</th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                               @php
                                                    $i = 1;
                                               @endphp
                                                @foreach ($all_admin as $admin)
                                                    <tr>
                                                        <td>{{$i,  $i++}} </td>
                                                        <td>{{$admin -> name}}</td>
                                                        <td>{{ $admin -> email}} </td>
                                                        <td>{{ $admin -> username}} </td>
                                                        <td>{{$admin -> phone_number}} </td>
                                                        <td><img src="#" alt=""></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="#"><i class="fa-solid fa-eye"></i></a>
                                                            <a class="btn btn-warning" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                @endforeach
                                                

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
