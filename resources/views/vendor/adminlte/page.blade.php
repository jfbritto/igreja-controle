@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
<!--                     <li class="dropdown messages-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>

                            <ul class="menu">
                            <li>

                                <a href="#">
                                <div class="pull-left">

                                    <img src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                </div>

                                <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>

                                <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>

                            </ul>

                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li> -->
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
<!--                     <li class="dropdown notifications-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>

                            <ul class="menu">
                            <li>

                                <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                            </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li> -->
                    <!-- Tasks Menu -->
<!--                     <li class="dropdown tasks-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>

                            <ul class="menu">
                            <li>

                                <a href="#">

                                <h3>
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                    </h3>

                                <div class="progress xs">

                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                </a>
                            </li>

                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                        </ul>
                    </li> -->
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="@if(!is_null(auth()->user()->avatar)){{ url('storage/members/'.auth()->user()->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="@if(!is_null(auth()->user()->avatar)){{ url('storage/members/'.auth()->user()->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class="img-circle" alt="User Image">

                            <p>
                            {{auth()->user()->name}}
                            <small></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            <a href="{{ url('church/member/show', auth()->user()->id) }}" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                    <a class="btn btn-default btn-flat" href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                    </a>
                                @else
                                    <a class="btn btn-default btn-flat" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @if(config('adminlte.logout_method'))
                                            {{ method_field(config('adminlte.logout_method')) }}
                                        @endif
                                        {{ csrf_field() }}
                                    </form>
                                @endif
                            </div>
                        </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <!--<li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>-->
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                @if(!auth()->user()->isAdmin)
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="@if(!is_null(auth()->user()->church->avatar)){{ url('storage/churches/'.auth()->user()->church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" class="img-circle" alt="User Image">

                  </div>
                  <div class="pull-left info">
                    <p>{{auth()->user()->church->name}}</p>
                    <!-- Status -->
                    <a target="_blank" href="https://www.google.com/maps?q=loc:{{ auth()->user()->church->lat }},{{ auth()->user()->church->long }}"><i class="fa fa-map-marker text-success"></i> {{auth()->user()->church->address->city->nome}}</a>
                  </div>
                </div>
                @endif

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
