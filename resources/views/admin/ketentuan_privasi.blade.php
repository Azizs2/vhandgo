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

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1>Ketentuan Privasi</h1>
                        <h1> </h1>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <h5 class="margin-bottom-30">Keep in touch</h5> --}}
                    <div class="contact-text">
                        <p align="justify">Kebijakan Privasi ini (“Kebijakan Privasi”) adalah rangkaian kebijakan terkait dengan termasuk untuk menghargai dan melindungi setiap data atau informasi pribadi Pengguna situs <a href="https://www.vhandgo.com" target="_blank" rel="noopener"> https://www.vhandgo.com </a>(selanjutnya disebut sebagai “Situs”).
                        </p>
                        <p align="justify">Kebijakan Privasi ini (beserta syarat-syarat penggunaan dari situs Vhandgo sebagaimana tercantum dalam “Ketentuan Penggunaan” dan informasi lain yang tercantum di Situs) menetapkan dasar atas perolehan, pengumpulan, pengolahan, penganalisisan, penampilan, pembukaan, dan/atau segala bentuk pengelolaan yang terkait dengan data atau informasi yang Pengguna berikan kepada Vhandgo atau yang Vhandgo kumpulkan dari Pengguna, termasuk data pribadi Pengguna, baik pada saat Pengguna melakukan pendaftaran di Situs, mengakses Situs, maupun mempergunakan layanan-layanan pada Situs (selanjutnya disebut sebagai “data”).
                        </p>
                        <P align="justify">Dengan mengakses dan/atau mempergunakan layanan Vhandgo, Pengguna menyatakan bahwa setiap data Pengguna merupakan data yang benar dan sah, serta Pengguna memberikan persetujuan kepada Vhandgo untuk memperoleh, mengumpulkan, menyimpan, mengelola dan mempergunakan data tersebut sebagaimana tercantum dalam Kebijakan Privasi maupun Ketentuan Penggunaan Vhandgo.
                        </P>
                        <h5><b>A. Perolehan dan Pengumpulan Data Pengguna</b>
                        </h5>
                        <p align="justify">Vhandgo mengumpulkan data Pengguna dengan tujuan untuk memproses transaksi Pengguna, mengelola dan memperlancar proses penggunaan Situs, serta tujuan-tujuan lainnya selama diizinkan oleh peraturan perundang-undangan yang berlaku. Adapun data Pengguna yang dikumpulkan adalah sebagai berikut:
                        </p>
                        <ol type="1">
                            <li style="text-indent:15px">1. Data yang diserahkan secara mandiri oleh Pengguna, termasuk namun tidak terbatas pada data yang diserahkan pada saat Pengguna:
                                <ol type="1">
                                    <li style="text-indent:30px">1. Membuat atau memperbarui akun Vhandgo, termasuk diantaranya nama pengguna (username), alamat email, nomor telepon, password, foto, dan lain-lain;
                                    <li style="text-indent:30px">2. Menghubungi Vhandgo, termasuk melalui layanan konsumen;</li>
                                    <li style="text-indent:30px">3. Mengisi survei yang dikirimkan oleh Vhandgo atau atas nama Vhandgo;</li>
                                    <li style="text-indent:30px">4. Melakukan interaksi dengan Pengguna lainnya melalui fitur pesan, ulasan, rating, dan sebagainya;</li>
                                    <li style="text-indent:30px">5. Mempergunakan layanan-layanan pada Situs, termasuk data transaksi yang detil, diantaranya jenis, jumlah dan/atau keterangan dari jasa/produk yang dibeli, kanal pembayaran yang digunakan, jumlah transaksi, tanggal dan waktu transaksi, serta detil transaksi lainnya;</li>
                                    <li style="text-indent:30px">6. Mengisi data-data pembayaran pada saat Pengguna melakukan aktivitas transaksi pembayaran melalui Situs, termasuk namun tidak terbatas pada data rekening bank, virtual account;</li>
                                    <li style="text-indent:30px">7. Menggunakan fitur yang membutuhkan izin akses terhadap perangkat Pengguna.</li>
                                    </li>
                                </ol>
                            </li>
                            <li style="text-indent:15px">2. Data yang terekam pada saat Pengguna mempergunakan Situs, termasuk namun tidak terbatas pada:
                                <ol start="10">
                                    <li style="text-indent:30px">1.	Data lokasi riil atau perkiraannya seperti alamat IP, lokasi Wi-Fi, geo-location, dan sebagainya;</li>
                                    <li style="text-indent:30px">2.	Data berupa waktu dari setiap aktivitas Pengguna, termasuk aktivitas pendaftaran, login, transaksi, dan lain sebagainya;</li>
                                    <li style="text-indent:30px">3.	Data penggunaan atau preferensi Pengguna, diantaranya interaksi Pengguna dalam menggunakan Situs, pilihan yang disimpan, serta pengaturan yang dipilih. Data tersebut diperoleh menggunakan cookies, pixel tags, dan teknologi serupa yang menciptakan dan mempertahankan pengenal unik;</li>
                                    <li style="text-indent:30px">4.	Data perangkat, diantaranya jenis perangkat yang digunakan untuk mengakses Situs, termasuk model perangkat keras, sistem operasi dan versinya, perangkat lunak, pilihan bahasa, pengenal perangkat unik, dan/atau informasi jaringan seluler;</li>
                                    <li style="text-indent:30px">5.	Data catatan (log), diantaranya catatan pada server yang menerima data seperti alamat IP perangkat, tanggal dan waktu akses, fitur aplikasi atau laman yang dilihat, proses kerja aplikasi dan aktivitas sistem lainnya, jenis peramban, dan/atau situs atau layanan pihak ketiga yang Anda gunakan sebelum berinteraksi dengan Situs.</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                {{-- <div class="col-lg-8 col-md-6 col-sm-12">
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
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
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
