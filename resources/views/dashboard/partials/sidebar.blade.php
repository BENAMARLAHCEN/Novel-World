<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo2x.png')}} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('images/logo-dark.png')}}" srcset="{{asset('images/logo-dark2x.png')}} 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{asset('images/logo-small.png')}}" srcset="{{asset('images/logo-small2x.png')}} 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('statistic')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Applications</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            {{-- icon ni ni-inbox-fill --}}
                            <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                            <span class="nk-menu-text">Novels</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('novels.index')}}" class="nk-menu-link"><span class="nk-menu-text">New Novels</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('novels.published')}}" class="nk-menu-link"><span class="nk-menu-text">Published Novels</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('novels.rejected')}}" class="nk-menu-link"><span class="nk-menu-text">Rejected Novels</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Chapters</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('chapters.index')}}" class="nk-menu-link"><span class="nk-menu-text">New Chapters</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('chapters.published')}}" class="nk-menu-link"><span class="nk-menu-text">Published Chapters</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('chapters.rejected')}}" class="nk-menu-link"><span class="nk-menu-text">Rejected Chapters</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">User Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('users.index')}}" class="nk-menu-link"><span class="nk-menu-text">User List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('users.admins')}}" class="nk-menu-link"><span class="nk-menu-text">Admins list</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('users.authors')}}" class="nk-menu-link"><span class="nk-menu-text">Authors list</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('users.readers')}}" class="nk-menu-link"><span class="nk-menu-text">Readers list</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Settings</h6>
                    </li><!-- .nk-menu-heading -->

                    <li class="nk-menu-item">
                        <a href="{{route('roles.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-star"></em></span>
                            <span class="nk-menu-text">Role</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('status.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-flag-fill"></em></span>
                            <span class="nk-menu-text">Status</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('rankings.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tag-alt-fill"></em></span>
                            <span class="nk-menu-text">Ranking</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>