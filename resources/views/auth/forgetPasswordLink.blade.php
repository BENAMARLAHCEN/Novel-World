@extends('layouts.auth')

@section('content')
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Reset password</h5>
                    <div class="nk-block-des">
                        <p>Enter your email address and your new password.</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('password.reset') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Email</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg
                        @error('email')
                            is-invalid
                        @enderror
                        " id="default-01"
                            placeholder="Enter your email address" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">Password</label>
                    </div>
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
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="password" class="form-control form-control-lg
                        @error('password')
                            is-invalid
                        @enderror
                        " id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm your password">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Reset password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
