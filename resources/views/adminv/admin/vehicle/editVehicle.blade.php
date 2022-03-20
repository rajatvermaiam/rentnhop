@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Vehicle</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Vehicle</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Vehicle</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.vehicle.update',$vehicle->id) }}" method="POST"
                                      class="row g-3 needs-validation" enctype="multipart/form-data"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Vehicle name*</label>
                                        <input type="text" name="name" value="{{ $vehicle->name }}"
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
                                            <input type="text" name="model" value="{{ $vehicle->model }}"
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
                                            <input type="number" name="engine_cc" value="{{ $vehicle->engine_cc }}"
                                                   class="form-control  @error('engine_cc') is-invalid @enderror" id="engine_cc"
                                                   required>

                                        </div>
                                        @error('engine_cc')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="model" class="form-label">Gears*</label>
                                        <div class="input-group has-validation">
                                            <input type="number" name="gears" value="{{ $vehicle->gears }}"
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
                                                      required>{{ $vehicle->description }}</textarea>

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
                                                      required>{{ $vehicle->terms_conditions }}</textarea>

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

                                            <option value="INDEX, FOLLOW" {{$vehicle->meta_robots=="INDEX, FOLLOW" ? 'selected':''}} >INDEX, FOLLOW</option>
                                            <option value="NOINDEX, FOLLOW" {{$vehicle->meta_robots=="NOINDEX, FOLLOW" ? 'selected':''}}>NOINDEX, FOLLOW</option>
                                            <option value="INDEX, NOFOLLOW" {{$vehicle->meta_robots=="INDEX, NOFOLLOW" ? 'selected':''}}>INDEX, NOFOLLOW</option>
                                            <option value="NOINDEX, NOFOLLOW" {{$vehicle->meta_robots=="NOINDEX, NOFOLLOW" ? 'selected':''}}>NOINDEX, NOFOLLOW</option>

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
                                            <input type="text" name="meta_title" value="{{ $vehicle->meta_title }}"
                                                   class="form-control  @error('meta_title') is-invalid @enderror" id="meta_title"
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
                                                      required>{{ $vehicle->meta_keyword }}</textarea>

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
                                                      required>{{ $vehicle->meta_description }}</textarea>

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

