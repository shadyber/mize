@extends('layouts.app')
@section('title','Blog')
@section('content')
    <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-6 col-md-6 col-xl-4 mb-50px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" class="img-responsive w-100" alt="{{$blog->title}}"></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date">
                                    <a class="blog-date height-shape" href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{$blog->created_at->diffForHumans()}}</a>
                                    <a class="blog-mosion" href="/blog/{{$blog->slug}}"><i class="fa fa-commenting" aria-hidden="true"></i> {{$blog->visit}}</a>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link" href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>

                                <p>{{substr($blog->detail,0,100)}}</p>

                                <a href="/blog/{{$blog->slug}}" class="btn btn-primary blog-btn"> Read More<i class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                @endforeach
            </div>


            <!--  Pagination Area Start -->
            <div class="pro-pagination-style text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="pages">
                    {{$blogs->links()}}
                </div>
            </div>
            <!--  Pagination Area End -->
        </div>
    </div>
@endsection
