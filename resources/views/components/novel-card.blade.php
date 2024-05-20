@props(['novel', 'chapters', 'view'])

{{-- novel card --}}
<a href="{{ route('novel.show', $novel->slug) }}">
    <div>
        <img src="{{ $novel->cover }}" alt="novel" class="img-fluid rounded">
    </div>
</a>
<div class="">
    <a href="{{ route('novel.show', $novel->slug) }}">
        <div class="title text-truncate h4">{{ $novel->title }}</div>
    </a>
    <div class="overflow-hidden">
        <div class="">
            <em class="icon ni ni-book-read"></em> {{ $novel->chapters->where('status', 'published')->count() }} Chapters
        </div>
        <div class="">
            <em class="icon ni ni-eye"></em> {{ $novel->chapters->sum('views') }} Views
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="review-rating rating rating-sm">
                <ul class="rating-stars">
                    @for ($i = 0; $i < $novel->reviews->avg('rating'); $i++)
                        <li><em class="icon ni ni-star-fill"></em></li>
                    @endfor
                    @for ($i = 0; $i < 5 - $novel->reviews->avg('rating'); $i++)
                        <li><em class="icon ni ni-star"></em></li>
                    @endfor
                </ul>
                <div class="rating-text">({{ $novel->reviews->count() }})</div>
            </div>
            
            @auth
            <div id="favorite{{$novel->id}}" >
                @if (auth()->user()->favorites->contains('id', $novel->id))        
                <a class="btn btn-icon btn-icon-sm btn-icon-primary" data-novel-id="{{ $novel->id }}" onclick="disfavorite({{$novel->id}}) "id="fav{{$novel->id}}">
                    <em class="icon ni ni-heart-fill"></em>
                </a>
                @else
                <a class="btn btn-icon btn-icon-sm btn-icon-primary" data-novel-id="{{ $novel->id }}" onclick="favorite({{$novel->id}})"id="fav{{$novel->id}}">
                    <em class="icon ni ni-heart"></em>
                </a>
                @endif
            </div>
            @endauth
        </div>
    </div>
</div>
