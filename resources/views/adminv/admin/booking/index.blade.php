@extends('adminv/layouts.all')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Bookings</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Bookings List</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Bookings List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Rider Details</th>
                                <th>Rent</th>
                                <th>Pickup/Drop</th>
                                <th>Role</th>
                                <th>Booking Status</th>
                                <th>Payment Status</th>
                                <th>Created</th>
                                <th style="width: 12%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($bookings)
                                @foreach ($bookings as $data)
                                    @php
                                        $rent = json_decode($data->price_breakup)
                                    @endphp

                                    @if($data->booking_status =='Success')
                                        @php
                                            $booking_class ='btn-success';
                                        @endphp
                                    @else
                                        @php
                                            $booking_class ='btn-danger';
                                        @endphp
                                    @endif

                                    @if($data->payment_status =='Success')
                                        @php
                                            $payment_class ='btn-success';
                                        @endphp
                                    @elseif($data->payment_status =='Paid to Admin')
                                        @php
                                            $payment_class ='btn-info';
                                        @endphp
                                    @else
                                        @php
                                            $payment_class ='btn-danger';
                                        @endphp
                                    @endif

                                    <tr>
                                        <td>
                                            {{ ucfirst($data->name) }}</br>
                                            {{ $data->email }}</br>
                                            {{ $data->mobile }}
                                        </td>
                                        <td>
                                            {{ 'Total Rent:₹'.$rent->selling_price }} </br>
                                            {{ 'Paid Rent:₹'.$rent->partially_amount }} </br>
                                            {{ 'Remaining Rent:₹'.$rent->remaining_amount }}</br>
                                            {{ 'Security Rent:₹'.$rent->security_price }}</br>

                                        </td>
                                        <td>
                                            {{ 'From Date: '.$data->from }} </br>
                                            {{ 'To Date: '.$data->to }} </br>

                                        </td>
                                        <td>{{$data->role}}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn {{ $booking_class }} btn-sm">{{$data->booking_status}}</button>

                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn {{ $payment_class }} btn-sm">{{$data->payment_status}}</button>


                                        <td>{{$data->created_at}}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm split-bg-primary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown"><span class="">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                                <a class="dropdown-item"
                                                   href="{{ url('admin/invoice',rent_encode($data->id)) }}" target="_blank">Invoice</a>
                                                <div class="dropdown-divider"></div>
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
