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
    <link href="{{asset('layerslider/css/layerslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    @livewireStyles


</head>

<body>
@include('inc.header')

{{--Slider--}}
<div id="full-slider-wrapper">
    <div id="layerslider" style="width:100%;height:600px;">
        <!-- first slide -->

        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
            <img src="{{asset('img/slides/slide_2.jpg')}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Welcome to Tembera250 Rwanda</h3>
            <p class="ls-l slide_typo_2" style="top:55%; left:50%;"
               data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                We are sports and leisure
            </p>
            <a class="ls-l button_intro_2 outline" style="top:65%; left:50%;white-space: nowrap;"
               data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='about'>Read more</a>
        </div>


        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
            <img src="{{asset('img/slides/slide_5.jpg')}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Enjoy the Landscape View</h3>
            <p class="ls-l slide_typo_2" style="top:55%; left:50%;"
               data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                Find the breathtaking landscapes and inpiring experince in Rwanda with tembera250
            </p>
            <a class="ls-l button_intro_2 outline" style="top:65%; left:50%;white-space: nowrap;"
               data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='grid'>Read more</a>
        </div>

        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
            <img src="{{asset('img/slides/slide_4.jpg')}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Kigali City Tour</h3>
            <p class="ls-l slide_typo_2" style="top:55%; left:50%;"
               data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                Attractions - Lakes - Museums
            </p>
            <a class="ls-l button_intro_2 outline" style="top:65%; left:50%;white-space: nowrap;"
               data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='grid'>Read more</a>
        </div>
        <!-- second slide -->
        <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
            <img src="{{asset('img/slides/slide_3.jpg')}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Discover Fantastic Places</h3>
            <p class="ls-l slide_typo_2" style="top:55%; left:50%;"
               data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                We offer a variety of services and options to reach fantistic places in Rwanda
            </p>
            <a class="ls-l button_intro_2 outline" style="top:65%; left:50%;white-space: nowrap;"
               data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='grid'>Read more</a>
        </div>
        <!-- third slide -->
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="{{asset('img/slides/slide_1.jpg')}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top:45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Enjoy a Lovely Tour</h3>
            <p class="ls-l slide_typo_2" style="top:55%; left:50%;"
               data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                Buildings - Attractions - Museums
            </p>
            <a class="ls-l button_intro_2" style="top:65%; left:50%;"
               data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='grid'>Explore</a>
        </div>
    </div>
</div>

{{--Main news--}}
<section class="wrapper">
    <div class="divider_border"></div>

    <div class="container">
        @livewire('main-blogs')
    </div>

    <hr>
    <div class="row list_tours">
        @foreach($cats as $ca)
            <div class="col-sm-6">
                <h3>{{$ca->categoryName}}</h3>
                <ul>
                    @foreach($ca->blogs as $bg)
                        <li>
                            <div>
                                <a href="{{route('blog',['slug'=>$bg->blogSlug])}}">
                                    <figure><img src="{{asset('storage/'.$bg->mainPhoto)}}" alt="{{$bg->blogTitle}}" class="img-rounded" width="60" height="60">
                                    </figure>
                                    <h4>{{$bg->blogTitle}}</h4>
                                    <small>{{$bg->blogSummary}}</small>
                                    <span class="price_list">{{$bg->created_at->format('Y-m-d')}}</span>
                                </a>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        @endforeach



    </div>

</section>

@include('inc.footer')

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>
<script src="{{asset('js/jquery.tweet.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('layerslider/js/greensock.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    'use strict';
    $('#layerslider').layerSlider({
        autoStart: true,
        navButtons: false,
        navStartStop: false,
        showCircleTimer: false,
        responsive: true,
        responsiveUnder: 1280,
        layersContainer: 1200,
        skinsPath: 'layerslider/skins/'
        // Please make sure that you didn't forget to add a comma to the line endings
        // except the last line!
    });
</script>
@livewireScripts


</body>

</html>


