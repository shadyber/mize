@extends('layouts.app')
@section('title','Contact Us')
@section('content')
    <div class="contact_us pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="contact-details">
                        <div class="contact-icon text-center">
                            <i class="fas fa-map"></i>
                        </div>
                        <ul class="contact-info text-center">
                            <li>221-B, Bakerstreet,</li>
                            <li>Scotland Yard, UK</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="contact-details mt-30 mb-30 mt-sm-0 mb-sm-0">
                        <div class="contact-icon text-center">
                            <i class="fas fa-phone"></i>
                        </div>
                        <ul class="contact-info text-center">
                            <li>+44 01569 2358</li>
                            <li>+44 04258 3211</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="contact-details">
                        <div class="contact-icon text-center">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <ul class="contact-info text-center">
                            <li>info@mizebaltina.comm</li>
                            <li>admin@mizebaltina.comm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-area pt-115">
        <div class="container">
            <div id="map-container-googl" class="map-container ">
                <iframe src="https://maps.google.com/maps?q=addisababa&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
@endsection
