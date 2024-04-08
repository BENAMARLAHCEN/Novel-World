<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="
                @if (auth()->user()->role == 'admin') {{ route('admin.dashboard') }}
                @elseif (auth()->user()->role == 'author')
                    {{ route('author.dashboard') }} @endif
                "
                    class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                        srcset="{{ asset('images/logo2x.png') }} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                        srcset="{{ asset('images/logo-dark2x.png') }} 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    @if (auth()->user()->hasRole('admin'))
                                        <div
                                            class="user-status 
                                        @if (auth()->user()->email_verified_at) user-status-verified @else user-status-unverified @endif
                                        ">
                                            Admin</div>
                                    @elseif (auth()->user()->hasRole('author'))
                                        <div
                                            class="user-status 
                                        @if (auth()->user()->email_verified_at) user-status-verified @else user-status-unverified @endif
                                        ">
                                            Author</div>
                                    @endif
                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    @if (auth()->user()->avatar)
                                        <div class="user-avatar bg-primary">
                                            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="">
                                        </div>
                                    @else
                                        <div class="user-avatar bg-primary">
                                            <span>{{ auth()->user()->name[0] }}</span>
                                        </div>
                                    @endif
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->name }}</span>
                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('profile')}}"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="{{route('profile')}}"><em
                                                class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
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
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
