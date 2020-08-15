@extends('layouts.front')

@section('content')


        <!-- client area end -->
        <section class="offer-area" id="area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-title">
                            <a href="#"> 
                            <h2 >Our Services</h2>
                            </a>
                        </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box">
                            <div class="content">
                            <a href="{{route('pbx')}}"> 
                              
                                <h5 style="color:aqua">PBX-IP PBX</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box blue">
                         
                            <div class="content">
                            <a href="{{route('tatc')}}"> 

                                <h5 style="color:blue">TA & AC</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box yellow">
                          
                            <div class="content">
                            <a href="{{route('alarm')}}"> 

                                <h5 style="color:green">Alarm System</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box red">
                          
                            <div class="content">
                            <a href="{{route('networking')}}"> 

                                <h5 style="color:#eadc00">Newtorking</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box purple">
                           
                            <div class="content">
                            <a href="{{route('tonic')}}"> 

                                <h5 style="color:#8bc34a">Tonic</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box yellow-2">
                           
                            <div class="content">
                            <a href="{{route('internet')}}"> 

                                <h5 style="color:#9c27b0">Internet</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box lite-blue">
                         
                            <div class="content">
                            <a href="{{route('cctv')}}"> 

                            <h5 style="color:#ff5722">CCTV</h5>
                            </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-offer-box lite-green" >
                            
                            <div class="content">
                            <a href="{{route('applicationform')}}"> 

                                <h5 style="color:#09c5f4">Application From</h5>
                                </a>
                            </div>
                        </div>

                    </div>

<hr>

                    <p>
We take this opportunity to introduce SPIDER MESH as one of the leading IT Solutions Provider in Bogra City, who provides High Speed Broadband Internet Connection(FTTH), the multi brand solution in the field of Security Surveillance. We do the installation of CCTV cameras (Analog / IP), DVRs, NVRs,  Attendance Systems, Access Control System(including EM Locks) , PBX-IP PBX System, Alarm System and Software Development.</p>
               
               
               <hr>
               <img src="{{asset('frontend/img/ss.jpg')}}">
                </div>
            </div>
        </section>
        
@endsection