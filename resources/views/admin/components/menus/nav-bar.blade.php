<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle" style="margin-left: 1rem ">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="{{ route('profile.show') }}" 
                    data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="{{ route('profile.show') }}" >
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF"
                        class="avatar img-fluid rounded me-1" alt="{{ Auth::user()->name }}" />
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
