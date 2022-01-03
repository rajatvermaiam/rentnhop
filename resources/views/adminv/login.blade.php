@include('adminv.layouts.header')

<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="{{asset('adminv/admin/images/logo-icon.png')}}" width="60" alt=""/>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                    {{--<p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                                    </p>--}}
                                </div>

                                <div class="login-separater text-center mb-4"><span>SIGN IN WITH EMAIL</span>
                                    <hr/>
                                </div>
                                <div class="form-body">
                                    <form method="POST" class="row g-3" action="{{ route('login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress"
                                                   class="form-label">{{ __('E-Mail Address') }}</label>
                                            <input type="email"
                                                   class="form-control  @error('email') is-invalid @enderror"
                                                   id="inputEmailAddress" name="email" value="{{ old('email') }}"
                                                   required autocomplete="email" autofocus
                                                   placeholder="Email Address">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">{{ __('Password') }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                       id="inputChoosePassword" name="password" required autocomplete="current-password"
                                                       placeholder="Enter Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="javascript:;" class="input-group-text bg-transparent">
                                                    <i class='bx bx-hide'></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                                id="remember" checked>
                                                <label class="form-check-label" for="remember">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="col-md-6 text-end">
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bx bxs-lock-open"></i>{{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="{{ asset('adminv/admin/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('adminv/admin/js/jquery.min.js') }}"></script>
<script src="{{asset('adminv/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('adminv/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('adminv/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="{{ asset('adminv/admin/js/app.js') }}"></script>
</body>


</html>
