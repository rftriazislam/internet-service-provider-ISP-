@extends('layouts.front')

@section('content')
<section class=" features-area" style="background-color:white">
<div class="header-aareaa header-aareaj-bg">
 <div class="container" id="home">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1a text-center" style="margin:auto 18%">
                            <div class="header-inner-content" style="color:black;border-radius: 14px;background-image: url({{asset('frontend/img/logsinn.jpg')}});background-color:#F79101;border: .5px solid red;">
                                <form action="{{route('login')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    
                                    <div class="row form-group">
                                        <div class="text-center">
                                          <img src="{{asset('backend/images/login.png')}}" style="height:70px;width:70px;border-radius:100%;">
                                            <p class="form-control-static" style="color:white">Login</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class="col-md-4 col-form-label text-md-right" style="color:white"> {{ __('Email') }}</></div>
                                        <div class="col-9 col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Password') }}</label>
                                        </div>
                                        <div class="col-9 col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                   

                           <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>  

                                <a class="btn btn-link" style="color:white" href="{{route('forgottenPassword')}}">
                                Forgotten Password
                                 </a>                          
                            </div>
                        </div>
                        
                       
                                </form>

                                
                            </div>
                        </div>

             

            </section>
        <!--end nav bar-->
              
                
            @endsection