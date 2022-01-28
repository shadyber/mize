@extends('layouts.app')
@section('title','About Us')
@section('content')

    <section class="about-section bg_img relative padding-tb">
        <div class="container">
            <div class="row align-items-center mb-15">
                <div class="col-lg-6 col-12">
                    <div class="about-thumb">
                        <img src="{{\App\Models\AboutUs::all()->last()->photo}}" alt="about-thumb">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-wrapper">
                        <div class="about-title">
                            <h2><span class="d-lg-block">Welcome to Our Store </span></h2>
                            <p>
                                {{\App\Models\AboutUs::all()->last()->detail}}
                            </p>
                        </div>
                        <div class="about-content">
                            <ul class="lab-ul list-group">
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are providing different services</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are one of leading company</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Profitability is the primary goal of all business</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Learn how to grow your Business </li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your business</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
