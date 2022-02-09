@extends('layouts.admin')
@section('title','List of All Currencies')
@section('content')

    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-12">
                    <a href="/currency" class="btn btn-outline-info">List All Currencies</a>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">

                    <form action="/currency" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Long Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Currency Name" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                          <div class="form-group">
                            <label for="slug">Short Name</label>
                            <input type="text" name="slug" class="form-control"  placeholder="Short Name Standard Short Versino (USD)" required>
                              @error('slug')
                              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                             <div class="form-group">
                            <label for="usd_rate">USD Rate</label>
                            <input type="number" step="any" name="usd_rate" class="form-control"  placeholder="1usd * rate" required>

                                 @error('usd_rate')
                                 <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-info form-control"> Add</button>
                        </div>

                    </form>

                 </div>
            </div>
        </div>
    </div>

@endsection
