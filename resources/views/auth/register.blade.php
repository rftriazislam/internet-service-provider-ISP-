<!-- @extends('layouts.front')

@section('content')
<section class=" service-areaaa" style="background-color:white">
<div class="header-areaa header-areaj-bg">
 <div class="container" id="home">
              
 


<div class="container" id="home">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 text-center">
                            <div class="header-inner-content" style="border-radius: 14px;border: .5px solid red;background-color:#F79101">
                                <form action="{{ route('client_register') }}" method="post" enctype="multipart/form-data" style="color:black;" class="form-horizontal">
                                @csrf
                                    <div class="row form-group">
                                        
                                        <div class="text-center">
                                            <p class="form-control-static">User Registration</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name *</label></div>
                                        <div class="col-9 col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

</div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-mail</label></div>
                                        <div class="col-9 col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                        </div>
                                    </div>
                                  
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password *</label></div>
                                        <div class="col-9 col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Confirm Password *</label></div>
                                        <div class="col-9 col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                   
                            

                                        <div class="row form-group">
                                       <button type="submit"  class=" btn " style="margin-bottom: 7px;margin-right: -210px;width:100px;background-color: #a2999b;">Login</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
</div>
</section>
        <!--end nav bar -->
              
                
        
        <!--end nav bar-->
       
             <!--   @endsection -->