@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-content
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Roles</h2>
                    <div class="nk-block-des">
                        <p>Roles are used to group a number of permissions together.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title"></div>
                        <h5 class="title">Roles List</h5>
                        <div class="card-tools mb-2">
                            <ul class="card-tools">
                                <li><a href="{{ route('roles.create') }}" class="btn btn-primary"><em
                                            class="icon ni ni-plus"></em><span>Add Role</span></a></li>
                            </ul>
                        </div>
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item">
                                    <th class="nk-tb-col
                                    nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">Role</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Permissions</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col
                                        nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="uid{{ $role->id }}">
                                                <label class="custom-control-label" for="uid{{ $role->id }}"></label>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>{{ $role->name[0] }}</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">{{ $role->name }}</span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                                @foreach ($role->permissions as $permission)
                                                    <li><em class="icon ni ni-shield-star"></em> {{ $permission->name }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ route('roles.edit', $role->id) }}"><em
                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                            Role</span></a></li>
                                                                <li><a href="{{ route('roles.show', $role->id) }}"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Role</span></a></li>
                                                                <li><a href="{{ route('roles.destroy', $role->id) }}"
                                                                        onclick="event.preventDefault(); document.getElementById('delete-role-{{ $role->id }}').submit();"><em
                                                                            class="icon ni ni-trash"></em><span>Delete
                                                                            Role</span></a>
                                                                    <form id="delete-role-{{ $role->id }}"
                                                                        action="{{ route('roles.destroy', $role->id) }}"
                                                                        method="post" style="display: none;">
                                                                        @csrf
                                                                        @method('delete')
                                                                    </form>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
