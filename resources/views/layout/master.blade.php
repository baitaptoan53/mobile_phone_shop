<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Phone Shop</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" type="text/css">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    {{-- reponsive --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" type="text/css">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    {{-- Scrollbar Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">



</head>

<body class="main-layout ">
    <!-- header -->
    @include('layout.header')
    <!-- end header -->
    @yield('content')

    @include('layout.footer')
    <!-- Javascript files-->
    <script src={{ asset('js/jquery.min.js') }}></script>
    <script src={{ asset('js/popper.min.js') }}></script>
    <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('js/jquery-3.0.0.min.js') }}></script>
    <script src={{ asset('js/plugin.js') }}></script>
    <!-- sidebar -->
    <script src={{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <script src={{ asset('js/custom.js') }}></script>
    <!-- javascript -->
    <script src={{ asset('js/owl.carousel.js') }}></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
