@extends('dashboard.layouts.app')

@section('content')
<div class="nk-content-body">
    <div class="content-page wide-md m-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm mx-auto">
            <div class="nk-block-head-content text-center">
                <h2 class="nk-block-title fw-normal">{{$chapter->title}}</h2>
                <div class="nk-block-des">
                    <p class="lead">{{$chapter->novel->title}}</p>
                    <p class="text-soft ff-italic">Chapter - {{$chapter->number}}</p>
                    {{-- status --}}
                    <div class="badge badge-dim badge-custom badge-pill" style="background-color: #f0ad4e; color: #fff;">
                        {{$chapter->status}}
                    </div>

                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <div class="card-inner card-inner-xl">
                    <div class="entry">
                        {{$chapter->content}}
                    </div>
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div><!-- .content-page -->
</div>
@endsection