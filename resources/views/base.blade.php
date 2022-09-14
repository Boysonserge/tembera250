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
@yield('header')
@yield('content')
@yield('footer')
<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('js/jquery.tweet.min.js')}}"></script>
@livewireScripts

</body>

</html>


