@extends('layouts.app')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <div class="navbar-default sidebar" role="navigation">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>              
                <div class="sidebar-nav navbar-collapse">
                    <div id="logo">
                        <a href="{{ url ('') }}"><img src="{{ asset('assets/images/logo.png') }}" class="img-responsive" alt="Divine Content"></a>
                    </div>
                    
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li {{ (Request::is('*order-summary') ? 'class="active"' : '') }}>
                            <a href="{{ url ('order-summary') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Order Summary</a>
                            <!-- /.nav-second-level -->
                        </li>
                        @if(Auth::user()->admin == 1)
                            <li {{ (Request::is('*Users') ? 'class="active"' : '') }}>
                                <a href="{{ url ('users') }}"><i class="fa fa-users fa-fw"></i> Users</a>
                            </li>
                        @endif
                        <li {{ (Request::is('*new-order') ? 'class="active"' : '') }}>
                            <a href="{{ url ('new-order') }}"><i class="fa fa-edit fa-fw"></i> Place New Order</a>
                        </li>
                        <li {{ (Request::is('*track-order') ? 'class="active"' : '') }}>
                            <a href="{{ url ('track-order') }}"><i class="fa fa-tasks fa-fw"></i> Track Order</a>
                        </li>
                        <li {{ (Request::is('*add-funds') ? 'class="active"' : '') }}>
                            <a href="{{ url ('add-funds') }}"><i class="fa fa-credit-card fa-fw"></i> Add Funds</a>
                        </li>
                        <li {{ (Request::is('*payment-history') ? 'class="active"' : '') }}>
                            <a href="{{ url ('payment-history') }}"><i class="fa fa-database fa-fw"></i> Payment history</a>
                        </li>
                        <li {{ (Request::is('*print-invoice') ? 'class="active"' : '') }}>
                            <a href="{{ url ('print-invoice') }}"><i class="fa fa-print fa-fw"></i> Print Invoice</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Make Requests<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*additional-information') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('additional-information') }}"><i class="fa fa-info-circle fa-fw"></i> Additional Information</a>
                                </li>
                                <li {{ (Request::is('*revision-request') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('revision-request') }}"><i class="fa fa-repeat fa-fw"></i> Revision Request</a>
                                </li>
                                <li {{ (Request::is('*amednment-request') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('amednment-request' ) }}"><i class="fa fa-pencil fa-fw"></i> Amednment Request</a>
                                </li>
                                <li {{ (Request::is('*refund-request') ? 'class="active"' : '') }}>
                                    <a href="{{ url('refund-request') }}"><i class="fa fa-retweet fa-fw"></i> Refund Request</a>
                                </li>
                                <li {{ (Request::is('*refund-status') ? 'class="active"' : '') }}>
                                    <a href="{{ url('refund-status') }}"><i class="fa fa-question-circle fa-fw"></i> Refund Status</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Handbooks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*student-handbooks') ? 'class="active"' : '') }}>
                                    <a href="{{ url('student-handbooks') }}"><i class="fa fa-graduation-cap fa-fw"></i> Student Handbooks</a>
                                </li>    
                                <li {{ (Request::is('*student-handbooks') ? 'class="active"' : '') }}>
                                    <a href="{{ url('assignment-handbooks') }}"><i class="fa fa-copy fa-fw"></i> Assignment Handbooks</a>
                                </li>                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*profile') ? 'class="active"' : '') }}>
                            <a href="{{ url ('profile') }}"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li {{ (Request::is('*feedback') ? 'class="active"' : '') }} >
                            <a href="{{ url('feedback') }}"><i class="fa fa-files-o fa-fw"></i> Feedback</a>
                        </li>
                        <li {{ (Request::is('*logout') ? 'class="active"' : '') }}>
                            <a href="{{ url('logout') }}"><i class="fa fa-thumbs-o-up fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			<div class="row profCover">
                <div class="col-lg-12">
                    @if(Auth::user()->coverPic)
                        <p class="none"> {{ $coverPic = Auth::user()->coverPic }}</p>
                        <div class="coverPic">
                            <img src='{{ asset("assets/images/cover/$coverPic") }}' class="img-responsive">
                        </div>                                
                    @else                            
                        <div class="coverPic">
                            <img src="{{ asset('assets/images/cover/cover.png') }}" class="img-responsive" alt="Cover Photo">                        </div>
                        
                    @endif 
                    <div class="row marginZero" >
                        <div class="col-md-3 col-sm-12 profilePic">

                            @if(Auth::user()->profilePic)
                                <p class="none"> {{ $pic = Auth::user()->profilePic }}</p>
                                <div class="profile">
                                    <img src='{{ asset("assets/images/profile/$pic") }}' class="img-responsive">
                                </div>                                
                            @else                            
                                <div class="profile">
                                    <img src='{{ asset("assets/images/profile/default.jpg") }}' class="img-responsive">
                                </div>
                                
                            @endif  
                        </div>  
                        <div class="col-md-3 col-sm-12 userName">
                            <h3>{{ Auth::user()->name }}</h3>  
                        </div>  
                    </div>                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row marginZero">
                <div class="col-lg-12 brdCrmb">
                    <div class="brdCrmbTitle">
                        @yield('brdCrmbTitle')
                    </div>
                    <div class="brdCrmbLink">
                        @yield('brdCrmbLink')
                    </div>                
                </div>
            </div>            
            <div class="clear"></div>
            <div class="container" style="width:100%;">
    			<div class="row marginZero topBot25">  
                    @yield('section')
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

