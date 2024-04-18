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
                <div class="col-lg-10 col-md-12">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('profile.update') }}"
                            method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="d-flex justify-content-center align-items-center flex-column mt-3">
                                            <div class="rounded-circle avatar avatar-xl mb-2 bg-light "
                                                style="width: 150px; height: 150px; overflow: hidden;" id="avatar">
                                                <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75"
                                                    alt="{{ auth()->user()->name }}" class="w-100">
                                            </div>
                                            <div class="profile-name">
                                                <h6>{{ auth()->user()->name }}</h6>
                                            </div>
                                            @error('avatar')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control d-none" name="avatar" accept="image/*"
                                                        >
                                                    <script>
                                                        document.querySelector('#avatar').addEventListener('click', function() {
                                                            document.querySelector('input[type="file"]').click();
                                                        });
                                                        document.querySelector('input[type="file"]').addEventListener('change', function() {
                                                            const file = this.files[0];
                                                            if (file) {
                                                                const reader = new FileReader();
                                                                reader.onload = function() {
                                                                    document.querySelector('#avatar img').src = reader.result;
                                                                }
                                                                reader.readAsDataURL(file);
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            value="{{ auth()->user()->name }}" required>
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="birthday">Birthday</label>
                                                    <div class="form-control-wrap">
                                                        <input type="date" class="form-control" id="birthday" name="birthday"
                                                            value="{{ auth()->user()->birthday }}" required>
                                                        @error('birthday')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="email">Email</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            value="{{ auth()->user()->email }}" required>
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group w-100 text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="headline my-4">
                        <h4 class="title">Change Password</h4>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('profile.password') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="old_password">Old Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="old_password"
                                                    name="old_password" required>
                                                @error('old_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    required>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required>
                                                @error('password_confirmation')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group w-100 text-center mt-3">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="headline my-4">
                        <h4 class="title">Delete Account</h4>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('profile.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    required>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group w-100 text-center mt-3">
                                            <button type="submit" class="btn btn-danger delete">Delete Account</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section section-reviews" id="reviews">
        <div class="container">
            <div class="section-head">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="title">Reviews</h2>
                </div>
            </div><!-- .section-head -->
            <div class="section-content">
                <div class="row g-gs">
                    @foreach(Auth::user()->reviews as $review)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="review">
                                <div class="review-content card card-shadow round-xl">
                                    <div class="card-inner card-inner-lg">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="review-rating rating rating-sm">
                                            <ul class="rating-stars">
                                                @for ($i = 0; $i < $review->rating; $i++)
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                @endfor
                                                @for ($i = 0; $i < 5 - $review->rating; $i++)
                                                    <li><em class="icon ni ni-star"></em></li>
                                                @endfor
                                            </ul>
                                            <div class="rating-text">({{ $review->rating }}/5)</div>
                                        </div>
                                        <a href="{{ route('novel.show', $review->novel->slug) }}" class="link link-primary">
                                            <em class="icon ni ni-link-out"></em>
                                            See Novel
                                        </a>
                                    </div>
                                    <div class="review-text">
                                        <p>{{ $review->content }}</p>
                                    </div>
                                </div>
                                </div>
                                {{-- <div class="review-author">
                                    <div class="author">
                                        <div class="author-name">{{ $review->user->name }}</div>
                                        <div class="author-rating">
                                            <div class="rating">
                                                @for ($i = 0; $i < $review->user->reviews->avg('rating'); $i++)
                                                    <em class="icon ni ni-star"></em>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection