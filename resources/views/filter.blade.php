{{-- filter novels by genre and status and sort by title --}}

@extends('layouts.app')

@section('hero')
    <div class="header-content my-auto py-5 is-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-md-10">
                    <div class="header-caption">
                        <h1 class="header-title">Filter Novels</h1>
                        <p class="text-white">
                            Welcome to the All Novels page on Novel World! Here, you can filter novels by genre and status
                            and sort by title. We pride ourselves on a diverse collection of books, so no matter what you're
                            in the mood for, we've got you covered.
                        </p>
                        <p>
                            Explore our shelves and discover all books ranging from heartwarming romances to spine-tingling
                            tales of the paranormal. Dive into the world of werewolves and uncover their secrets or escape
                            into a billionaire's lavish lifestyle. Explore magical realms and journey through fantastical
                            lands or experience the thrill of a coming-of-age story in our YA / Teen section.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-image mb-n5 mb-sm-n6 mb-md-n7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card overflow-hidden p-2 ">
                        {{-- search input --}}


                        <div class="row g-2 g-md-3">
                            <div class="col-md-12">
                                <ul class="custom-control-group"
                                    style="list-style-type: none; max-height: 100px; overflow-y: auto;">
                                    @foreach ($genres as $genre)
                                        <li>
                                            <div class="custom-control custom-checkbox custom-control-pro no-control"
                                                id="{{ $genre->id }}">
                                                <input type="checkbox" class="custom-control-input" name="btnCheck"
                                                    id="btnCheck{{ $genre->id }}">
                                                <label class="custom-control-label" for="btnCheck{{ $genre->id }}">
                                                    {{ $genre->name }}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <div class="">
                                    <input type="text" class="form-control" placeholder="Search by title"
                                        id="searchTitle">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="">
                                    <select class="form-select" id="status">
                                        <option value="" selected disabled>Select a Status</option>
                                        <option value="All">All</option>
                                        <option value="Ongoing">Ongoing</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Hiatus">Hiatus</option>
                                        <option value="Dropped">Dropped</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2">
                                {{-- search button --}}
                                <button class="btn btn-primary w-100 center" id="searchBtn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section section-service">
        <div class="container">

            <div class="section-content" id="novels">

            </div>
        </div><!-- .container -->

    </section><!-- .section -->
@endsection

<script>
    var paginage = 1;
    document.addEventListener('DOMContentLoaded', function() {
        
        const search = document.getElementById('searchBtn');
        fetchNovels();
        search.addEventListener('click', function() {
            fetchNovels();
        });
        function fetchNovels() {
            const status = document.getElementById('status');
        const novels = document.getElementById('novels');
        const searchTitle = document.getElementById('searchTitle');
            const btnCheck = document.querySelectorAll(".checked");
            let genre = [];
            for (let i = 0; i < btnCheck.length; i++) {
                genre.push(btnCheck[i].id);
            }
            let url =
                `api/filter?titles=${searchTitle.value}&status=${status.value}&genres=${genre}&page=${paginage}`;
    
            fetch(url)
                .then(response => response.text()) // Assuming the response is plain HTML
                .then(html => {
                    novels.innerHTML = html; // Inserting the HTML directly
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    novels.innerHTML = '<p>Failed to load data. Please try again later.</p>';
                });
        };

    });

    function nextPage() {
        paginage++;
        fetchNovels();
    }

    function previousPage() {
        paginage--;
        fetchNovels();
    }
    function fetchNovels() {
        const status = document.getElementById('status');
        const novels = document.getElementById('novels');
        const searchTitle = document.getElementById('searchTitle');
            const btnCheck = document.querySelectorAll(".checked");
            let genre = [];
            for (let i = 0; i < btnCheck.length; i++) {
                genre.push(btnCheck[i].id);
            }
            let url =
                `/api/filter?titles=${searchTitle.value}&status=${status.value}&genres=${genre}&page=${paginage}`;
    
            fetch(url)
                .then(response => response.text()) // Assuming the response is plain HTML
                .then(html => {
                    novels.innerHTML = html; // Inserting the HTML directly
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    novels.innerHTML = '<p>Failed to load data. Please try again later.</p>';
                });
        };

</script>
