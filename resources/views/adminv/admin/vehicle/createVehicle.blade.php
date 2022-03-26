@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Vehicle</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Vehicle</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Create Vehicle</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.vehicle.store') }}" method="POST"
                                      class="row g-3 needs-validation" enctype="multipart/form-data"
                                      novalidate>
                                    @csrf

                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Vehicle name*</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                               class="form-control @error('name') is-invalid @enderror" id="name"
                                               required>
                                        @error('name')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="model" class="form-label">Vehicle Model*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="model" value="{{ old('model') }}"
                                                   class="form-control  @error('model') is-invalid @enderror" id="model"
                                                   required>

                                        </div>
                                        @error('model')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="model" class="form-label">Engine CC*</label>
                                        <div class="input-group has-validation">
                                            <input type="number" name="engine_cc" value="{{ old('engine_cc') }}"
                                                   class="form-control  @error('engine_cc') is-invalid @enderror"
                                                   id="engine_cc"
                                                   required>

                                        </div>
                                        @error('engine_cc')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="gears" class="form-label">Gears*</label>
                                        <div class="input-group has-validation">
                                            <input type="number" name="gears" value="{{ old('gears') }}"
                                                   class="form-control  @error('gears') is-invalid @enderror" id="gears"
                                                   required>

                                        </div>
                                        @error('gears')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="fuel_capacity" class="form-label">Fuel Capacity*</label>
                                        <div class="input-group has-validation">
                                            <input type="number" name="fuel_capacity" value="{{ old('fuel_capacity') }}"
                                                   class="form-control  @error('fuel_capacity') is-invalid @enderror"
                                                   id="fuel_capacity"
                                                   required>

                                        </div>
                                        @error('fuel_capacity')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="top_speed" class="form-label">Top Speed*</label>
                                        <div class="input-group has-validation">
                                            <input type="number" name="top_speed" value="{{ old('top_speed') }}"
                                                   class="form-control  @error('top_speed') is-invalid @enderror"
                                                   id="top_speed"
                                                   required>

                                        </div>
                                        @error('top_speed')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="type" class="form-label">Vehicle Type*</label>
                                        <select class="form-select  @error('type') is-invalid @enderror"
                                                name="type" aria-label="type">
                                            <option value="" selected>vehicle type</option>

                                            <option value="With Gear">With Gear</option>
                                            <option value="With Gear">Gear less</option>

                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="category" class="form-label">Bike Category*</label>
                                        <select class="form-select  @error('category') is-invalid @enderror"
                                                name="category" aria-label="category">
                                            <option value="" selected>bike category</option>

                                            <option value="Sports">Sports</option>
                                            <option value="Commute">Commute</option>
                                            <option value="Cruise">Cruise</option>
                                            <option value="Super Bike">Super Bike</option>

                                        </select>
                                        @error('category')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inclusions" class="form-label">Inclusion</label>
                                        <select class="form-select  @error('inclusions') is-invalid @enderror"
                                                name="inclusions" aria-label="inclusions">
                                            <option value="" selected>select inclusions</option>

                                            <option value="1 Complimentary Helmet">1 Complimentary Helmet</option>

                                        </select>
                                        @error('inclusions')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="col-md-4">
                                        <label for="images" class="form-label">Vehicle Image*</label>
                                        <div class="input-group has-validation">
                                            <input type="file" name="images"
                                                   class="form-control  @error('images') is-invalid @enderror"
                                                   id="images"
                                                   required>

                                        </div>
                                        @error('images')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Vehicle Description*</label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="description"
                                                      class="form-control  @error('description') is-invalid @enderror"
                                                      id="description"
                                                      required>{{ old('description') }}</textarea>

                                        </div>
                                        @error('description')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="terms_conditions" class="form-label">Vehicle Terms
                                            Conditions*</label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="terms_conditions"
                                                      class="form-control  @error('terms_conditions') is-invalid @enderror"
                                                      id="terms_conditions"
                                                      required>{{ old('terms_conditions') }}</textarea>

                                        </div>
                                        @error('terms_conditions')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="meta_robots" class="form-label">Meta Robots *</label>
                                        <select class="form-select  @error('meta_robots') is-invalid @enderror"
                                                name="meta_robots" aria-label="meta_robots">

                                            <option value="INDEX, FOLLOW" selected="">INDEX, FOLLOW</option>
                                            <option value="NOINDEX, FOLLOW">NOINDEX, FOLLOW</option>
                                            <option value="INDEX, NOFOLLOW">INDEX, NOFOLLOW</option>
                                            <option value="NOINDEX, NOFOLLOW">NOINDEX, NOFOLLOW</option>

                                        </select>
                                        @error('meta_robots')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="meta_title" class="form-label">Meta Title*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="meta_title" value="{{ old('meta_title') }}"
                                                   class="form-control  @error('meta_title') is-invalid @enderror"
                                                   id="meta_title"
                                                   required>

                                        </div>
                                        @error('meta_title')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="meta_keyword" class="form-label">Meta Keyword*
                                        </label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="meta_keyword"
                                                      class="form-control  @error('meta_keyword') is-invalid @enderror"
                                                      id="terms_conditions"
                                                      required>{{ old('meta_keyword') }}</textarea>

                                        </div>
                                        @error('meta_keyword')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="meta_description" class="form-label">Meta Description*
                                        </label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="meta_description"
                                                      class="form-control  @error('meta_description') is-invalid @enderror"
                                                      id="terms_conditions"
                                                      required>{{ old('meta_description') }}</textarea>

                                        </div>
                                        @error('meta_description')
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

