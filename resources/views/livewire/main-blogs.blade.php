<div>
    <div class="main_title">
        <h2>Our <span>Top</span> Recent news</h2>
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
        </div>

    </div>
    <div class="row">
        <div>
            @foreach($mainblogs as $blog)
                <div  class="col-md-4 col-sm-6 wow fadeIn animated" data-wow-delay="0.2s">
                    <div class="img_wrapper">
                        <div class="ribbon">
                            <span>Popular</span>
                        </div>
                        <div class="price_grid">
                            <sup>{{$blog->categories->categoryName}}</sup>
                        </div>
                        <div class="img_container">
                            <a href="{{route('blog',['slug'=>$blog->blogSlug])}}">
                                <img src="{{asset('storage/'.$blog->mainPhoto)}}" width="800" height="533" class="img-responsive" alt="">
                                <div class="short_info">
                                    <h3>{{$blog->blogTitle}}</h3>
                                    <!--<em>Duration 4 days</em>-->
                                    <p>{{substr($blog->blogSummary,0,100)}}</p>
                                    <div class="score_wp">Superb
                                        <div class="score">7.5</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div >
        <p  class="text-center add_bottom_45">
            <a style="color: white" wire:click="addPage"  class="btn_1">
                <label wire:loading.remove>+Andi makuru</label>
                <label style="cursor: not-allowed" wire:loading wire:target="addPage">...Tegereza gato</label>
            </a>
        </p>
    </div>





</div>
