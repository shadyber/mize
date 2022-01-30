@extends('layouts.app')
@section('title','Items in '.$category->title)
@section('content')

    <div class="shop-page padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <article>
                            <div class="shop-title d-flex flex-wrap justify-content-between bg-ash">
                                <p>Showing 01 - 12 of 139 Results</p>
                                <div class="product-view-mode">
                                    <a class="active" data-target="grids"><i class="icofont-ghost"></i></a>
                                    <a data-target="lists"><i class="icofont-listing-box"></i></a>
                                </div>
                            </div>

                            <div class="shop-product-wrap grids row justify-content-center">
                                @foreach($items as $item)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="{{$item->thumb}}" alt="{{$item->name}}">
                                                <div class="product-action-link">
                                                    <a href="{{$item->photo}}" data-rel="lightcase"><i class="icofont-eye"></i></a>
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    <a href="#" class="add-to-cart" itemid="{{$item->id}}"><i class="icofont-cart-alt"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h6><a href="/item/{{$item->slug}}">{{$item->name}}</a></h6>
                                                <div class="rating mb-1">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>$ {{$item->price}}</h6>
                                            </div>
                                        </div>
                                        <div class="product-list-item">
                                            <div class="product-thumb">
                                                <img src="{{$item->thumb}}" alt="{{$item->name}}">
                                                <div class="product-action-link">
                                                    <a href="{{$item->photo}}" data-rel="lightcase"><i class="icofont-eye"></i></a>
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    <a href="#" class="add-to-cart" itemid="{{$item->id}}"><i class="icofont-cart-alt"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h6><a href="#">{{$item->name}}</a></h6>
                                                <div class="rating mb-1">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>
                                                    ${{$item->price}}
                                                </h6>
                                                <p>{{substr($item->detail,0,255)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="paginations">
                                <ul class="lab-ul d-flex flex-wrap justify-content-center">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">2</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a class="dot">...</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">5</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-search bg-ash px-3">
                                <div class="widget-header">
                                    <h5>Search keywords</h5>
                                </div>
                                <form action="/" class="search-wrapper">
                                    <input type="text" name="s" placeholder="Your Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>

                            <div class="widget widget-category bg-ash px-3">
                                <div class="widget-header">
                                    <h5>All Categories</h5>
                                </div>
                                <div class="widget-wrapper">
                                    <ul class="lab-ul shop-menu">
                                        @foreach(\App\Models\ItemCategory::allCategories() as $category)
                                            <li class="menu-item-has-children">
                                                <a href="/cat/{{$category->id}}" class="dd-icon-down">{{$category->title}}</a>

                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                            <div class="widget widget-post bg-ash px-3">
                                <div class="widget-header">
                                    <h5>Latests Products</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    @foreach(\App\Models\Item::lastN(4) as $item)
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="/item/{{$item->slug}}"><img src="{{$item->thumb}}" alt="{{$item->name}}"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href=/item/{{$item->slug}}">
                                                    <h6>{{$item->name}}</h6>
                                                </a>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>${{$item->price}}</h6>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
