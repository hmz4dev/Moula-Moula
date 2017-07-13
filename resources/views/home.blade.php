@extends('layouts.master')

@section('title', 'Acceuil')

@section('content')
<head>


  <div class="slider_wrapper">
    <div id="camera_wrap" class="">
      <div data-src="{{asset('assetG/images/img1.jpg')}}">
        <div class="caption fadeIn">
          <h2 >Hoggar</h2>
          <div class="price">
            De
          <!--  <span>$1000</span>-->
          </div>
          <a href="#">Plus infos</a>
        </div>
      </div>
      <div data-src="{{asset('assetG/images/img2.jpg')}}">
        <div class="caption fadeIn">
          <h2>Sahra</h2>
          <div class="price">
            De
           <!-- <span>$2000</span> -->
          </div>
          <a href="#">Plus infos</a>
        </div>
      </div>
      <div data-src="{{asset('assetG/images/img3.jpg')}}">
        <div class="caption fadeIn">
          <h2>Grand sahara</h2>
          <div class="price">
            De
           <!-- <span>$1600</span> -->
          </div>
          <a href="#">Plus infos</a>
        </div>
      </div>
      <div data-src="{{asset('assetG/images/img4.jpg')}}">
        <div class="caption fadeIn">
          <h2>Calme de sahara</h2>
          <div class="price">
            De
           <!-- <span>$1600</span> -->
          </div>
          <a href="#">Plus infos</a>
        </div>
      </div>
      <div data-src="{{asset('assetG/images/img5.jpg')}}">
        <div class="caption fadeIn">
          <h2>Camel tour</h2>
          <div class="price">
            De
           <!-- <span>$1600</span> -->
          </div>
          <a href="#">Plus infos</a>
        </div>
      </div>


    </div>
  </div>
</head>

    <div class="content">
      <div class="container_12">
        <div class="grid_4">
          <div class="banner">
            <img src="{{asset('assetG/images/ban_img1.jpg')}}" alt="">
            <div class="label">
              <div class="title">Tour manifique </div>
              <!--<div class="price">FROM<span>$ 1000</span></div> -->
              <a href="#">LEARN MORE</a>
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="banner">
            <img src="{{asset('assetG/images/ban_img2.jpg')}}" alt="">
            <div class="label">
              <div class="title">Hoggar </div>
              <!--<div class="price">FROM<span>$ 1.500</span></div>-->
              <a href="#">LEARN MORE</a>
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="banner">
            <img src="{{asset('assetG/images/ban_img3.jpg')}}" alt="">
            <div class="label">
              <div class="title">El wahha </div>
             <!-- <div class="price">FROM<span>$ 1.600</span></div>-->
              <a href="#">LEARN MORE</a>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="grid_6">





        </div>
        <div class="grid_5 prefix_1">
          <h3>bienvenue chez nous</h3>
          <img src="{{asset('assetG/images/1.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p>
Découvrez le charme discret de nos contrées sahariennes.
</p>
            In mollis erat mattis neque facilisis, sit ametiol
          </div>
          <div class="clear cl1"></div>
          <p>Proin pharetra luctus diam, a scelerisque eros convallis </p>
          <h4>Clients’ Quotes</h4>
          <blockquote class="bq1">
            <img src="{{asset('assetG/images/page1_img2.jpg')}}" alt="" class="img_inner noresize fleft">
            <div class="extra_wrapper">
              <p>Duis massa elit, auctor non pellentesque vel, aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. </p>
              <div class="alright">
                <div class="col1">Miranda Brown</div>
                <a href="#" class="btn">More</a>
              </div>
            </div>
          </blockquote>
        </div>
        <div class="grid_12">
          <h3 class="head1">Latest News</h3>
        </div>
        <div class="grid_4">
          <div class="block1">
            <time datetime="2014-01-01">10<span>Jan</span></time>
            <div class="extra_wrapper">
              <div class="text1 col1"><a href="#">Aliquam nibh</a></div>
              Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="block1">
            <time datetime="2014-01-01">21<span>Jan</span></time>
            <div class="extra_wrapper">
              <div class="text1 col1"><a href="#">Etiam dui eros</a></div>
              Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="block1">
            <time datetime="2014-01-01">15<span>Feb</span></time>
            <div class="extra_wrapper">
              <div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
              Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
