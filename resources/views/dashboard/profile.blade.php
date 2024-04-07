@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Profile</h3>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="headline my-4">
                <h4 class="title">Personal Information</h4>
            </div>
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
                <h4 class="title">More Information</h4>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action=" {{ route('profile.info') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pen_name">
                                        @if (auth()->user()->hasRole('author'))
                                            Author Name
                                        @else
                                        Username
                                        @endif
                                    </label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="pen_name" name="pen_name"
                                            value="{{ auth()->user()->profile->pen_name }}" required>
                                        @error('pen_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label " for="phone">Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ auth()->user()->profile->phone }}" required>
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country"> Country</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="country" name="country"
                                            value="{{ auth()->user()->profile->country }}" required>
                                        @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ auth()->user()->profile->address }}" required>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label " for="city">City</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="{{ auth()->user()->profile->city }}" required>
                                        @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label " for="zip_code">Zip Code</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="zip_code" name="zip_code"
                                            value="{{ auth()->user()->profile->zip_code }}" required>
                                        @error('zip_code')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="about">About</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="about" name="about" required>{{ auth()->user()->profile->about }}</textarea>
                                        @error('about')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group w-100 text-center mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="headline my-4">
                <h4 class="title">Social Media</h4>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="{{ route('profile.social') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                            value="{{ auth()->user()->profile->facebook }}" required>
                                        @error('facebook')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="twitter">Twitter</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="twitter" name="twitter"
                                            value="{{ auth()->user()->profile->twitter }}" required>
                                        @error('twitter')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="instagram" name="instagram"
                                            value="{{ auth()->user()->profile->instagram }}" required>
                                        @error('instagram')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="website">Website</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="website" name="website"
                                            value="{{ auth()->user()->profile->website }}" required>
                                        @error('website')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group w-100 text-center mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
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
@endsection
