@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Price</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Price</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Create Price</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.price.store') }}" method="POST"
                                      class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="vehicle_id" class="form-label">Select Vehicle*</label>
                                        <select class="form-select  @error('vehicle_id') is-invalid @enderror"
                                                name="vehicle_id" aria-label="vehicle_id">
                                            <option value="" selected>select vehicle</option>
                                            @if($vehicles)
                                                @foreach ($vehicles as $data)
                                                    <option value="{{ $data->id }}" {{$data->id==old('vehicle_id') ? 'selected':''}}>{{ $data->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('vehicle_id')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Select Location*</label>
                                        <select class="form-select  @error('city_id') is-invalid @enderror"
                                                name="city_id" aria-label="city">
                                            <option value="" selected>select location</option>
                                            @if($city)
                                                @foreach ($city as $data)
                                                    <option value="{{ $data->id }}" style="font-weight:bold;color:#333"
                                                            disabled>{{ $data->name }}</option>
                                                    @if($data->childrens)
                                                        @foreach($data->childrens as $child)
                                                            <option value="{{$child->id}}" {{$child->id==old('city_id') ? 'selected':''}}>{{ $child->name }}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('city_id')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Vendor*</label>
                                        <select class="form-select  @error('user_id') is-invalid @enderror"
                                                name="user_id" aria-label="user_id">
                                            <option value="" selected>select vendor</option>
                                            @if($user)
                                                @foreach ($user as $data)
                                                    <option value="{{ $data->id }}" {{$data->id==old('user_id') ? 'selected':''}}>{{ $data->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('user_id')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Weekday Price*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="weekday_price" value="{{ old('weekday_price')}}"
                                                   class="form-control  @error('weekday_price') is-invalid @enderror"
                                                   id="weekday_price"
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
                                            <input type="text" name="weekend_price" value="{{ old('weekend_price')}}"
                                                   class="form-control  @error('weekend_price') is-invalid @enderror"
                                                   id="weekend_price"
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
                                            <input type="text" name="security_price" value="{{ old('security_price')}}"
                                                   class="form-control  @error('security_price') is-invalid @enderror"
                                                   id="security_price"
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
                                            <input type="text" name="monthly_price" value="{{ old('monthly_price')}}"
                                                   class="form-control  @error('monthly_price') is-invalid @enderror"
                                                   id="monthly_price"
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
                                            <input type="text" name="quantity" value="{{ old('quantity')}}"
                                                   class="form-control  @error('quantity') is-invalid @enderror"
                                                   id="quantity"
                                                   required>

                                        </div>
                                        @error('quantity')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="status" class="form-label">Status *</label>
                                        <select class="form-select  @error('status') is-invalid @enderror"
                                                name="status" aria-label="status">
                                            <option value="Active" selected="">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                        @error('status')
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

