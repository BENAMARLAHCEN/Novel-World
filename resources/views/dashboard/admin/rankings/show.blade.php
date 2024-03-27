@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Ranking</h2>
                    <div class="nk-block-des">
                        <p>View ranking details.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title">
                            <h5 class="title">Ranking Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="ranking-name">Ranking Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="ranking-name" name="name"
                                            value="{{ $ranking->name }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="ranking-created_at">Created At</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="ranking-created_at" name="created_at"
                                            value="{{ $ranking->created_at }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="ranking-updated_at">Updated At</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="ranking-updated_at" name="updated_at"
                                            value="{{ $ranking->updated_at }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="{{ route('rankings.edit', $ranking->id) }}"
                                            class="btn btn-lg btn-primary">Edit Ranking</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('rankings.index') }}"
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
