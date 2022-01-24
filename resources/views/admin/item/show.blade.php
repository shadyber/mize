@extends('layouts.admin')
@section('title','Item Detail')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Show Item Detail</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body ">


            <hr>                     <p class="justify-content-md-between">  <b> Item Name: </b>   {{$item->name}}</p>
            <hr>                      <p><b>   Item Category:</b> {{$item->Category->name}}</p>
            <hr>                       <p><b>  Measure :</b> {{$item->measurement}}</p>
            <hr>                     <p> <b> Price:</b>   $USD : {{$item->price}}</p>
            <hr>                        <p> <b> Quantity:</b> {{$item->init_qnt}}</p>
            <hr>                     <p><b>  Action: </b>
                <a href="/items/{{$item->slug}}/edit" class="btn btn-primary"> Edit</a>
                <form id="delete-form" method="POST" class="form-inline" action="/items/{{$item->id}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete Item">
                </div>
            </form>



        </div>
    </div>
@endsection
