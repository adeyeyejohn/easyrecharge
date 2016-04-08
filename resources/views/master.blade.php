
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>::@yield('title')</title>

<link href="site-resources/css/bootstrap.css" rel="stylesheet">
<link href="site-resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- js -->
<!--animate-->
<link href="site-resources/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="site-resources/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<script type="text/javascript" src="site-resources/js/jquery.min.js"></script>
<!-- js -->
								<script>
									$(document).ready(function () {
										//Initialize tooltips
										$('.nav-tabs > li a[title]').tooltip();

										//Wizard
										$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

											var $target = $(e.target);

											if ($target.parent().hasClass('disabled')) {
												return false;
											}
										});

										$(".next-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											$active.next().removeClass('disabled');
											nextTab($active);

										});
										$(".prev-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											prevTab($active);

										});
									});

									function nextTab(elem) {
										$(elem).next().find('a[data-toggle="tab"]').click();
									}
									function prevTab(elem) {
										$(elem).prev().find('a[data-toggle="tab"]').click();
									}
								</script>
</head>
<body>

@yield('content')

<div class="footer">
    <div class="container">
        <h2><a href="index">Easy Recharge</a></h2>
        <p>© 2016 Easy Recharge. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
        <ul>
            <li><a class="face1" href="#"></a></li>
            <li><a class="face2"href="#"></a></li>
            <li><a class="face3" href="#"></a></li>
            <li><a class="face4" href="#"></a></li>
        </ul>
    </div>
</div>
@yield('modal')
<!-- for bootstrap working -->
<script src="site-resources/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
