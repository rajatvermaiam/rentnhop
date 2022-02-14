@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Coupon</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Coupon</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Coupon</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.coupon.update',$coupon->id) }}" method="POST"
                                      class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-3">
                                        <label for="coupon_type" class="form-label">Coupon Type *</label>
                                        <select class="form-select  @error('coupon_type') is-invalid @enderror"
                                                name="coupon_type" aria-label="coupon_type">
                                            <option value="Fixed" {{$coupon->coupon_type == "Fixed" ? 'selected':''}}>Fixed</option>
                                            <option value="Percent" {{$coupon->Percent == "Fixed" ? 'selected':''}}>Percent</option>
                                        </select>
                                        @error('coupon_type')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="amount" class="form-label">Amount*</label>
                                        <input type="number" name="amount"   value="{{ $coupon->amount }}"  class="form-control @error('amount') is-invalid @enderror" id="name" required>
                                        @error('amount')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="minimum_booking_amount" class="form-label">Minimum Booking Amount*</label>
                                        <input type="number" name="minimum_booking_amount"   value="{{ $coupon->minimum_booking_amount }}"  class="form-control @error('minimum_booking_amount') is-invalid @enderror" id="name" required>
                                        @error('minimum_booking_amount')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-3">
                                        <label for="maximum_booking_amount" class="form-label">Maximum Booking Amount*</label>
                                        <input type="number" name="maximum_booking_amount"   value="{{ $coupon->maximum_booking_amount }}"  class="form-control @error('maximum_booking_amount') is-invalid @enderror" id="maximum_booking_amount" required>
                                        @error('maximum_booking_amount')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-3">
                                        <label for="coupon_code" class="form-label">Code*</label>
                                        <input type="text" name="coupon_code"   value="{{ $coupon->coupon_code }}"  class="form-control @error('coupon_code') is-invalid @enderror" id="coupon_code" required>
                                        @error('coupon_code')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="coupon_expire_date" class="form-label">Expire Date*</label>
                                        <input type="text" name="coupon_expire_date"   value="{{ $coupon->coupon_expire_date }}"  class="form-control @error('coupon_expire_date') is-invalid @enderror" id="coupon_expire_date" readonly>
                                        @error('coupon_expire_date')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="coupon_times_used" class="form-label">Use Limit*</label>
                                        <input type="text" name="coupon_times_used"   value="{{ $coupon->coupon_times_used }}"  class="form-control @error('coupon_times_used') is-invalid @enderror" id="coupon_times_used" required>
                                        @error('coupon_times_used')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-3">
                                        <label for="status" class="form-label">Status *</label>
                                        <select class="form-select  @error('status') is-invalid @enderror"
                                                name="status" aria-label="status">
                                            <option value="Active" {{$coupon->status=="Active" ? 'selected':''}}>Active</option>
                                            <option value="Inactive" {{$coupon->status=="Inactive" ? 'selected':''}}>Inactive</option>
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

