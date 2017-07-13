


<!DOCTYPE html>
<html lang="en">
  <head>
         <title>
                  ZEP - @yield('title')
        </title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset('assetG/images/favicon.ico')}}">
    <link rel="shortcut icon" href="{{asset('assetG/images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('assetG/booking/css/booking.css')}}">
    <link rel="stylesheet" href="{{asset('assetG/css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('assetG/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assetG/css/style.css')}}">
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
    <!--<![endif]-->
    <script src="{{asset('assetG/booking/js/booking.js')}}"></script>
    <script>
      $(document).ready(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false ,
        minHeight: '444',
        thumbnails: false,
        height: '48.375%',
        caption: true,
        navigation: true,
        fx: 'mosaic'
      });
      /*carousel*/
      var owl=$("#owl");
        owl.owlCarousel({
        items : 2, //10 items above 1000px browser width
        itemsDesktop : [995,2], //5 items between 1000px and 901px
        itemsDesktopSmall : [767, 2], // betweem 900px and 601px
        itemsTablet: [700, 2], //2 items between 600 and 0
        itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
        navigation : true,
        pagination : false
        });
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
  <body class="page1" id="top">
<!--==============================header=================================-->
    <header>
      <div class="container_12">
        <div class="grid_12">
          <div class="menu_block">
            <nav class="horizontal-nav full-width horizontalNav-notprozzessed">
              <ul class="sf-menu">
                <li class="current"><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('noscircuits')}}">Nos Circuits</a></li>
                <li><a href="{{route('offres')}}">SPECIAL OFFERS</a></li>
                <li><a href="{{route('priseencharge')}}">Prise en charge</a></li>
                <li><a href="{{route('contactus')}}">CONTACTS</a></li>
              </ul>
            </nav>
            <div class="clear"></div>
          </div>


        </div>
        <div class="grid_12" style="position:absolute; top:80%;right:-5%;">
              <h1>
                <a href="{{route('home')}}">
                  <img src="{{asset('assetG/images/logo.png')}}" alt="Your Happy Family">
                </a>
              </h1>
            </div>

        </div>
    </header>



<!--==============================Content=================================-->



       <div class="container">
            @yield('content')
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
             Hmz4dev
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
      $(function() {
        $('#bookingForm input, #bookingForm textarea').placeholder();
      });
    </script>
  </body>
</html>
