@extends('master')

@section('title',$title)

@section('content')

    <div class="banner">
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
                        <li><a href="/profile">My Account</a></li>
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
            <script src="site-resources/js/classie.js"></script>
            <script src="site-resources/js/uisearch.js"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <!-- //search-scripts -->


            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="banner-info">
                <h3>Get Free Coupons and Discounts on Top Brands With Every Recharge</h3>
            </div>
            <div class="buttons">
                <ul>
                    <li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal"
                           data-target="#myModal">Recharge Card</a></li>
                    <li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal1">BILLS</a>
                    </li>
                    <li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal"
                           data-target="#myModal2">Datacard</a></li>
                </ul>

            </div>
        </div>
    </div>

    <div class="content-bottom">
        <div class="btm-grids">
            <div class="col-md-4 btm-grid back-col1 text-center">
                <img src="site-resources/images/bbbb.png" alt=""/>
            </div>
            <div class="col-md-4 btm-grid btm-wid">
                <h3>Need DATA or AIRTIME ASAP ???</h3>

                <p>INTRODUCING EASY RECHARGE
                    WHATEVER YOUR NETWORK, GET YOUR LINE AUTOMATICALLY CREDITED RIGHT AWAY!</p>
            </div>
            <div class="col-md-4 btm-grid back-col2 text-center">
                <img src="site-resources/images/bbb1.png" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @if(empty(Auth::check()))
        <div class="coupons">
            <div class="container">
                <div class="coupons-grids text-center">
                    <div class="col-md-3 coupons-gd">
                        <h3>RECHARGE IN <span>3 SIMPLE STEPS</span></h3>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="site-resources/images/web.png" alt=" "/></span></h4>

                        <p>LOGIN TO YOUR ACCOUNT</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="site-resources/images/credit.png" alt=" "/></span></h4>

                        <p>ENTER RECHARGE DETAILS</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="site-resources/images/security.png" alt=" "/></span></h4>

                        <p>MAKE PAYMENT</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="content-bottom-two">
            <div class="col-md-6 content-left text-center">
                <img src="site-resources/images/bbb5.png" alt=""/>
            </div>
            <div class="col-md-6 content-right text-center">
                <img src="site-resources/images/bbb3.png" alt=""/>
            </div>
            <div class="clearfix"></div>
            <div class="btm-pos">
                <h3>Exclusive Offers</h3>

                <p> Nam libero tempore, cum soluta
                    nobis est eligendi optio cumque
                    nihil impedit quo minus id quod
                    maxime placeat facere possimus,
                    omnis voluptas assumenda est. </p>
            </div>
        </div>
        @endif

        @stop

        @section('modal')
                <!-- mobile -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                               title="Step 1">

                                            </a>
                                        </li>


                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                               title="Step 3">

                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"
                                               title="Step 5">

                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab"
                                               title="Complete">

                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form" action="/order" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    <input type="hidden" name="type" value="units">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/mobile.png" alt=""/>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>Enter your mobile number</h4>
                                                    <input type="text" class="mobile-text" Placeholder="Enter Mobile No." name="phone" required>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/mobile.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Which Network Provider?</h4>
                                                    <ul class="rchge-icons">
                                                        <li><a href="#">Airtel</a></li>
                                                        <li><a href="#">MTN</a></li>
                                                        <li><a href="#">GLO</a></li>
                                                        <li><a href="#">Etisalat</a></li>
                                                    </ul>
                                                    <div class="section_room">
                                                        <select id="country" name="network"
                                                                class="frm-field required">
                                                            <option selected="selected">Select NewtorK</option>
                                                            <option value="Airtel">Airtel</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="GLO">GLO</option>
                                                            <option value="Etisalat">Etisalat</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="mob-btn btn btn-primary btn-info-full next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="step5">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/mobile.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>How Much To Recharge?</h4>

                                                    <div class="mobile-rchge">
                                                        <input type="text" name="amount"
                                                               required="">
                                                    </div>
                                                    <div class="mobile-rchge">
                                                        <a href="/plans">VIEW PLANS</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="submit" name="getUnits" class="mob-btn btn btn-primary btn-info-full"
                                                            >Finish
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- //mobile -->
        <!-- Dth -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"
                                               title="Step 6">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"
                                               title="Step 7">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"
                                               title="Step 8">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <form role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step6">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/dth.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Pay your DTH bill. Which operator?</h4>

                                                    <div class="section_room">
                                                        <select id="country" onchange="change_country(this.value)"
                                                                class="frm-field required">
                                                            <option value="null">Select DTH Operator</option>
                                                            <option value="null">Dish TV</option>
                                                            <option value="null">Sun Direct</option>
                                                            <option value="AX">Reliance</option>
                                                            <option value="AX">Airtel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step7">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/dth.png" alt=""/>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>What's your DTH Number?</h4>

                                                    <div class="dth-rchge">
                                                        <input type="text" value="Enter Smart Card Number"
                                                               onfocus="this.value = '';"
                                                               onblur="if (this.value == '') {this.value = 'Enter Smart Card Number';}"
                                                               required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step8">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/dth.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>How Much To Recharge?</h4>

                                                    <div class="dth-rchge">
                                                        <input type="text" name="phone" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary btn-info-full"
                                                            data-dismiss="modal">Finish
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Dth -->
        <!-- datacard -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"
                                               title="Step 9">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step10" data-toggle="tab" aria-controls="step10" role="tab"
                                               title="Step 10">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step11" data-toggle="tab" aria-controls="step11" role="tab"
                                               title="Step 11">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <form role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step9">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/mobile.png" alt=""/>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>Enter your mobile number</h4>
                                                    <input type="text" class="mobile-text" Placeholder="Enter Mobile No." required>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step10">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/usb.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Which Network Provider?</h4>
                                                    <ul class="rchge-icons">
                                                        <li><a href="#">Airtel</a></li>
                                                        <li><a href="#">MTN</a></li>
                                                        <li><a href="#">GLO</a></li>
                                                        <li><a href="#">Etisalat</a></li>
                                                    </ul>
                                                    <div class="section_room">
                                                        <select id="country" onchange="change_country(this.value)"
                                                                class="frm-field required">
                                                            <option selected="selected">Select NewtorK</option>
                                                            <option value="Airtel">Airtel</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="GLO">GLO</option>
                                                            <option value="Etisalat">Etisalat</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step11">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="site-resources/images/usb.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>How much to recharge?</h4>

                                                    <div class="section_room">
                                                        <select id="country" onchange="change_country(this.value)"
                                                                class="frm-field required">
                                                            <option selected="selected">Select Data Amount</option>
                                                            <option value="10MB">10MB</option>
                                                            <option value="350MB">350MB</option>
                                                            <option value="1GB">1GB</option>
                                                            <option value="3GB">3GB</option>
                                                            <option value="5GB">5GB</option>
                                                            <option value="10GB">10GB</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary btn-info-full"
                                                            data-dismiss="modal">Finish
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- //datacard -->
        <!-- landline -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step12" data-toggle="tab" aria-controls="step12" role="tab"
                                               title="Step 12">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step13" data-toggle="tab" aria-controls="step13" role="tab"
                                               title="Step 13">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step14" data-toggle="tab" aria-controls="step14" role="tab"
                                               title="Step 14">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <form role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step12">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/landline.png" alt=""/>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>Pay your landline bill.Which Provider?</h4>

                                                    <div class="section_room">
                                                        <select id="country" onchange="change_country(this.value)"
                                                                class="frm-field required">
                                                            <option value="null">Enter Landline Provider Name</option>
                                                            <option value="null">Airtel Landline</option>
                                                            <option value="AX">Bsnl Landline</option>
                                                            <option value="AX">MTNL Delhi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step13">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/landline.png" alt=""/>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>Telephone Number</h4>

                                                    <div class="dth-rchge">
                                                        <input type="text" value="" onfocus="this.value = '';"
                                                               onblur="if (this.value == '') {this.value = '';}"
                                                               required="">

                                                        <p>Please enter a valid telephone number with std code.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary next-step">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step14">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/landline.png" alt=""/>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>How much did you wish to pay?</h4>

                                                    <div class="dth-rchge">
                                                        <input type="text" value="100" onfocus="this.value = '';"
                                                               onblur="if (this.value == '') {this.value = '100';}"
                                                               required="">

                                                        <p>Please enter an amount between Rs.10 and Rs.1000.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-default prev-step">
                                                        Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mob-btn btn btn-primary btn-info-full"
                                                            data-dismiss="modal">Finish
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- //landline -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
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
                                    <form action="/loginUser" method="POST">
                                        <h3>Signin with your account </h3>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" placeholder="Enter your Email" name="email" required="">
                                        <input type="password" placeholder="Password" name="password" required="">
                                        <h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>

                                        <div class="single-bottom">
                                            <input type="checkbox" id="brand" value="">
                                            <label for="brand"><span></span>Remember Me.</label>
                                        </div>
                                        <input type="submit" value="SIGNIN">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <span>Terms and Conditions</span> and
                                <span>Privacy Policy</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        <!-- signup -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
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
                                        <input type="text" name="name" placeholder="Name" required>
                                        <input type="text" name="phone" placeholder="Phone Number" required="">
                                        <input type="text" name="email" placeholder="Email address" required="">
                                        <input type="password" placeholder="Password" name="password" required="">

                                        <input type="submit" value="CREATE ACCOUNT">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <span>Terms and Conditions</span> and
                                <span>Privacy Policy</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //signup -->
@endsection