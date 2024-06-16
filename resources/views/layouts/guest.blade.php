<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Volar en globo @yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="icon" href="{{ asset('build/bootstrap/images/logo.ico')}}" type="image/x-icon">

</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('build/bootstrap/icomoon/icomoon.css')}}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('build/bootstrap/css/vendor.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('build/bootstrap/style.css')}}">

<link rel="stylesheet" href="{{ asset('build/bootstrap/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('build/bootstrap/css/owl.theme.default.min.css')}}">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="{{ asset('build/assets/icons/fontawesome/css/all.css') }}"  rel="stylesheet" >

</head>

<body class=''>
        @include('store.includes.svgs')
        <div class="preloader-wrapper">
            <div class="preloader">
            </div>
        </div>
        @include('store.includes.minicart')
        @include('store.includes.menus.top-socials')
        @include('store.includes.menus.main')

        
        <main>
            {{ $slot }}
        </main>

        @include('store.includes.menus.footer-menu')
        @include('store.includes.menus.copy-right')




  <script src="{{ asset('build/bootstrap/js/jquery-1.11.0.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="{{ asset('build/bootstrap/js/plugins.js')}}"></script>
  <script src="{{ asset('build/bootstrap/js/script.js')}}"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

  
  <script src="{{ asset('build/bootstrap/js/popper.js')}}"></script>
  <script src="{{ asset('build/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('build/bootstrap/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('build/bootstrap/js/main.js')}}"></script>

  <!-- Código de instalación Cliengo para volarenglobo.com.mx -->
  
  <script type="text/javascript">
  /**(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/60ba992370c31f002a203578/60ba992570c31f002a20357b.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();
  */</script>
</body>

</html>