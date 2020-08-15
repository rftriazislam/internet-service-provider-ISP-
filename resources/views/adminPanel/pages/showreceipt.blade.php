@extends('layouts.admin_master')
@section('content')
<br>
<br>
@forelse($user_payment as $value)


<div> 
<!-- <p style="line-height: 10px;color:black;margin-left:35px;"> Sri.no : Bills</p> -->

   <a  style="margin-left:89%;color: #fff; background-color: #5f2393; border-color: #500093;border: 1px solid transparent" href="{{url('singlepdf')}}/{{$value->id}}">PrintPDF</a>
<br>
<h5 style="text-align:center ;color:#00b3ee">Spider Mesh
    <p>She's Das Lane, Jaleshwaritola, Bogra Sadar Thana- 5800, Bogra. Contact: 01618057878, 01318302180.</p>
</h5>
<br>
<h6 style="text-align:center">Invoice/Bill</h6>
<br>
<div style="margin-left:17px;">
    <div class="col-5">

        <p style="line-height: 10px;color:black">Issue Date:&nbsp;{{$value->paid_date}}</p>
        <p style="line-height: 10px;color:black">Name:&nbsp;<b> {{$value->user_client->customer_name}}</b></p>
        <p style="line-height: 10px;color:black">
            Address:&nbsp;{{$value->user_client->customer_address}}
        </p>
        <p style="line-height: 10px;color:black">Contact Person:&nbsp;{{$value->user_client->customer_name}}</p>
        <p style="line-height: 10px;color:black">Email :&nbsp;{{$value->user_client->customer_email}}</p>
        <p style="line-height: 10px;color:black">Phone :&nbsp;{{$value->user_client->customer_phone}}</p>
    </div>
    <div class="col-7"></div>

</div>



<div class="col-lg-12">


    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Bill of Month</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" rowspan="2">{{$value->short_note}} </th>
                    <td rowspan="2">  @if($value->month_name==1 )
                                        January
                                        @elseif($value->month_name==2)
                                        February

                                        @elseif($value->month_name==3)
                                        March
                                        @elseif($value->month_name==4)
                                        April
                                        @elseif($value->month_name==5)
                                        May
                                        @elseif($value->month_name==6)
                                        June
                                        @elseif($value->month_name==7)
                                        Juliy
                                        @elseif($value->month_name==8)
                                        August
                                        @elseif($value->month_name==9)
                                        September
                                        @elseif($value->month_name==10)
                                        October
                                        @elseif($value->month_name==11)
                                        November
                                        @elseif($value->month_name==12)
                                        December
                                        @endif</td>
                    <td>
                        Monthly Rent&nbsp;:<b> {{$value->price}}.00 </b>
                        <br>
                        Advance&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:<b>0.00</b><br>
                        Previous Due&nbsp;&nbsp;&nbsp;:<b>0.00</b><br>
                        Vat(0)%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b>0.00</b><br>
                    </td>
                </tr>
                <tr>


                    <td scope="row">Total:<b> {{$value->price}} </b>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>


</div>
<div style="margin-left:17px;">
    <div class="col-6">
        <h5>TERMS & CONDITIONS
            <p>*Payment shall be made within 7 days from the date of invoice.<br>
                *Please take money receipt while paying money.
        </h5>
    </div>
    <div class="col-6">
        <p style="margin-left:145px;color:black"><u> Authorized Signature</u>
        </p>

    </div>
</div>

@empty
<h5 style="text-align:center ;color:#00b3ee">Yet No Payment
</h5>
</div>
@endforelse

@endsection