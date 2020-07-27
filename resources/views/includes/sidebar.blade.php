<div class="app-sidebar sidebar-shadow ">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li>
                    <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Home
                    </a>
                </li>

                <li
                    class="{{ (Route::is('facebook_interest') ? 'mm-active' : '' || Route::is('facebook_token')) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph2"></i>
                        Facebook
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul
                        class="{{ (Route::is('facebook_interest') ? 'mm-collapse mm-show' : '' || Route::is('facebook_token')) ? 'mm-collapse mm-show' : '' }}">
                        <li>
                            <a href="{{ url('/facebook/interest') }}"
                                class="{{ Route::is('facebook_interest') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Facebook Ads
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/facebook/token') }}"
                                class="{{ Route::is('facebook_token') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon">
                                </i>Facebook Token
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="{{ Route::is('users_list') ? 'mm-active' : '' || Route::is('users_edit') ? 'mm-active' : '' || Route::is('user_create') ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="{{ Route::is('users_list') ? 'mm-collapse mm-show' : '' || Route::is('users_edit') ? 'mm-collapse mm-show' : '' || Route::is('user_create') ? 'mm-collapse mm-show' : '' }}" >
                        <li>
                            <a href="{{ url('/users') }}" class="{{ Route::is('users_list') ? 'mm-active' : '' || Route::is('users_edit') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon">
                                </i>Users List
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/user/create') }}"
                                class="{{ Route::is('user_create') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon">
                                </i>Create User
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
