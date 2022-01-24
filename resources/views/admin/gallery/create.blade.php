@extends('layouts.admin')
@section('title','Create a Photo On Gallery')
@section('content')
    <div class="w-full h-screen m-3 p-3 shadow-lg rounded-lg">
        <form action="/gallery" method="post" enctype="multipart/form-data">
            @csrf
<h3>Create Photo</h3>

            <div class="form-group mt-3">
                <input type="text" class="form-control form-control" name="title" placeholder="Title" required>
            </div>

            <div class="form-group mt-3">
                <input type="file" class="form-control form-control" name="photo" placeholder="Photo" required>
            </div>



            <div class="form-group mt-3">
                <input type="text" class="form-control form-control" name="tags" placeholder="Tags" >
            </div>

            <div class="form-group mt-3">
                <input type="text" class="form-control form-control" name="items" placeholder="Items in the photo" >
            </div>


            <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>
    </div>
@endsection
