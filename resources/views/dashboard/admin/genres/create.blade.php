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

                                <div class="col-lg-6">
                                    <div
                                        class="form-group">
                                        <label class="form-label" for="genre-color">Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control  @error('color') is-invalid @enderror" id="genre-color" name="color" value="{{old('color')}}">
                                        </div>
                                        @error('color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="genre-background_color">Background Color</label>
                                    <div class="form-group  ">
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('background_color') is-invalid @enderror" id="genre-background_color"
                                                name="background_color" value="{{old('background_color')}}">
                                        </div>
                                        @error('background_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="genre-border_color">Border Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('border_color') is-invalid @enderror" id="genre-border_color"
                                                name="border_color" value="{{old('border_color')}}">
                                        </div>
                                        @error('border_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="genre-text_color">Text Color</label>
                                        <div class="form-control-wrap">
                                            <input type="color" class="form-control @error('text_color') is-invalid @enderror" id="genre-text_color"
                                                name="text_color" value=" {{old('text_color')}} ">
                                        </div>
                                        @error('text_color')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <label class="form-label" 
                                            for="genre-icon">Icon</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select @error('icon') is-invalid @enderror" id="genre-icon" name="icon">
                                                <option value="">Select Icon</option>
                                                <option value="ni-plus"><em class="icon ni ni-plus"></em></option>
                                                <option value="ni-minus"><em class="icon ni ni-minus"></em></option>
                                                <option value="ni-check"><em class="icon ni ni-check"></em></option>
                                                <option value="ni-cross"><em class="icon ni ni-cross"></em></option>
                                                <option value="ni-arrow-right"><em class="icon ni ni-arrow-right"></em></option>
                                                <option value="ni-arrow-left"><em class="icon ni ni-arrow-left"></em></option>
                                                <option value="ni-arrow-up"><em class="icon ni ni-arrow-up"></em></option>
                                                <option value="ni-arrow-down"><em class="icon ni ni-arrow-down"></em></option>
                                                <option value="ni-arrow-right-up"><em class="icon ni ni-arrow-right-up"></em></option>
                                                <option value="ni-arrow-right-down"><em class="icon ni ni-arrow-right-down"></em></option>
                                                <option value="ni-arrow-left-up"><em class="icon ni ni-arrow-left-up"></em></option>
                                                <option value="ni-arrow-left-down"><em class="icon ni ni-arrow-left-down"></em></option>
                                                <option value="ni-arrow-up-right"><em class="icon ni ni-arrow-up-right"></em></option>
                                                <option value="ni-arrow-up-left"><em class="icon ni ni-arrow-up-left"></em></option>
                                                <option value="ni-arrow-down-right"><em class="icon ni ni-arrow-down-right"></em></option>
                                                <option value="ni-arrow-down-left"><em class="icon ni ni-arrow-down-left"></em></option>
                                            </select>
                                        </div>
                                        @error('icon')
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
