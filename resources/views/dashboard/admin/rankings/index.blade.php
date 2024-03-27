@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title"> Rankings</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $rankings->count() }} Rankings.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="{{ route('rankings.create') }}" class="btn btn-primary">
                                <em class="icon ni ni-plus"></em><span>Add Ranking</span>
                            </a>
                        </li>
                    </ul>
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
                        <th class="nk-tb-col"><span class="sub-text">Ranking Name</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Novels</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rankings as $ranking)
                        <tr class="nk-tb-item ranking-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input ranking-checkbox"
                                        id="pid-{{ $ranking->id }}">
                                    <label class="custom-control-label" for="pid-{{ $ranking->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="user-card">
                                    <div class="user-avatar bg-primary">
                                        <span>{{ $ranking->name[0] }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="tb-lead">{{ $ranking->name }} <span
                                                class="dot dot-success d-md-none ml-1"></span></span>
                                    </div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span>{{ $ranking->novels->count() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $ranking->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden"><a href="{{ route('rankings.show', $ranking->id) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="View Ranking"> <em class="icon ni ni-eye"></em></a></li>
                                    <li class="nk-tb-action-hidden"><a href="{{ route('rankings.edit', $ranking->id) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="Edit Ranking"> <em class="icon ni ni-edit-alt-fill"></em></a></li>
                                    <li class="nk-tb-action-hidden">
                                        <form action="{{ route('rankings.destroy', $ranking->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-trigger btn-icon delete"
                                                data-toggle="tooltip" data-placement="top" title="Delete Ranking">
                                                <em class="icon ni ni-trash-fill"></em>
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <div class="drodown me-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('rankings.show', $ranking->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>View Ranking</span></a>
                                                    </li>
                                                    <li><a href="{{ route('rankings.edit', $ranking->id) }}"><em
                                                                class="icon ni ni-edit-alt-fill"></em><span>Edit
                                                                Ranking</span></a></li>
                                                    <li>
                                                        <form action="{{ route('rankings.destroy', $ranking->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn delete"><em
                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                    Status</span></button>
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
        </div><!-- .nk-block -->
    </div>
@endsection
