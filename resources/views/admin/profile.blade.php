@extends('layouts.admin')
@section('header, Profile')

@section('css')
{{-- css --}}
@endsection

@section('content')
<div class="welcome-area" id="welcome">
    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>
                        <strong>Your Account</strong>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<body>
    <input type="hidden" name="sb_token_csrf" value="beb74b34e4e13c18202e97896d0eb5a6" />
    <!--  -->
    <style>
        .link-size {
            font-size: 0.875rem!important;
        }
        .talent-name-edit {
            font-size: 1.5rem!important;
        }
        .rounded-traktir{
                width: 50px;
                height: 50px;
                -webkit-border-radius: 50px;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 50px;
                -moz-background-clip: padding;
                border-radius: 50px;
                background-clip: padding-box;
                float: left;
                background-size: cover;
                background-position: center center;
        }
    </style>
</body>
<!-- profile img edit popup start-->

<div class="modal fade pr-0" id="js--edit-profileImg-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profileImg-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="edit-profileImg modal-dialog mx-auto" role="document">
        <div class="modal-content shadow">
            <div class="modal-header-custom text-right">
                <button type="button" class="close pr-3 pt-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-secondary">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4 pb-4 pt-0">
            <!-- profile img image  form start -->
                <form action="https://sociabuzz.com/proaccount/tribe/settings/192416" class="mb-0 mx-auto" id="profileImg-edit-form" method="post" accept-charset="utf-8">
                    <input type="hidden" name="sb_token_csrf" value="beb74b34e4e13c18202e97896d0eb5a6" />
                    <div class="form-group custom-file-wrap mb-4 mt-2">

                        <div id="js--profileImg-upload-crop" class="center-block"></div>

                        <label class="custom-file input-content-font d-inline rounded border border-dark  mr-2 px-3 py-2" id="js--profileImg-input-label" for="js--profileImg-edit-input">
                            Choose file
                        </label>

                        <span class="js--file-name input-content-font d-inline-block mt-3 mb-1">No file selected.</span>
                        <p class="small text-light-gray my-2">
                            Hanya format jpg, jpeg, png | Max 1MB | Min width 320px
                        </p>
                        <input type="file" accept=".jpg,.png,.jpeg" name="cover-input" id="js--profileImg-edit-input"
                            class="d-none w-25 custom-file-input">
                    </div>

                    <button id="js--profileImg-crop-btn"
                        class="btn text-white bg-success rounded p-2 btn-block font-weight-bolder mb-0">
                        Simpan
                    </button>
                </form>                    <!-- cover image  form end -->
            </div>
        </div>
    </div>
</div>
<!-- cover edit popup start-->
<div class="modal fade pr-0" id="js--edit-cover-modal" tabindex="-1" role="dialog" aria-labelledby="edit-cover-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="edit-cover modal-dialog w-75 mx-auto" role="document">
        <div id="js--edit-cover-modal_content" class="modal-content shadow">
        </div>
    </div>
</div>
<!-- cover edit popup end-->
<!-- main section start -->
<main>
    <!--tribe start -->
    <section class="profile-edit container-fluid custom-container mb-5 mx-auto p-0 w-50 rounded border">
        <div class="profile-edit-header content-header">
            <img src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//files/profile/influencer/azizsyaiful/azizsyaiful16_.png" id="js--cover-image-pre" class="cover-img w-100" alt="cover image">
            <button id="cover_image" class="label-image-pro cover-edit-btn btn btn-primary py-0 px-3 rounded" data-toggle="modal" data-target="#js--edit-cover-modal">
                <p class="small mb-0">Edit</p>
            </button>
        </div>

        <div class="card-body text-center">
            <div class="profile-edit-item mb-5">
                <div class="talent-img-edit mb-3 mt-2 mt-sm-0">
                    <img class="rounded-circle  w-25" src="https://sociabuzz.s3.ap-southeast-1.amazonaws.com//files/profile/influencer/azizsyaiful/azizsyaiful9.png" alt="talent picture"
                    id="js--profileImg-image-pre" />
                    <button class="talent-img-edit-btn btn btn-primary py-0 px-3 rounded" data-toggle="modal" data-target="#js--edit-profileImg-modal">
                        <p class="small mb-0">Edit</p>
                    </button>
                </div>
                <p class="talent-name-edit font-weight-bolder mb-2" style="overflow-wrap: anywhere;">
                    Syaiful Aziz
                </p>
                <button class="talent-name-edit-btn btn btn-outline-primary py-0 px-3 rounded" data-toggle="modal"
                    data-target="#js--edit-name-modal">
                    <p class="small mb-0">Edit</p>
                </button>
            </div>

            <div class="form-group mb-5">
                <p for="sort-desc" class="text-left font-weight-bold mb-1">
                    Deskripsi singkat
                </p>
                <input type="text" class="form-control" value="" maxlength="100" name="tribe_profile_profesi" id="tribe_profile_profesi">
                <p  class="text-light-gray small mb-0 text-right">
                    <span id="counter_tribe_profile_profesi">0</span> / 100
                </p>
            </div>

            <!-- button group  -->
            <div class="button-list w-auto mx-auto text-align-center mb-5">
                <button class="big-button btn bg-success text-white p-2 mb-2 mx-auto btn-block font-weight-bolder rounded" data-toggle="modal" data-target="#js--edit-give-support-modal"></button>
                <div class="custom-form-group mb-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="mr-2 input-content-font ">Off</span>
                        <div class="custom-control custom-switch ">
                            <input type="checkbox" checked class="custom-control-input" id="show_button_dukungan">
                            <label class="custom-control-label mr-1" for="show_button_dukungan"></label>
                        </div>
                        <span class="mr-2 input-content-font">On</span>
                        <button class="btn btn-outline-primary py-0 px-3 rounded" data-toggle="modal" data-target="#js--edit-give-support-modal">
                            <p class="small mb-0">Edit</p>
                        </button>
                    </div>
                </div>

                <button class="big-button btn bg-primary text-white btn-treat p-2 mb-2 mx-auto btn-block font-weight-bolder rounded" data-toggle="modal" data-target="#js--edit-give-treat-modal">Kopi</button>
                <div class="custom-form-group">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="mr-2 input-content-font ">Off</span>
                        <div class="custom-control custom-switch ">
                            <input type="checkbox" class="custom-control-input"  id="show_button_traktir">
                            <label class="custom-control-label mr-1" for="show_button_traktir"></label>
                        </div>
                        <span class="mr-2 input-content-font">On</span>
                        <button class="btn btn-outline-primary py-0 px-3 rounded" data-toggle="modal"
                            data-target="#js--edit-give-treat-modal">
                            <p class="small mb-0">Edit</p>
                        </button>
                    </div>
                </div>
            </div>

            <!-- thanks to supporter -->
            <div class="form-group mb-5">
                <p for="thanks-input" class="text-left font-weight-bold mb-1">
                    Pesan terima kasih untuk pendukung
                </p>
                <input type="text" class="form-control" value="" maxlength="100" name="message_thanks" id="message_thanks">
                <p class="text-light-gray text-left small mb-0">
                    Pesan akan dibaca pendukung setelah melakukan pembayaran |
                    <span class="text-right" id="counter_message_thanks">0</span> / 100
                </p>
            </div>

            <!-- About Profile Name -->
            <div class="form-group mb-4 text-left">
                <p class="font-weight-bold mb-1" style="overflow-wrap: anywhere;">
                    Tentang Syaiful Aziz
                </p>
                <textarea class="simple-editor form-control link-size" id="tribe_profile_about"  name="tribe_profile_about"></textarea>
            </div>
        </div>
    </section>
    <!-- tribe end -->

    <!--Amount accumulated start -->
    <section
        class="amount-accumulated-section container-fluid custom-container border mb-5 mx-auto w-50 p-4 rounded">
        <div class="custom-form-group mb-5">
            <p class=" font-weight-bold mb-1">
                Jumlah terkumpul
            </p>
            <div class="d-flex align-items-center">
                <div class="custom-control custom-switch ">
                    <input type="checkbox"   class="custom-control-input" id="public_show_milestone">
                    <label class="custom-control-label mr-2" for="public_show_milestone"></label>
                </div>
                <span class="mr-2 input-content-font">Tampilkan</span>
            </div>
        </div>

        <div class="form-group mb-5">
            <label for="topTenTitle" class="font-weight-bold mb-1">
                Judul
            </label>
            <input type="text" maxlength="100" value ="Jumlah terkumpul sejauh ini" class="form-control" name="public_milestone_title" id="public_milestone_title" placeholder="">
            <p  class="text-light-gray small mb-0 text-right">
                <span id="counter_public_milestone_title">27</span> / 100
            </p>
        </div>

        <div class="custom-form-group mb-5">
            <label class="font-weight-bold mb-1 w-100">
                Target
            </label>
            <div class="input-group  target">
                <div class="input-group-prepend">
                    <span class="input-group-text input-content-font" id="rp-addon">Rp</span>
                </div>
                <input type="text" maxlength="16" class="form-control" onkeyup="numberWith(this,'.')" id="public_milestone" name="public_milestone"
                    aria-label="acc-min-charge" aria-describedby="rp-addon" value="0" min="10">
            </div>
        </div>

        <!-- About Profile Name -->
        <div class="form-group mb-4">
            <p class="font-weight-bold mb-1">
                Deskripsi / tentang target
            </p>
            <textarea  onchange="test(this)" style="width:100%!important;font-size:0.875rem!important" class=" form-control" rows="3" id="public_milestone_achivement" name="public_milestone_achivement"></textarea>
        </div>
    </section>
    <!-- Amount accumulated end -->

    <!--Number of supporter start -->
    <section class="amount-accumulated-section container-fluid custom-container border mb-5 mx-auto w-50 p-4 rounded">
        <div class="custom-form-group mb-5">
            <p class=" font-weight-bold mb-1">
                Jumlah pendukung
            </p>
            <div class="d-flex align-items-center">
                <div class="custom-control custom-switch d-inline-block">
                    <input type="checkbox" class="custom-control-input"  id="jumlah_pendukung_show">
                    <label class="custom-control-label mr-2" for="jumlah_pendukung_show"></label>
                </div>
                <span class="mr-2 input-content-font">Tampilkan</span>
            </div>
        </div>

        <div class="form-group mb-5">
            <label for="js--no-supporter-top-title" class="font-weight-bold mb-1">
                Judul
            </label>
            <input type="text" maxlength="100" class="form-control" name="jumlah_pendukung_title" value="Total Pendukung" id="jumlah_pendukung_title" placeholder="">
            <p  class="text-light-gray small mb-0 text-right">
                <span id="counter_jumlah_pendukung_title">15</span> / 100
            </p>
        </div>

        <div class="custom-form-group mb-5">
            <label class="font-weight-bold mb-1 w-100">
                Target
            </label>
            <div class="input-group  target">
                <input type="text" class="form-control" id="target_jumlah_pendukung" onkeyup="numberWith(this,'.')" value ="0"name="target_jumlah_pendukung" aria-label="sup-min-charge" min="10" maxlength="7">
            </div>
        </div>

        <!-- About target -->
        <div class="form-group mb-4">
            <p class="font-weight-bold mb-1">
                Deskripsi / tentang target
            </p>
            <textarea class="form-control" style="font-size:0.875rem!important" rows="3" id ="do_something_achieve"name="do_something_achieve"></textarea>
        </div>
    </section>
    <!-- Number of supporter end -->

    <!--switch start -->
    <section class="switch-group container-fluid custom-container border mb-5 mx-auto w-50 p-4 rounded">
        <div class="custom-form-group mb-5">
            <p class=" font-weight-bold mb-1">
                Top 10 pendukung
            </p>

            <div class="d-flex align-items-center">
                <div class="custom-control custom-switch d-inline-block">
                    <input type="checkbox" checked class="custom-control-input" id="show_top_10">
                    <label class="custom-control-label mr-2" for="show_top_10"></label>
                </div>
                <span class="mr-2 input-content-font">Tampilkan</span>
            </div>
        </div>

        <div class="custom-form-group mb-0">
            <p class=" font-weight-bold mb-1">
                Pesan dari pendukung
            </p>

            <div class="d-flex align-items-center">
                <div class="custom-control custom-switch d-inline-block">
                    <input type="checkbox" checked class="custom-control-input" id="show_pesan_pendukung">
                    <label class="custom-control-label mr-2" for="show_pesan_pendukung"></label>
                </div>
                <span class="mr-2 input-content-font">Tampilkan</span>
            </div>
        </div>

    </section>
    <!-- switch end -->

    <!--link group start -->
    <section class="link-group container-fluid custom-container border mb-5 mx-auto w-50 p-4 rounded">
        <div class="link-head mb-5">
            <p class="font-weight-bold mb-1">
                Link halaman untuk terima dukungan
            </p>

            <a href=" https://sociabuzz.com/azizsyaiful/tribe" target="_blank" class="link link-size text-primary mb-1 font-weight-bold"> https://sociabuzz.com/azizsyaiful/tribe
            </a>

            <p class="small text-light-gray">
                Share link di media sosial, pasang di Bio Instagram, share via WA, dll.
            </p>
        </div>

        <div class="help-links mb-5">
            <p class="font-weight-bold mb-1">
                Pilihan link lainnya yang bisa digunakan
            </p>

            <a href=" https://sociabuzz.com/azizsyaiful/donate" target="_blank" class="link link-size d-block  text-primary mb-1">
                https://sociabuzz.com/azizsyaiful/donate
            </a>
            <a href=" https://sociabuzz.com/azizsyaiful/support" target="_blank" class="link link-size d-block text-primary mb-1">
                https://sociabuzz.com/azizsyaiful/support
            </a>
            <a href=" https://sociabuzz.com/azizsyaiful/give" target="_blank" class="link link-size d-block text-primary">
                https://sociabuzz.com/azizsyaiful/give
            </a>
        </div>

        <div class="form-group mb-5">
            <label for="js--help-link-msg" class="font-weight-bold mb-1">
                Pesan yang ingin ditampilkan di halaman terima dukungan
            </label>
            <input type="text" class="form-control" maxlength="200" value="" name="message_ajakan" id="message_ajakan">

            <p  class="text-light-gray small mb-0 text-right">
                <span id="counter_message_ajakan">0</span> / 200
            </p>
        </div>

        <div class="custom-form-group mb-4">
            <label class="font-weight-bold mb-1 w-100">
                Jumlah minimal per dukungan
            </label>
            <div class="input-group  target">
                <div class="input-group-prepend">
                    <span class="input-group-text input-content-font" id="rp-addon">Rp</span>
                </div>
                <input type="text" maxlength="8" class="form-control" id="minimum_donate" name="minimum_donate"
                    aria-label="acc-min-charge" aria-describedby="rp-addon" onkeyup="numberWithJumlah(this,'.')" value="10.000" min="10">
            </div>
            <span class="text-danger small" id="min_donate_error"></span>
        </div>

    </section>
    <!-- link group end -->

</main>
<!-- main section end -->

@endsection

@section('js')
{{-- js --}}
@endsection
