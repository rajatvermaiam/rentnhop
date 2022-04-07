@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit User</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data"
                                      class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" value="{{ $user->name }}"
                                               class="form-control @error('name') is-invalid @enderror" id="name"
                                               required>
                                        @error('name')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" value="{{ $user->email }}"
                                                   class="form-control  @error('email') is-invalid @enderror" id="email"
                                                   aria-describedby="inputGroupPrepend" required>

                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                   {{-- <div class="col-md-3">
                                        <label for="role_id" class="form-label">Select Role</label>
                                        <select class="form-select  @error('role_id') is-invalid @enderror"
                                                name="role_id" id="role_id" required>
                                            <option selected disabled value="">Choose role</option>
                                            <option value="1" {{$user->role_id==1 ? 'selected':''}}>Admin</option>
                                            <option value="2" {{$user->role_id==2 ? 'selected':''}}>Vendor</option>
                                        </select>
                                        @error('role_id')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>--}}

                     {{--               <div class="col-md-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password"
                                                   class="form-control  @error('password') is-invalid @enderror "
                                                   id="password"
                                                   aria-describedby="inputGroupPrepend" required>

                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>--}}
                                    @php
                                        if ($user->role_id==2){
                                            $display_class ="";
                                        }else{
                                            $display_class ="dnone";
                                        }
                                    @endphp

                                    <div class="row {{ $display_class }}" rentn-disply="true">
                                        <div class="col-md-4 pb-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" name="mobile" value="{{ $user->mobile }}"
                                                   class="form-control @error('mobile') is-invalid @enderror"
                                                   id="mobile" required>
                                            @error('mobile')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" name="company_name" value="{{ $user->company_name }}"
                                                   class="form-control @error('company_name') is-invalid @enderror"
                                                   id="company_name" required>
                                            @error('company_name')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="other_mobile" class="form-label">Other Mobile</label>
                                            <input type="number" name="other_mobile" value="{{ $user->other_mobile }}"
                                                   class="form-control @error('other_mobile') is-invalid @enderror"
                                                   id="other_mobile" required>
                                            @error('other_mobile')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="other_email" class="form-label">Other Email</label>
                                            <input type="text" name="other_email" value="{{ $user->other_email }}"
                                                   class="form-control @error('other_email') is-invalid @enderror"
                                                   id="other_email" required>
                                            @error('other_email')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="pan_no" class="form-label">Pan No</label>
                                            <input type="text" name="pan_no" value="{{ $user->other_email }}"
                                                   class="form-control @error('pan_no') is-invalid @enderror"
                                                   id="pan_no" required>
                                            @error('pan_no')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="gst_no" class="form-label">GST No</label>
                                            <input type="text" name="gst_no" value="{{ $user->gst_no }}"
                                                   class="form-control @error('gst_no') is-invalid @enderror"
                                                   id="gst_no" required>
                                            @error('gst_no')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="shop_image" class="form-label">Shop Image</label>
                                            <div class="input-group has-validation">
                                                <input type="file" name="shop_image" value="{{ old('shop_image') }}"
                                                       class="form-control  @error('shop_image') is-invalid @enderror"
                                                       id="shop_image"
                                                       required>
                                            </div>
                                            @error('shop_image')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="agreement_image" class="form-label">Agreement Document</label>
                                            <div class="input-group has-validation">
                                                <input type="file" name="agreement_image"
                                                       value="{{ old('agreement_image') }}"
                                                       class="form-control  @error('agreement_image') is-invalid @enderror"
                                                       id="agreement_image"
                                                       required>
                                            </div>
                                            @error('agreement_image')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" value="{{ $user->address  }}"
                                                   class="form-control @error('address') is-invalid @enderror"
                                                   id="address" required>
                                            @error('address')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" name="city" value="{{ $user->city }}"
                                                   class="form-control @error('city') is-invalid @enderror" id="city"
                                                   required>
                                            @error('city')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="state" class="form-label">State</label>
                                            <input type="text" name="state" value="{{ $user->state }}"
                                                   class="form-control @error('state') is-invalid @enderror" id="state"
                                                   required>
                                            @error('state')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" name="country" value="{{ $user->country }}"
                                                   class="form-control @error('country') is-invalid @enderror"
                                                   id="country" required>
                                            @error('country')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 pb-3">
                                            <label for="pin_code" class="form-label">Pin Code</label>
                                            <input type="text" name="pin_code" value="{{ $user->pin_code }}"
                                                   class="form-control @error('pin_code') is-invalid @enderror"
                                                   id="pin_code" required>
                                            @error('pin_code')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 pb-3">
                                            <label for="google_location" class="form-label">Google Location</label>
                                            <input type="text" name="google_location"
                                                   value="{{ $user->google_location }}"
                                                   class="form-control @error('google_location') is-invalid @enderror"
                                                   id="google_location" required>
                                            @error('google_location')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
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


