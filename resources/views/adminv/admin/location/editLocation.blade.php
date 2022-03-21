@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Location</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Location</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Location</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.location.update',$location->id) }}" method="POST" class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">City*</label>
                                        <select class="form-select  @error('city_id') is-invalid @enderror" name="city_id" aria-label="city">
                                            @if($city)
                                                @foreach ($city as $data)
                                                    <option value="{{ $data->id }}" {{$data->id==$location->city_id ? 'selected':''}} >{{ $data->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('city_id')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Vendor*</label>
                                        <select class="form-select  @error('user_id') is-invalid @enderror" name="user_id" aria-label="user_id">

                                            @if($user)
                                                @foreach ($user as $data)
                                                    <option value="{{ $data->id }}" {{$data->id==$location->user_id ? 'selected':''}}>{{ $data->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('user_id')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Location*</label>
                                        <input type="text" name="name"   value="{{ $location->name }}"  class="form-control @error('name') is-invalid @enderror" id="name" required>
                                        @error('name')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="map_url" class="form-label">Map Url*</label>
                                        <div class="input-group has-validation">
                                            <input type="map_url" name="map_url" value="{{ $location->map_url }}"   class="form-control  @error('map_url') is-invalid @enderror" id="map_url"
                                                    required>

                                        </div>
                                        @error('map_url')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Weekday Price*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="weekday_price" value="{{ $location->weekday_price }}"    class="form-control  @error('weekday_price') is-invalid @enderror" id="weekday_price"
                                                   required>

                                        </div>
                                        @error('weekday_price')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Weekend Price*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="weekend_price" value="{{ $location->weekend_price }}"   class="form-control  @error('weekend_price') is-invalid @enderror" id="weekend_price"
                                                   required>

                                        </div>
                                        @error('weekend_price')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Security Price*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="security_price"   value="{{ $location->security_price }}"  class="form-control  @error('security_price') is-invalid @enderror" id="security_price"
                                                   required>

                                        </div>
                                        @error('security_price')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Monthly Price*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="monthly_price" value="{{ $location->monthly_price}}"   class="form-control  @error('monthly_price') is-invalid @enderror" id="monthly_price"
                                                   required>

                                        </div>
                                        @error('monthly_price')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Quantity*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="quantity" value="{{ $location->quantity}}"   class="form-control  @error('quantity') is-invalid @enderror" id="quantity"
                                                   required>

                                        </div>
                                        @error('quantity')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->

@endsection


