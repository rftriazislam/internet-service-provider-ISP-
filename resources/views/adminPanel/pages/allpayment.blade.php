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
                        <strong class="card-title">Manage User</strong>
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
                                    <th>User Name</th>

                                    <th>Month</th>
                                    <th>Price</th>

                                    <th>Payment Method</th>
                                    <th>Paid Date</th>
                                    <th>Note</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allpayment as $view_payment)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$view_payment->id}}</td>
                                    <td>{{$view_payment->user_client->user_name}}</td>
                                    <td>
                                        @if($view_payment->month_name==1 )
                                        January
                                        @elseif($view_payment->month_name==2)
                                        February

                                        @elseif($view_payment->month_name==3)
                                        March
                                        @elseif($view_payment->month_name==4)
                                        April
                                        @elseif($view_payment->month_name==5)
                                        May
                                        @elseif($view_payment->month_name==6)
                                        June
                                        @elseif($view_payment->month_name==7)
                                        Juliy
                                        @elseif($view_payment->month_name==8)
                                        August
                                        @elseif($view_payment->month_name==9)
                                        September
                                        @elseif($view_payment->month_name==10)
                                        October
                                        @elseif($view_payment->month_name==11)
                                        November
                                        @elseif($view_payment->month_name==12)
                                        December
                                        @endif
                                    </td>
                                    <td>{{$view_payment->price}}</td>
                                    <td>{{$view_payment->payment_method}}</td>

                                    <td>{{$view_payment->paid_date}}</td>
                                    <td>{{$view_payment->short_note}}</td>



                                    <td>
                                        @if($view_payment->status==1)
                                        <button style="color:white ;background-color:green "><a style="color:white"
                                                href="{{url('paymentPublish')}}/{{$view_payment->id}}">Active</a></button>
                                        @else
                                        <button style=" color:white ;background-color:red"><a style="color:white"
                                                href="{{url('paymentUnpublish')}}/{{$view_payment->id}}">Inactive</a></button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" style="color:white  ;background-color:red"
                                                class="btn "><a style="color:white"
                                                    href="{{url('paymentDelete')}}/{{$view_payment->id}}">
                                                    Delete</a></button>

                                            <button type="button" style=" color:white ;background-color:aqua"
                                                class="btn "><a style="color:white"
                                                    href="{{url('paymentEdit')}}/{{$view_payment->id}}">
                                                    Updated/Edit</a></button>

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