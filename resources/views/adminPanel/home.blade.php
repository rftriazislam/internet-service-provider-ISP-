@extends('layouts.admin_master')
@section('content')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <a data-toggle="modal" type="button" data-target="#scrollmodal">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Total Profit</div>
                        <div class="stat-digit">
                            Tk.{{$total_amount}}/-
                        </div>
                    </div>
                </a>
            </div>





            <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Total Amount List:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                January:2000/- </p>
                            <p>
                                January:2000/- </p>
                            <p>
                                January:2000/- </p>
                            <p>
                                January:2000/- </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</div>



<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">New User</div>
                    <div class="stat-digit"> <a data-toggle="modal" type="button" data-target="#user">
                            Total:{{$total_user}}</a></div>
                </div>
            </div>

            <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Total All User:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sri.No</th>
                                        <th>User Name</th>
                                        <th>Customer Name</th>

                                        <th>Paid Date</th>

                                        <th>Payment Type</th>
                                        <th>Connection</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse($all_user as $v_user)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>

                                        <td> {{$v_user->user_name}}</td>

                                        <td>{{$v_user->customer_name}}</td>

                                        <td style="color:green">paid</td>



                                        <td style="color:green">type </td>



                                        <td>@if($v_user->status==1)
                                            <b style="color:green"> Active </b>
                                            @else
                                            <b style="color:red"> Inactive </b>

                                            @endif

                                        </td>
                                    </tr>


                                    @empty


                                    <tr class='text-center' style="color:red">
                                        <td colspan="12">No available data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Active User</div>
                    <div class="stat-digit"> <a data-toggle="modal" type="button" data-target="#activeuser">
                            Total:{{$total_connection}}</a></div>
                </div>
            </div>
            <div class="modal fade" id="activeuser" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Total All Active User:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sri.No</th>
                                        <th>User Name</th>
                                        <th>Customer Name</th>

                                        <th>Paid Date</th>

                                        <th>Payment Type</th>
                                        <th>Connection</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse($total_active_connection as $v_useractive)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>

                                        <td> {{$v_useractive->user_name}}</td>

                                        <td>{{$v_useractive->customer_name}}</td>

                                        <td style="color:green">paid</td>



                                        <td style="color:green">type </td>



                                        <td>@if($v_useractive->status==1)
                                            <b style="color:green"> Active </b>
                                            @else
                                            <b style="color:red"> Inactive </b>

                                            @endif

                                        </td>
                                    </tr>


                                    @empty


                                    <tr class='text-center' style="color:red">
                                        <td colspan="12">No available data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Inactive User</div>
                    <div class="stat-digit"> <a data-toggle="modal" type="button" data-target="#scrollmodal">
                            Total:{{$total_user-$total_connection}}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-server text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Database</div>
                        <div class="stat-text">Total: 765</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-user text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Users</div>
                        <div class="stat-text"> <a data-toggle="modal" type="button" data-target="#scrollmodal">
                                Total:{{$total_user}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-stats-up text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Daily Sales</div>
                        <div class="stat-text">Total:6666/-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-pulse text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Bandwidth</div>
                        <div class="stat-text">Total: 4TB</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-1 text-light">
        <div class="card-body">
            <div class="h4 m-0">89.9%</div>
            <div>Lorem ipsum...</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-3 text-light">
        <div class="card-body">
            <div class="h4 m-0">12.124</div>
            <div>Lorem ipsum...</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-4 text-light">
        <div class="card-body">
            <div class="h4 m-0">$98.111,00</div>
            <div>Lorem ipsum...</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-2 text-light">
        <div class="card-body">
            <div class="h4 m-0">$98.111,00</div>
            <div>Lorem ipsum...</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
        </div>
    </div>
</div>
<!--/.col-->






<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
            </div>
            <div class="b-b-1 pt-3"></div>
            <hr>
            <div class="more-info pt-2" style="margin-bottom:-10px;">
                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i
                        class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/.col-->
<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
            </div>
            <div class="b-b-1 pt-3"></div>
            <hr>
            <div class="more-info pt-2" style="margin-bottom:-10px;">
                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i
                        class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/.col-->
<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
            </div>
            <div class="b-b-1 pt-3"></div>
            <hr>
            <div class="more-info pt-2" style="margin-bottom:-10px;">
                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i
                        class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/.col-->
<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-bell bg-danger p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
            </div>
            <div class="b-b-1 pt-3"></div>
            <hr>
            <div class="more-info pt-2" style="margin-bottom:-10px;">
                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i
                        class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/.col-->









<div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <sctrong><span class="count">40</span> k</strong>
                    <span>friends</span>
            </li>
            <li>
                <sctrong><span class="count">450</span></strong>
                    <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <sctrong><span class="count">30</span> k</strong>
                    <span>friends</span>
            </li>
            <li>
                <sctrong><span class="count">450</span></strong>
                    <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <sctrong><span class="count">40</span> +</strong>
                    <span>contacts</span>
            </li>
            <li>
                <sctrong><span class="count">250</span></strong>
                    <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-google-plus"></i>
        <ul>
            <li>
                <sctrong><span class="count">894</span> k</strong>
                    <span>followers</span>
            </li>
            <li>
                <sctrong><span class="count">92</span></strong>
                    <span>circles</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-sm-12 mb-4">
    <div class="card-group">
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-users"></i>
                </div>

                <div class="h4 mb-0">
                    <span class="count">87500</span>
                </div>

                <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-user-plus"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">{{$total_connection}}</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">1238</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">28</span>%
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="h4 mb-0">5:34:11</div>
                <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-comments-o"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">972</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-4 col-md-6">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt=""
                            src="images/admin.jpg">
                    </a>
                    <div class="media-body">
                        <h2 class="text-light display-6">Spider Mesh </h2>
                        <p>Internet provider Manager</p>
                    </div>
                </div>
            </div>


            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span
                            class="badge badge-primary pull-right">10</span></a>
                </li>
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span
                            class="badge badge-danger pull-right">15</span></a>
                </li>
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span
                            class="badge badge-success pull-right">11</span></a>
                </li>
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-comments-o"></i> Message <span
                            class="badge badge-warning pull-right r-activity">03</span></a>
                </li>

            </ul>

        </section>
    </aside>
</div>

<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">Spider Mesh </h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Bogora,Bangladesh</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <section class="card">
        <div class="twt-feed blue-bg">
            <div class="corner-ribon black-ribon">
                <i class="fa fa-twitter"></i>
            </div>
            <div class="fa fa-twitter wtt-mark"></div>

            <div class="media">
                <a href="#">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt=""
                        src="images/admin.jpg">
                </a>
                <div class="media-body">
                    <h2 class="text-white display-6">{{{ Auth::user()->name}}}</h2>
                    <p class="text-light">Internet Provider</p>
                </div>
            </div>



        </div>
        <div class="weather-category twt-category">
            <ul>
                <li class="active">
                    <h5>750</h5>
                    Tweets
                </li>
                <li>
                    <h5>865</h5>
                    Following
                </li>
                <li>
                    <h5>3645</h5>
                    Followers
                </li>
            </ul>
        </div>

    </section>
</div>
@endsection