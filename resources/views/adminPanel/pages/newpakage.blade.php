@extends('layouts.admin_master')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>New Pakage</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">New Pakage</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-8 center">
    <div class="card">
        <div class="card-header">
            <strong>New Pakage</strong> Information
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
            <form action="{{route('savepakage')}}" method="post" class="form-horizontal">
                @csrf

                <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pakage Name *</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" required name="pakage_name" placeholder="Enter pakage Name..." class="form-control"><span class="help-block"></span></div>
                                                            </div> -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Pakage Name *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="pakage_name" id="select" required class="form-control">
                            <option value="">Select Pakage</option>

                            <option value="Home">Home</option>
                            <option value="Regular">Regular</option>
                            <option value="Super">Super</option>

                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pakage Type*</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" required name="pakage_type"
                            placeholder="like 2Mb..." class="form-control"><span class="help-block"></span></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pakage Speed*</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" required name="speed"
                            placeholder="Like 200..." class="form-control"><span class="help-block"></span></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pakage Price *</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="number" required id="text-input" name="pakage_price"
                            placeholder="Enter price..." class="form-control"><span class="help-block"></span></div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Connection Type</label></div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" required name="connection_type" value="PPOE"
                                        class="form-check-input">PPOE
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" required name="connection_type" value="HOTSPOT"
                                        class="form-check-input">Hotspot
                                </label>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm right">
                        <i class="fa fa-dot-circle-o"></i> Save pakage
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>

            </form>
        </div>

    </div>



</div>
@endsection