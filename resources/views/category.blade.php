<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The best tourism company in Kigali Rwanda">
    <meta name="author" content="Braidos">
    <title>TEMBERA250 RWANDA | We are sports and leisure</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Satisfy" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body>
@include('inc.header')
<section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/sub_header_list_museum.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div id="sub_content_in">
        <div id="animate_intro">
            <h1>Amakuru ari muri "{{$catName}}"</h1>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="divider_border_gray"></div>

    <!-- End filters -->

    @livewire('category-details',['slug'=>$slug]);
    <!-- End container -->
</section>
<div class="container margin_60">
    <div class="banner">
        <h3>Wakoze kuba hano</h3>
        <a href="#" class="btn_1 white">Menya byinci kuritwe</a>
    </div>
    <!-- end banner -->
</div>
@include('inc.footer')

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('js/jquery.tweet.min.js')}}"></script>
@livewireScripts

</body>

</html>


