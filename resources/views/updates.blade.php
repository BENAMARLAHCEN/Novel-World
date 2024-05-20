@extends('layouts.app')

@section('content')
    <section class="section section-service" id="service">
        <div class="container">
            <div class="section-head">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="title">last updates</h2>
                </div>
            </div><!-- .section-head -->
            <div class="section-content">
                <div class="row g-gs">
                    @foreach ($novels as $novel)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset($novel->cover) }}" alt="novel" class="img-fluid rounded"
                                        style="width: 50px; height: 50px;">
                                </div>
                                <div class="col-8">
                                    <div class="title text-truncate h4">{{ $novel->title }}</div>
                                    <div class="overflow-hidden">
                                        Chapter {{ $novel->chapters[0]->number }} :
                                        {{ $novel->chapters[0]->title }}

                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection
