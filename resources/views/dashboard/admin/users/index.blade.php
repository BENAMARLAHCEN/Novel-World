{{-- users list --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if (request()->routeIs('users.index'))
                            Users
                        @endif
                        @if (request()->routeIs('users.admins'))
                            Admins
                        @endif
                        @if (request()->routeIs('users.authors'))
                            Authors
                        @endif
                        @if (request()->routeIs('users.readers'))
                            Readers
                        @endif
                    </h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $users->total() }} Users.</p>
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
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                            <div class="dropdown">
                                <a href="#" class="btn btn-xs btn-trigger btn-icon" data-toggle="dropdown"
                                    data-offset="0,5">
                                    <em
                                        class="icon ni ni
                                    @if (request()->routeIs('users.index')) ni-setting @endif
                                    @if (request()->routeIs('users.admins')) ni-admin setting @endif
                                    @if (request()->routeIs('users.authors')) ni-author setting @endif

                                    @if (request()->routeIs('users.readers')) ni-user-setting @endif
                                    "></em>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                    <ul class="link-list-plain">
                                        <li>
                                            <a href="{{ route('users.create') }}">
                                                <em class="icon ni ni ni-user-add-fill"></em><span>Add User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr
                            class="nk-tb-item
                        @if ($user->role == 'admin') bg-lighter @endif
                        @if ($user->role == 'author') bg-light @endif
                        @if ($user->role == 'reader') bg-white @endif
                        ">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid-{{ $user->id }}">
                                    <label class="custom-control-label" for="uid-{{ $user->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="user-card">
                                    @if ($user->avatar)
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}"
                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                      
                                    @else
                                        
                                    <div class="user-avatar bg-primary">
                                        <span>{{ $user->name[0] }}</span>
                                    </div>
                                    @endif
                                    <div class="user-info">
                                        <span class="tb-lead">{{ $user->name }} <span
                                                class="dot dot-success d-md-none ml-1"></span></span>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>{{ $user->email }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                @foreach ($user->roles as $role)
                                    <span class="badge badge-soft badge-primary"><em
                                            class="icon ni ni-shield-check"></em>{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-status text-success">Active</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-toggle="dropdown">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                <ul class="link-list-plain">
                                                    <li>
                                                        <a href="{{ route('users.show', $user->id) }}">
                                                            <em class="icon ni ni-eye"></em><span>View</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('users.edit', $user->id) }}">
                                                            <em class="icon ni ni-edit"></em><span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            onclick="event.preventDefault(); document.getElementById('delete-user-{{ $user->id }}').submit();">
                                                            <em class="icon ni ni-trash"></em><span>Delete</span>
                                                        </a>
                                                        <form id="delete-user-{{ $user->id }}"
                                                            action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                            style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table><!-- .nk-tb-list -->
        </div><!-- .nk-block -->
        <div class="card">
            <div class="card-inner justify-content-center">
                {{ $users->links() }}
            </div>

        </div>
    </div>
@endsection
