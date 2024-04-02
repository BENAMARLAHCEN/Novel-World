{{-- show user permission and block user permission input using select 2 --}}

@extends('layouts.dashboard.admin.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit User</h2>
                    <div class="nk-block-des">
                        <p>Edit the user ^permission for the system.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="user-name">User Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="user-name" name="name" value="{{ $user->name }}">
                                        @error('name')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="user-role">Role</label>
                                    <ul class="list-status">
                                        @foreach ($user->roles as $role)
                                            <li><em class="icon ni ni-user-circle"></em> {{ $role->name }}
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="user-permission">Permission</label>
                                    <ul class="list-status">
                                        @foreach ($user->permissions as $permission)
                                            <li><em class="icon ni ni-shield-star"></em> {{ $permission->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <form action="{{ route('users.block.permission', $user->id) }}" method="post">
                                @csrf
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="user-permission">Block Permission</label>
                                        <select class="form-select js-select2 @error('permissions') is-invalid @enderror"
                                            id="role-permissions" name="permissions[]"
                                            data-placeholder="Select multiple permissions" multiple="multiple">
                                            @foreach ($user->permissions as $permission)
                                                <option value="{{ $permission->name }}"
                                                    @if ($user->hasBlockedPermission($permission->name)) selected @endif>
                                                    {{ $permission->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('permissions')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Block Permission</button>
                                        </li>
                                        <li>
                                            <a href="{{ route('users.index') }}"
                                                class="btn btn-lg btn-outline-secondary">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>

                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        @endsection
