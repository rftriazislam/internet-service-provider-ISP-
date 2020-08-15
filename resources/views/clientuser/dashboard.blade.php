@extends('clientuser.main')
@section('content')
<div class="col-sm-12 mb-4">
        <div class="card-group">
            <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users text-light"></i>
                    </div>

                    <div class="h4 mb-0 text-light">
                        <span class="count">87500</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-2">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-user-plus text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">385</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-3">
                    <div class="h1 text-right mb-4">
                        <i class="fa fa-cart-plus text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">1238</span>
                    </div>
                    <small class="text-light text-uppercase font-weight-bold">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-5">
                    <div class="h1 text-right text-light mb-4">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">28</span>%
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-4">
                    <div class="h1 text-light text-right mb-4">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="h4 mb-0 text-light">5:34:11</div>
                    <small class="text-light text-uppercase font-weight-bold">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-1">
                    <div class="h1 text-light text-right mb-4">
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">972</span>
                    </div>
                    <small class="text-light text-uppercase font-weight-bold">sa</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
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
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                        </a>
                        <div class="media-body">
                            <h2 class="text-light display-6">Sa</h2>
                            <p>sa</p>
                        </div>
                    </div>
                </div>


             

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
                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> sa</div>
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
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                    <div class="media-body">
                        <h2 class="text-white display-6">Sa</h2>
                        <p class="text-light">Project Manager</p>
                    </div>
                </div>



            </div>
            
            <div class="twt-write col-sm-12">
                <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
            </div>
            <footer class="twt-footer">
                <a href="#"><i class="fa fa-camera"></i></a>
                <a href="#"><i class="fa fa-map-marker"></i></a>
             sa
                <span class="pull-right">
                                    32
                                </span>
            </footer>
        </section>
    </div>


@endsection