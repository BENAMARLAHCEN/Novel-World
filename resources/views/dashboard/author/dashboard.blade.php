@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-page-head nk-block-head-sm">
            <div class="nk-block-head-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Welcome Back!</h3>
                </div>
            </div>
        </div><!-- .nk-page-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-primary">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Novels Written</div>
                                <a href="{{ route('author.novels.index') }}" class="link link-white">See All</a>
                            </div>
                            <h5 class="fs-1 text-white">{{ auth()->user()->novels->count() }} <small
                                    class="fs-3">Novels</small></h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">
                                    {{ auth()->user()->novels->where('status', 'published')->count() }}</span>/{{ auth()->user()->novels->count() }}
                                novels published</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-warning is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Chapters Written</div>
                            </div>
                            @php
                                $chaptersTotal = 0;
                            @endphp
                            <h5 class="fs-1 text-white">
                                @foreach (auth()->user()->novels as $novel)
                                    @php
                                        $chaptersTotal += $novel->chapters->count();
                                    @endphp
                                @endforeach
                                {{ $chaptersTotal }}
                                <small class="fs-3">Chapters</small>
                            </h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">
                                    @php
                                        $publishedChapters = 0;
                                    @endphp
                                    @foreach (auth()->user()->novels as $novel)
                                        @php
                                            $publishedChapters += $novel->chapters
                                                ->where('status', 'published')
                                                ->count();
                                        @endphp
                                    @endforeach
                                    {{ $publishedChapters }}
                                </span>/{{ $chaptersTotal }} chapters published</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-info is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Views</div>
                            </div>
                            <h5 class="fs-1 text-white">
                                @php
                                    $views = 0;
                                @endphp
                                @foreach (auth()->user()->novels as $novel)
                                    @foreach ($novel->chapters as $chapter)
                                        @php
                                            $views += $chapter->views;
                                        @endphp
                                    @endforeach
                                @endforeach
                                {{ $views }} <small class="fs-3">Views</small>
                            </h5>

                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">
                                    @php
                                        $rewiews = 0;
                                    @endphp
                                    @foreach (auth()->user()->novels as $novel)
                                        @php
                                            $rewiews += $novel->reviews->count();
                                        @endphp
                                    @endforeach
                                    {{ $rewiews }}
                                </span> reviews</div>

                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-danger is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Novels in trash</div>
                                <a href="{{ route('author.novels.trash') }}" class="link link-white">See All</a>
                            </div>
                            {{-- get all author trash novel using softdelete --}}
                            <h5 class="fs-1 text-white">{{ auth()->user()->novels()->onlyTrashed()->count() }} <small
                                    class="fs-3">Novels</small></h5>

                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Popular Templates</h4>
                </div>
                <div class="nk-block-head-content">
                    <a href="html/copywriter/templates.html" class="link">Explore All</a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                @foreach ($reviews as $review)
                    <div class="col-sm-6 col-xxl-3">
                        <div class="card card-full">
                            <div class="card-inner ">
                                <div class="text-warning fs-2 mb-2">
                                    @for ($i = 0; $i < $review->rating; $i++)
                                        <em class="icon ni ni-star-fill"></em>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $review->rating; $i++)
                                        <em class="icon ni ni-star"></em>
                                    @endfor
                                </div>
                                <p>{{ $review->content }}</p>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                @endforeach
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Top Chapters</h4>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('author.novels.index') }}" class="link"><span>See All Novels</span> <em
                            class="icon ni ni-chevron-right"></em></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-all">
                                    <label class="custom-control-label" for="did-all"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col">
                                <h6 class="overline-title">Novel</h6>
                            </th>
                            <th class="nk-tb-col">
                                <h6 class="overline-title">Title</h6>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <h6 class="overline-title">Number</h6>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <h6 class="overline-title">Created At</h6>
                            </th>
                            <th class="nk-tb-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chapters as $chapter)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="did-01">
                                        <label class="custom-control-label" for="did-01"></label>
                                    </div>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="caption-text">{{ $chapter->novel->title }}</div>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="caption-text">{{ $chapter->title }}</div>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <div class="badge badge-dim bg-dark rounded-pill">{{ $chapter->number }}</div>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <div class="sub-text">
                                        <div>{{ $chapter->created_at }}</div>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-end">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-trigger me-n1" type="button"
                                            data-bs-toggle="dropdown">
                                            <em class="icon ni ni-more-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-content">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-eye"></em><span>View
                                                                Document</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><em
                                                                class="icon ni ni-edit"></em><span>Rename</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-trash"></em><span>Move to
                                                                Trash</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr><!-- .nk-tb-item -->
                        @endforeach                        
                    </tbody>
                </table>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection
