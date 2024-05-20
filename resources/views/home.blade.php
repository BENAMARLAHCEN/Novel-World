@extends('layouts.app')

@section('hero')
    <div class="header-content my-auto py-5 is-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-md-10">
                    <div class="header-caption">
                        <h1 class="header-title">Hello & Welcome to Novel World</h1>
                        <div class="header-text">
                            <p>
                                Here you can read and write your own stories. You can also read stories from other authors.
                        </div>
                        <ul class="header-action btns-inline">
                            <li><a href="register" class="btn btn-primary btn-lg"><span>Getting
                                        Started</span></a></li>
                            <li><a href="register" class="btn btn-danger btn-lg"><span>Read Stories</span></a>
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
                    <div class="card overflow-hidden p-2 bg-light">
                        <img src="{{ asset('images/header/hero.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section section-novels" id="novels">
        <div class="container">
            <div class="section-head">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="title">New Ongoing Releases</h2>
                    <a href="{{route('filter')}}" class="link">View All</a>
                </div>
            </div><!-- .section-head -->
            <div class="section-content">

                <div class="row g-gs">

                    @foreach ($ongoing as $novel)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
                            {{-- novel card --}}
                            <x-novel-card :novel="$novel" />
                        </div><!-- .col -->
                    @endforeach


                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section><!-- .section -->

    <section class="section section-completed" id="completed">
        <div class="container">
            <div class="section-head">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="title">Completed Novels</h2>
                    <a href="{{route('filter')}}" class="link">View All</a>
                </div>
            </div><!-- .section-head -->
            <div class="section-content">

                <div class="row g-gs">

                    @foreach ($completed as $novel)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
                            {{-- novel card --}}
                            <x-novel-card :novel="$novel" />
                        </div><!-- .col -->
                    @endforeach


                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section><!-- .section -->




    <section class="section section-tesimonial bg-lighter" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9 col-md-7 col-10">
                    <div class="section-head">
                        <h2 class="title">What Our Readers Say</h2>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row gx-gs gy-5">
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
                                        <a href="#">
                                            <em class="icon ni ni-link-out"></em>
                                            See Novel
                                        </a>
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



    <section class="section section-feature pb-0" id="feature">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="img-block img-block-s1 left">
                        <img src="{{ $topNovels[0]->cover }}" alt="{{$topNovels[0]->title}}">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="text-block pe-xl-5">
                        <h2 class="title">{{ $topNovels[0]->title }}</h2>
                        <p>{{ $topNovels[0]->description }}</p>
                        <div class="row g-3">
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-user"></em> {{ $topNovels[0]->user->profile->pen_name }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-calendar"></em> {{ $topNovels[0]->created_at->diffForHumans() }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                Status: {{ $topNovels[0]->status }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-book-read"></em> {{ $topNovels[0]->chapters->count() }} Chapters
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-star"></em> {{ $topNovels[0]->reviews->count() }} Reviews
                            </div>

                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-eye"></em> {{ $topNovels[0]->chapters->sum('views') }} Views
                            </div>
                            <div class=" col-6 col-md-12 ">
                                <em class="icon ni ni-tag"></em>
                                @foreach ($topNovels[0]->genres as $genre)
                                    <a href="" class="badge badge-primary btn">{{ $genre->name }}</a>
                                @endforeach

                            </div>
                        </div>
                        <ul class="btns-inline">
                            <li><a href="{{ route('novel.show', $topNovels[0]->slug) }}"
                                    class="btn btn-lg btn-primary">Read Now</a></li>
                        </ul>
                    </div><!-- .text-block -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->
    <section class="section section-feature">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="img-block img-block-s1 right">
                        <img src="{{ $topNovels[1]->cover }}" alt="{{$topNovels[1]->title}}">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="text-block pe-xl-5">
                        <h2 class="title">{{ $topNovels[1]->title }}</h2>
                        <p>{{ $topNovels[1]->description }}</p>
                        <div class="row g-3">
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-user"></em> {{ $topNovels[1]->user->profile->pen_name }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-calendar"></em> {{ $topNovels[1]->created_at->diffForHumans() }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                Status: {{ $topNovels[1]->status }}
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-book-read"></em> {{ $topNovels[1]->chapters->count() }} Chapters
                            </div>
                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-star"></em> {{ $topNovels[1]->reviews->count() }} Reviews
                            </div>

                            <div class=" col-6 col-md-6 ">
                                <em class="icon ni ni-eye"></em> {{ $topNovels[1]->chapters->sum('views') }} Views
                            </div>
                            <div class=" col col-md-12 ">
                                <em class="icon ni ni-tag"></em>
                                @foreach ($topNovels[1]->genres as $genre)
                                    <a href="" class="badge badge-primary btn">{{ $genre->name }}</a>
                                @endforeach

                            </div>
                        </div>
                        <ul class="btns-inline">
                            <li><a href="{{ route('novel.show', $topNovels[1]->slug) }}"
                                class="btn btn-lg btn-primary">Read Now</a></li>
                        </ul>
                    </div><!-- .text-block -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->


    <section class="section section-facts bg-grad-a" id="facts">
        <div class="container">
            <div class="row g-gs align-items-center">
                <div class="col-lg-5">
                    <div class="text-block is-dark pe-xl-5">
                        <h2 class="title">Why Novel World?</h2>
                        <p class="lead">An overview of Novel World - is having a huge collection of novels from different
                            authors. You can also write your own stories and share with the world.</p>
                    </div><!-- .text-block -->
                </div><!-- .col -->
                <div class="col-lg-7">
                    <div class="row text-center g-gs">
                        <div class="col-sm-4 col-6">
                            <div class="card card-full round-xl">
                                <div class="card-inner card-inner-md">
                                    <div class="h1 fw-bold text-purple">{{ $authorsCount . ' +' }}</div>
                                    <div class="h6 text-base">Authors <br> Registered</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-4 col-6">
                            <div class="card card-full round-xl">
                                <div class="card-inner card-inner-md">
                                    <div class="h1 fw-bold text-success">{{ $novelsCount . ' +' }}</div>
                                    <div class="h6 text-base">Novels <br> Published</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-4">
                            <div class="card card-full round-xl">
                                <div class="card-inner card-inner-md">
                                    <div class="h1 fw-bold text-pink">
                                        {{ $viewsCount >= 1000000 ? number_format($viewsCount / 1000000, 1) . 'M' : ($viewsCount >= 1000 ? number_format($viewsCount / 1000, 1) . 'K' : $viewsCount) }}
                                    </div>
                                    <div class="h6 text-base">Views <br> in Total</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
        <!-- <div class="nk-ovm shape-b shape-cover shape-top"></div> -->
        <div class="nk-ovm shape-b shape-cover"></div>
    </section><!-- .section -->

    <section class="section section-faq" id="faqs">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <div class="section-head">
                        <h2 class="title">Frequently Asked Questions</h2>
                        <p>Have questions about our novel-sharing platform? Find answers here. For additional queries, feel
                            free to contact us anytime.</p>
                    </div><!-- .section-head -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-s1 card card-shadow border-0 round-xl" id="accordion">
                        <div class="accordion-item">
                            <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                data-bs-target="#accordion-item-1">
                                <h6 class="title">How can I upload my novel to the platform?</h6>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse show" id="accordion-item-1" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>Authors can upload their novels through their dashboard after registering and logging
                                        in. Our platform supports uploads chapter by chapter, making it easy to manage and
                                        update your work.</p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-item-2">
                                <h6 class="title">Is there a fee to use this platform?</h6>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-2" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>Our platform is free for both readers and authors. Authors have the option to offer
                                        their novels for free or set a price, allowing them to earn from their writing.</p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-item-3">
                                <h6 class="title">How can readers interact with authors?</h6>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-3" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>Readers can leave reviews, rate novels, and participate in discussions. Our platform
                                        also facilitates direct messages and comments to foster a vibrant literary
                                        community.</p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-item-4">
                                <h6 class="title">What genres do you support?</h6>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-4" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>Our platform caters to all literary genres, from fiction and non-fiction to poetry
                                        and drama, ensuring a diverse and inclusive selection for our community.</p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-item-5">
                                <h6 class="title">How do I protect my work on the platform?</h6>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-5" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>All uploaded content is protected under copyright laws. We also provide tips and
                                        tools for copyright registration and advice on safeguarding your intellectual
                                        property.</p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                    </div><!-- accordion -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->

    <section class="section secton-cta bg-lighter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center g-0">
                        <div class="col-md-7">
                            <div class="card card-shadow round-xl bg-indigo is-dark pb-4 pb-md-0">
                                <div class="card-inner card-inner-xl">
                                    <div class="text-block">
                                        <h3 class="title">Ready to share your story?</h3>
                                        <p>Join our platform and start writing today. Share your creativity with the world
                                            and connect with readers from around the globe.</p>

                                        </ul>
                                        <ul class="btns-inline">
                                            <li><a href="/register" target="_blank" class="btn btn-xl btn-primary">Get
                                                    Started</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-5">
                            <div class="card card-shadow round-xl ms-lg-n7 ms-md-n5 mx-4 me-md-0 mt-md-0 mt-n4">
                                <div class="card-inner card-inner-lg">
                                    <div class="form-block">
                                        <div class="section-head section-head-sm">
                                            <h4 class="title">Do you have any other question?</h4>
                                        </div>
                                        <form class="form-submit">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="form-group ">
                                                        <label class="form-label" for="name">Your Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="name" placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Enter Your Email</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="email" placeholder="Enter Your Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="question">Your Question</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control no-resize" id="question" placeholder="Your Question"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <a class="btn btn-lg btn-primary" onclick="sendQuestion()">Ask
                                                        Question</a>
                                                </div>
                                            </div>
                                        </form>

                                        <script>
                                            function sendQuestion() {
                                                const name = document.getElementById('name').value;
                                                const email = document.getElementById('email').value;
                                                const question = document.getElementById('question').value;
                                                console.log(name, email, question);
                                                var data = {
                                                    name: name,
                                                    email: email,
                                                    question: question
                                                };

                                                fetch('/api/question', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'Accept': 'application/json',
                                                    },
                                                    body: JSON.stringify(data)
                                                }).then(response => {
                                                    console.log(response);
                                                    if (response.success) {
                                                        alert('Question sent successfully');
                                                    } else {
                                                        if (response.errors) {
                                                            alert(response.errors);
                                                        } else {
                                                            alert('An error occurred');

                                                        }
                                                    }
                                                }).catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->
@endsection
