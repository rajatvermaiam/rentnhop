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
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Coupon List</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Coupon List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Coupon Type</th>
                                <th>Amount</th>
                                <th>Minimum Booking Amount</th>
                                <th>Maximum Booking Amount</th>
                                <th>Coupon Code</th>
                                <th>Expire Date</th>
                                <th>Limit</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th style="width: 12%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($coupon)
                                @foreach ($coupon as $data)

                                    <tr>
                                        <td>{{ $data->coupon_type }}</td>
                                        <td>{{ $data->amount }}</td>
                                        <td>{{ $data->minimum_booking_amount }}</td>
                                        <td>{{ $data->maximum_booking_amount }}</td>
                                        <td>{{ $data->coupon_code }}</td>
                                        <td>{{ $data->coupon_expire_date }}</td>
                                        <td>{{ $data->coupon_times_used }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm split-bg-primary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown"><span class="">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                                <a class="dropdown-item" href="{{ route('admin.coupon.edit',$data->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('admin.coupon.destroy',$data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection
