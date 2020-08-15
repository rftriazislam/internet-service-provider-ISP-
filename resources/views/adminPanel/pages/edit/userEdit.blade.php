@extends('layouts.admin_master')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Edit User</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-8 center">
    <div class="card">
        <div class="card-header">
            <strong>Edit Customer</strong> Information
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
            <form action="{{route('userUpdate')}}" method="post" class="form-horizontal">

                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Name
                            *</label></div>
                    <div class="col-12 col-md-9"><input type="text" required id="text-input" name="customer_name"
                            value="{{$user->customer_name}}" placeholder="Enter customer name..."
                            class="form-control"><span class="help-block"></span></div>
                    <div class="col-12 col-md-9"><input type="hidden" required id="text-input" name="user_id"
                            value="{{$user->id}}" placeholder="Enter customer name..." class="form-control"><span
                            class="help-block"></span></div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Customer e-mail</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="email" id="hf-email" name="customer_email"
                            value="{{$user->customer_email}}" placeholder="Enter Email..." class="form-control"><span
                            class="help-block"></span></div>
                </div>
                <!-- <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Mitrotik Password
                            *</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="mitrotik_password"
                            value="{{$user->mitrotik_password}}" placeholder="Enter password..."
                            class="form-control"><span class="help-block"></span></div>
                </div> -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone
                            *</label></div>
                    <div class="col-12 col-md-9"><input type="number" required id="text-input" name="customer_phone"
                            value="{{$user->customer_phone}}" placeholder="Enter phon..." class="form-control"><span
                            class="help-block"></span></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Name *</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="taxt" required id="text-input" name="user_name"
                            value="{{$user->user_name}}" placeholder="Enter User Name..." class="form-control"><span
                            class="help-block"></span></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Pakage Type*</label></div>
                    <div class="col-12 col-md-9">
                        <select name="pakage_type" id="select" required class="form-control">

                            <option value="">Select Pakage</option>
                            @foreach($pakage as $view_pakage)
                            <option value="{{$view_pakage->id}}"
                                {{($user->pakage_type == $view_pakage->id ) ? 'Selected' : ''}}>
                                {{$view_pakage->pakage_type}} {{$view_pakage->pakage_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Customer Address
                            *</label></div>
                    <div class="col-12 col-md-9"><textarea name="customer_address" required id="textarea-input" rows="9"
                            placeholder="Content..." class="form-control">{{$user->customer_address}}</textarea></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Login Password
                            *</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="password"
                            value="{{$user->pikopiko}}" placeholder="Enter password..."
                            class="form-control"><span class="help-block"></span></div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm right">
                    <i class="fa fa-dot-circle-o"></i>Updated
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>

            </form>
        </div>

    </div>



</div>
@endsection