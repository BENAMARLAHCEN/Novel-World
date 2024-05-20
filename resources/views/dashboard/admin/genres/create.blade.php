{{-- crete status form --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Create Genre</h2>
                    <div class="nk-block-des">
                        <p>Create a new Genre for your system.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('genres.store') }}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="genre-name">Genre Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('color') is-invalid @enderror" id="genre-name" name="name">
                                        </div>
                                        @error('name')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Create Genre</button>
                                        </li>
                                        <li>
                                            <a href="{{ route('genres.index') }}"
                                                class="btn btn-lg btn-outline-secondary">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
