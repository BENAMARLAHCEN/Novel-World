@props(['novel', 'chapters', 'view'])

<div>
    <div>
        <img src="{{ asset($novel->cover) }}" alt="novel" class="img-fluid rounded">
    </div>
    <div class="">
        <div class="title text-truncate h4">{{ $novel->title }}</div>
        <div class="overflow-hidden">
            @if ($chapters)
                <div class="">
                    <em class="icon ni ni-book-read"></em> {{ $novel->chapters->count() }} Chapters
                </div>
            @endif
            @if ($view)
                <div class="">
                    <em class="icon ni ni-eye"></em> {{ $novel->chapters->sum('views') }} Views
            @endif
        </div>
    </div>
</div>
