@extends('layouts.app')
@section('title','Shop')

@section('content')
    <div class="container">


        <div class="new-arrival shop-grid pt-110 ">
            <div class="container">
                <div class="col-xl-12 pb-50">
                    <div class="toolbar-navi d-inline-block ">
                        <div class="toolbar d-flex">
                            <div class="sort-by  d-flex mr-30">
                                <span class="mr-10 mt-5">Sort by :</span>
                                <div class="sort-by-option option-list position-relative">
                                    <button id="sort-option" class="option-dropdown">Most Recent <i class="fas fa-caret-down"></i></button>

                                    <div id="sub-sort-option" class="sub-sort-option sub-option  position-absolute " style="display: none;">
                                        <ul>
                                            <li>
                                                <span>Alphabet</span>
                                            </li>
                                            <li><span>Price</span></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="show-option d-flex">
                                <span class="mr-10 mt-5">Show :</span>
                                <div class="show-option-list option-list position-relative">
                                    <button id="show-option-numbe" class=" option-dropdown">11 <i class="fas fa-caret-down"></i></button>
                                    <div id="sub-show-option" class="sub-show-option sub-option position-absolute" style="display: none;">
                                        <ul>
                                            <li><span>20</span></li>
                                            <li><span>28</span></li>
                                            <li><span>40</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="view-as d-flex ml-25">
                                <ul class="view-as-button">
                                    <li> <a href="#"><i class="fab fa-microsoft"></i></a></li>
                                    <li> <a href="#"><i class="fas fa-list-ul"></i></a></li>
                                </ul>

                            </div>


                        </div>
                    </div>
                    <nav class="construction-pagination float-right" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="arrival-product new-arrival-2 position-relative pt-45">
                    <div class="row">

                       @foreach($items as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item cat{{$item->category->id}}">
                            <div class="arrival-items arrival-new-items text-center mb-55">
                                <div class="arrival-img">
                                    <img src="{{$item->thumb}}" alt="{{$item->title}}">
                                </div>
                                <div class="arrival-details position-relative pt-25">
                                     <ul class="rating">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                    <h5><a href="/item/{{$item->slug}}">{{$item->name}}</a></h5>

                                    <div class="price">
                                        <del>$ {{$item->price+30}}</del>
                                        <span>${{$item->price}}</span>
                                    </div>
                                    <div class="buy-info">
                                        <button class="slider-btn add-btn float-left position-relative add-to-cart" qnt="1" itemid="{{$item->id}}">Add To Cart</button>
                                        <ul class="wishlist text-right">
                                            <li> <a href="#"><i class="lar la-heart"></i></a></li>
                                            <li><a href="/item/{{$item->slug}}" class=" popbtn"><i class="fas fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="row">
                    <div class="view-items ml-auto mr-auto mt-60">
                        <a class="p-btn position-relative" href="/item">
                            <span>Load more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
