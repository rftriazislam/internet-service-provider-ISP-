@extends('layouts.admin_master')
@section('content')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Message</a></li>
                      
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Customer mesage</strong>
                            </div>
                            @if(session('message'))
                                                   <h4 style="color:red;" class="text-center">
                                                    {{session('message')}}
                                                     </h4>
                                                        @endif
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Sri.no</th>
                                            <th>Id</th>
                                            <th>Customer Name</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Email</th>
                                         <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($message as $view_message)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$view_message->id}}</td>
                                        <td>{{$view_message->user_name}}</td>

                                        <td>{{$view_message->phone}}</td>
                                        <td>{{$view_message->subject}}</td>
                                            <td>{{$view_message->message}}</td>
                                            <td>{{$view_message->email}}</td>
                                           
                                            <td><div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" style="color:white  ;background-color:red" class="btn "><a style="color:white" href="{{url('messageDelete')}}/{{$view_message->id}}"> Delete</a></button> 
  
</div></td>
        </tr>                                    
@empty     
                                        
                                        
                                        <tr class='text-center'style="color:red">
                        <td colspan="12">No available data</td>
                    </tr>
                    @endforelse 
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



@endsection