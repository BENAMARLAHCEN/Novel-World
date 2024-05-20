@extends('dashboard.layouts.app')


@section('content')
<div class="nk-content-body">
    <div class="content-page wide-md m-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm mx-auto">
            <div class="nk-block-head-content text-center">
                <h2 class="nk-block-title fw-normal"><a href=" {{ route('author.novels.chapters', $chapter->novel->id) }}">{{$chapter->title}}</a></h2>
       
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
                    <div class="entry" id="chapter-content">
                        {!! $chapter->content !!}
                    </div>
                    <div class="font-size-controls">
                        <button class="font-size-btn" onclick="decreaseFontSize()">-</button>
                        <button class="font-size-btn" onclick="increaseFontSize()">+</button>
                    </div>
                    <script>
                        function increaseFontSize() {
                            var p = document.getElementById('chapter-content');
                            if (p.style.fontSize == "") {
                                p.style.fontSize = "20px";
                            } else {
                                p.style.fontSize = parseInt(p.style.fontSize) + 2 + "px";
                            }
                        }

                        function decreaseFontSize() {
                            var p = document.getElementById('chapter-content');
                            if (p.style.fontSize == "") {
                                p.style.fontSize = "20px";
                            } else {
                                p.style.fontSize = parseInt(p.style.fontSize) - 2 + "px";
                            }
                        }
                    </script>
                    <style>
                        .font-size-controls {
                            display: flex;
                            justify-content: center;
                            margin-top: 20px;
                        }

                        .font-size-btn {
                            background-color: #f0ad4e;
                            color: white;
                            border: none;
                            padding: 10px 20px;
                            margin: 0 10px;
                            cursor: pointer;
                        }

                    </style>
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div><!-- .content-page -->
</div>
@endsection