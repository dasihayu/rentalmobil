<nav class="flex-row p-0 navbar default-layout-navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('back/assets/images/logo.svg') }}"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('dashboard') }}"><img
                src="{{ asset('back/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="bg-transparent input-group-prepend">
                        <i class="border-0 input-group-text mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="bg-transparent border-0 form-control" placeholder="Search projects">
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">

            @include('partials.profiledash')

            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
