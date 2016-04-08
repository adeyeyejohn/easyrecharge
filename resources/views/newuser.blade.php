@extends('master')

@section('title',$title)

@section('content')

    <div class="banner page-head">
        <div class="header">
            <div class="logo">
                <h1><a href="index.html"><i><img src="images/cell.png" alt=" "/></i>Easy Recharge</a></h1>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="images/menu.png" alt=" "/></span>
                <ul class="nav1">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal2">datacard</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal1">DTH</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal3">landline</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal4">login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal5">Signup</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $("span.menu").click(function () {
                        $("ul.nav1").slideToggle(300, function () {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- /script-for-menu -->
            </div>
            <!-- start search-->
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search item..." type="search"
                               name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <!-- search-scripts -->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <!-- //search-scripts -->


            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span style="background:url(images/1.png) no-repeat center"> </span>

                                <div class="user-name">
                                    <p>Your Profile</p>
                                </div>
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="#" data-toggle="modal" data-target="#myModal6"> Edit</a></li>
                            <li><a href="orders.html">Your orders</a></li>
                            <li><a href="#"> Help Center</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal4"> Logout</a></li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="set-content">
        <div class="container">
            <h4 class="view_title">SETTINGS</h4>
            @if(Auth::Check())
                yahoo

            @endif



            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    {!! $error !!}
                @endforeach

            @endif

            <div class="login-grids">
                <div class="login">
                    <div class="login-left">
                        <ul>
                            <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                            <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                            <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="login-right">
                        <form action="/registerUser" method="POST">
                            <h3>Create your account </h3>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text"  name="name" placeholder="Name" required>
                            <input type="text"  name="phone" placeholder="Phone Number" required="">
                            <input type="text"  name="email" placeholder="Email address"  required="">
                            <input type="password" placeholder="Password" name="password" required="">

                            <input type="submit" value="CREATE ACCOUNT" >
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
            </div>
        </div>
    </div>


@stop
