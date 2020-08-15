@extends('layouts.admin_master')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">PowerRegister</div>
        <div class="card-body card-block">
        @if(session('messag'))
            <h4 style="color:red;" class="text-center">
                {{session('messag')}}
            </h4>
            @endif


            <form action="{{route('poweradminUpdatedinfo')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input id="name" type="hidden" class="form-control @error('name') is-invalid @enderror"
                            name="power_id" value="{{$user->id}}" required autocomplete="name" autofocus placeholder="name">
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{$user->name}}" required autocomplete="name" autofocus placeholder="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{$user->email}}" required autocomplete="email" placeholder="Email..">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"placeholder="Password" name="password" required
                            autocomplete="new-password" value="{{$user->password_show}}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Change</button></div>
            </form>
        </div>
    </div>
</div>
@endsection