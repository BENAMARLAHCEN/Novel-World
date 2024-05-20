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
    @yield('style')
</head>

<body class="nk-body npc-default pg-auth">
    <x-error-message />

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('partials.navbar')
            <!-- wrap @s -->
            @yield('content')
            @include('partials.footer')

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
