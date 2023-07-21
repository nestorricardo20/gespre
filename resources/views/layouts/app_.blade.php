{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
       

        <!-- Fonts -->
       {{--  <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        
    {{-- </head> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
      {{--   <title>
            Metronic | Dashboard
        </title> --}}
         <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        {{-- <title>@yield('title' ) </title> --}}
            <title> {{$title}} </title>

        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
        <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/demo/demo5/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/demo/demo5/media/img/logo/favicon.ico" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>







                <body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- begin::Header -->
            <header class="m-grid__item     m-header "   >
                <div class="m-header__top">
                    <div >
                        <div class="m-stack m-stack--ver m-stack--desktop">
                            <!-- begin::Brand -->
                            <div class="m-stack__item m-brand">
                                <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                        <a href="index.html" class="m-brand__logo-wrapper"> 
                                            <img alt="" src="admin/assets/demo/demo5/media/img/logo/logo.png"/>
                                        </a>
                                    </div>

            
            @include('layouts.navigation')


            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>






<!-- begin::Footer -->
            <footer class="m-grid__item m-footer ">
                <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-footer__wrapper">
                        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                                <span class="m-footer__copyright">
                                    2023 &copy; UGEL 03 make by nrmz
                                    <!-- <a href="#" class="m-link">
                                        Keenthemes
                                    </a> -->
                                </span>
                            </div>
                           {{--  <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                                <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                About
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#"  class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Privacy
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                T&C
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Purchase
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item m-nav__item--last">
                                        <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                            <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </footer>
            
            <!-- end::Footer -->
        </div>
        

    <!-- end:: Page -->
    <!-- begin::Quick Sidebar -->
        

        <!-- end::Quick Sidebar -->         
        <!-- begin::Scroll Top -->
    
        <!-- end::Scroll Top -->            <!-- begin::Quick Nav -->

        <!-- begin::Quick Nav -->   
        <!--begin::Base Scripts -->
        <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="assets/demo/demo5/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
        <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
        <!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
        <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>