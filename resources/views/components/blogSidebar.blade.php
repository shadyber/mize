<!-- Sider Bar -->
<div class="col-md-3">
    <div class="search">
        <input class="form-control" type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="sidebar">
        <!-- Category -->
        <h5 class="shop-tittle margin-bottom-20">Category</h5>
        <ul class="shop-cate">
            @foreach(\App\Models\BlogCategory::allCategories() as $cat)
                <li><a href="/blog"> {{$cat->title}} <span>{{count($cat->blogs)}}</span></a></li>
            @endforeach

        </ul>

        <!-- Recent Post -->
        <h5 class="shop-tittle margin-top-60 margin-bottom-30">recent post</h5>
        <ul class="papu-post margin-top-20">

            @foreach(\App\Models\Blog::lastN(5) as $blog)

                <li class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="{{asset('images/'.$blog->photo)}}" alt="{{$blog->title}}"></a> </div>
                    <div class="media-body"> <a class="media-heading" href="/blog/{{$blog->slug}}">{{$blog->title}}</a> <span>{{$blog->created_at->diffForHumans()}}</span> </div>
                </li>
            @endforeach

        </ul>

        <!-- TAGS -->
        <h5 class="shop-tittle margin-top-60 margin-bottom-20">Papular Tags</h5>
        <ul class="shop-tags">
            <li><a href="#.">Towels</a></li>
            <li><a href="#.">Chair</a></li>
            <li><a href="#.">Bedsheets</a></li>
            <li><a href="#.">Shoe</a></li>
            <li><a href="#.">Curtains</a></li>
            <li><a href="#.">Clocks</a></li>
            <li><a href="#.">TV Cabinets</a></li>
            <li><a href="#.">Best Seller</a></li>
            <li><a href="#.">Top Selling</a></li>
        </ul>



    </div>
</div>
