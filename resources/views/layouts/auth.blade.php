<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}">
    <!-- Page Title  -->
    <title>Novel World</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.2.3') }}">
    @yield('style')
</head>

<body class="nk-body npc-default pg-auth">
    <x-notification-message type="success" />
    <x-notification-message type="error" />
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.svg"
                                    srcset="./images/logo2x.svg 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.svg"
                                    srcset="./images/logo-dark2x.svg 2x" alt="logo-dark">
                            </a>
                        </div>
                        @yield('content')
                    </div><!-- .nk-block -->
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">

                            <div class="nk-block-content text-center text-lg-left">
                                <p class="text-soft">Copyright &copy; World Novel 2024 - All Rights Reserved, Developed
                                    by <a href="https://github.com/BENAMARLAHCEN/Novel-World" target="_blank">Lahcen</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('./assets/js/sweetalert.js?ver=3.2.3') }}"></script>
    @yield('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function switchDarkMode() {
                if (localStorage.getItem("darkMode") === 'true') {
                    document.body.classList.add('dark-mode');
                } else {
                    document.body.classList.remove('dark-mode');
                }
            }

            switchDarkMode();
        });

    </script>
</body>

</html>
