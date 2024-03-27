{{-- show status form for single status --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Status</h2>
                    <div class="nk-block-des">
                        <p>View status details.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title">
                            <h5 class="title">Status Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="status-name">Status Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-name" name="name"
                                            value="{{ $status->name }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label
                                    "
                                        for="status-color">Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-color" name="color"
                                            value="{{ $status->color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="status-background_color">Background Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-background_color"
                                            name="background_color" value="{{ $status->background_color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label class="form-label" for="status-border_color">Border Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-border_color"
                                            name="border_color" value="{{ $status->border_color }}" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="status-text_color">Text Color</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-text_color" name="text_color"
                                            value="{{ $status->text_color }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="status-icon">Icon</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="status-icon" name="icon"
                                            value="{{ $status->icon }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="status-created_at">Created At</label>
                                    <div class="form-control-wrap">
                                        <input type="dateTime" class="form-control" id="status-created_at" name="created_at"
                                            value="{{ $status->created_at }}" readonly>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="form-group
                                ">
                                    <label class="form-label
                                    "
                                        for="status-updated_at">Updated At</label>
                                    <div class="form-control-wrap">
                                        <input type="dateTime" class="form-control" id="status-updated_at" name="updated_at"
                                            value="{{ $status->updated_at }}" readonly>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="{{ route('status.edit', $status->id) }}"
                                            class="btn btn-lg btn-primary">Edit Status</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('status.index') }}"
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
