@extends('layouts.app')

{{-- read chapter page --}}

@section('hero')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="{{ route('novel.show', $chapter->novel->slug) }}">
                            <h2 class="nk-block-title fw-normal text-white">{{ $chapter->novel->title }}</h2>
                        </a></div>
                    <div class="nk-block-des">
                        <p>Read the chapter below.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->

            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Chapter {{ $chapter->number }} : {{ $chapter->title }}</h4>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                {!! $chapter->content !!}

                            </div><!-- .nk-block -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
                {{-- next and previous chapter --}}
                <div class="card card-bordered mt-3">
                    <div class="card-inner">
                        <div class="d-flex justify-content-between">
                            <div>
                                @if ($previousChapter)
                                    <a href="{{ route('chapter.show', [$previousChapter->novel->slug, $previousChapter->number]) }}"
                                        class="btn btn-primary">Previous
                                        Chapter</a>
                                @endif
                            </div>
                            <div>
                                @if ($nextChapter)
                                    <a href="{{ route('chapter.show', [$nextChapter->novel->slug, $nextChapter->number]) }}" class="btn btn-primary">Next
                                        Chapter</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .nk-block -->
    </div><!-- .components-preview -->
    </div>
@endsection
