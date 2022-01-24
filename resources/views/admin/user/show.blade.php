@extends('layouts.admin')
@section('title','Detail of Customers')
@section('content')
    <div class="row">
        <div class="col-sm-12">

                    <div role="row" class="odd">
                        <div>
                            <a href="/users/{{$user->id}}">   {{$user->id}}</a>

                        </div>
                        <div class="sorting_1">
                            {{$user->name}}
                        </div>

                        <div>
                            {{$user->address? $user->address->address1 : 'N/A'}}
                        </div>

                        <div>
                            {{$user->order}}
                        </div>
                    </div>

        </div>
    </div>
@endsection
