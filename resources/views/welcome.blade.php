<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>VHANDGO</title>
    <!--SOFTY PINKOhttps://templatemo.com/tm-535-softy-pinko-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-softy-pinko.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/images/vhandgo.png') }}" style="height: 40px" style="width: 10px" style="center" alt="Vhandgo" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item menu-open"><a href="{{ url('/home') }}" class="{{ request()-> is('home') ? 'active' : ''}}">@lang('main.home')</a></li>
                                    @else
                                        <li class="nav-item menu-open"> <a href="{{ route('login') }}" class="{{ request()-> is('login') ? 'active' : ''}}">@lang('main.login')</a></li>

                                        @if (Route::has('register'))
                                            <li class="nav-item menu-open"><a href="{{ route('register') }}" class="{{ request()-> is('register') ? 'active' : ''}}">@lang('main.register')</a></li>
                                        @endif
                                    @endauth
                            @endif
                            <li class="nav-item menu-open"> <a href="{{ url('setlocale/en') }}" class="{{ Config::get('app.locale') =='en' ? 'active' : ''}}">EN</a></li>
                            <li class="nav-item menu-open"> <a href="{{ url('setlocale/id') }}" class="{{ Config::get('app.locale') =='id' ? 'active' : ''}}">ID</a></li>
                            {{-- <li><a href="#welcome" class="active">@lang('main.home')</a></li>
                            <li><a href="#work-process">@lang('main.login')</a></li>
                            <li><a href="#work-process">@lang('main.register')</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>
                            <strong>@lang('main.header_welcome')</strong>
                            <br>
                            <strong></strong>
                        </h1>
                        {{-- <p>Softy Pinko is a professional Bootstrap 4.0 theme designed by Template Mo
                            for your company at absolutely free of charge</p> --}}
                        {{-- <a href="#features" class="main-button-slider">Discover More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/followers-komunitas.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                                </div>
                                <h5 class="features-title">@lang('main.card_1')</h5>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/live-streaming.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                                </div>
                                <h5 class="features-title">@lang('main.card_2')</h5>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/penikmat-karya.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                                </div>
                                <h5 class="features-title">
                                    @lang('main.card_3')</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/dukungan-donasi.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                                </div>
                                <h5 class="features-title">@lang('main.card_4')</h5>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">@lang('main.header_2')</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>@lang('main.header_2_sub')</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row justify-content-md-center">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><iframe width="560" height="315" src="https://www.youtube.com/embed/pWX4OzyGo5w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    {{-- <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s discuss about you project</h2>
                    </div>
                    <div class="left-text">
                        <p>Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo
                            efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    {{-- <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">We can help you to grow your business</h2>
                    </div>
                    <div class="left-text">
                        <p>Aenean pretium, ipsum et porttitor auctor, metus ipsum iaculis nisi, a bibendum lectus libero
                            vitae urna. Sed id leo eu dolor luctus congue sed eget ipsum. Nunc nec luctus libero. Etiam
                            quis dolor elit.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process" style="font-style:normal">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>@lang('main.header_payment')</h1>
                            <p>@lang('main.header_payment_sub')</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="info">
                            <p><strong>@lang('main.bank_transfer')</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/bca.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/bri.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/bni.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/mandiri.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/permata.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="info">
                            <p><strong>@lang('main.credit_card')</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/visa.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                        <i><img src="{{asset('assets/images/mastercard.png')}}" style="width: 150px; hight:150px" alt="Metode Pembayaran Vhandgo TRIBE"></i>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials" style="font-style:normal">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row ">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">@lang('main.header_testi')</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>@lang('main.header_testi_sub')</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
            <div class="row justify-content-md-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img" style="height: 400px!important;">
                            <img src="{{asset('assets/images/donasi-live-streaming.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans" style="font-style:normal">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">@lang('main.header_streaming')</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>@lang('main.header_streaming_sub')</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row justify-content-md-center">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img" style="height: 400px!important;">
                            <img src="{{asset('assets/images/donasi-live-streaming.png')}}" alt="">
                        </div>
                        <div class="blog-content">
                            <a href="#" class="main-button">@lang('main.more_info')</a>
                        </div>
                    </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    {{-- <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>126</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Counter Parallax End ***** -->

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog" style="font-style:normal">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">@lang('main.header_bottom')</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>@lang('main.header_bottom_sub')</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/youtuber.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_1')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/live-news.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_2')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/musician.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_3')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/jasa-penulis-artikel.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_4')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/gamer.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_5')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/podcast.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_6')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/blogger.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_7')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/comic-book.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_8')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/cosplay.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_9')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/news.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_10')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/dialogue.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_11')</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/charity.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="font-style: normal;">@lang('main.list_12')</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    {{-- <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit
                            semper.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                            <br>auctor non lorem
                        </p>
                        <p>You are NOT allowed to re-distribute Softy Pinko template on any template collection
                            websites. Thank you.</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section> --}}
    <!-- ***** Contact Us End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer style="font-style:normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="facebook.com/vhandgo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/vhandg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://instagram.com/vhandgo.id"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://vt.tiktok.com/ZSdtRNheV/"><i class="fa fa-tiktok"></i></a></li>
                        <li><a href="https://youtube.com/channel/UCKvHA8d1AqtybHAFBjnQw8w"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright"> &copy; VHANDGO</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imgfix.min.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('assets/js/custom.j')}}s"></script>

</body>

</html>
