@extends('dashboard.layouts.app')

@section('content')
<div class="nk-content-body">
    <div class="components-preview wide-md mx-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><a class="back-to" href="{{route('author.novels.index')}}"><em class="icon ni ni-arrow-left"></em><span>Novels</span></a></div>
                <h2 class="nk-block-title fw-normal" style="font-size: 2.5rem;">Create New Novel</h2>
                <div class="nk-block-des">
                    <p class="lead">Fill in the required information to create a new novel.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">
            <div class="card card-bordered">
                <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="#" id="stepper-create-project">
                    <div class="row g-0 col-sep col-sep-md col-sep-xl">
                        <div class="col-md-4 col-xl-4">
                            <div class="card-inner">
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Step 1: Basic Information</h6>
                                    </div>
                                    <div class="data-item" data-toggle="data-item" data-target="basic-information">
                                        <div class="data-col">
                                            <span class="data-label">Basic Information</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-toggle="data-item" data-target="cover-photo">
                                        <div class="data-col">
                                            <span class="data-label">Cover Photo</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-toggle="data-item" data-target="description">
                                        <div class="data-col">
                                            <span class="data-label">Description</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-toggle="data-item" data-target="tags">
                                        <div class="data-col">
                                            <span class="data-label">Tags</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-toggle="data-item" data-target="publish">
                                        <div class="data-col">
                                            <span class="data-label">Publish</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-8">
                            <div class="card-inner">
                                <div class="nk-data data-list">
                                    <div class="data-item" id="basic-information">
                                        <div class="data-head">
                                            <h6 class="overline-title">Step 1: Basic Information</h6>
                                        </div>
                                        <div class="data-intro">
                                            <h3>Basic Information</h3>
                                            <p>Fill in the basic information of your novel.</p>
                                        </div>
                                        <div class="data-wrap">
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Title</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <input type="text" class="input-bordered" name="title" placeholder="Enter the title of your novel">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Genre</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <select class="form-select form-select-sm" data-search="on" data-placeholder="Select a genre" name="genre_id">
                                                            <option value="0">Select a genre</option>
                                                            {{-- @foreach ($genres as $genre)
                                                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Language</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <select class="form-select form-select-sm" data-search="on" data-placeholder="Select a language" name="language_id">
                                                            <option value="0">Select a language</option>
                                                            {{-- @foreach ($languages as $language)
                                                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Author</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <input type="text" class="input-bordered" name="author" placeholder="Enter the author of the novel">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Status</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <select class="form-select form-select-sm" data-search="on" data-placeholder="Select a status" name="status">
                                                            <option value="0">Select a status</option>
                                                            <option value="1">Ongoing</option>
                                                            <option value="2">Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data-item" id="cover-photo">
                                        <div class="data-head">
                                            <h6 class="overline-title">Step 2: Cover Photo</h6>
                                        </div>
                                        <div class="data-intro">
                                            <h3>Cover Photo</h3>
                                            <p>Upload the cover photo of your novel.</p>
                                        </div>
                                        <div class="data-wrap">
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Cover Photo</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data-item" id="description">
                                        <div class="data-head">
                                            <h6 class="overline-title">Step 3: Description</h6>
                                        </div>
                                        <div class="data-intro">
                                            <h3>Description</h3>
                                            <p>Write a description of your novel.</p>
                                        </div>
                                        <div class="data-wrap">
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Description</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <textarea class="form-control" name="description" rows="5" placeholder="Write a description of your novel"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data-item" id="tags">
                                        <div class="data-head">
                                            <h6 class="overline-title">Step 4: Tags</h6>
                                        </div>
                                        <div class="data-intro">
                                            <h3>Tags</h3>
                                            <p>Add tags to your novel.</p>
                                        </div>
                                        <div class="data-wrap">
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Tags</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <input type="text" class="input-bordered" name="tags" placeholder="Add tags to your novel">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data-item" id="publish">
                                        <div class="data-head">
                                            <h6 class="overline-title">Step 5: Publish</h6>
                                        </div>
                                        <div class="data-intro">
                                            <h3>Publish</h3>
                                            <p>Publish your novel.</p>
                                        </div>
                                        <div class="data-wrap">
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <label class="data-item-label">Publish</label>
                                                </div>
                                                <div class="data-col data-col-end">
                                                    <div class="data-item-input">
                                                        <button type="submit" class="btn btn-primary">Publish</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .nk-block -->
    </div><!-- .components-preview -->
</div>
@endsection