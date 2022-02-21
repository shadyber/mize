@extends('layouts.app')
@section('title','Pick Your order From Our Store')
@section('sub_title','Our Store located ')
@section('content')
<div class="container pt-3 pb-3">
<div class="row pt-20 pl-50">
    @foreach(\App\Models\StoreLocation::all() as $location)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h3>{{$location->branch_name}}</h3></div>
            <div class="card-body">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63055.29073067472!2d{{$location->longt}}68231138!3d{{$location->lat}}12231692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2s{{$location->branch_name}}!5e0!3m2!1sen!2set!4v1645475363443!5m2!1sen!2set"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"></iframe>
            </div>
            <div class="card-footer">
                {{$location->tel}} {{$location->email}}
            </div>
        </div>
    </div>
        @endforeach

</div>
</div>
@endsection
@section('js')

