@props(['novel', 'chapters', 'view'])

{{-- novel card --}}
<a href="{{ route('novel.show',$novel->slug) }}" >                             
    <div>
        <img src="{{ asset('images/novel.webp') }}" alt="novel" class="img-fluid rounded">
    </div>
    <div class="">
        <div class="title text-truncate h4">{{ $novel->title }}</div>
        <div class="overflow-hidden">
            <div class="">
                <em class="icon ni ni-book-read"></em> {{ $novel->chapters->where('status','published')->count() }} Chapters
            </div>
            <div class="">
                <em class="icon ni ni-eye"></em> {{ $novel->chapters->sum('views') }} Views
            </div>
        </div>
    </div>
</a>