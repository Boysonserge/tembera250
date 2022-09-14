<div class="container">
    @foreach($categoryBlogs as $blo)
        <div class="row strip_list wow fadeIn animated" data-wow-delay="0.2s">
            <div class="col-md-5">
                <div class="img_wrapper">
                    <div class="ribbon">
                        <span>Yarebwe cyane</span>
                    </div>
                    <div class="price_grid">
                        <sup></sup>
                    </div>
                    <div class="img_container">
                        <a href="{{route('blog',['slug'=>$blo->blogSlug])}}">
                            <img src="{{asset('storage/'.$blo->mainPhoto)}}" width="800" height="533" class="img-responsive" alt="{{$blo->blogTitle}}">
                        </a>
                    </div>
                </div>
                <!-- End img_wrapper -->
            </div>
            <div class="col-md-7">
                <h3>{{$blo->blogTitle}}
                    <span>
						{{$blo->blogSummary}}
					</span>
                </h3>


                <p><a href="{{route('blog',['slug'=>$blo->blogSlug])}}" class="btn_1">Read more</a>
                </p>
            </div>
        </div>
    @endforeach




        <div >
            <p  class="text-center add_bottom_45">
                <a style="color: white" wire:click="addPage"  class="btn_1">
                    <label wire:loading.remove>+Andi makuru</label>
                    <label style="cursor: not-allowed" wire:loading wire:target="addPage">...Tegereza gato</label>
                </a>
            </p>
        </div>


    <nav class="pagination-wrapper">
        <ul class="pagination">

            <li><a href="#">2</a>
            </li>

            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End pagination -->
    <!-- End row -->
</div>
