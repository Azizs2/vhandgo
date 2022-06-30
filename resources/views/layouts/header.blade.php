<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>VHANDGO | Dashboard</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-softy-pinko.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

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
                        <a href="{{url('home')}}" class="logo">
                            <img src="{{ asset('assets/images/vhandgo.png') }}" style="height: 40px" style="width: 10px" style="center" alt="Vhandgo" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            {{-- <li class="nav-item menu-open">
                                <a href="{{url('home')}}" class="{{ request()-> is('home') ? 'active' : ''}}">Home</a>
                            </li> --}}
                            <li class="nav-item menu-open">
                                <a href="{{url('profile')}}" class="{{ request()-> is('profile') ? 'active' : ''}}">Profile</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('admins')}}" class="{{ request()-> is('admins') ? 'active' : ''}}">Admin</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('donations')}}" class="{{ request()-> is('donations') ? 'active' : ''}}">Donation</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('efforts')}}" class="{{ request()-> is('efforts') ? 'active' : ''}}">Effort</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('investasis')}}" class="{{ request()-> is('investasis') ? 'active' : ''}}">Investasi</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('supports')}}" class="{{ request()-> is('supports') ? 'active' : ''}}">Support</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{url('transactions')}}" class="{{ request()-> is('transactions') ? 'active' : ''}}">Transaction</a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
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

    <div>
        @yield('content')
    </div>

    <!-- ***** Testimonials Start ***** -->
    {{-- <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Create a free page. Spread the link. Receive support.</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>See how it works in this video</p>
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
    </section> --}}
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
    {{-- <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Complete payment method</h1>
                            <p>It's easy for anyone (in Indonesia or abroad) to provide support</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="info">
                            <p><strong>Bank Transfer</strong></p>
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
                            <p><strong>Credit Card</strong></p>
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
    </section> --}}
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    {{-- <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row ">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Can create exclusive content for members</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Can only be accessed by those who have paid/supported.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
            <div class="row justify-content-md-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{asset('assets/images/donasi-live-streaming.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section> --}}
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    {{-- <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Overlays available for live streaming</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Receive support while live streaming becomes more interactive</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row justify-content-md-center">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{asset('assets/images/donasi-live-streaming.png')}}" alt="">
                        </div>
                        <div class="blog-content">
                            <a href="#" class="main-button">More Info</a>
                        </div>
                    </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section> --}}
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
    {{-- <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Anyone can use</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>+16 billion supports have been obtained +7500 Vhandgo TRIBE users.</p>
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
                        <h5 class="features-title" style="">Creator</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/live-news.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Stremer</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/musician.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Music</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/jasa-penulis-artikel.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Writer</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/gamer.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Gamers</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/podcast.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Podcaster</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/blogger.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Bloger</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/comic-book.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Komikus</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/cosplay.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Cosplayer</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/news.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Media</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/dialogue.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Komunitas</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="features-small-item" style="background: #f2f2fe">
                        <div class="icon">
                            <i><img src="{{ asset('assets/images/charity.png') }}" style="height: 56px" style="width: 48px" alt=""></i>
                        </div>
                        <h5 class="features-title" style="">Non Profit</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
    <footer>
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
    <script src="{{asset('assets/js/custom.js')}}"></script>

    {{-- CDN Vue Js --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    {{-- CDN Axios Js --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @yield('js')
</body>

</html>
