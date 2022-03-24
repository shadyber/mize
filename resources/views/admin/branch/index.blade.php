@extends('layouts.admin')
@section('title','Our Locations')
@section('sub_title','Our Store located ')
@section('content')
 <div class="col-md-12">
     <div class="card">
         <div class="card-header">
             <a href="/storelocation/create" class="btn btn-primary">Create a Store Location</a>
         </div>

         <div class="card-body row">
             @foreach($storelocations as $branch)
                <div class="col-md-3 -box border-left-danger border-bottom-danger offset-1 p-2 m-2">
                    <h3>{{$branch->branch_name}}</h3>
                    <p>{{$branch->address_line}}</p>
                   <i class="fa fa-location-arrow"></i> <small>long: {{$branch->longt}}</small>
                    <small>lat: {{$branch->lat}}</small>
                    <div class="box-footer">
                        <form action="storelocation/{{$branch->id}}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <button type="submit" href="/delete" class="btn btn-outline-dark"> Delete Location</button>
                        </form>
                    </div>
                </div>
             @endforeach
         </div>

     </div>
 </div>


@endsection
