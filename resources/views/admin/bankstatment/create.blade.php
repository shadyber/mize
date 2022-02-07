@extends('layouts.admin')
@section('title','Bank Statments')
@section('sub_title','Insert to Database')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Insert Bank Statements <a href="/bankstatement" class="btn btn-outline-info"> All Bank Statements</a></h6>

        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">

        <form action="/bankstatement" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control" name="bank_name" placeholder="Bank Name" required>
                @error('bank_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                @enderror

            </div>




            <div class="form-group row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control" step="any" name="amount" placeholder="Amount" required>
                    @error('amount')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-sm-6">
                    <select class="form-control form-control-user" name="currency_id" placeholder="currency Id" required>
                        @foreach(\App\Models\Currency::all() as $currency)
                            <option value="{{$currency->id}}"> {{$currency->name}} ({{$currency->slug}})</option>
                        @endforeach
                    </select>
                    @error('currency_id')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


            </div>


            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control" name="reference_number" placeholder="Reference Number" value="">
                    @error('reference_number')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control" name="sender_account" placeholder="Sender Account">

                    @error('sender_account')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
<div class="form-group row">
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control" name="merchant_account" placeholder="Merchant Account">

                    @error('merchant_account')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

      <div class="col-sm-6">
                    <input type="date" class="form-control form-control" name="date" placeholder="Date of Transaction">

                    @error('date')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




    </div>





            <button class="btn btn-primary btn-user btn-block" type="submit">
                Post Statement
            </button>

        </form>



    </div>

@endsection
