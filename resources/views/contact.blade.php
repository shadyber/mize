@extends('layouts.app')
@section('title','Contact')
@section('sub_title','Contact Us')
@section('content')

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="contac-top">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-google-map"></i>
                            </div>
                            <div class="contact-details">
                                <p>{{\App\Models\Address::all()->last()->address1}}</p>
                                <p>{{\App\Models\Address::all()->last()->address2}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-phone"></i>
                            </div>
                            <div class="contact-details">
                                <p>{{\App\Models\Address::all()->last()->tel}}</p>
                                <p>{{\App\Models\Address::all()->last()->tel2}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <p>{{\App\Models\Address::all()->last()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contac-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.9081050176837!2d38.755566450688924!3d8.980603393522824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b855c7f20618b%3A0xf3fdd9cc6e04d8dd!2sMize%20Tour%20and%20Travel!5e0!3m2!1sen!2set!4v1643382457458!5m2!1sen!2set" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-form">
                            <form action="#" method="POST" id="commentform" class="comment-form">
                                <input type="text" name="name" class="" placeholder="Name*">
                                <input type="email" name="email" class="" placeholder="Email*">
                                <input type="text" name="subject" class="" placeholder="Subject*">
                                <textarea name="text" id="role" cols="30" rows="9" placeholder="Message*"></textarea>
                                <button type="submit" class="lab-btn">
                                    <span>Submit Now</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
