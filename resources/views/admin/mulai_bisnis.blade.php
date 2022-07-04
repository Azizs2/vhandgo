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
                        <a href="{{url('/welcome')}}" class="logo">
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
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        {{-- class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12" --}}
                        <h1>
                            <strong>Langkah Sederhana urun di Vhandgo</strong>
                            <br>
                            <strong></strong>
                        </h1>
                        <p>Urun dana tidak perlu rumit, siapapun bisa bergabung.</p>
                        <a href="{{url('login')}}" class="main-button-slider">Mulai Bisnis</a>
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

                        <div class="col-lg-12 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                {{-- <div class="icon">
                                    <i><img src="{{ asset('assets/images/dukungan-donasi.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                                </div> --}}
                                <h5 class="features-title">
                                    <strong>
                                        Panduan singkat cara investasi dari kami dan dapatkan penghasilan rutin dari bagi hasil bisnis yang Anda pilih.
                                    </strong>
                                </h5>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset('assets/images/image-2@2x.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">1. Daftar ke Vhandgo</h2>
                    </div>
                    <div class="left-text">
                        <p>Buat akun di Vhandgo. Cukup dengan klik daftar di tab navigasi lalu isi form pendaftaran.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">2. Lengkapi Profilmu</h2>
                    </div>
                    <div class="left-text">
                        <p>Beritahu kami tentang diri Anda. Dengan mengisi form KYC, agar kami bisa mengetahui preferensi dan memverifikasi keaslian profil untuk keamanan berinvestasi.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{asset('assets/images/image-3@2x.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset('assets/images/image-4@2x.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">3. Tunggu Verifikasi</h2>
                    </div>
                    <div class="left-text">
                        <p>Tim kami akan memverifikasi form biodata. Kami memastikan proses verifikasi dilakukan dalam 24-72 jam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">4. Pilih Bisnis</h2>
                    </div>
                    <div class="left-text">
                        <p>Pilih bisnis favorit. Bisnis sudah berjalan, lebih cepat untungnya lebih kecil risikonya.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{asset('assets/images/image-5@2x.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset('assets/images/image-6@2x.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">5. Masukan Nilai Investasi</h2>
                    </div>
                    <div class="left-text">
                        <p>Masukan nominal investasi yang diinginkan. Anda akan mendapatkan bagi hasil sesuai persentase nominal yang dimasukkan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


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
