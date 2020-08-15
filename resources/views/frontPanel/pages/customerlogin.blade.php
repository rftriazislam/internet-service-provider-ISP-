@extends('layouts.front')

@section('content')
<section class=" service-areaaa" style="background-color:white">
<div class="header-areaa header-areaj-bg">
 <div class="container" id="home">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 text-center">
                            <div class="header-inner-content" style="color:black;border-radius: 14px;background-image: url({{asset('frontend/img/loginn.jpg')}});border: .5px solid red;">
                                <form action="{{route('login')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    
                                    <div class="row form-group">
                                        <div class="text-center">
                                          <img src="{{asset('img/lo.png')}}" style="height:50px;width:50px;border-radius:100%;">
                                            <p class="form-control-static">Login</p>
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
                                <a class="btn btn-link" href="{{route('customerregister')}}">
                        Register
                                    </a>                          
                            </div>
                        </div>
                        
                       
                                </form>

                                
                            </div>
                        </div>

                        <!-- <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

                    </div>
                </div>
</div> -->
            </section>
        <!--end nav bar-->
              
                
            @endsection