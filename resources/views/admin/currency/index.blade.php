@extends('layouts.admin')
@section('title','List of All Currencies')
@section('content')

    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-12">
                    <a href="/currency/create" class="btn btn-outline-info">Create New Currency</a>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                        <th>
                            <tr>
                                <td>Currency Id</td>
                                <td>Currency Name</td>
                                <td>Short Name</td>
                                <td>USD RATE</td>
                                <td>Created at</td>
                            </tr>
                        </th>
                        </thead>

                        <tbody>
                        @foreach($currencies as $currency)
                            <tr role="row" class="odd">
                                <td>
                                    {{$currency->id}}
                                </td>
                                <td class="sorting_1">{{$currency->name}}</td>

                                <td>{{$currency->slug}} </td>
                                <td>{{$currency->usd_rate}}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
