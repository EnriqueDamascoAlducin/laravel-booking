<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">Admin {{ config('app.name', 'Tienda') }}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">{{ __('General') }}</li>

            <li class="sidebar-item {{ Request::segment(2) == '' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::segment(2) == 'usuarios' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('users') }}">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">{{ __('Users') }}</span>
                </a>
            </li>


            <li class="sidebar-header ">{{ __('Flights Information') }}</li>

            <li class="sidebar-item {{ Request::segment(2) == 'vuelos' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('flights.index') }}">
                    <i class="bi bi-balloon"></i>
                    <span class="align-middle">{{ __('Vuelos') }}</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::segment(2) == 'categorias' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('categories.index') }}">
                    <i class="fas fa-layer-group"></i>
                    <span class="align-middle">{{ __('Categories') }}</span>
                </a>
            </li>


            <li class="sidebar-header">{{ __('Current User') }}</li>

            <li class="sidebar-item ">

                <a class="sidebar-link" href="{{ route('profile.show') }}"
                    onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-user"></i>
                    {{ __('Profile') }}
                </a>
            </li>
            <li class="sidebar-item ">

                <a class="sidebar-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
