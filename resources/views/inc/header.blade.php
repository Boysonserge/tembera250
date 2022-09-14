<div id="header_2">
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="tel:+250781101010" id="phone_top">+250 781 101 010</a><span id="opening">Mon - Sat 8.00/18.00</span>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <ul id="top_links">
                            <li><a href="javascript:void()" id=""><i class=" icon-location"></i> Kigali - Rwanda</a>
                            </li>
                            <li><a id="" href="javascript:void()"><i class="icon_phone"></i> info@tembera250</a>
                            </li>
                            <li><a target="__blank" href=""><i class="icon-facebook-rect-1"></i></a></li>
                            <li><a target="__blank" href=""><i class="icon-instagram"></i></a></li>
                            <li><a target="__blank" href=""><i class="icon-twitter"></i></a></li>

                            <a target="__blank" href=""></a>
                        </ul>
                    </div>
                </div>
                <!-- End row -->
            </div>
            <!-- End container-->
        </div>
        <!-- End top line-->

        <div class="c" style="padding-right: 50px; padding-left: 50px;">
            <div class="row">
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <div id="logo_home">
                        <h1><a href="{{route('home')}}" title="Tembera250 Rwanda">Tembera250 Rwanda</a></h1>
                    </div>
                </div>
                <nav class="col-md-11 col-sm-10 col-xs-10">
                    <ul id="tools_top" style="margin-top: 40px;">
                        <li><a href="#" class="search-overlay-menu-btn"><i class="icon-search-6"></i></a>
                        </li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{asset('images/logo_menu.png')}}" width="145" height="34" alt="Tembera250" data-retina="true">
                        </div>
                        <a href="" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <?php $categ=\App\Models\Category::find(1)?>
                            <li>
                                <a href="{{route('home')}}">AHABANZA</a>
                            </li>

                            <li>
                                <a href="{{route('category',['categorySlug'=>$categ->categorySlug])}}">{{$categ->categoryName}}</a>
                            </li>



                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">ANDI MAKURU</a>
                                <ul>
                                    <?php $categ=\App\Models\Category::whereNot('id',[1,7])->get()?>
                                    @foreach($categ as $catego)
                                            <li><a href="{{route('category',['categorySlug'=>$catego->categorySlug])}}">
                                                    {{$catego->categoryName}}
                                                </a>
                                            </li>
                                        @endforeach
                                </ul>
                            </li>
                                <?php $categ=\App\Models\Category::find(7)?>
                            <li><a href="{{route('category',['categorySlug'=>$categ->categorySlug])}}">{{$categ->categoryName}}</a>
                            </li>

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">ABO TURIBO</a>
                                <ul>
                                    <li><a href="about">ABO TURIBO</a>
                                    </li>
                                    <li><a href="contact_us">TWANDIKIRE</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- End main-menu -->
                </nav>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->
</div>
<!-- End Header 1-->
