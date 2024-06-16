<nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
    <div class="container-fluid">
        <div class="main-logo d-lg-none">
            <a href="index.html">
                <img src="{{ asset('build/bootstrap/images/logo.png') }}" alt="logo" class="img-thumbnail"
                    style="max-width:40px">
            </a>
        </div>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header mt-3">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-between">
                <div class="main-logo w-25" style="max-width: 70px;">
                    <a href="/">
                        <img src="{{ asset('build/bootstrap/images/logo.png') }}" alt="logo" class="img-thumbnail"
                            style="width:100px">
                    </a>
                </div>
                <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 align-items-center" href="{{ route('home') }}" role="button"
                            id="courses" aria-expanded="false">inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                            data-bs-toggle="dropdown" aria-expanded="false">Vuelos</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                            <li><a href="about.html" class="dropdown-item">Privados<span
                                        class="badge bg-success text-white ms-2">Disponible</span></a></li>
                            <li><a href="instructors.html" class="dropdown-item">Compartidos<span
                                        class="badge bg-success text-white ms-2">Disponible</span></a></li>
                            <li><a href="cart.html" class="dropdown-item">Celebraciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 align-items-center text-warning" role="button" id="courses"
                            aria-expanded="false">Promociones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 align-items-center" href="{{ route('about') }}" role="button"
                            id="courses" aria-expanded="false">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link mx-2">Contacto</a>
                    </li>
                </ul>

                <div class="container-fluid d-lg-none">
                    <div class="d-flex  align-items-end mt-3">
                        <ul class="d-flex  align-items-center list-unstyled m-0">
                            <li>
                                @guest
                                    <a href="{{ route('login') }}" class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                            <use href="#user-circle" />
                                        </svg>
                                    </a>
                                @else
                                    <a href="{{ Auth::user()->role == 'admin' ? route('dashboard') : route('home') }}" class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                            <use href="#user-circle" />
                                        </svg>
                                    </a>
                                @endguest
                            </li>
                            <li class="">
                                <a href="#" class="me-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#shopping-bag" />
                                    </svg> </a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center">
                    <ul class="d-flex  align-items-center list-unstyled m-0">
                        <li>
                            @guest
                                <a href="{{ route('login') }}" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#user-circle" />
                                    </svg>
                                </a>
                            @else
                                <a href="{{ Auth::user()->role == 'admin' ? route('dashboard') : route('home') }}" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#user-circle" />
                                    </svg>
                                </a>
                            @endguest
                        </li>
                        <li class="">
                            <a href="#" class="ms-3" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                    <use href="#shopping-bag" />
                                </svg> </a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
