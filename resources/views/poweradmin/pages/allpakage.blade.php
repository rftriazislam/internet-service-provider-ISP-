@extends('poweradmin.mainpower')
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
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
                                <strong class="card-title">All Pakage</strong>
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
                                        <th>Sri.No</th>
                                            <th>Id</th>
                                            <th>Pakage Name</th>
                                            <th>Pakage Type</th>
                                            <th>Pakage Speed</th>
                                            <th>Pakage Price</th>
                                            <th>Connection Type</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($allpakage as $view_pakage)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$view_pakage->id}}</td>
                                        <td>{{$view_pakage->pakage_name}}</td>
                                        <td>{{$view_pakage->pakage_type}}</td>
                                            <td>{{$view_pakage->speed}}</td>
                                            <td>{{$view_pakage->pakage_price}}</td>
                                            <td>{{$view_pakage->connection_type}}</td>
                                            <td>
                                        @if($view_pakage->status==1)
                                        <a style="color:green"
                                            href="{{url('pakagePublishpower')}}/{{$view_pakage->id}}">Active</a>
                                        @else
                                        <a style="color:red"
                                            href="{{url('pakageUnpublishpower')}}/{{$view_pakage->id}}">Inactive</a>
                                        @endif
                                    </td>
                                            <td><div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" style="color:white  ;background-color:red" class="btn "><a style="color:white" href="{{url('pakageDeletepower')}}/{{$view_pakage->id}}"> Delete</a></button> 
                                            <button type="button" style=" color:white ;background-color:aqua" class="btn "><a  style="color:white"  href="{{url('pakageEditpower')}}/{{$view_pakage->id}}"> Edit</a></button>
  
</div></td>
        </tr>                                    
@empty     
                                        
                                        
                                        <tr class='text-center'style="color:red">
                        <td colspan="12">No available data</td>
                    </tr>
                    @endforelse 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



@endsection