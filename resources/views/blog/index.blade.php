@extends('layouts.app')
@section('title','Blog')
@section('content')


    <div class="blog-section blog-page padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <article>
                            @foreach($blogs as $blog)
                            <div class="post-item-2">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="/blog/{{$blog->slug}}">
                                            <img src="{{$blog->thumb}}" alt="{{$blog->title}}">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="lab-ul post-date">
                                            <li><span>{{$blog->created_at->diffForHumans()}} </span></li>
                                            <li><span>By <a href="#">Admin</a></span></li>
                                        </ul>
                                        <a href="/blog/{{$blog->slug}}">
                                            <h3>{{$blog->title}}</h3>
                                        </a>
                                        <p>
                                            {{$blog->detail}}
                                        </p>
                                        <div class="d-flex flex-wrap justify-content-between more-com">
                                            <div class="text-btn">
                                                <a href="/blog/{{$blog->slug}}"><span>Read More<i class="fa fa-angle-double-right"></i></span></a>
                                            </div>
                                            <div class="comment-visi">
                                                <span><i class="far fa-comment"></i> <a href="#">0 Comment</a></span>
                                                <span class="hart"><i class="far fa-heart"></i> <a href="#">Like</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-author">
                                <div class="widget-wrapper">
                                    <div class="admin-thumb">
                                        <img src="/assets/images/blog/author.png" alt="author">
                                    </div>
                                    <div class="admin-content">
                                        <h5>Super Admin</h5>
                                        <p>Articles posted by super Admin
                                        </p>
                                        <div class="scocial-media">
                                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5>Post Categories</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">

                                    @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                        <li>
                                            <a href="/blogcategory/{{$category->slug}}" class="d-flex flex-wrap justify-content-between"><span>{{$category->title}}</span><span>()</span></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5>Recent Post</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    @foreach(\App\Models\Blog::lastN(4) as $bl)
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="/blog/{{$bl->slug}}"><img src="{{$bl->thumb}}" alt="{{$bl->title}}"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="/blog/{{$bl->slug}}">
                                                    <h6>{{$bl->title}}</h6>
                                                </a>
                                                <p>{{$bl->created_at->diffForHumans()}}</p>
                                            </div>
                                        </li>
                                @endforeach

                            </div>


                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
