@extends('layouts.app')

@section('hero')
    <div class="header-content my-auto py-5 is-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-md-10">
                    <div class="header-caption">
                        <h1 class="header-title">Favorite Novels</h1>
                        <p class="text-white">
                            Welcome to your favorite novels page! Here, you can view all the novels you've favorited. If you
                            have any questions or need help, please don't hesitate to reach out to us.
                        </p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="header-caption">
                        <div class="section-content">
                            <div class="row g-gs">
                                @foreach ($novels as $novel)
                                <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2 ">
                                    <x-novel-card :novel="$novel" />
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
