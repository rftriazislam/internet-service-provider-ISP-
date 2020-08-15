@extends('clientuser.main')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Payment Issue</h1>
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
                        <strong class="card-title">{{Auth::user()->customer_name}}</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sri.No</th>
                                    <th>Month Name</th>
                                    <th>Amount</th>
                                    <th>Paid Date</th>

                                    <th>Paid/Unpaid</th>
                                    <th>Payment Type</th>


                                </tr>
                            </thead>
                            <tbody>

                                @forelse($payment as $v_payment)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
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
                                    <td> {{$v_payment->price}}</td>

                                    <td>{{$v_payment->paid_date}}</td>

                                    <td style="color:green">paid</td>
                                    <td>{{$v_payment->payment_method}}</td>
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