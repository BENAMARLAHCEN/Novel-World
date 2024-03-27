{{-- crete status form --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Create Status</h2>
                    <div class="nk-block-des">
                        <p>Create a new status for your system.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('status.store') }}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status-name">Status Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('color') is-invalid @enderror" id="status-name" name="name">
                                        </div>
                                        @error('name')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div
                                        class="form-group">
                                        <label class="form-label" for="status-color">Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control  @error('color') is-invalid @enderror" id="status-color" name="color" value="{{old('color')}}">
                                        </div>
                                        @error('color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="status-background_color">Background Color</label>
                                    <div class="form-group  ">
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('background_color') is-invalid @enderror" id="status-background_color"
                                                name="background_color" value="{{old('background_color')}}">
                                        </div>
                                        @error('background_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status-border_color">Border Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('border_color') is-invalid @enderror" id="status-border_color"
                                                name="border_color" value="{{old('border_color')}}">
                                        </div>
                                        @error('border_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status-text_color">Text Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('text_color') is-invalid @enderror" id="status-text_color"
                                                name="text_color" value=" {{old('text_color')}} ">
                                        </div>
                                        @error('text_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group>
                                        <label class="form-label
                                        "
                                            for="status-icon">Icon</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control  @error('icon') is-invalid @enderror" id="status-icon" name="icon" value="{{old('icon')}}">
                                        </div>
                                        @error('icon')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Create Status</button>
                                        </li>
                                        <li>
                                            <a href="{{ route('status.index') }}"
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
