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

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <x-notification-message type="success" />
    <x-notification-message type="error" />
 
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            <!-- sidebar @s -->
            @include('dashboard.partials.sidebar')
            <!-- sidebar @e -->

            <!-- wrap @s -->
            <div class="nk-wrap ">

                <!-- main header @s -->
                @include('dashboard.partials.header')
                <!-- main header @e -->

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

                <!-- footer @s -->
                @include('dashboard.partials.footer')
                <!-- footer @e -->

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('./assets/js/sweetalert.js?ver=3.2.3') }}"></script>
    <!-- Dark Mode -->
    <script src="{{ asset('assets/js/dark-switch.js?ver=3.2.3') }}"></script>
    @yield('scripts')

</body>

</html>
