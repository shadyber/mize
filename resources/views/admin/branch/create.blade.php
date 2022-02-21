@extends('layouts.admin')
@section('title','Create a Store Location')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-12">
                            <a href="/storelocation" class="btn btn-outline-info">List All Locations</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <form action="/storelocation" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label for="name">Branch Name</label>
                                    <input type="text" name="branch_name" class="form-control"  placeholder="Branch Name" required>

                                    @error('branch_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                               <div class="form-group">
                                    <label for="name">Branch Email</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Branch Email" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Branch Tel</label>
                                    <input type="tel" name="tel" class="form-control"  placeholder="Branch Tel" >

                                    @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">City</label>
                                    <input type="text" name="city" class="form-control"  placeholder="City" value="Addiss Ababa" required>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Address Line</label>
                                    <input type="text" name="address_line" class="form-control"  placeholder="Address Line" required>
                                    @error('address_line')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="usd_rate">Longtiude</label>
                                    <input type="number" step="any"  name="longt" class="form-control"   id="us3-lon"  placeholder="Longtiude" >

                                    @error('longt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="usd_rate">Latitude</label>
                                    <input type="number" step="any"  name="lat" class="form-control" id="us3-lat"   placeholder="Latitude" >

                                    @error('lat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <!-- map -->
                                <div id="us3" style="height: 400px;"></div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-info form-control"> Add</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>
    <script>
        $('#us3').locationpicker({
            location: {
                latitude: -8.681013,
                longitude: 115.23506410000005
            },
            radius: 0,
            inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }
        });
    </script>
    @endsection
