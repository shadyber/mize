@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Address </h6>
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

            <form action="/address" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="tel" class="form-control form-control" name="tel" placeholder="Primary Tel" required>
                </div>

                <div class="form-group">
                    <input type="tel" class="form-control form-control" name="tel2" placeholder="Secondary Tel" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control form-control" name="email" placeholder="Primary Email" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control form-control" name="email2" placeholder="Secondary Email" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control" name="address1" placeholder="Primary Address" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control" name="address2" placeholder="Secondary Address" required>
                </div>











                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Post Address
                </button>

            </form>



        </div>
    </div>
@endsection
