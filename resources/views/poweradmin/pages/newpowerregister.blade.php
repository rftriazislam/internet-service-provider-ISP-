@extends('poweradmin.mainpower')
@section('content')
<div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">New PowerRegister</div>
                                                        <div class="card-body card-block">
                                                            <form action="" method="post" class="">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <input type="text" id="username" name="username" placeholder="Power Code" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Complete Registion</button></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endsection                                                
