<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}">
    <!-- Page Title  -->
    <title>Novel World</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/home.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.2.3') }}">
    @yield('style')
</head>

<body class="nk-body npc-default pg-auth">
    <x-notification-message type="success" />
    <x-notification-message type="error" />

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <header class="header has-header-main-s1 bg-grad-a mb-5 mb-sm-6 mb-md-7" id="home">
                <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
                    <div class="container header-container">
                        <div class="header-wrap">
                            <div class="header-logo">
                                <a href="/" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.svg"
                                        srcset="./images/logo2x.svg 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.svg"
                                        srcset="./images/logo-dark2x.svg 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class=" d-flex gap-2 gap-md-4 align-items-center px-3">
                                <div class="header-toggle">
                                    <button class="menu-toggler" data-target="mainNav">
                                        <em class="menu-on icon ni ni-menu"></em>
                                        <em class="menu-off icon ni ni-cross"></em>
                                    </button>
                                </div><!-- .header-nav-toggle -->
                                <nav class="header-menu" data-content="mainNav">
                                    <ul class="menu-list ms-lg-auto">
                                        <li class="menu-item"><a href="#home" class="menu-link nav-link">Home</a></li>
                                        <li class="menu-item"><a href="/updates" class="menu-link nav-link">Update</a></li>
                                        <li class="menu-item"><a href="/filter" class="menu-link nav-link">Filter</a></li>
                                        <li class="menu-item"><a href="#service" class="menu-link nav-link">Novel</a>
                                        </li>
                                        <li class="menu-item"><a href="#reviews" class="menu-link nav-link">Reviews</a>
                                        </li>
                                        <li class="menu-item"><a href="#faqs" class="menu-link nav-link">Faqs</a></li>
                                    </ul>
                                    <ul class="menu-btns">
                                        <li>
                                            <a href="/login"  class="btn btn-primary btn-lg">Login</a>
                                        </li>
                                    </ul>
                                </nav><!-- .nk-nav-menu -->
                                <div class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                        
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{route('profile')}}"><em
                                                            class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                                </li>
                                                <li><a href="{{route('profile')}}"><em
                                                            class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a class="dark-switch" href="#"><em
                                                            class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
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
                                    </div>
                                </div>
                            </div>
                        </div><!-- .header-warp-->
                    </div><!-- .container-->
                </div><!-- .header-main-->
                @yield('hero')
            </header><!-- .header -->
            <!-- wrap @s -->
            @yield('content')
            <footer class="footer bg-indigo is-dark bg-lighter" id="footer">
                <div class="container">
                    <div class="row g-3 align-items-center justify-content-md-between py-4 py-md-5">
                        <div class="col-md-3">
                            <div class="footer-logo">
                                <a href="/" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.svg"
                                        srcset="./images/logo2x.svg 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.svg"
                                        srcset="./images/logo-dark2x.svg 2x" alt="logo-dark">
                                </a>
                            </div><!-- .footer-logo -->
                        </div><!-- .col -->
                        <div class="col-md-9 d-flex justify-content-md-end">
                            <ul class="link-inline gx-4">
                                <li><a href="#">How it works</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul><!-- .footer-nav -->
                        </div><!-- .col -->
                    </div>
                    <hr class="hr border-light mb-0 mt-n1">
                    <div class="row g-3 align-items-center justify-content-md-between py-4">
                        <div class="col-md-8">
                            <div class="text-base">Copyright &copy; World Novel 2024 - All Rights Reserved, Developed
                                by <a href="https://github.com/BENAMARLAHCEN/Novel-World" target="_blank">Lahcen</a></div>
                        </div><!-- .col -->
                        <div class="col-md-4 d-flex justify-content-md-end">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/lahcen.benamar.5494/"><em class="icon ni ni-facebook-f"></em></a></li>
                                <li><a href="https://github.com/BENAMARLAHCEN"><em class="icon ni ni-github"></em></a></li>
                                <li><a href="https://www.linkedin.com/in/lahcen-ben-amar-6203b4153/"><em class="icon ni ni-linkedin"></em></a></li>

                            </ul><!-- .footer-icon -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </footer><!-- .footer -->

        </div>
        <!-- main @e -->
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('assets/js/home.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('./assets/js/sweetalert.js?ver=3.2.3') }}"></script>
    <!-- Dark Mode -->
    <script src="{{ asset('assets/js/dark-switch.js?ver=3.2.3') }}"></script>    
    <script src="{{ asset('assets/js/fetch.js?ver=3.2.3') }}"></script>
    @yield('scripts')

</body>

</html>
