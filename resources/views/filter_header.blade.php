<!DOCTYPE html>
<!-- saved from url=(0034) -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T0HSNB1YY5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T0HSNB1YY5');
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="../../../storage/Home_files/livechatinit2.js"></script>
    <script src="../../../storage/Home_files/resources2.aspx"></script>
    <link id="mlc_chatinlie_styletag" rel="stylesheet" href="../../../storage/Home_files/chatinline.css">
    <link rel="stylesheet" href="../../../storage/Home_files/css">
    <title>{{ config('app.name', 'EVENTHES') }}</title>
    <meta name="description" content="home">
    <meta name="keywords" content="home">
    <meta property="og:title" content="Eventhes">
    <meta property="og:description" content="home">
    <meta property="og:url" content="https://eventhes.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="uploads/settings/site_logo.png">
    <meta name="twitter:title" content="Eventhes">
    <meta name="twitter:description" content="home">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="https://eventhes.com/storage/AdminLTE/fav.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://eventhes.com/storage/AdminLTE/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://eventhes.com/storage/AdminLTE/fav.png">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/style.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/vendors.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/custom.css">
    <link href="../../../storage/Home_files/css2" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/select2.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/ladda-themeless.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/sweetalert2.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/toastr.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../../storage/Home_files/font-awesome.min.css">

    <style>
        header #logo_home h1 a {
            background-image: url(../../../storage/css/site_logo.png);

        }

        header.sticky #logo_home h1 a {
            background-image: url(../../../storage/css/site_logo.png);

        }
    </style>

    <style>
        .dd-select {
            height: 50px !important;
            border: unset !important;
        }
    </style>
    <style id="css-ddslick" type="text/css">
    </style>
    <script type="text/javascript" charset="UTF-8" src="../../../storage/Home_files/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="../../../storage/Home_files/util.js"></script>
</head>
<body style="overflow: visible;">
<div class="mylivechat_inline mylivechat_template15 mylivechat_template_float_right mylivechat_template_float_top"
     style="font-family: Poppins; border-radius: 15px; min-width: 62px; height: 62px; right: 16px; top: 334px;">
</div>
<div id="preloader" style="display: none;">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<div class="layer"></div>
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                         class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    <strong>+38(099)217-5697</strong>
                </div>
                <div class="col-6">
                    <ul id="top_links" style="margin-top: -15px;">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul id="top_links" style="margin-top: 9px;">
                                <li class="nav-item">
                                @auth
                                    <li style="margin-top: -25px;">
                                        @if(Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->role_id == 3  ))
                                            <a href="/admin" target="_blank">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-speedometer2"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                                                    </svg>
                                                </i> Dashboard
                                            </a>
                                        @else
                                            <a href="/partner">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-speedometer2"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                                                    </svg>
                                                </i> Dashboard
                                            </a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-box-arrow-right"
                                                     viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                                </svg>
                                            </i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @endauth
                                    </li>
                                @endguest
                                <li class="dropdown" id="hover-dropdown">
                                    <a href="" style="text-decoration: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                        </svg> {{ __('translate.Wishlist') }}</a>
                                </li>
                            </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="" title="EVENTHES">EVENTHES</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span></span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="storage/css/site_logo.png" width="160" height="34" alt="EVENTHES">
                    </div>
                    <a href="" class="open_close" id="close_in"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                        </svg></a>
                    <ul>
                        <li class="nav-item active">
                            <a class="nav-link" href="/partner" target="_self">
                                <i  aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                    </svg></i>  {{ __('translate.Home') }}
                            </a>
                        </li>
                        <style>@media (max-width: 768px) {
                                .nav-link {
                                    height: auto !important;
                                }
                            }
                        </style>
                        <li class="nav-item" >
                            <a style="background-color: #0d6efd; height: 21px;  border-radius: 4px;" class="nav-link" href="/all" target="_self">
                                {{ __('translate.Events') }}
                            </a>
                        </li>
                        @if(Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->role_id == 3 ))
                        <li class="nav-item">
                            <a style=" height: 21px;  border-radius: 4px;" href="/admin" target="_blank"  class="btn btn-success nav-link" role="button">+ Add Events</a>
                        </li>
                        @endif
                        <li class="nav-item ">
                            <a class="nav-link" href="/faq" target="_self">
                                FAQs
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact-us" target="_self">
                                {{ __('translate.Contact Us') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('translate.Language') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/lang/en') }}">English</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/ru') }}">Русский</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/es') }}">Español</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/fr') }}">Français</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/pl') }}">Polski</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/ua') }}">Українська</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lang/de') }}">Deutsch</a></li>
                            </ul>
                        </li>
                        <style>.flag-image {
                                width: 4%;
                            }
                            @media (max-width: 767px) {
                                .flag-image {
                                    width: 15%;
                                    height: auto;
                                }
                            }</style>
                        <img src="{{ asset('storage/files/' . session('locale', config('app.locale')) . '.png') }}" alt="Flag" class="flag-image">
                    </ul>
                </div>
{{--                <ul id="top_tools">--}}
{{--                    <li>--}}
{{--                        <a href="j/" class="search-overlay-menu-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>--}}
{{--                            </svg></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </nav>
        </div>
    </div>
</header>
<!-- End Header -->
@yield('content')
<!-- Footer================================================== -->
<footer>
<div class="container">
    <div class="row">
        <div class="col-md-2 m-auto">
            <a href="">
                <img style="max-width: 100%" src="../../../storage/css/site_logo.png">
            </a>
        </div>
        <div class="col-md-4">
            <h3>{{ __('translate.Need help') }}?</h3>
            <span><a href="tel://+970599593301"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                     fill="currentColor" class="bi bi-telephone"
                                                     viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg></a>+38(099)217-5697</span><br>
            <span><a href="mailto:help@Istanbul%20Tours.com"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                  height="16" fill="currentColor"
                                                                  class="bi bi-envelope-at" viewBox="0 0 16 16">
                    <path
                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                    <path
                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg></a> support@eventhes.com</span>
        </div>
        <div class="col-md-3">
            <ul>
                <li><a href="http://eventhes.com/">{{ __('translate.Home') }}</a></li>
                <li><a href="http://eventhes.com/contact-us">{{ __('translate.Contact Us') }}</a></li>
                <li><a href="http://eventhes.com/about-us">About us</a></li>
                <li><a href="http://eventhes.com/faqs">FAQs</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <h3>Settings</h3>
            <div class="styled-select">
                <select name="lang" id="lang">
                    <option value="{{ url('/lang/en') }}" {{ App::getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    <option value="{{ url('/lang/ru') }}" {{ App::getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
                    <option value="{{ url('/lang/es') }}" {{ App::getLocale() == 'es' ? 'selected' : '' }}>Español</option>
                    <option value="{{ url('/lang/fr') }}" {{ App::getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
                    <option value="{{ url('/lang/pl') }}" {{ App::getLocale() == 'pl' ? 'selected' : '' }}>Polski</option>
                    <option value="{{ url('/lang/ua') }}" {{ App::getLocale() == 'ua' ? 'selected' : '' }}>Українська</option>
                    <option value="{{ url('/lang/de') }}" {{ App::getLocale() == 'de' ? 'selected' : '' }}>Deutsch</option>
                </select>
            </div>
            <script>
                document.getElementById('lang').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    if (selectedOption.value !== "") {
                        window.location.href = selectedOption.value;
                    }
                });
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="social_footer">
                <ul>
                    <li><a href="https://www.facebook.com/eventhes">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a></li>
                    <li><a href="https://twitter.com/corals_laraship">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-emoji-expressionless" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path
                                    d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                            </svg>
                        </a></li>
                    <li><a href="https://www.linkedin.com/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>
                        </a></li>
                    <li><a href="https://www.pinterest.com/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pinterest" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"/>
                            </svg>
                        </a></li>
                </ul>
                <p>© 2024 <a target="_blank" href="http://corals.io/" title="Corals.io">eventhes.com</a>.
                    All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
</footer>
<div id="toTop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
    </svg></div>
<div class="search-overlay-menu">
    <span class="search-overlay-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg></span>
    <form role="search" id="searchform" method="get" action="tours">
        <input value="" name="term" type="search" placeholder="search ...">
        <button type="submit" class=" ladda-button" data-style="expand-right"><span class="ladda-label">
<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></i>
</span><span class="ladda-spinner"></span></button>
    </form>
</div>
<script src="../../../storage/Home_files/jquery-3.5.1.min.js"></script>
<script src="../../../storage/Home_files/common_scripts_min.js"></script>
<script src="../../../storage/Home_files/functions.js"></script>
<script src="../../../storage/Home_files/cat_nav_mobile.js"></script>
<script>
    $('#cat_nav').mobileMenu();
</script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
<script src="storage/Home_files/jquery.ddslick.js"></script>
<script>
    $("select.ddslick").each(function () {
        $(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
