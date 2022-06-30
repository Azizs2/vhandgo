@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <link rel="shortcut icon" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon.ico" /> --}}
        {{-- <link rel="apple-touch-icon" sizes="57x57" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-57x57.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="60x60" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-60x60.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="72x72" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-72x72.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="76x76" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-76x76.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="114x114" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-114x114.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="120x120" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-120x120.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="144x144" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-144x144.png"> --}}
        {{-- <link rel="apple-touch-icon" sizes="152x152" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon//ms-icon-144x144.png"> --}}

        <title>Login | Vhango</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//auth/css/main.css" />
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
                    <div class="outline-card">
                        <form action="{{ route('login') }}" method="POST" id="form-login">
                            @csrf
                            <input type="hidden" name="sb_token_csrf" value="625f9a4fb122e4ad2d86ada17e5e952c" />
                            <h1>Login</h1>
                            <img src="{{ asset('assets/images/IMG_20220608_114410.jpg') }}" alt="" class="logo">
                            {{-- <img src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//auth/img/logo-sociabuzz-pro.png" alt="" class="logo"> --}}
                            <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=1016967261635-amlb1cplkukq0tbofe06uvvvvap7honu.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fsociabuzz.com%2Fproaccount%2Fauth%2Fgoogle&state&scope=email%20profile&approval_prompt=auto"
                                class="signupwith-btn">
                                <img src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/Google__G__Logo.svg"
                                    alt="">
                                <span>Login pakai Gmail​</span>
                            </a>
                            <div class="decorative-hline"><span>atau</span></div>
                            <div class="alert alert-danger d-none">
                                <span id="text-error">Lupa password? Reset password Anda <a
                                        href="https://sociabuzz.com/proaccount/forgot-password" class="text-white"><u>di
                                            sini</u></a></span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                {{-- <input type="email" name="email" id="email" value="" class="form-control" /> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="forget-pwd text-danger" id="error-email"></span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                {{-- <input type="password" name="password" id="password" class="form-control" /> --}}
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="forget-pwd text-danger d-block" id="error-password"></span>

                                @if (Route::has('password.request'))
                                    <a class="forget-pwd" href="{{ route('password.request') }}">
                                        <u>Lupa password?​</u>
                                    </a>
                                @endif
                            </div>
                            <button id="btn-login" type="button" style="background: #68457F" disabled
                                class="btn btn-success mb-3">Login</button>
                        </form>
                    </div>
                    <div class="signup-link">Belum pernah daftar? <a href="{{ url('register') }}">Daftar di sini​</a>
                    </div>
                    {{-- <div class="outline-card primary-outline-card info-outline-card text-center">
                            Jika Anda klien / pengguna jasa, loginnya <a href="https://sociabuzz.com/client/signin" class="text-dark"><u>di sini</u></a>.
                        </div> --}}
                </div>
            </section>
        </main>
        <!---------------- main--------------------->

        <!---------------- Footer --------------------->
        <footer class="bg-dark text-center p-5">
            <div class="footer-links">
                <a href="#" target="_blank" class="elevenpx mb-2">
                    Ketentuan Penggunaan
                </a>
                <a href="#" target="_blank" class="elevenpx mb-4">
                    Kebijakan Privasi
                </a>
            </div>
            <p class="text-secondary elevenpx mb-0">&copy; PT Inovasi Investama Indonesia</p>
        </footer>
        <!---------------- Footer --------------------->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30424380-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-30424380-1');
        </script>
        <script>
            $('form input:not(.name)').on('keyup keypress', function(e) {
                return e.which !== 32;
            });

            function IsEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!regex.test(email)) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        <script>
            if ($('#email').val() && $('#password').val()) {
                $('#btn-login').removeAttr('disabled');
            }

            $('#email').on('keyup change input', function(e) {
                $('#btn-login').attr('disabled', 'disabled');
                if (IsEmail(this.value) == false) {
                    $('#error-email').html('Mohon diisi dengan email yang valid');
                } else {
                    $('#error-email').html('');
                    if (this.value && $('#password').val()) {
                        $('#btn-login').removeAttr('disabled');
                    }
                }
            });

            $('#password').on('keyup change input', function(e) {
                $('#btn-login').attr('disabled', 'disabled');
                if (this.value.length >= 1 && this.value && $('#email').val()) {
                    $('#btn-login').removeAttr('disabled');
                }
            });

            $('input').on('keypress', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    $('#btn-login').attr('disabled', 'disabled');
                    if (IsEmail($('#email').val()) == false) {
                        $('#error-email').html('Mohon diisi dengan email yang valid');
                        return;
                    }
                    if ($('#email').val() == '' || $('#password').val() == '') {
                        $('#btn-login').attr('disabled', 'disabled');
                        return;
                    }
                    jQuery(this).blur();
                    jQuery('#btn-login').focus().click();
                }
            });

            $('#btn-login').click(function(e) {
                e.preventDefault();
                $('.alert').addClass('d-none');
                $('#error-email').html('');
                $('#error-password').html('');
                $('input').attr('readonly', 'readonly');
                $('#btn-login').attr('disabled', 'disabled');
                $('#btn-login').append('<i id="spinner" class="fa fa-spinner fa-spin"></i>');
                $.ajax({
                    type: 'POST',
                    url: 'https://sociabuzz.com/proaccount/login',
                    data: $('#form-login').serialize(),
                    success: function(data) {
                        $('input').removeAttr('readonly');
                        $('#btn-login').removeAttr('disabled');
                        if ($('#email').val() == '' || $('#password').val() == '') {
                            $('#btn-login').attr('disabled', 'disabled');
                        }
                        $('#spinner').remove();
                        $('input[name="sb_token_csrf"]').val(data.csrf_hash);
                        if (data.success) {
                            location.href = data.redirect;
                            // location.reload();
                        } else {
                            if (data.message == 'attempt') {
                                $('.alert').removeClass('d-none');
                            } else if (data.message == 'redirect') {
                                location.href = 'https://sociabuzz.com/proaccount/account-data';
                            } else if (data.message == 'email') {
                                $('#error-email').html(data.errors);
                            } else if (data.message == 'password') {
                                $('#error-password').html(data.errors);
                            } else {
                                $.each(data.errors, function(key, value) {
                                    $('#error-' + key).html(value);
                                });
                            }
                        }
                    }
                });
            });
        </script>
    </body>

</html>
@endsection
