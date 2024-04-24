@extends('layouts.auth')

@section('content')
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Register</h4>
                    <div class="nk-block-des">
                        <p>Create New World Novel Account</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <div class="form-control-wrap">
                        <input type="text" name="name" class="form-control form-control-lg
                        @error('name')
                            is-invalid
                        @enderror
                        " id="name"
                            placeholder="Enter your name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg
                        @error('email')
                            is-invalid
                        @enderror
                        " id="email" name="email" placeholder="Enter your email address">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right password-switch lg" data-target="password">
                            <em class="password-icon icon-show icon ni ni-eye"></em>
                            <em class="password-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg
                        @error('password')
                            is-invalid
                        @enderror
                        " id="password" name="password"
                            placeholder="Enter your password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <div class="form-control-wrap">
                        <input type="password" class="form-control form-control-lg
                        @error('password_confirmation')
                            is-invalid
                        @enderror
                        " id="password_confirmation" name="password_confirmation"
                            placeholder="Enter your password_confirmation">
                    </div>
                </div>
                {{-- checkbox for declari i need to be author --}}
                <div class="form-group">
                    <div class="custom-control custom-control-xs custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox" name="author" value="1">
                        <label class="custom-control-label" for="checkbox">I want to be an author</label>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <div class="custom-control custom-control-xs custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox" required>
                        <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy
                                Policy</a> &amp; <a href="#"> Terms.</a></label>
                    </div>
                </div> --}}
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Register</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4"> Already have an account? <a
                    href="{{ route('login') }}"><strong>Sign in instead</strong></a>
            </div>
            <div class="text-center pt-4 pb-3">
                <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
            </div>
            <ul class="nav justify-center gx-8">
                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Facebook</a></li>
                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Google</a></li>
            </ul>
        </div>
    </div>
@endsection
