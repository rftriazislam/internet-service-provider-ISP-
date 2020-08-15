

@extends('layouts.front')

@section('content')


<section class="pricing-table-area" id="plan">
            <div class="container">


            
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-title">
                            <span class="subtitle"><h2>Our Regular Pakage</h2></span>
                           
                        </div>
                    </div>
                </div>
            
                <div class="row">
                  @foreach($pakage as $view_pakage)
                  @if($view_pakage->pakage_name == "Regular")
                  <div class="col-md-3 remove-col-padding col-sm-6">
                        <div class="single-price-plan blue">
                            <div class="header">
                                <div class="icon">
                                    <i class="fal fa-broadcast-tower"></i>
                                </div>
                                <h5 class="price">{{$view_pakage->pakage_type}}</h5>
                                <span class="subtitle">Every Month</span>
                            </div>
                            <div class="body">
                                <span class="name yellow">Price :{{$view_pakage->pakage_price}}Tk.</span>
                                <ul>
                                    <li>Pakage Name:{{$view_pakage->pakage_name}}</li>
                                    <li> Regular Pakage @else Super Saver Pakage </li>
                                    <li>Unlimited</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{route('contact')}}" class="boxed-btn red">Start now</a>
                            </div>
                        </div>
                    </div>
                    @endif
                   @endforeach

                </div>
            




                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-title">
                            <span class="subtitle"><h2>Our Super Pakage</h2></span>
                           
                        </div>
                    </div>
                </div>
                   <div class="row">
                  @foreach($pakage as $view_pakage)
                  @if($view_pakage->pakage_name =="Super")
                    <div class="col-md-3 remove-col-padding col-sm-6">
                        <div class="single-price-plan red">
                            <div class="header">
                                <div class="icon">
                                    <i class="fal fa-broadcast-tower"></i>
                                </div>
                                <h5 class="price">{{$view_pakage->pakage_type}}</h5>
                                <span class="subtitle">Every Month</span>
                            </div>
                            <div class="body">
                                <span class="name yellow">Price :{{$view_pakage->pakage_price}}Tk.</span>
                                <ul>
                                    <li>Pakage Name:{{$view_pakage->pakage_name}}</li>
                                    <li> Super Saver Pakage </li>
                                    <li>Unlimited</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{route('contact')}}" class="boxed-btn red">Start now</a>
                            </div>
                        </div>
                    </div>
                    @endif
                   @endforeach


                   <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-title">
                            <span class="subtitle"><h2>Our Home Pakage</h2></span>
                           
                        </div>
                    </div>
                </div>
                   <div class="row">
                  @foreach($pakage as $view_pakage)
                  @if($view_pakage->pakage_name =="Home")
                    <div class="col-md-3 remove-col-padding col-sm-6">
                        <div class="single-price-plan red">
                            <div class="header">
                                <div class="icon">
                                    <i class="fal fa-broadcast-tower"></i>
                                </div>
                                <h5 class="price">{{$view_pakage->pakage_type}}</h5>
                                <span class="subtitle">Every Month</span>
                            </div>
                            <div class="body">
                                <span class="name yellow">Price :{{$view_pakage->pakage_price}}Tk.</span>
                                <ul>
                                    <li>Pakage Name:{{$view_pakage->pakage_name}}</li>
                                    <li>Home Pakage </li>
                                    <li>Unlimited</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{route('contact')}}" class="boxed-btn red">Start now</a>
                            </div>
                        </div>
                    </div>
                    @endif
                   @endforeach

            

                
            </div>
        </section>
        @endsection