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
                        <strong class="card-title">Power Admin</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sri.No</th>
                                    <th>Id</th>
                                    <th>Power Admin Name</th>
                                    <th>email</th>

                                    <th>Password</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($power as $v_power)

                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$v_power->id}}</td>
                                    <td>{{$v_power->name}}</td>
                                    <td>{{$v_power->email}}</td>

                                    <td>{{$v_power->password_show}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" style=" color:white ;background-color:aqua"
                                                class="btn "><a href="{{url('poweradminUpdated')}}/{{$v_power->id}}"style="color:white">Updated </a></button>
                                            <button type="button" style="color:white  ;background-color:red"
                                                class="btn "><a href="{{url('poweradminDelete')}}/{{$v_power->id}}"style="color:white">Delete</a></button>
                                        </div>
                                    </td>
                                </tr>

                                @empty


                                <tr class='text-center' style="color:red">
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