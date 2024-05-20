@extends('layouts.app')


@section('hero')
    <div class="header-content my-auto py-3 is-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="header-img mb-4">
                        <img src="{{ $novel->cover }}" alt="hero" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="">
                        <h1 style="font-size: 2rem;">{{ $novel->title }}</h1>
                        <div style="font-size: 1.2rem; margin-bottom: 1rem; color: #edecec;  font-weight: 500;">
                            Author: <span>{{ $novel->user->profile->pen_name }}</span>
                        </div>
                        <div class="header-text">
                            <p>{{ $novel->description }}</p>
                        </div>
                        <div class="row g-3 mb-2">
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-user"></em> {{ $novel->user->profile->pen_name }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-calendar"></em> {{ $novel->created_at->diffForHumans() }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                Status: {{ $novel->status }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-book-read"></em> {{ $novel->chapters->count() }} Chapters
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-star"></em> {{ $novel->reviews->count() }} Reviews
                            </div>

                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-eye"></em> {{ $novel->chapters->sum('views') }} Views
                            </div>
                            {{-- languege --}}
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-flag"></em> {{ $novel->language }}
                            </div>
                            {{-- age rating --}}
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-tag"></em>Age Rating : {{ $novel->age_rating }}
                            </div>
                            <div class=" col col-md-12 ">
                                <em class="icon ni ni-tag"></em>Geners :
                                @foreach ($novel->genres as $genre)
                                    <a href="" class="badge badge-primary btn">{{ $genre->name }}</a>
                                @endforeach

                            </div>
                        </div>


                        <ul class="header-action btns-inline mt-2">

                            <button type="submit" class="btn btn-outline-danger btn-lg" onclick="document.getElementById('favorite{{$novel->id}}').click()">
                                <div id="favorite{{$novel->id}}" >
                                    @auth
                                        @if (auth()->user()->favorites->contains('id', $novel->id))
                                            <a class="btn btn-icon btn-icon-sm btn-icon-primary"
                                                data-novel-id="{{ $novel->id }}"
                                                onclick="disfavorite({{ $novel->id }})"
                                                >
                                                <em class="icon ni ni-heart-fill"></em>
                                            </a>
                                        @else
                                            <a class="btn btn-icon btn-icon-sm btn-icon-primary"
                                                data-novel-id="{{ $novel->id }}" onclick="favorite({{ $novel->id }})">
                                                <em class="icon ni ni heart"></em>
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-icon btn-icon-sm btn-icon-primary">
                                            <em class="icon ni ni-heart"></em>
                                        </a>
                                    @endauth
                                </div>
                                {{-- <em class="icon ni ni-heart"></em> --}}
                                <span>Add to Favorite</span>
                            </button>
                            </li>

                        </ul>
                    </div><!-- .header-caption -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-content -->

    <div class="header-image mb-n5 mb-sm-n6 mb-md-n7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card overflow-hidden p-2 bg-light " style="border-radius: 10px;">
                        <div class="">
                            <ul class="w-100" style="list-style: none; padding: 0; max-height: 400px; overflow-y: auto;">

                                @foreach ($chapters as $chapter)
                                    <li>
                                        <a href="{{ route('chapter.show', [$novel->slug, $chapter->number]) }}"
                                            class="w-100 d-flex align-items-center border-bottom justify-content-between py-2 px-1 mb-1"
                                            style="background-color: #f1f1f1; border-radius: 5px; color: #000;">
                                            <div>
                                                chapter {{ $chapter->number }} :
                                                {{ $chapter->title }}
                                            </div>

                                            <div>
                                                <em class="icon ni ni-eye"></em> <span>{{ $chapter->views }} Views</span>
                                                {{ $chapter->created_at->diffForHumans() }}
                                            </div>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="section section-tesimonial bg-lighter" id="reviews">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <div class="section-head">
                        <h2 class="title">What Our Readers Say</h2>
                    </div>
                </div><!-- .col -->
                @role('reader')
                <div class="">
                    <div class="section-head">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Write a Review</button>
                    </div>

                </div><!-- .col -->
                @endrole
            </div><!-- .row -->
            <div class="row gx-gs ">
                @foreach ($reviews as $review)
                    <div class="col-lg-4 col-md-6">
                        <div class="review">
                            <div class="review-content card card-shadow round-xl">
                                <div class="card-inner card-inner-lg">
                                    <div class="d-flex align-items-center gap-2 mb-3">

                                        <div class="user-avatar bg-primary">
                                            <span>{{ $review->user->name[0] }}</span>
                                        </div>
                                        <h6 class="title">{{ $review->user->name }}</h6>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="review-rating rating rating-sm">
                                            <ul class="rating-stars">
                                                @for ($i = 0; $i < $review->rating; $i++)
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                @endfor
                                                @for ($i = 0; $i < 5 - $review->rating; $i++)
                                                    <li><em class="icon ni ni-star"></em></li>
                                                @endfor
                                            </ul>
                                            <div class="rating-text">({{ $review->rating }}/5)</div>
                                        </div>

                                    </div>
                                    <div class="review-text">
                                        <p>{{ $review->content }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-brand">
                                <img src="{{ asset('images/brand/brand-a.png') }}" alt="">
                            </div>
                        </div><!-- .review -->
                    </div><!-- .col -->
                @endforeach
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->

    @role('reader')
    <!-- Modal Form -->
    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Write a Review</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reviews.store') }}" method="post" class="form-validate is-alter">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="rating">Rating</label>
                            <div class="form-control-wrap">
                                <select class="form-select form-control form-control-lg" id="rating" required
                                    name="rating">
                                    <option value="1">1 Star</option>
                                    <option value="2">2 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="5">5 Stars</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="review">Review</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control form-control-lg" id="review" required name="content"
                                    placeholder="Write your review here" rows="5"> </textarea>
                            </div>
                        </div>
                        <input type="hidden" name="novel_id" value="{{ $novel->id }}">

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Submit Review</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Review will be posted after admin approval</span>
                </div>
            </div>
        </div>
    </div>
    @endrole
@endsection
