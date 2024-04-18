@extends('layouts.app')

@section('hero')
    <div class="header-content my-auto py-5 is-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-md-12">
                    <div class="header-caption">
                        <h1 class="header-title">My Reviews</h1>
                        
                        <div class="section-content">
                            <div class="row g-gs">
                                @foreach ($reviews as $review)
                                    <div class="col-sm-6 col-lg-4 col-xxl-3 ">
                                        <div class="review ">
                                            <div class="review-content card card-shadow round-xl">
                                                <div class="card-inner card-inner-lg ">
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
                                                        <div class="d-flex align-items-center gap-1">                                                            
                                                        <a href="{{ route('novel.show', $review->novel->slug) }}"
                                                            class="link link-primary">
                                                            <em class="icon ni ni-link-out"></em>
                                                            See Novel
                                                        </a>
                                                        @auth
                                                            @if (auth()->user()->id == $review->user_id)
                                                                <form action="{{ route('reviews.destroy', $review->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a class="btn-icon btn-icon-sm btn-icon-primary" style="cursor: pointer; color: #f00;" >
                                                                        <em class="icon ni ni-trash"></em>
                                                                    </a>
                                                                </form>  
                                                                                                                              
                                                            @endif
                                                        @endauth
                                                    </div>
                                                    </div>
                                                    <div class="review-text">
                                                        <p>{{ $review->content }}</p>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div>
                                {{ $reviews->links('pagination::simple-bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
