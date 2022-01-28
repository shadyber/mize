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
                                        <img src="assets/images/blog/author.png" alt="author">
                                    </div>
                                    <div class="admin-content">
                                        <h5>Sahjahan Sagor</h5>
                                        <p>Authoritatively restore orthog ips ineer installed Intrinsiclyts imperatives.
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
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Show
												all</span><span>(148)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Business</span><span>(20)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Creative</span><span>(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Inspiation</span><span>(30)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>News</span><span>(28)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Photography</span><span>(20)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span>Smart</span><span>(25)</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5>Recent Post</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/product/01.jpg" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="blog-single.html">
                                                <h6>Conveniently utilize premier metho.</h6>
                                            </a>
                                            <p>04 February 2019</p>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/product/02.jpg" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="blog-single.html">
                                                <h6>Seamlessly fashion customiz before.</h6>
                                            </a>
                                            <p>04 February 2019</p>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/product/03.jpg" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="blog-single.html">
                                                <h6>Conveniently utilize premier metho.</h6>
                                            </a>
                                            <p>04 February 2019</p>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/product/04.jpg" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="blog-single.html">
                                                <h6>Seamlessly fashion customiz before.</h6>
                                            </a>
                                            <p>04 February 2019</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-instagram">
                                <div class="widget-header">
                                    <h5>Instagram</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                    <li><a href="#"><img src="assets/images/team/01.jpg" alt="team"></a></li>
                                    <li><a href="#"><img src="assets/images/team/02.jpg" alt="team"></a></li>
                                    <li><a href="#"><img src="assets/images/team/03.jpg" alt="team"></a></li>
                                    <li><a href="#"><img src="assets/images/team/04.jpg" alt="team"></a></li>
                                </ul>
                            </div>

                            <div class="widget widget-tags">
                                <div class="widget-header">
                                    <h5>Featured tags</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li><a href="#">envato</a></li>
                                    <li><a href="#">themeforest</a></li>
                                    <li><a href="#">codecanyon</a></li>
                                    <li><a href="#">videohive</a></li>
                                    <li><a href="#">audiojungle</a></li>
                                    <li><a href="#">3docean</a></li>
                                    <li><a href="#">envato</a></li>
                                    <li><a href="#">themeforest</a></li>
                                    <li><a href="#">codecanyon</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
