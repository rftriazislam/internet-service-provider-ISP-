@extends('layouts.admin_master')
@section('content')
<section>
<h2 style="text-align:center">User Profile</h2><hr>
<div class="col-2">
</div>
<div class="col-10">
<h4>Customer Name :&nbsp;<b style="color:blue"> {{$user->customer_name}}</b></h4>
<h4>User Name :&nbsp;<b style="color:aqua"> {{$user->user_name}}</b></h4>
<h4>Mitro Password :&nbsp;<b style="color:aqua">{{$user->mitrotik_password}} </b></h4>
<h4>E-mail :&nbsp;<b style="color:green"> {{$user->customer_email}}</b></h4>
<h4>Login Password :&nbsp;<b style="color:aqua">{{$user->pikopiko}} </b></h4>
<h4>Phone : &nbsp;<b style="color:yellow"> {{$user->customer_phone}}</b></h4>
<h4>Pakage :&nbsp;<b style="color:pink"> {{$user->pakages->pakage_type}}</b></h4>
<h4> Pakage price:&nbsp;{{$user->pakages->pakage_price}}/-</h4>
<h4>Connection :
@if($user->status==1)
<b style="color:green">On</b> 
 @else
 <b style="color:red">Off</b>
 @endif
 </h4>

<h4>Address :<b style="color:black"> {{$user->customer_address}}</b></h4>

&nbsp;
</div>

<div >
<h3 style="text-align:center"> Payment Issue</h3>
<div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sri.No</th>
                                    
                                    <th>User Name</th>
                                    <th>Month</th>
                                    <th>Paid</th>
                                    <th>price</th>
                                    <th>Cash Type</th>
                                    <th>Due</th>
                                
                                    <th>Paid Date</th>

                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($payment as $v_payment) 
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$v_payment->user_client->user_name}}</td>
                                    <td>
                                        @if($v_payment->month_name==1 )
                                        January
                                        @elseif($v_payment->month_name==2)
                                        February
                                      
                                        @elseif($v_payment->month_name==3)
                                         March          
                                         @elseif($v_payment->month_name==4)
                                         April
                                         @elseif($v_payment->month_name==5)
                                         May
                                         @elseif($v_payment->month_name==6)
                                         June
                                         @elseif($v_payment->month_name==7)
                                        Juliy
                                         @elseif($v_payment->month_name==8)
                                         August
                                         @elseif($v_payment->month_name==9)
                                         September
                                         @elseif($v_payment->month_name==10)
                                         October
                                         @elseif($v_payment->month_name==11)
                                         November
                                         @elseif($v_payment->month_name==12)
                                         December
                                         @endif
                                        </td>
                                    <td>pain/unpaid</td>
                                   <td> {{$v_payment->price}}</td> 
                                   
                                   <td> {{$v_payment->payment_method}}</td> 
                                


                                    <td>bbb</td>
                                      
                                   
                                    
                                    <td>{{$v_payment->paid_date}}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                           

                                            <button type="button" style=" color:white ;background-color:aqua"
                                                class="btn "><a style="color:white"
                                                    href="{{url('singlepdf')}}/{{$v_payment->id}}">
                                                    PDF</a></button>

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
</section>


@endsection
