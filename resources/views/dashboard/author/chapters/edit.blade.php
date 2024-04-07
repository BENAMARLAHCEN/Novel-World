
@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="">
                        <em class="icon ni ni-arrow-left"></em><span>Back to Chapters</span></a></div>
                    <h2 class="nk-block-title fw-normal"> Edit Chapter</h2>
                    <div class="nk-block-des">
                        <p>Fill in the information below to edit the chapter.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('author.novels.chapters.update',[$novel->id, $chapter->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="number">Chapter Number</label>
                                
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="number" name="number" value="{{ $chapter->number }}" required>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label" for="title">Chapter Title</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $chapter->title }}" required>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label" for="content">Chapter Content</label>
                                <div class="form-control-wrap">
                                    <textarea class="tinymce-toolbar form-control" name="content">{{ $chapter->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Update Chapter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection

