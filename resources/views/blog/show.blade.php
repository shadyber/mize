@extends('layouts.app')
@section('content')
    <div class="blog-section blog-single padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <article>
                            <div class="post-item-2">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="{{$blog->detail}}" alt="blog">
                                    </div>
                                    <div class="post-content">
                                        <h4>{{$blog->title}}</h4>
                                        <div class="meta-post">
                                            <p>
                                                <span class="post-date">Posted On: <a href="#">{{$blog->created_at->diffForHumans()}}</a></span>

                                            </p>
                                        </div>
                                        <p>
                                            {{$blog->detail}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-social">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="tags">
                                            <span>Tags:</span>
                                            <ul class="lab-ul">
                                                <li><a href="#">{{$blog->tags}},</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="scocial">
                                            <span>Share:</span>
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
                            </div>


                            <div class="rel-product">
                                <h4 class="title-border">Related Post</h4>
                                <div class="section-wrapper">
                                    <div class="row no-gutters justify-content-center">
                                        @foreach(\App\Models\Blog::lastN(3) as $related)
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="{{$related->thumb}}" alt="food-product">
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div id="comments" class="comments">
                                <h4 class="title-border">03 Comment</h4>
                                <ul class="lab-ul comment-list">

                                </ul>
                            </div>

                            <div id="respond" class="comment-respond">
                                <h4 class="title-border">Leave a Comment</h4>
                                <div class="add-comment">
                                    <form action="#" method="post" id="commentform" class="comment-form">
                                        <input name="name" type="text" value="" placeholder="Name*">
                                        <input name="email" type="text" value="" placeholder="Email*">
                                        <input name="url" type="text" value="" placeholder="Website*">
                                        <textarea id="comment-reply" name="comment" rows="7" placeholder="Type Here Your Comment*"></textarea>
                                        <button type="submit" class="lab-btn"><span>Send Comment</span></button>
                                    </form>
                                </div>
                            </div>
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
                                        <a href="/blogcategory/{{$category->title}}" class="d-flex flex-wrap justify-content-between"><span>Show
													all</span><span>()</span></a>
                                    </li>
                                        @endforeach

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
                                    <h5>instagram</h5>
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
                                    <h5>top tags</h5>
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
