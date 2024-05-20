@extends('dashboard.layouts.app')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal">Dashboard</h2>
            <div class="nk-block-des">
                <p>Welcome to Novel World Admin Dashboard</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-sm-6 col-xxl-3">
                <div class="card card-full bg-primary">
                    <div class="card-inner">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="fs-6 text-white text-opacity-75 mb-0"> Total Users</div>
                            <a href="{{ route('users.index') }}" class="btn btn-icon btn-trigger btn-xs btn-icon-xs btn-outline-light">
                                <em class="icon ni ni users"></em>
                            </a>
                        </div>
                        <h5 class="fs-1 text-white">{{ $users }}</h5>
                        <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">+{{ $authors }}</span> Authors</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="card card-full bg-warning is-dark">
                    <div class="card-inner">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="fs-6 text-white text-opacity-75 mb-0"> Total Novels</div>
                            <a href="{{ route('novels.index') }}" class="btn btn-icon btn-trigger btn-xs btn-icon-xs btn-outline-light">
                                <em class="icon ni ni-book-read"></em>
                            </a>
                        </div>
                        <h5 class="fs-1 text-white">{{ $novels }}</h5>
                        <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">+{{ $genres }}</span> Genres</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="card card-full bg-info is-dark">
                    <div class="card-inner">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="fs-6 text-white text-opacity-75 mb-0">Views</div>
                        </div>
                        <h5 class="fs-1 text-white"> {{ $views }}</h5>
                        <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">+{{ $chapters }}</span> Chapters</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="card card-full bg-danger is-dark">
                    <div class="card-inner">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="fs-6 text-white text-opacity-75 mb-0">Total Reviews</div>
                        </div>
                        <h5 class="fs-1 text-white">{{ $reviews }}</h5>

                    </div>
                </div>  
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block-head">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Top 5 Novels</h4>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('novels.index') }}" class="link link-primary">View All</a>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            @foreach ($topNovels as $novel)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <x-novel-card :novel="$novel" />
                </div>
            @endforeach
        </div>
    </div><!-- .nk-block -->
                  
</div>

@endsection

