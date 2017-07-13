<!DOCTYPE html>
<html lang="en">
	<head>
	    <link rel="stylesheet" href="{{asset('assetG/css/style.css')}}">
    <link rel="icon" href="{{asset('assetG/images/favicon.ico')}}">
	
	<script src="{{asset('assetG/js/jquery.js')}}"></script>
    <script src="{{asset('assetG/js/jquery-migrate-1.2.1.js')}}"></script>
    <script src="{{asset('assetG/js/script.js')}}"></script>
    <script src="{{asset('assetG/js/superfish.js')}}"></script>
    <script src="{{asset('assetG/js/jquery.ui.totop.js')}}"></script>
    <script src="{{asset('assetG/js/jquery.equalheights.js')}}"></script>
    <script src="{{asset('assetG/js/jquery.mobilemenu.js')}}"></script>
    <script src="{{asset('assetG/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assetG/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assetG/js/camera.js')}}"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset('assetG/js/jquery.mobile.customized.min.js')}}"></script>

        <script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.html">ABOUT</a></li>
								<li class="current"><a href="index-1.html">HOT TOURS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="index-3.html">BLOG</a></li>
								<li><a href="index-4.html">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			 <div class="grid_12">
              <h1>
                <a href="index.html">
                  <img src="{{asset('assetG/images/logo.png')}}" alt="Your Happy Family">
                </a>
              </h1>
            </div>
			</div>
		</header>
<!--==============================Content=================================-->
	
	  <div class="banner">
            <img src="{{asset('assetG/images/ban_img1.jpg')}}" alt="">
            <div class="label">
             <div class="title"style="color:white;position:absolute;top:-200%;font-sise:22px;">
             <strong>8.&nbsp;Circuit du Adrar n'Ahnet</strong>
              <!--<div class="price">FROM<span>$ 1000</span></div> -->
              </div>
              <a href="#">Plus infos</a>
              </div>
              <ul>
    <li>- trek ou méharée (8 à 15j) . </li>
    <li>- En 4x4 (8 jours)</li>
  </ul>
            </div>
            </div>       

		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by TemplateMonster.com
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>    
@section('content')


@stop