@extends('layouts.admin')
@section('title','Edite '.$item->name)
@section('content')

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#variety" role="tab" aria-controls="variety" aria-selected="false">Color Varity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#deals" role="tab" aria-controls="deals" aria-selected="false">More Photo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Edit Item</h4>
                        <h6 class="card-subtitle mb-2">
                    {{$item->name}}
                        </h6>

                        <div class="tab-content mt-3">
                            <div class="tab-pane active" id="description" role="tabpanel">

                                <div class="card shadow mb-10">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Edit Product </h6>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">

                                        {{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PUT')) }}

                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control" name="name" value="{{$item->name}}" placeholder="Item Name" required>
                                        </div>



                                        <div class="form-group">
                    <textarea class="form-control form-control" name="detail" placeholder="Item Detail" required>
                  {{$item->detail}}
                    </textarea>
                                        </div>


                                        <div class="form-group">
                                            <select class="form-control form-control" name="item_category_id"  placeholder="Item Category" required>
                                                <option value="{{$item->category_id}}" selected> {{$item->category->title}}</option>
                                             @foreach(\App\Models\ItemCategory::all() as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                 @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control" name="price"  value="{{$item->price}}"  placeholder="Item Price" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="weight"  value="{{$item->weight}}"  placeholder="Item Weight" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control" name="color"  value="{{$item->color}}"  placeholder="Item Color" value="black">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control form-control" name="init_qnt"  value="{{$item->init_qnt}}"  placeholder="Stock Balance">
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control" name="height" value="{{$item->height}}"  placeholder="Height"  >
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control form-control" name="width" value="{{$item->width}}"  placeholder="Width">
                                            </div>

                                            <div class="col-sm-4">
                                                <input type="number" class="form-control form-control" name="diameter" value="{{$item->diameter}}" placeholder="Diameter">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <select class="form-control form-control" name="badge" placeholder="Item Badge" >
                                                <option value="{{$item->badge}}">{{$item->badge}}</option>
                                                <option value="NEW">NEW</option>
                                                <option value="HOT">HOT</option>
                                                <option value="SALE">SALE</option>
                                            </select>
                                        </div>



                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Update Product
                                        </button>

                                        {{Form::close()}}


                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                             <div class="row">
                                 <div class="col-md-3">
                                     <img src="{{$item->thumb}}" alt="{{$item->name}}" class="img img-fluid">

                                 </div>
                                 <div class="col-md-6">

                                     {{ Form::model($item, array('route' => array('photoupdate'), 'method' => 'POST','enctype'=>'multipart/form-data')) }}

                                     @csrf
                                     <input type="hidden" value="{{$item->id}}" name="id">

                                     <div class="form-group">
                                         <input type="file" class="form-control form-control" name="photo" placeholder="Item Photo" value="{{$item->photo? $item->photo : ''}}" required>
                                     </div>
                                     <button class="btn btn-primary btn-user btn-block" type="submit">
                                         Update Main Photo
                                     </button>
                                     {{Form::close()}}

                                 </div>

                             </div>


                            </div>
                            <div class="tab-pane" id="variety" role="tabpanel" aria-labelledby="varity-tab">


                            </div>

                            <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                             <div class="row">
                                    <div class="col-md-12">

                                        <form action="/itemsphoto" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}">

                                            <div class="form-group">
                                                <input type="text" class="form-control form-control" name="title" placeholder="Photo Title">
                                            </div>




                                            <div class="form-group">
                                                <input type="file" class="form-control form-control" name="photo[]" placeholder="More Photo" multiple required>
                                            </div>


                                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                              Add Photo
                                            </button>
                                            {{Form::close()}}
                                    </div>
                                    <div class="container">
                                        <div class="col-md-3">

                                        </div>
                                    </div>

                                 </div>

                             </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
@section('css')
    <style>

    </style>
@endsection
@section('js')
    <script>
        $('#bologna-list a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        }) ;
        $('.delete-photo').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
