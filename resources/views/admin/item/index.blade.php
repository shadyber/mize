@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List All Product </h6>
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
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                   <th>
                                       <tr>
                                           <td>Thumbnile</td>
                                           <td>Name</td>
                                           <td>prie</td>
                                           <td>in stock</td>
                                           <td>Action</td>
                                       </tr>
                                   </th>
                                </thead>

                                <tbody>
                                @foreach($items as $item)
                               <tr role="row" class="odd">
                                   <td>
                                       <img src="{{$item->thumb}}" alt="{{$item->name}}" class="img-responsive img-thumbnail" width="48px">
                                   </td>
                                    <td class="sorting_1">{{$item->name}}</td>

                                    <td>{{$item->price}}</td>
                                    <td>{{$item->init_qnt}}</td>
                                    <td>
                                         <form method="POST" action="/items/{{$item->id}}" class="form-inline ">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <div class="form-group">
                                                <a href="/items/{{$item->slug}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>
                                                <a href="/items/{{$item->slug}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>

                                                <button type="submit" class="btn btn-danger delete-item"> <i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing
                                {{ $items->firstItem()}} to {{$items->lastItem() }} of  {{$items->total()}} entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                                {{ $items->links('vendor.pagination.bootstrap-4') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('.delete-item').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
    @endsection
