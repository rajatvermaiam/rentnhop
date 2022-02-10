@extends('adminv/layouts.all')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Vehicles</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Vehicles List</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Vehicles List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Created</th>
                                <th style="width: 12%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($vehicles))
                                @foreach ($vehicles as $data)

                                    <tr>
                                        <td>{{ $data->images }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->model }}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm split-bg-primary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown"><span class="">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                                <a class="dropdown-item" href="{{ route('admin.vehicle.edit',$data->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('admin.vehicle.destroy',$data->id) }}" method="POST">
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
