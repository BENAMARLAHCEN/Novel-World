@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Roles</h2>
                        <div class="nk-block-des text-soft">
                            <p>Roles are used to group a number of permissions together.</p>
                        </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <table class="nk-tb-list is-separate nk-tb-ulist">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-all">
                                <label class="custom-control-label" for="pid-all"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Role Name</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Permissions</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Permissions list</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="nk-tb-item role-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input role-checkbox"
                                        id="pid-{{ $role->id }}">
                                    <label class="custom-control-label" for="pid-{{ $role->id }}"></label>
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
                            <td class="nk-tb-col tb-col-mb">
                                <span class="tb-sub">{{ $role->permissions->count() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <ul class="list-status">
                                    @foreach ($role->permissions as $permission)
                                        <li><em class="icon ni ni-shield-star"></em> {{ $permission->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $role->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden"><a href="{{ route('roles.edit', $role->id) }}"
                                        class="btn btn-icon btn-trigger btn-tooltip" title="edit role">
                                        <em class="icon ni ni-edit"></em></a>
                                    </li>
                                    <li class="nk-tb-action-hidden">
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-icon btn-trigger btn-tooltip delete"
                                                title="Delete Role"><em class="icon ni ni-trash"></em></button>
                                        </form>
                                    </li>
                                    <li>
                                        <div class="drodown me-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('roles.show', $role->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>View
                                                                Role</span></a></li>
                                                    <li><a href="{{ route('roles.edit', $role->id) }}"><em
                                                                class="icon ni ni-edit"></em><span>Edit
                                                                Role</span></a></li>
                                                    <li><a class="delete"
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

                            </td>

                        </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table>
        </div><!-- .nk-block -->
    </div>
@endsection



