@extends('layouts.admin')
@section('title','Blog edit')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Blog Post </h6>
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
        <div class="card-body">

            <form action="{{ $blog->id }} " method="POST">
                @isset($blog->id)
                    {{ method_field('PATCH')}}
                @endisset
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control" name="title" placeholder="Post Title" required>
                </div>



                <div class="form-group">
                    <input type="file" class="form-control form-control" name="photo" placeholder="Post Photo" required>
                </div>
                <div class="form-group">
                    <select class="form-control form-control" name="blog_category_id" placeholder="Post Category' required>
                        @foreach(\App\Models\BlogCategory::allCategories() as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <textarea class="form-control form-control" name="detail" placeholder="Post Detail" required   rows="5">
                    </textarea>
                </div>



                <div class="form-group">
                    <input type="text" class="form-control form-control" name="tags" placeholder="Post Tags" >
                </div>



                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Post Blog
                </button>

            </form>



        </div>
    </div>
@endsection
