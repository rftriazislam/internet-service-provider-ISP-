
@extends('layouts.admin_master')
@section('content')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Payment</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Edit Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

                                            <div class="col-lg-8 center">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Edit Payment</strong> Information
                                                    </div>
                                                    @if(session('message'))
                                                   <h4 style="color:red;" class="text-center">
                                                    {{session('message')}}
                                                     </h4>
                                                        @endif
                                                  @foreach($errors->all() as $error)
                                                <h4 style="color:red;" class="text-center">
                                                       {{$error}}
                                                         </h4>
                                                            @endforeach 

                                                    <div class="card-body card-block">
                                                        <form action="{{route('paymentUpdate')}}" method="post" class="form-horizontal">

                                                        @csrf
                                                        <div class="row form-group">
                                                          
                                                                <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="payment_id" value="{{$payment->id}}" placeholder="Enter Note.." class="form-control"><span class="help-block"></span></div>
                                                            </div>
                                                        <div class="row form-group">
                                                        
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">User Name *</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="user_name" id="select" value="{{$payment->user_name}}" required class="form-control">
                                                                            <option value="">Select User *</option>
                                                                            @foreach($user as $view_user)
                                                                            <option value="{{$view_user->id}}" {{($view_user->id == $payment->user_name ) ? 'Selected' : ''}}>{{$view_user->user_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Month Name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="month_name" required id="select" value="{{$payment->month_name}}" class="form-control">
                                                                            <option value="">Select Month *</option>
                                                                            <option value="1" {{($payment->month_name === '1') ? 'Selected' : ''}}>January</option>
                                                                            <option value="2"{{($payment->month_name === '2') ? 'Selected' : ''}}>February</option>
                                                                            <option value="3"{{($payment->month_name === '3') ? 'Selected' : ''}}>March</option>
                                                                            <option value="4" {{($payment->month_name === '4') ? 'Selected' : ''}}>April</option>
                                                                            <option value="5" {{($payment->month_name === '5') ? 'Selected' : ''}}>May</option>
                                                                            <option value="6" {{($payment->month_name === '6') ? 'Selected' : ''}}>June</option>
                                                                            <option value="7" {{($payment->month_name === '7') ? 'Selected' : ''}}>Juliy</option>
                                                                            <option value="8" {{($payment->month_name === '8') ? 'Selected' : ''}}> August</option>
                                                                            <option value="9" {{($payment->month_name === '9') ? 'Selected' : ''}}> September</option>
                                                                            <option value="10" {{($payment->month_name === '10') ? 'Selected' : ''}}> October</option>
                                                                            <option value="11" {{($payment->month_name === '11') ? 'Selected' : ''}}> November</option>
                                                                            <option value="12"{{($payment->month_name === '12') ? 'Selected' : ''}}> December</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price *</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" value="{{$payment->price}}" id="text-input" name="price" required placeholder="Enter price..." class="form-control"><span class="help-block"></span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Short Note</label></div>
                                                                <div class="col-12 col-md-9"><input type="taxt" id="text-input" name="short_note" value="{{$payment->short_note}}" required placeholder="Enter Note.." class="form-control"><span class="help-block"></span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Paid Date</label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="paid_date" value="{{$payment->paid_date}}" required placeholder="Enter Note.." class="form-control"><span class="help-block"></span></div>
                                                            </div>


                                                                 <div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Payment Method Type</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check">
                                                                            <div class="radio">
                                                                                <label for="radio1" class="form-check-label ">
                                                                                    <input type="radio" id="radio1" <?php if($payment->payment_method=='Cash'){?> checked="" <?php }?> name="payment_method"  required value="Cash" class="form-check-input">Cash
                                                                                </label>
                                                                            </div>
 
                                                                            <div class="radio">
                                                                                <label for="radio2" class="form-check-label ">
                                                                                    <input type="radio" id="radio2" name="payment_method" <?php if($payment->payment_method=='Roket'){?> checked="" <?php }?>  required value="Roket" class="form-check-input">Roket
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label for="radio3" class="form-check-label ">
                                                                                    <input type="radio" id="radio2" name="payment_method" <?php if($payment->payment_method=='Nagad'){?> checked="" <?php }?>  required value="Nagad" class="form-check-input">Nagad
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label for="radio4" class="form-check-label ">
                                                                                    <input type="radio" id="radio1" name="payment_method" <?php if($payment->payment_method=='Bkash'){?> checked="" <?php }?>  required value="Bkash" class="form-check-input">Bkash
                                                                                </label>
                                                                            </div>
                                                                          
                                                                    </div>
                                                                </div>
                                                                

                                                               
                                                             

                                                        <button type="submit" class="btn btn-primary btn-sm right">
                                                            <i class="fa fa-dot-circle-o"></i>Payment Complete
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                              
                                                        </form>
                                                    </div>
                                                   
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            @endsection