<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The best tourism company in Kigali Rwanda">
    <meta name="author" content="Braidos">
    <title>TEMBERA250 RWANDA | We are sports and leisure</title>
    <meta name="title" content="TEMBERA250 RWANDA | We are sports and leisure">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:title" content="{{$blogSelected->blogTitle}}">
    <meta property="og:description" content="{{$blogSelected->blogSummary}}">
    <meta property="og:image" content="{{asset('storage/'.$blogSelected->mainPhoto)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url()->full()}}">
    <meta property="twitter:title" content="TEMBERA250 RWANDA | We are sports and leisure">
    <meta property="twitter:description" content="The best tourism company in Kigali Rwanda">
    <meta property="twitter:image" content="{{asset('storage/'.$blogSelected->mainPhoto)}}">

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

<section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/sub_header_about.jpg')}}"
         data-natural-width="1400" data-natural-height="470">
    <div id="sub_content_in">
        <div id="animate_intro">
            <h1>{{$blogSelected->blogTitle}}</h1>
            <p>{{$blogSelected->blogSummary}}</p>

        </div>
    </div>
</section>
<section class="wrapper">
    <div class="divider_border"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-9 add_bottom_15">
                <div class="bloglist singlepost">
                    <div class="wow fadeIn">
                        <img alt="" class="img-responsive img-thumbnail" src="{{asset('storage/'.$blogSelected->mainPhoto)}}">

                        <div class="singlepost_title">
                            <h4>{{$blogSelected->blogTitle}}</h4>
                        </div>

                        <div class="postmeta">

                            <ul class="list-inline">
                                <li><a href="#"><i class="icon_folder-alt"></i> {{$blogSelected->categories->categoryName}}</a>
                                </li>
                                <li><a href="#"><i class="icon_clock_alt"></i>
                                        {{$blogSelected->created_at->format('Y-m-d')}}</a>
                                </li>
                                <li><a href="#"><i class="icon_pencil-edit"></i> {{$blogSelected->editors->name}}</a>
                                </li>


                                <li><a href="#"><i class="icon-eye"></i> {{$blogSelected->views}}</a>
                                </li>
                            </ul>
                        </div>

                        <div class="post-contnt">


                            {!! $blogSelected->mainStory !!}
                        </div>
                        <!-- end post -->

                    </div>



                    <div class="post-footer">
                        <div class="pull-left">
                            <a href="#" class="readmore">View all posts [..]</a>
                        </div>
                        <div class="pull-right">
                            <ul class="social list-inline">
                                <li><a target="__blank" href="{{$facebook}}"><i class="icon-facebook"></i></a>
                                </li>
                                <li><a target="__blank" href="{{$twitter}}"><i class="icon-twitter"></i></a>
                                </li>
                                <li><a target="__blank" href="#"><i class="icon-instagram"></i></a>
                            </ul>
                        </div>
                    </div>



                </div>
                <!-- end single-post -->

                <div class="blog-list row">
                    <div class="col-md-12">
                        <hr>
                        <div class="comments">
                            <div class="widget-title">
                                <h4><i class="icon_comment_alt"></i>({{count($comments)}}) Comments - About this article </h4>
                            </div>


                            @if(count($comments) !=0)
                                @foreach($comments as $cmt)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="{{asset('img/team_01.jpg')}}" alt="">
                                            </a>

                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading">{{$cmt->names}}
                                                <span class="time-comment">
													<small>{{$cmt->created_at->format('Y-m-d')}}</small>
													<a class="comment-reply" href="#"><small>...</small></a>
												</span><!-- end time-comment -->
                                            </h4>
                                            <p>{{$cmt->comment}}</p>
                                        </div>
                                    </div>
                            @endforeach
                            @endif


                        <!-- end media -->
                        </div>

                        <hr>

                        <h4>Leave a Comment</h4>


                        @livewire('add-comment',['blogId'=>$blogSelected->id])
                    </div>
                    <!-- end col-->
                </div>
                <!-- end blog-list -->
            </div>


            <aside id="sidebar" class="col-md-3">

                <!-- end widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Posts</h4>
                    </div>

                    <ul class="comments-list">
                        @foreach($recents as $rec)
                            <li>
                                <div class="alignleft">
                                    <img src="{{asset('storage/'.$rec->mainPhoto)}}" alt="">
                                </div>
                                <h3><a href="" title="">{{ Illuminate\Support\Str::of($rec->blogTitle)->limit(20) }}</a></h3>
                                <small>{{$rec->created_at->format('Y-m-d')}}</small>

                            </li>
                        @endforeach







                    </ul>
                    <!-- end blog list -->
                </div>
                <!-- end widget -->
            </aside>
            <!-- end sidebar -->
        </div>
        <!-- end row -->
    </div>

    <!-- End container -->
</section>

@include('inc.footer')

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('js/jquery.tweet.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>

@livewireScripts

</body>

</html>


