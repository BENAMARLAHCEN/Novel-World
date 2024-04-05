{{-- show Genre form for single Genre --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Genre</h2>
                    <div class="nk-block-des">
                        <p>View Genre details.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title">
                            <h5 class="title">Genre Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="genre-name">Genre Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre-name" name="name"
                                            value="{{ $genre->name }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label
                                    "
                                        for="genre-color">Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre-color" name="color"
                                            value="{{ $genre->color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="genre-background_color">Background Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre-background_color"
                                            name="background_color" value="{{ $genre->background_color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label class="form-label" for="genre-border_color">Border Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre-border_color"
                                            name="border_color" value="{{ $genre->border_color }}" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="genre-text_color">Text Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre-text_color" name="text_color"
                                            value="{{ $genre->text_color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="genre-icon">Icon</label>
                                    <div class="form-control-wrap">
                                        <span>
                                            <em class="icon ni {{ $genre->icon }}"></em>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="genre-created_at">Created At</label>
                                    <div class="form-control-wrap">
                                        <input type="dateTime" class="form-control" id="genre-created_at" name="created_at"
                                            value="{{ $genre->created_at }}" readonly>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="genre-updated_at">Updated At</label>
                                    <div class="form-control-wrap">
                                        <input type="dateTime" class="form-control" id="genre-updated_at" name="updated_at"
                                            value="{{ $genre->updated_at }}" readonly>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="{{ route('genres.edit', $genre->id) }}"
                                            class="btn btn-lg btn-primary">Edit Genre</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('genres.index') }}"
                                            class="btn btn-lg btn-outline-secondary">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
