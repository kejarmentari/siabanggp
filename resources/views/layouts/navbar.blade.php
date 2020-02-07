<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('images/logo-horizontal.png') }}"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"
                alt="logo" /></a>
    </div>

    @php $is_guest = request()->segment(1) == 'tamu' @endphp

    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        @auth
            @if (!$is_guest)
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
            @endif
        @endauth
        @if ($is_guest)
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0 search-list-bangunan" placeholder="Cari nama bangunan">
                    </div>
                </form>
            </div>
        @endif
        <ul class="navbar-nav navbar-nav-right">
            @if ($is_guest)
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#listBangunanModal">
                        <i class="mdi mdi-home-modern menu-icon" id="fullscreen-button"></i> &nbsp;
                        Daftar Gedung
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#aboutModal">
                        <i class="mdi mdi-comment-question-outline" id="fullscreen-button"></i> &nbsp;
                        Tentang
                    </a>
                </li>
            @endif

            @auth
                @if (!$is_guest)
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{ url('tamu') }}">
                            <i class="mdi mdi-eye"></i> &nbsp;
                        </a>
                    </li>
                @endif

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{ asset('images/avatar.png') }}" alt="image user">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout mr-2 text-info"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
