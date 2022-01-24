@extends('layouts.admin')
@section('title','Edit Verity photo')
@section('content')

    <a href="/items/{{$verity->Item->slug}}/edit" class="btn btn-info">Back to Item</a>

    <div class="content">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Verity Texture </h6>
 <div class="card-body">


     <form action="/verity/{{ $verity->id }} " method="POST" enctype="multipart/form-data">
         @isset($verity->id)
             {{ method_field('PATCH')}}
         @endisset
         @csrf


         <div class="form-group">
             <input type="text" value="{{$verity->title}}" class="form-control form-control" name="title" placeholder="Varity Texture Title"   required>
         </div>
         <div class="form-group">
             <input type="file" class="form-control form-control" name="photo" placeholder="Verity Photo" required>
         </div>

         <button class="btn btn-primary btn-user btn-block" type="submit">
             Updte Variety
         </button>
     {{Form::close()}}

 </div>
                </div>
            </div>

        </div>
    </div>


@endsection
