@extends('layouts.admin')
@section('title','Show Blog Post')

@section('content')



    <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="blog-posts">
                        <div class="single-blog-post blog-grid-post">
                            <div class="blog-image single-blog" data-aos="fade-up" data-aos-delay="200">
                                <img class="img-fluid h-auto" src="{{$blog->photo}}" alt="blog">
                            </div>
                            <div class="blog-post-content-inner mt-30px" data-aos="fade-up" data-aos-delay="400">
                                <div class="blog-author-date">
                                    <a class="blog-date height-shape" href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{$blog->created_at->diffForHumans()}}</a>
                                    <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i>
                                        {{$blog->visit}}</a>
                                </div>
                                <h4 class="blog-title">{{$blog->title}}</h4>

                            </div>
                            <div class="single-post-content">

                                {!!$blog->detail!!}

                            </div>
                        </div>
                        <!-- single blog post -->
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
