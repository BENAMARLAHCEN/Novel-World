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
                        <p>You have total {{ $users->total() }}
                            @if (request()->routeIs('users.index'))
                                Users.
                            @endif
                            @if (request()->routeIs('users.admins'))
                                Admins.
                            @endif
                            @if (request()->routeIs('users.authors'))
                                Authors.
                            @endif
                            @if (request()->routeIs('users.readers'))
                                Readers.
                            @endif
                        </p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em
                                class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="more-options">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown">
                                        <a href="#"
                                            class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                            data-bs-toggle="dropdown">Role</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{ route('users.index') }}"><span>All</span></a></li>
                                                <li><a href="{{ route('users.admins') }}"><span>Admins</span></a></li>
                                                <li><a href="{{ route('users.authors') }}"><span>Authors</span></a></li>
                                                <li><a href="{{ route('users.readers') }}"><span>Readers</span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <a href=" {{ route('users.create') }}"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add User</span></a>
                                </li>
                            </ul>
                        </div>
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
                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                        @if (request()->routeIs('users.authors'))
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Pen Name</span></th>
                        @endif
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Verified</span></th>
                        <th class="nk-tb-col "><span class="sub-text">Role</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-lg">
                            <span class="sub-text">Joined</span>
                        </th>
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
                        @if ($user->hasRole('admin')) bg-lighter @endif
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
                                        <span class="tb-lead">{{ $user->name }}
                                            @if ($user->email_verified_at)
                                                <span class="dot dot-success d-md-none ml-1"></span>
                                            @else
                                                <span class="dot dot-danger d-md-none ml-1"></span>
                                            @endif
                                        </span>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                </div>
                            </td>
                            @if (request()->routeIs('users.authors'))
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $user->profile->pen_name }}</span>
                                </td>
                            @endif
                            <td class="nk-tb-col tb-col-md">
                                @if ($user->email_verified_at)
                                    <span class="tb-status text-success">Verified</span>
                                @else
                                    <span class="tb-status text-danger">Not Verified</span>
                                @endif
                            <td class="nk-tb-col">
                                @foreach ($user->roles as $role)
                                    <span class=""><em class="icon ni ni-user-fill"></em>
                                        {{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                @if ($user->banned_at)
                                    <span class="tb-status text-danger">Banned</span>
                                @else
                                    <span class="tb-status text-success">Active</span>
                                @endif
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $user->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    @if ($user->banned_at)
                                        <li class="nk-tb-action-hidden">
                                            <form action="{{ route('users.toggle-ban', $user->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon"
                                                    data-toggle="tooltip" data-placement="top" title="Unban">
                                                    <em class="icon ni ni-user-check-fill"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @else
                                        <li class="nk-tb-action-hidden">
                                            <form action="{{ route('users.toggle-ban', $user->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon"
                                                    data-toggle="tooltip" data-placement="top" title="Ban">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @endif

                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('users.show', $user->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>View Details</span></a>
                                                    </li>
                                                    <li><a href="{{ route('users.show', $user->id) }}?action=edit"><em
                                                                class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                    <li><a href="#"><em
                                                                class="icon ni ni-repeat"></em><span>Orders</span></a></li>
                                                    <li><a href="#"><em
                                                                class="icon ni ni-activity-alt"></em><span>Activities</span></a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><em
                                                                class="icon ni ni-shield-star"></em><span>Reset
                                                                Pass</span></a></li>
                                                    <li><a href="#"><em
                                                                class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
