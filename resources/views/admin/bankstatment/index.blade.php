@extends('layouts.admin');
@section('title','Bank Statments')
@section('sub_title','Bank List')
@section('content')

    <div class="card shadow mb-10">
<div class="card-header">
    <h3>List of Bank Transactions Made by Users    <a href="/bankstatement/create" class="btn btn-outline-info btn-user ">Insert Bank Statments</a></h3>

</div>
    <div class="card-body">
     <div class="col-md-12">
        <table  class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
            <tr>
                <td>Id</td>
                <td>Bank</td>
                <td>Sender Account</td>
                <td>Reciver Account</td>
                <td>Reference Number</td>
                <td>Amount</td>
                <td>Date</td>
                <td>Status</td>
            </tr>
            </thead>
            <tbody>
             @foreach($bankstatments as $banks)
                <tr>
                <td>
                    {{$banks->id}}
                </td>
                <td>
                    {{$banks->bank_name}}
                </td>
                <td>
                    {{$banks->sender_account}}
                </td>
                <td>
                    {{$banks->merchant_account}}
                </td>
                <td>
                    {{$banks->reference_number}}
                </td>
                <td>
                    {{$banks->amount}}  {{$banks->Currency->slug}}
                    <small>(  $usd {{$banks->amount * $banks->Currency->usd_rate}})</small>
                </td>
                <td>
                    {{$banks->date}}

                </td>
                    <td>
                    {{$banks->status}}

                </td>
            </tr>
                 @endforeach
            </tbody>
        </table>
    </div>

    </div>
    </div>
@endsection
