@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit Role</h2>
                    <div class="nk-block-des">
                        <p>Edit role information and submit to update role.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('roles.update', $role->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="role-name">Role Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="role-name" name="name" value="{{ $role->name }}">
                                        </div>
                                        @error('name')
                                            <span class="invalid text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="role-permissions">Permissions</label>
                                        <div class="form-control-wrap">
                                            <select
                                                class="form-select js-select2 @error('permissions') is-invalid @enderror"
                                                id="role-permissions" name="permissions[]"
                                                data-placeholder="Select multiple permissions" multiple="multiple">
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->id }}"
                                                        {{ in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                        {{ $permission->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('permissions')
                                                <span class="invalid text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Role</button>
                                        </li>
                                        <li>
                                            <a href="{{ route('roles.index') }}"
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
