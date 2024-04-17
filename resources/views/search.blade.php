<div class="row g-gs">
    @foreach ($novels as $novel)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <x-novel-card :novel="$novel" />
        </div><!-- .col -->
    @endforeach
</div><!-- .row -->
{{-- next page and previous page --}}

<div class="row g-2 g-md-3">
    @if ($novels->previousPageUrl())
        <div class="col-md-6">
            <button  class="btn btn-primary w-100" id="previous">Previous</button>
        </div>
    @endif
    @if ($novels->nextPageUrl())
        <div class="col-md-6">
            <button onclick="nextPage()" class="btn btn-primary w-100" id="next">Next</button>
        </div>
    @endif
</div>
