@extends('layouts.app')

@section('hero')
    <div class="header-content my-auto py-5 is-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-md-10">
                    <div class="header-caption">
                        <h1 class="header-title">Profile</h1>
                        <p class="text-white text-center">
                            Welcome to your profile page! Here, you can view your account settings and profile, as well as
                            sign out of your account. You can also toggle dark mode on and off. If you have any questions or
                            need help, please don't hesitate to reach out to us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section section-service" id="service">
        <div class="container">
            <div class="section-head">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="title">Account Setting</h2>
                </div>
            </div><!-- .section-head -->
            <div class="section-content">
                <div class="row g-gs">
                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('images/user.png') }}" alt="user" class="img-fluid rounded"
                                    style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-8">
                                <div class="title text-truncate h4">{{ Auth::user()->name }}</div>
                                <div class="overflow-hidden">
                                    <div class="">
                                        <a href="{{ route('profile') }}" class="btn btn-primary">Edit Profile</a>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('password') }}" class="btn btn-primary">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
# Compare this snippet from resources/views/readers/profile.blade.php: