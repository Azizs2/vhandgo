@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <link rel="shortcut icon" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="57x57" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//img/favicon//ms-icon-144x144.png"> --}}

        <title>Lupa Password | Vhango</title>
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
                    <div id="reset-form">
                        <div class="outline-card">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form id="form-reset" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <input type="hidden" name="sb_token_csrf" value="758fc01b0fdfcdd7543032d607c3948d" />

                                <h1 class="mb-4">Lupa password?</h1>
                                <p class="text-center">Kami akan mengirimkan email untuk reset password Anda</p>
                                <div class="form-group">
                                    <label>Email</label>
                                    {{-- <input type="email" name="email" id="email" class="form-control" /> --}}
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="forget-pwd text-danger" id="error-email"></span>
                                </div>
                                <button id="button-reset" type="button" disabled class="btn btn-success mb-4"
                                    style="background: #68457F">Reset password</button>
                            </form>
                        </div>
                    </div>

                    <div id="reset-info" class="d-none">
                        <div class="outline-card">
                            <h1 class="mb-4">Cek email Anda</h1>
                            <p class="text-center">Kami telah mengirimkan email ke <b id="email-user"></b></p><br>
                            <p class="text-center"><b>Klik link verifikasi</b> yang ada di email tersebut untuk reset
                                password</p><br>
                            <p class="text-center">Jika tidak ada di inbox cek di folder spam/promotion</p>
                        </div>
                        <div class="outline-card primary-outline-card info-outline-card text-center">
                            <a href="{{ url('login') }}" class="text-dark"><u>Kembali ke halaman login</u></a>
                        </div>
                    </div>
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
            if ($('#email').val()) {
                $('#button-reset').removeAttr('disabled');
            }

            $('#email').on('keyup change input', function(e) {
                $('#button-reset').attr('disabled', 'disabled');
                if (IsEmail(this.value) == false) {
                    $('#error-email').html('Mohon diisi dengan email yang valid');
                } else {
                    $('#error-email').html('');
                    if (this.value) {
                        $('#button-reset').removeAttr('disabled');
                    }
                }
            });

            $('input').on('keypress', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    if (IsEmail($('#email').val()) == false) {
                        $('#error-email').html('Mohon diisi dengan email yang valid');
                        return;
                    }
                    if ($('#email').val() == '') {
                        $('#button-reset').attr('disabled', 'disabled');
                    }
                    jQuery(this).blur();
                    jQuery('#button-reset').focus().click();
                }
            });

            $('#button-reset').click(function(e) {
                e.preventDefault();
                $('input').attr('readonly', 'readonly');
                $('.alert').addClass('d-none');
                $('#error-email').html('');
                $('#error-password').html('');
                $('#button-reset').attr('disabled', 'disabled');
                $('#button-reset').append('<i id="spinner" class="fa fa-spinner fa-spin"></i>');
                $.ajax({
                    type: 'POST',
                    url: 'https://sociabuzz.com/proaccount/auth/send_reset_password',
                    data: $('#form-reset').serialize(),
                    success: function(data) {
                        email = $('#email').val();
                        $('input').removeAttr('readonly');
                        $('#button-reset').removeAttr('disabled');
                        $('#spinner').remove();
                        $('input[name="sb_token_csrf"]').val(data.csrf_hash);
                        if (data.success) {
                            $('#email').val('');
                            $('#reset-form').addClass('d-none');
                            $('#reset-info').removeClass('d-none');
                            $('#email-user').html(email);
                        } else {
                            $('#error-email').html(Object.values(data.errors));
                        }
                    }
                });
            });
        </script>
    </body>

    </html>
@endsection
