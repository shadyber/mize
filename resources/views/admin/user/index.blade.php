@extends('layouts.admin')
@section('title','List of Customers')
@section('content')
<div class="row">
    <div class="col-sm-12">

        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
            <th>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Orders</td>

                </tr>
            </th>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr role="row" class="odd">
                    <td>
                        <a href="/users/{{$user->id}}">   {{$user->id}}</a>

                    </td>
                    <td class="sorting_1">
                       {{$user->name}}
                    </td>

                    <td>
                         {{$user->address? $user->address->address1 : 'N/A'}}
                    </td>

                    <td>
                       {{$user->order}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>


        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing
                {{ $users->firstItem()}} to {{$users->lastItem() }} of  {{$users->total()}} entries</div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                {{ $users->links('vendor.pagination.bootstrap-4') }}

            </div>
        </div>

</div>
@endsection
