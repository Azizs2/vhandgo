@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign Up Client | Vhango</title>

        {{-- <link rel="shortcut icon" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon.ico" /> --}}
        <link rel="stylesheet" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//css/client/v2/bootstrap.min.css" />
        {{-- <link href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> --}}
        {{-- <link rel="stylesheet" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//css/client/v2/auth.css" />
    <link rel="stylesheet" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//css/client/v2/bootstrap.min.css'); ?>" /> --}}
        <!-- <link rel="stylesheet" href="https://sociabuzz.com/client/../assets/css/client/v2/fontawesome.min.css" /> -->
        {{-- <link href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> --}}
        <link rel="stylesheet" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//css/client/v2/auth.css" />

        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '481594882859004');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" src="https://www.facebook.com/tr?id=481594882859004&ev=PageView
        &noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QKTHG0R05D"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-QKTHG0R05D');
        </script>
    </head>

    <body>
        <!---------------- main--------------------->
        <main>
            <section class="shopweb-signup">
                <div class="container">
                    <div id="signup-form">
                        <div class="outline-card">
                            <form action="{{ route('register') }}" method="POST" id="form-register">
                                @csrf
                                {{-- <input type="hidden" name="sb_token_csrf" value="758fc01b0fdfcdd7543032d607c3948d" /> --}}
                                <h1>Daftar</h1>
                                <img src="{{ asset('assets/images/IMG_20220608_114410.jpg') }}" alt=""
                                    class="logo">
                                <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=1016967261635-amlb1cplkukq0tbofe06uvvvvap7honu.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fsociabuzz.com%2Fproaccount%2Fauth%2Fgoogle&state&scope=email%20profile&approval_prompt=auto"
                                    class="signupwith-btn">
                                    <img src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/Google__G__Logo.svg"
                                        alt="">
                                    <span>Daftar pakai Gmail​</span>
                                </a>
                                <div class="decorative-hline">
                                    <span>atau</span>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="forget-pwd text-danger" id="error-email"></span>
                                    <label>Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="my-3">
                                    <div class="custom-control custom-checkbox">
                                        <input id="newlatters" type="checkbox" name="newlatters"
                                            class="custom-control-input" />
                                        <label class="custom-control-label" for="newlatters">
                                            Terima newsletter dari Vhandgo
                                        </label>
                                    </div>
                                </div>
                                <button id="btn-register" type="submit" style="background: #68457F"
                                    class="btn btn-success">Daftar</button>
                            </form>
                            <div class="signuptc">
                                Dengan mendaftar, Anda setuju dengan
                                <a href="#" target="_blank">
                                    Ketentuan Penggunaan
                                </a>
                                dan
                                <a href="#" target="_blank">
                                    Kebijakan Privasi
                                </a>
                                yang berlaku. ​
                            </div>
                        </div>
                        <div class="signup-link">
                            Sudah pernah daftar?
                            <a href="{{ url('login') }} ">
                                Login di sini​
                            </a>
                        </div>
                        {{-- <div class="outline-card primary-outline-card info-outline-card text-center">
                            Jika Anda ingin mencari talent / jasa, daftarnya
                            <a href="https://sociabuzz.com/client/signup" class="text-dark">
                                <u>di sini</u>
                            </a>.
                        </div> --}}
                    </div>
                    <div id="signup-info" class="d-none">
                        <div class="outline-card">
                            <h1 class="mb-4">Cek email Anda</h1>
                            <p class="text-center">Kami telah mengirimkan email ke <br><b id="email-user"></b></p><br>
                            <p class="text-center"><b>Klik link verifikasi</b> yang ada di email tersebut untuk
                                konfirmasi pendaftaran</p><br>
                            <p class="text-center">Jika tidak ada di inbox cek di folder spam/promotion</p>
                        </div>
                        <div class="outline-card primary-outline-card info-outline-card text-center">
                            <a href="#" class="text-dark" id="btn-back"><u>Kembali ke halaman daftar</u></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!---------------- main--------------------->

        <!---------------- Footer --------------------->
        <footer class="bg-dark text-center p-5">
            <div class="footer-links">
                <a href="#" class="elevenpx mb-2" target="_blank"> Ketentuan Penggunaan </a>
                <a href="#" class="elevenpx mb-4" target="_blank"> Kebijakan Privasi </a>
            </div>
            <p class="text-secondary elevenpx mb-0">&copy; PT Inovasi Investama Indonesia</p>
        </footer>
        <!---------------- Footer --------------------->
        <script>
            var base_url = 'https://sociabuzz.com/client/';
        </script>
        <script src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//js/core/jquery.min.js"></script>
        <script src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//js/core/bootstrap.min.js"></script>
        <script src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//js/client/v2/jquery.loadingdotdotdot.js"></script>
        <script>
            function IsEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!regex.test(email)) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        <script src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//js/client/func/auth/signup_v2.js?v=1654660158"></script> <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30424380-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-30424380-1');
        </script>
        <!-- <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/main.js"></script>
        <script>
            $("#pullNav").load("index.html nav.navbar");
            $("#pullFooter").load("index.html footer");

            $(document).ready(function() {
                $(".venobox").venobox({
                    numeratio: true,
                    share: [],
                });
            });
        </script> -->
    </body>

    </html>
@endsection
