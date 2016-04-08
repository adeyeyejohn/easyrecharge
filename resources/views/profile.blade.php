@extends('master')

@section('title',$title)

@section('content')

    <div class="banner page-head">
        <div class="header">
            <div class="logo">
                <h1><a href="index.html"><i><img src="site-resources/images/cell.png" alt=" "/></i>Easy Recharge</a>
                </h1>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="site-resources/images/menu.png" alt=" "/></span>
                <ul class="nav1">
                    @if(Auth::Check())
                        <li><a href="/">Home</a></li>
                        <li><a href="/wallet">Wallet</a></li>
                        <li><a href="/transaction">Transactions</a></li>
                        <li><a href="/logoutUser">Logout</a></li>
                    @else
                        <li><a href="/">Home</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal3">landline</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal4">Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal5">Signup</a></li>
                    @endif
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
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    {!! $error !!}
                @endforeach

            @endif
            <div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                                                              aria-controls="home" aria-expanded="true">Personal
                            info</a></li>
                    <li role="presentation"><a href="#return" role="tab" id="return-tab" data-toggle="tab"
                                               aria-controls="return">Change Password</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="profile-gd">
                            <ul class="pro-left">
                                <li>Name</li>
                                <li>Email</li>
                                <li>Mobile number</li>
                                <!--<li>Date Of Birth</li>
                                <li>Gender</li>-->
                            </ul>
                            <ul class="pro-right">
                                <li>: {{ ucwords($userDetails->name) }} <a href="#" data-toggle="modal"
                                                                           data-target="#myModal6"> Edit</a></li>
                                <li>: {{ $userDetails->email }}</li>
                                <li>: {{ $userDetails->phone }}</li>
                                <!--<li>: 04/10/79</li>
                                <li>: Male</li>-->
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tabs-para tab-pane fade" id="return" aria-labelledby="return-tab">
                        <div class="profile-gd">
                            <form>
                                <div class="tab-for-sett">
                                    <h5>old password</h5>
                                    <input type="password" value="" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = '';}" required="">
                                    <h5>new password</h5>
                                    <input type="password" value="" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = '';}" required="">
                                    <h5>confirm password</h5>
                                    <input type="password" value="" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = '';}" required="">
                                </div>

                                <div class="clearfix"></div>
                                <input type="submit" value="SAVE">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- edit -->
    <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="edit-pro">

                        <form action="/updateuser" method="POST">
                            <div class="edit-for-sett">
                                <h5>name</h5>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" value="{{$userDetails->name}}" name="name" required="">
                                <h5>Email address</h5>
                                <input type="text" value="{{$userDetails->email}}" name="email" required="">
                                <h5>mobile no.</h5>
                                <input type="text" value="{{$userDetails->phone}}" name="phone" required="">
                                <input type="submit" value="UPDATE">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit -->
    <!-- mobile -->

@stop