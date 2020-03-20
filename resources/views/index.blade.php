<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ECTI</title>

        <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        @include('layout.header')

        @yield('home')


        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        <script>
            var mySwiper = new Swiper ('.swiper-container', {
              spaceBetween: 40,
              breakpoints: {
                769: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                // 1216: { slidesPerView: 3 }
              }
            })
            var mySwiper1 = new Swiper ('.swiper-container-1', {
              spaceBetween: 40,
              breakpoints: {
                769: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1216: { slidesPerView: 4 }
              }
            })
            var mySwiper2 = new Swiper ('.swiper-container-2', {
              spaceBetween: 110,
              breakpoints: {
                769: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1216: { slidesPerView: 4 }
              }
            })


            function slide() {
              let slide = document.getElementById('slide-menu');
              slide.style.left = '0';
            }
        </script>
    </body>
</html>
