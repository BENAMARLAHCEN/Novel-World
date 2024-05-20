@props('chapter')

<div class= "d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        <div class="mr-3">
            <img src="{{ asset($chapter->novel->cover) }}" alt="novel" class="img-fluid rounded"
                style="width: 50px; height: 50px;">
        </div>
        <div>
            <div class="title text-truncate h4">{{ $chapter->title }}</div>
            <div class="overflow-hidden">
                <div class="">
                    <em class="icon ni ni-book-read"></em> {{ $chapter->novel->title }}
                </div>
                <div class="">
                    <em class="icon ni ni-eye"></em> {{ $chapter->views }} Views
                </div>
            </div>
        </div>
    </div>
</div>
