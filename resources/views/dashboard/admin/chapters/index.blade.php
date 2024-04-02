@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if (request()->routeIs('chapters.index'))
                            Chapters
                        @endif
                        @if (request()->routeIs('chapters.published'))
                            Published Chapters
                        @endif
                        @if (request()->routeIs('chapters.rejected'))
                            Rejected Chapters
                        @endif
                    </h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $chapters->total() }} Chapters.</p>
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
                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Novel</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Number</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Views</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>
                    @foreach ($chapters as $chapter)
                        <tr class="nk-tb-item chapter-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input chapter-checkbox"
                                        id="uid-{{ $chapter->id }}">
                                    <label class="custom-control-label" for="uid-{{ $chapter->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub text">Chapter-{{ $chapter->number }} {{ $chapter->title }}</span>
                            </td>
                            <td class="nk-tb-col  tb-col-mb">

                                <span class="tb-product">
                                    <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75"
                                        alt="" class="thumb">
                                    <span class="title">{{ $chapter->novel->title }}</span>
                                </span>
                            </td>

                            <td class="nk-tb-col tb-col-md">
                                <span class="tb-sub">{{ $chapter->status }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub">{{ $chapter->number }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub">{{ $chapter->views }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">

                                <ul class="nk-tb-actions gx-1">
                                    @if ($chapter->status != 'published')
                                        <li class="nk-tb-action-hidden">
                                            <form action="{{ route('chapters.publish', $chapter->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon accept-publish"
                                                    data-toggle="tooltip" data-placement="top">
                                                    <em class="icon ni ni-check-circle"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @endif
                                    @if ($chapter->status != 'rejected')
                                        <li class="nk-tb-action-hidden">
                                            <form action="{{ route('chapters.reject', $chapter->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon reject"
                                                    data-toggle="tooltip" data-placement="top">
                                                    <em class="icon ni ni-cross-circle"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @endif

                                    <li>
                                        <div class="drodown me-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    @if ($chapter->status != 'published')
                                                        <li>
                                                            <form action="{{ route('chapters.publish', $chapter->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-trigger btn-icon accept-publish"
                                                                    data-toggle="tooltip" data-placement="top">
                                                                    <em class="icon ni ni-check-circle"></em>Publish
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endif
                                                    @if ($chapter->status != 'rejected')
                                                        <li>
                                                            <form action="{{ route('chapters.reject', $chapter->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-trigger btn-icon reject"
                                                                    data-toggle="tooltip" data-placement="top">
                                                                    <em class="icon ni ni-cross-circle"></em>Reject
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endif
                                                    <li><a href="{{ route('chapters.show', $chapter->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>View
                                                                Chapter</span></a>
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
        <div>
            {{ $chapters->links('pagination::bootstrap-5') }}
        </div>


    </div>
@endsection
