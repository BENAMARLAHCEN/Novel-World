{{-- edit Genre form --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit Genre</h2>
                    <div class="nk-block-des">
                        <p>Edit the genre for your system.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('genres.update', $genre->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="genre-name">Genre Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="genre-name" name="name" value="{{ $genre->name }}">                                            
                                                @error('name')
                                                    <span class="invalid text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group
                                    ">
                                        <label class="form-label" for="genre-color">Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('color') is-invalid @enderror"
                                                id="genre-color" name="color" value="{{ $genre->color }}">
                                        </div>
                                        @error('color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group
                                    ">
                                        <label class="form-label
                                        "
                                            for="genre-background_color">Background Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color"
                                                class="form-control @error('background_color') is-invalid @enderror"
                                                id="genre-background_color" name="background_color"
                                                value="{{ $genre->background_color }}">
                                        </div>
                                        @error('background_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group
                                   ">
                                        <label class="form-label
                                        "
                                            for="genre-border_color">Border Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color"
                                                class="form-control  @error('border_color') is-invalid @enderror"
                                                id="genre-border_color" name="border_color"
                                                value="{{ $genre->border_color }}">
                                        </div>
                                        @error('border_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group
                                    ">
                                        <label class="form-label " for="genre-text_color">Text Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color"
                                                class="form-control @error('text_color') is-invalid @enderror"
                                                id="genre-text_color" name="text_color" value="{{ $genre->text_color }}">
                                        </div>
                                        @error('text_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group
                                    ">
                                        <label class="form-label
                                        "
                                            for="genre-icon">Icon</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                                id="genre-icon" name="icon" value="{{ $genre->icon }}">
                                        </div>
                                        @error('icon')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Genre</button>
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
