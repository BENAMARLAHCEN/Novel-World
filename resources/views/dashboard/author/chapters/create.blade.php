{{-- create new chapter with rich editor --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="">
                        <em class="icon ni ni-arrow-left"></em><span>Back to Chapters</span></a></div>
                    <h2 class="nk-block-title fw-normal">Add New Chapter</h2>
                    <div class="nk-block-des">
                        <p>Fill in the information below to create a new chapter.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    {{-- disply all errors in alert --}}
                    @include('dashboard.partials.error')
                    {{-- create new chapter form --}}
                    <div class="card-inner">
                        <form action="{{ route('author.novels.chapters.store', $novel->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label
                                " for="number">Chapter Number</label>   
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="number" name="number" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="title">Chapter Title</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="content">Chapter Content</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control" name="content" id="summernote">Hello, World!</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Add Chapter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection
# {{-- create new chapter with rich editor --}}
<!-- include summernote css/js -->
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote({
    height: 300
  });

});
</script>
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
