@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        Novel / <strong class="text-primary small">{{ $novel->title }}</strong>
                    </h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt d-none d-sm-block">
                                    <a href="{{ route('author.novels.chapters', ['id' => $novel->id]) }}"
                                        class="btn btn-primary">Show Chapters</a>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <a href="{{ route('author.novels.index') }}" class="btn btn-white btn-light">Back to
                                        Novel List</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="card product-card">
                    <div class="product-thumb">
                        <img class="card-img-top" src="{{ asset('storage/app/') }}{{$novel->cover}}" alt="">

                        <ul class="product-badges">
                            <li><span class="badge badge-primary">Ongoing</span></li>
                        </ul>
                        <div class="card-inner text-center">
                            <ul class="product-tags">
                                @foreach ($novel->genres as $genre)
                                    <li><a href="#" class="badge badge-dim badge-light">{{ $genre->name }}</a></li>
                                @endforeach
                            </ul>
                            </ul>
                            <h5 class="product-title">{{ $novel->title }}</h5>
                            <div class="product-excrept text-soft text-center">
                                <p>{{ $novel->description }}</p>
                                <div class="d-flex text-warning justify-content-center">
                                    @for ($i = 0; $i <  $novel->reviews->avg('rating');$i++)
                                        <div><em class="icon ni ni-star"></em></div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="nk-block nk-block-lg">
                    <div class="card card-stretch">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" href="#novel-info" data-bs-toggle="tab">
                                    <em class="icon ni ni-info"></em><span> Info </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#novel-review"><em
                                        class="icon ni ni-thumbs-up"></em><span>Review</span> </a>
                            </li>
                            <li class="nav-item nav-item-trigger">
                                <a href="{{ route('author.novels.edit', ['id' => $novel->id]) }}"
                                    class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                                <form action="{{ route('author.novels.destroy', ['id' => $novel->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-icon btn-trigger"><em
                                            class="icon ni ni-trash"></em></button>
                                </form>
                                {{-- view chapter --}}
                                <a href="{{ route('author.novels.chapters.create', ['id' => $novel->id]) }}"
                                    class="btn btn-icon btn-trigger"><em class="icon ni ni-plus"></em></a>

                            </li>
                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="novel-info">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">Novel Information</h5>
                                            </div>
                                        </div>

                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Title</span>
                                                    <span class="profile-ud-value">{{ $novel->title }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Language</span>
                                                    <span class="profile-ud-value">{{ $novel->language }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Author</span>
                                                    <span
                                                        class="profile-ud-value">{{ $novel->user->profile->pen_name }}</span>
                                                </div>
                                            </div>

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Status</span>
                                                    <span class="profile-ud-value">{{ $novel->status }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Age Rating</span>
                                                    <span class="profile-ud-value">{{ $novel->age_rating }}</span>
                                                </div>
                                            </div>

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Views</span>
                                                    <span
                                                        class="profile-ud-value">{{ $novel->chapters->sum('views') }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Created At</span>
                                                    <span
                                                        class="profile-ud-value">{{ $novel->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Updated At</span>
                                                    <span
                                                        class="profile-ud-value">{{ $novel->updated_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <div class="nk-divider divider md"></div>


                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Description</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="bq-note">
                                            <div class="bq-note-item">
                                                <div class="bq-note-text">
                                                    <p>{{ $novel->description }}</p>
                                                </div>
                                            </div><!-- .bq-note-item -->
                                        </div><!-- .bq-note -->
                                    </div><!-- .nk-block -->
                                </div>
                                <div class="tab-pane" id="novel-review">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">Novel Review</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($novel->reviews as $review)
                                                <div class="col-md-6 mt-2">
                                                    <div class="card">
                                                        <div class="kanban-item">
                                                            <div class="kanban-item-title">
                                                                <h6 class="text-warning d-flex">
                                                                    @for ($i = 0; $i < 5 - $review->rating; $i++)
                                                                        <div><em class="icon ni ni-star"></em>
                                                                        </div>
                                                                    @endfor
                                                                </h6>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown">
                                                                        <div class="user-avatar-group">
                                                                            <div class="user-avatar xs bg-danger">
                                                                                <span>V</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                                                            <li>
                                                                                <div class="user-card">
                                                                                    <div class="user-avatar sm bg-danger">
                                                                                        <span>VL</span>
                                                                                    </div>
                                                                                    <div class="user-name">
                                                                                        <span class="tb-lead">Victoria
                                                                                            Lynch</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="kanban-item-text">
                                                                <p>{{ $review->content }}</p>
                                                            </div>
                                                            <div class="kanban-item-meta">
                                                                <div><em
                                                                        class="icon ni ni-calendar"></em><span>{{ $review->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
