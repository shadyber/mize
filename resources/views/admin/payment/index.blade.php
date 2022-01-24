@extends('layouts.admin')
@section('title','List of All Payments')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                <th>
                    <tr>
                        <td>payment_id</td>
                        <td>payer_email</td>
                        <td>amount / currency</td>
                        <td>payment_status</td>
                        <td>Created at</td>
                    </tr>
                </th>
                </thead>

                <tbody>
                @foreach($payments as $payment)
                    <tr role="row" class="odd">
                        <td>
                            {{$payment->payment_id}}
                        </td>
                        <td class="sorting_1">{{$payment->payer_email}}</td>

                        <td>{{$payment->amount}} {{$payment->currency}}</td>
                        <td>{{$payment->payment_status}}</td>
                        <td>
                           {{$payment->created_at->diffForHumans()}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
