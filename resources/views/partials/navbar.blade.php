<header class="header has-header-main-s1 bg-grad-a mb-5 mb-sm-6 mb-md-7" id="home">
    <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
        <div class="container header-container">
            <div class="header-wrap">
                <div class="header-logo">
                    <a href="/" class="logo-link">
                        <img class="logo-light logo-img" src="/images/logo.svg" srcset="/images/logo2x.svg 2x"
                            alt="logo">
                        <img class="logo-dark logo-img" src="/images/logo-dark.svg" srcset="/images/logo-dark2x.svg 2x"
                            alt="logo-dark">
                    </a>
                </div>
                <div class=" d-flex gap-2 gap-md-4 align-items-center px-3">
                    <div>
                        <a class="dark-switch" href="#"><em class="icon ni ni-moon"></em></a>
                    </div>
                    <div class="header-toggle">
                        <button class="menu-toggler" data-target="mainNav">
                            <em class="menu-on icon ni ni-menu"></em>
                            <em class="menu-off icon ni ni-cross"></em>
                        </button>
                    </div><!-- .header-nav-toggle -->
                    <nav class="header-menu" data-content="mainNav">
                        <ul class="menu-list ms-lg-auto">
                            <li class="menu-item"><a href="/" class="menu-link nav-link">Home</a></li>
                            <li class="menu-item"><a href="/filter" class="menu-link nav-link">Filter</a>
                            </li>
                            @role('admin')
                                <li class="menu-item"><a href="{{ route('statistic') }}"
                                        class="menu-link nav-link">Dashboard</a></li>
                            @endrole
                            @role('author')
                                <li class="menu-item"><a href="{{ route('author.dashboard') }}"
                                        class="menu-link nav-link">WorkSpace</a></li>
                            @endrole

                            @if (\Request::routeIs('home'))
                                <li class="menu-item"><a href="#novels" class="menu-link nav-link">Novel</a>
                                </li>
                                <li class="menu-item"><a href="#reviews" class="menu-link nav-link">Reviews</a>
                                </li>
                                <li class="menu-item"><a href="#faqs" class="menu-link nav-link">Faqs</a></li>
                                <li class="menu-item"><a href="#footer" class="menu-link nav-link">Contact</a>
                                </li>
                            @endif


                        </ul>
                        @guest

                            <ul class="menu-btns">
                                <li>
                                    <a href="/login" class="btn btn-primary btn-lg">Login</a>
                                </li>
                            </ul>
                        @endguest
                    </nav><!-- .nk-nav-menu -->
                    @auth
                        <div class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">

                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        @role('admin', 'author')
                                            <li><a href="{{ route('profile') }}"><em
                                                        class="icon ni ni-setting-alt"></em><span>Account
                                                        Setting</span></a>
                                            </li>
                                        @endrole

                                        <li><a
                                                href="
                                        @role('admin', 'author')
                                            {{ route('profile') }}
                                        @else
                                            {{ route('profile.show') }}
                                        @endrole
                                        "><em
                                                    class="icon ni ni-user-alt"></em><span>View
                                                    Profile</span></a></li>
                                        @role('reader')
                                            <li><a href="{{ route('favorites.index') }}"><em
                                                        class="icon ni ni-heart"></em><span>Favorite</span></a></li>

                                            <li><a href="{{ route('reviews.index') }}"><em
                                                        class="icon ni ni-star"></em><span>Review</span></a></li>
                                        @endrole
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em
                                                    class="icon ni ni-signout"></em><span>Sign out</span></a>
                                            <form action="{{ route('logout') }}" method="post" id="logout-form"
                                                class="logout">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>

                                {{-- be author form --}}
                                @if (!auth()->user()->hasRole('author'))
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li>
                                                <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('author-form').submit();">
                                                <em class="icon ni ni-user-add"></em><span>Be Author</span></a>
                                                <form action="{{ route('author.request') }}" method="post" id="author-form">
                                                    @csrf
                                                </form>
                                            </li>

                                        </ul>
                                    </div>
                                @endrole
                        </div>
                    </div>
                @endauth

            </div>
        </div><!-- .header-warp-->
    </div><!-- .container-->
</div><!-- .header-main-->
@yield('hero')
</header><!-- .header -->
