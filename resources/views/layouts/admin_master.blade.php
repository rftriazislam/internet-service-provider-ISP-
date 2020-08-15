
        <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png')}}">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('admin')}}">{{{ Auth::user()->name}}}</a>
                <a class="navbar-brand hidden" href="{{route('admin')}}">{{{ Auth::user()->name}}}</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="{{route('alluser_info')}}"> <i class="menu-icon fa fa-group (alias)"></i>User Info</a>
                    </li>
                    <!-- <li class="active">
                        <a href="{{route('datatable')}}"> <i class="menu-icon fa fa-group (alias)"></i>datatable</a>
                    </li> -->
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pinterest-square"></i>Pakage</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-pagelines"></i><a href="{{route('newpakage')}}">New Pakage</a></li>
                            <li><i class="fa fa-pagelines"></i><a href="{{route('allpakage')}}">All Pakage</a></li>
                        </ul>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-md "></i>New User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user-md"></i><a href="{{route('newuser')}}">New User</a></li>
                            <li><i class="fa fa-user-md"></i><a href="{{route('alluser')}}">All User</a></li>
                            <li><i class="fa fa-user-md"></i><a href="{{route('activeuser')}}">Active User</a></li>
                            <li><i class="fa fa-user-md"></i><a href="{{route('inactiveuser')}}">InActive User</a></li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-asterisk "></i>Billing</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-pagelines"></i><a href="{{route('newpayment')}}">New Billing</a></li>
                            <li><i class="fa fa-pagelines"></i><a href="{{route('allpayment')}}">All Billing</a></li>
                            <li><i class="fa fa-pagelines"></i><a href="{{route('billingreceipt')}}">Billing Receipt</a></li>
                            <li><i class="fa fa-pagelines"></i><a href="">Due/Paid</a></li>


                        </ul>
                    </li>
                    <!-- <li>
                        <a href="{{route('customerlogininfo')}}"> <i class="menu-icon ti-email"></i>Customer Login Info </a>
                    </li> -->
                    <li>
                        <a href="{{route('message')}}"> <i class="menu-icon ti-email"></i>Message</a>
                    </li>
                    
                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-lock"></i>Admin Register</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('newadminregister')}}">New Register</a></li>
                    <li><i class="menu-icon fa fa-sign-in"><a href="{{route('admininfo')}}"> </i>All Register </a> </li>
                        
                        
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-lock"></i>Super Power Register</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('newpowerregister')}}">New Power Register</a></li>
                            <li> <i class="menu-icon fa fa-sign-out"></i><a href="{{route('powerregisterinfo')}}"> Power Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <button type="button" class="btn btn-sm social facebook" style="margin-bottom: 4px">
                                    <i class="fa fa-facebook"></i>
                                    <span>Facebook</span>
                                </button>

                                <button type="button" class="btn btn-sm social twitter" style="margin-bottom: 4px">
                                    <i class="fa fa-twitter"></i>
                                    <span>Twitter</span>
                                </button>

                                <button type="button" class="btn btn-sm social linkedin" style="margin-bottom: 4px">
                                    <i class="fa fa-linkedin"></i>
                                    <span>LinkedIn</span>
                                </button>


                            
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('backend/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                         <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                            
                            <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                        </div>
                    </div>

                   
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
@yield('content')
      
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('backend/js/init-scripts/data-table/datatables-init.js')}}"></script>




    <script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>


    <script src="{{asset('backend/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>
    <script src="{{asset('backend/js/widgets.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
