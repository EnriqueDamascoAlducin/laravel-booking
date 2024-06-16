<x-guest-layout>
    <div class="home-slider owl-carousel js-height80">
        <div class="slider-item js-height75"
            style="background-image:url({{ asset('build/bootstrap/images/banners/banner1.jpeg') }}); background-repeat: no-repeat; background-size: cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="w-100 text-center text">
                            <h2 class="text-white">Deja volar tus sueños y siente que puedes tener el cielo y la tierra
                                al alcance de un click</h2>
                            <h3 class="mb-3 text-dark h1 fw-bolder">Vuela en Globo</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-height75"
            style="background-image:url({{ asset('build/bootstrap/images/banners/banner2.jpeg') }}); background-repeat: no-repeat; background-size: cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Haz de ese momento especial un recuerdo inolvidable</h2>
                            <h5 class="mb-3 h1 fw-bold">Viaja Seguro</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-height75"
            style="background-image:url({{ asset('build/bootstrap/images/banners/banner3.jpeg') }}); background-repeat: no-repeat; background-size: cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Ponle pausa a tu vida, desconéctate de la rutina y permítete ser feliz</h2>
                            <h6 class="mb-3 h1 fw-bold">Disfruta Volando</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="features">
        <div class="card-badge ">
            <div class="container">
                <div class="card card-form shadow p-3 mb-5 bg-body card-perfomance bg-transparent border-0">
                    <form class="card-body">
                        <div class="row align-items-center flex body-card-input">
                            <div class="mb-3 col-12 col-md-3 ">
                                <select class="form-select input-perfomance" name="flight_type">
                                    <option value="">Seleccione un vuelo</option>
                                    <option>Compartido</option>
                                    <option>Privados</option>
                                    <option>Familiar</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12 col-md-3 ">
                                <button class="btn btn-light dropdown-toggle w-100 input-perfomance" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pasajeros
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Niños
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"></span>
                                            </div>
                                            <input name="kids" type="number" class="form-control" placeholder="niños"
                                                aria-label="niños" aria-describedby="basic-addon1">
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">Adultos
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2"></span>
                                            </div>
                                            <input name="adults" type="number" class="form-control" placeholder="Adultos"
                                                aria-label="Adultos" aria-describedby="basic-addon2">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3 col-12 col-md-3 ">
                                <input type="date" name="flightdate" class="form-control input-perfomance" id="flight-date"
                                    value="2024-06-02">
                            </div>
                            <div class="mb-3 col-12 col-md-3 ">
                                <button type="submit"
                                    class="btn btn-info button-reserv w-100  rounded-5">Reservar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="about" >

        <div class=" container">
            <div class="row ">
                <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-5  rounded-4">
                        <div class="feature-detail text-center">
                            <h2 class="feature-title text-white">30+</h2>
                            <h6 class="feature-info text-uppercase text-white">Pilotos Certificados</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-5  rounded-4">
                        <div class="feature-detail text-center">
                            <h2 class="feature-title text-white">20,000+</h2>
                            <h6 class="feature-info text-uppercase text-white">Vuelos</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-5  rounded-4">
                        <div class="feature-detail text-center">
                            <h2 class="feature-title text-white">Pilotos</h2>
                            <h6 class="feature-info text-uppercase text-white">Certificados</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-5  rounded-4">
                        <div class="feature-detail text-center">
                            <h2 class="feature-title text-white">50,000+</h2>
                            <h6 class="feature-info text-uppercase text-white">Clientes Sastisfechos</h6>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="carousel_se_02">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center wow fadeInUp">
                        <h1>Vuelos en Globo <b>Recomendados</b></h1>
                    </div>
                    <div class="col-md-12 px-4 pt-0">
                        <div class="owl-carousel carousel_se_02_carousel owl-theme">
                            <!-- 01 -->

                            <!-- 2 -->
                            <div class="item">
                                <div class="col-sm-12 p-2 wow fadeInUp delay-3">
                                    <div class="">
                                        <div class="product-image3 hover15">
                                            <img src="https://i0.wp.com/volarenglobo.com.mx/portalweb/wp-content/uploads/2022/01/entrega-de-anillo6-min.jpg?resize=680%2C500&ssl=1"
                                                class="img-fluid pic-1" />
                                        </div>
                                        <h4 class="mt-3">Vuelo Privado Entrega de Anillo</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="item">
                                <div class="col-sm-12 p-2 wow fadeInUp delay-4">
                                    <div class="">
                                        <div class="product-image3 hover15">
                                            <img src="https://i0.wp.com/volarenglobo.com.mx/portalweb/wp-content/uploads/2022/01/vuelo-familiar-min.jpeg?resize=680%2C500&ssl=1"
                                                class="img-fluid pic-1" />
                                        </div>
                                        <h4 class="mt-3">Vuelo Compartido</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="item">
                                <div class="col-sm-12 p-2 wow fadeInUp delay-2">
                                    <div class="">
                                        <div class="product-image3 hover15">
                                            <img src="https://i0.wp.com/volarenglobo.com.mx/portalweb/wp-content/uploads/2022/01/vuelo-cumple-min.jpeg?resize=680%2C500&ssl=1"
                                                class="img-fluid pic-1" />
                                        </div>
                                        <h4 class="mt-3">Vuelo Privado 2 Personas</h4>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- our clients -->
            </div>
        </div>
    </section>

    <section id="about" class="py-3 mt-xl-5">
        <div class="container">
            <div class="row align-items-center mt-xl-5">
                <div class="offset-md-1 col-md-5">
                    <img src="{{ asset('build/bootstrap/images/about.jpeg') }}" alt="img" class="img-fluid ">
                </div>
                <div class="col-md-5 mt-5 mt-md-0">
                    <div class="mb-3">
                        <h2 class="display-6 fw-semibold">Acerca de nosotros</h2>
                    </div>
                    <p>Somos un grupo de soñadores, nos llaman agentes de felicidad. Y estamos dispuestos a cumplir
                        tu deseo de Volar en Globo aerostático y ayudarte a darle forma a ese momento mágico que quieres
                        recrear para hacerlo
                        inolvidable para ti, tus amigos, familiares y seres queridos.</p>

                    <p>En Volar en Globo te prometemos que vivirás una aventura sorprendente. Te guiaremos en todo
                        momento, desde tu llegada, preparación de tu globo, abordaje y fin de tu aventura.</p>
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#tick-circle" class="text-secondary" />
                        </svg>
                        <p class="ps-4">¡Nuestra garantía será tu felicidad!</p>
                    </div>

                    <a href="{{ route('about') }}" class="btn btn-primary px-5 py-3 mt-4">Leer más</a>


                </div>
            </div>
        </div>
    </section>
    <section id="courses" class="mb-3">
        <div class="container">
            <script defer async src='https://cdn.trustindex.io/loader-feed.js?1f2e857299e890896576d941152'></script>

        </div>
    </section>

    <section id="testimonial" class="mb-3 ">
        <div class="container">
            <script defer async src='https://cdn.trustindex.io/loader.js?71a8a1c29b3985626b46d9d145a'></script>
        </div>
    </section>

    <section id="fast-action" class="padding-medium">

        <div class="text-center div-sep">
            <h3 class="h2 text-white">¿Estás pensando en volar?</h3><br>
            <p class="text-white">Tenemos las mejores ofertas</p><br>
            <button type="button" class="btn btn-light">ELEGIR MI VUELO</button>
        </div>
        <video width="320" height="240" autoplay>
            <source src="https://vm.tiktok.com/ZMrerPc8e/" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </section>

    @include('store.includes.general.faqs')

    <section>
        <div class="container py-5">
            <h3>Contamos con Servicio de Transporte desde Ciudad de México</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60102.22238173586!2d-98.85888322249127!3d19.696060286735275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff4f4587c24e2324!2sVOLAR%20EN%20GLOBO!5e0!3m2!1ses-419!2sar!4v1646616164225!5m2!1ses-419!2sar"
                style="border: 0px; pointer-events: none; width:100%; height:100vh" allowfullscreen=""
                loading="lazy"></iframe>
        </div>
        </div>
    </section>



</x-guest-layout>
