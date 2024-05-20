@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title"> Novel / Chapters / {{ $novel->title }}</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $novel->chapters->count() }} Chapters.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt d-none d-sm-block">
                                    <a href="{{ route('author.novels.chapters.create', $novel->id) }}"
                                        class="btn btn-primary">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Add Chapter</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-block-tools -->
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
                        <th class="nk-tb-col"><span class="sub-text">Chapter</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Number</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Views</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($novel->chapters as $chapter)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid-{{ $chapter->id }}">
                                    <label class="custom-control-label" for="uid-{{ $chapter->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="user-card">
                                    <div class="user-avatar bg-primary">
                                        <span>{{ $chapter->title[0] }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="tb-lead">{{ $chapter->title }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <span>{{ $chapter->number }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="tb-sub">{{ $chapter->status }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub">{{ $chapter->views }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden">
                                        <a href="{{ route('author.novels.chapters.edit', [$novel->id, $chapter->id]) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="Edit">
                                            <em class="icon ni ni-edit-alt-fill"></em>
                                        </a>
                                    </li>
                                    <li class="nk-tb-action-hidden">
                                        <a href="{{ route('author.novels.chapters.show', [$novel->id, $chapter->id]) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="View">
                                            <em class="icon ni ni-eye-fill"></em>
                                        </a>
                                    </li>
                                    <li class="nk-tb-action-hidden">
                                        <form action="{{ route('author.novels.chapters.destroy', [$novel->id, $chapter->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-trigger btn-icon delete"
                                                data-toggle="tooltip" data-placement="top" title="Delete">
                                                <em class="icon ni ni-trash-fill"></em>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table><!-- .nk-tb-list -->
        </div>
    </div>
@endsection
