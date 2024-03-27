
@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Role</h2>
                    <div class="nk-block-des">
                        <p>View role details.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title">
                            <h5 class="title">Role Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="role-name">Role Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="role-name" name="name"
                                            value="{{ $role->name }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="role-permissions">Permissions</label>
                                    <ul class="list-status">
                                        @foreach ($role->permissions as $permission)
                                            <li><em class="icon ni ni-shield-star"></em> {{ $permission->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="btn btn-lg btn-primary">Edit Role</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.index') }}"
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