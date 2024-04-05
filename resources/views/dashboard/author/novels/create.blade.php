@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="{{ route('author.novels.index') }}"><em
                                class="icon ni ni-arrow-left"></em><span>Novels</span></a></div>
                    <h2 class="nk-block-title fw-normal" style="font-size: 2.5rem;">Create New Novel</h2>
                    <div class="nk-block-des">
                        <p class="lead">Fill in the required information to create a new novel.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="card">
                <div class="card-inner">
                    <form action="{{ route('author.novels.store') }}" method="post" enctype="multipart/form-data"
                        class="form-validate is-alter">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fva-title">Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-lg" id="fva-title"
                                            name="title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fva-genre">Genre</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select form-control form-control-lg js-select2" id="fva-genre"
                                            name="genre" required multiple>
                                            @foreach ($genres as $genre)
                                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label " for="fva-language">Language</label>

                                    <div class="form-control-wrap">
                                        <select class="form-select form-control form-control-lg" id="fva-language"
                                            name="language" required>
                                            <option value="" selected disabled>Select a Language</option>
                                            <option value="English">English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                        </select>
                                    </div>


                                </div>
                            </div>
                            {{-- ranking --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fva-ranking">Ranking</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select form-control form-control-lg js-select2" id="fva-ranking"
                                            name="ranking" required>
                                            <option value="" selected disabled>Select a Ranking</option>
                                            @foreach ($rankings as $ranking)
                                                <option value="{{ $ranking->id }}">{{ $ranking->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="fva-status">Status</label>
                                    {{-- status :Ongoing,Completed,Hiatus,Dropped --}}
                                    <div class="form-control-wrap">
                                        <select class="form-select form-control form-control-lg" id="fva-status"
                                            name="status" required>
                                            <option value="" selected disabled>Select a Status</option>
                                            <option value="1">Ongoing</option>
                                            <option value="2">Completed</option>
                                            <option value="3">Hiatus</option>
                                            <option value="4">Dropped</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="fva-age_rating">Age Rating</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group">
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="fv-age_rating"
                                                        id="fva-age_rating-1" value="all" required>
                                                    <label class="custom-control-label" for="fva-age_rating-1">All
                                                        Ages</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="fv-age_rating"
                                                        id="fva-age_rating-2" value="13+" required>
                                                    <label class="custom-control-label" for="fva-age_rating-2">13+</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="fv-age_rating"
                                                        id="fva-age_rating-3" value="16+" required>
                                                    <label class="custom-control-label" for="fva-age_rating-3">16+</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input"
                                                        name="fv-age_rating" id="fva-age_rating-4" value="18+"
                                                        required>
                                                    <label class="custom-control-label" for="fva-age_rating-4">18+</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fva-cover">Cover</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input cover-input" id="fva-cover" name="cover" required onchange="changeCover()" accept="image/*" />
                                            <label class="custom-file-label" for="fva-cover">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <img src="" alt="" id="cover-preview" class="img-fluid rounded mt-2 cover-preview-img"
                                        style="display: none;">
                                    <style>
                                        .cover-preview-img {
                                            /* i need the image in size 3 : 4 */
                                            width: 75%;
                                            height: auto;
                                            aspect-ratio: 3/4;
                                        }
                                    </style>
                                </div>
                                <script>
                                    function changeCover() {
                                        const file = document.querySelector('.cover-input').files[0];
                                        const preview = document.getElementById('cover-preview');
                                        const reader = new FileReader();

                                        reader.addEventListener("load", function() {
                                            preview.src = reader.result;
                                            preview.style.display = "block";
                                        }, false);
                                        
                                        if (file) {
                                            const image = new Image();
                                            image.src = URL.createObjectURL(file);

                                            image.addEventListener("load", function() {
                                                const aspectRatio = image.width / image.height;
                                                if (Math.abs(aspectRatio - 0.75) > 0.01) {
                                                    alert("Please select an image with a size of 3:4");
                                                    return;
                                                }

                                                reader.readAsDataURL(file);
                                            });
                                        }
                                    }
                                </script>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="fva-description">Description</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-lg" id="fva-description" name="description" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Create Novel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .card-preview -->
        </div><!-- .components-preview -->
    </div>
@endsection
