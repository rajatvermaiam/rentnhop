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
                                <form action="{{ route('admin.user.update',$user->id) }}" method="POST" class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">name</label>
                                        <input type="text" name="name"   value="{{ $user->name }}"  class="form-control @error('name') is-invalid @enderror" id="name" required>
                                        @error('name')
                                        <span class="invalid-feedback" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" value="{{ $user->email }}"   class="form-control  @error('email') is-invalid @enderror" id="email"
                                                   aria-describedby="inputGroupPrepend" required>

                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
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
                                    </div>

                                    <div class="col-md-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror " id="password"
                                                   aria-describedby="inputGroupPrepend" required>

                                        </div>
                                        @error('password')
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


