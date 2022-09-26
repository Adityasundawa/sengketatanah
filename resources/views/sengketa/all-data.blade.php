<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <style>
        html,
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .line-1 {
            height: 3px;
            background: black;
            width: 96.999%;
            margin: 0px auto;
        }

        .dot {
            height: 15px;
            width: 15px;
            background-color: #dc3545 !important;
            border-radius: 50%;
            display: inline-block;
            margin-top: -30px;
        }

        .center {
            padding: 70px 0;
            text-align: center;
        }

        .ribbon-pop {
            background: linear-gradient(270deg, #4f396a 5.25%, #576bb0 96.68%);
            display: inline-block;
            padding: 5px 30px 5px 10px;
            color: white;
            position: relative;
            margin-top: -10px;
            margin-bottom: 10px;

        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid #fff;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .ribbon-pop:before {
            height: 0;
            width: 0;
            border-top: 15px solid #381f57;
            border-left: 15px solid transparent;
            bottom: -15px;
            position: absolute;
            content: "";
            left: 0;
        }

    </style>

    <style>
        body {
            background-color: #eee;

        }

        .bdge {
            height: 21px;
            background-color: orange;
            color: #fff;
            font-size: 11px;
            padding: 8px;
            border-radius: 4px;
            line-height: 3px;
        }

        .comments {
            text-decoration: underline;
            text-underline-position: under;
            cursor: pointer;
        }

        .dot {
            height: 7px;
            width: 7px;
            margin-top: 3px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .hit-voting:hover {
            color: blue;
        }

        .hit-voting {
            cursor: pointer;
        }

        .btn.btn-outline-gold.active {
            color: #fff;
            background: linear-gradient(90deg, rgba(223, 189, 105, 1) 0%, rgba(146, 111, 52, 1) 100%);
            border: 1px solid black;
        }

        .btn.btn-outline-abu.active {
            color: #fff;
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);

        }

        .btn.btn-outline-abu:hover {
            color: #fff;
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);
        }

        .btn .btn-outline.abu {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid black;
        }

        .btn .btn-outline.gold {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid red;
        }

        .btn.btn-outline-pem.active {
            color: #fff;
            background: rgba(88, 24, 69, 1);
        }

        .searchlink {
            cursor: pointer;
            display: block;
            position: relative;
        }

        .searchlink:hover,
        .searchlink.open {
            cursor: pointer;
        }

        .searchlink.open>.searchform {
            display: block;
        }

        .searchform {
            display: none;
            position: absolute;
            width: 200px;
            height: 70px;
            line-height: 40px;
            top: 70px;
            right: 0;
            padding: 0 15px;
            cursor: default;
            border-radius: 2px;
            border-style: solid;
            border-width: 1px;
            border-color: #e1e1e1;
            box-shadow: 0 3px 13px 0 rgba(0, 0, 0, 0.2);
            margin-left: -120px;
            z-index: 9999999;
            background-color: #fff;
        }

        .searchlink.open .searchform {
            display: block;
        }

        #search {
            display: block;
            position: relative;
        }

        #s {
            width: 135px;
            background: #fff;
            padding: 0 11px;
            border: 1px solid #e1e1e1;
            border-right: none;
            color: #888;
            margin: 14px 0;
        }

        .sbtn {
            display: block;
            position: absolute;
            background: none;
            border: 1px solid #f00f00;
            color: #fff;
            font-size: 0.6em;
            cursor: pointer;
            right: 0px;
            top: 14px;
            width: 35px;
            background-color: #f00f00;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chat-btn {
            position: absolute;
            right: 14px;
            bottom: 30px;
            cursor: pointer
        }

        .chat-btn .close {
            display: none
        }

        .chat-btn i {
            transition: all 0.9s ease
        }

        #check:checked~.chat-btn i {
            display: block;
            pointer-events: auto;
            transform: rotate(180deg)
        }

        #check:checked~.chat-btn .comment {
            display: none;

        }

        #check:checked~.chat-btn .ilangono {
            display: none;

        }

        .chat-btn i {
            font-size: 22px;
            color: #fff !important
        }

        .chat-btn {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            background-color: #007bff !important;
            color: #fff;
            font-size: 22px;
            border: none
        }

        .wrapper.btn-chatz {
            position: absolute;
            /* right: 20px; */
            bottom: 100px;
            width: 340px;
            height: auto;
            background-color: #fff;
            border-radius: 5px;
            border: 2px solid white;
            opacity: 0;
            transition: all 0.4s
        }

        #check:checked~.wrapper.btn-chatz {
            opacity: 1;

        }

        .header.btn-chatz {
            padding: 13px;
            background-color: #007bff !important;
            border-radius: 5px 5px 0px 0px;
            margin-bottom: 10px;
            color: #fff
        }

        .chat-form {
            padding: 15px
        }

        .chat-form input,
        textarea,
        button {
            margin-bottom: 10px
        }

        .chat-form textarea {
            resize: none
        }

        .form-control:focus,
        .btn:focus {
            box-shadow: none
        }

        #check {
            display: none !important
        }

        .carousel-item {
            transition: transform 0.75s ease;
        }

        .dropdown-menu {
            position: relative !important;
            transform: none !important;
            display: none !important
        }

        .dropdown-menu.show {
            display: block !important;
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .jumbotron {
            background: #61481C;
            padding: 3rem 0.5rem;
        }

        @media (min-width: 1400px) {
            .jumbotron {
                padding: 3rem 10rem;
            }
        }

        @media (min-width: 1200px) {
            .jumbotron {
                padding: 3rem 20rem;
            }
        }
        .bg-brown{
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown {
            color: #61481C;
            background: #fff;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown:hover {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown:hover {
            color: #fff;
            background: #533e18;
            border: 1px solid #61481C;
        }

        .vr.vr-none {
            display: none !important;
        }

        hr.hr-none {
            display: block !important;
            margin-top: 0px
        }

        .login-mb {
            margin-bottom: 0.5rem;
        }

        @media (min-width: 1000px) {
            .vr.vr-none {
                display: block !important;
            }

            hr.hr-none {
                display: none !important;
            }

            .login-mb {
                margin-bottom: 0rem;
            }
        }

        .mobile {
            display: none;
        }

        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4" href="{{url('/')}}">
                <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px"
                    class="img-fluid me-2">SENGKETA TANAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="{{url("/")}}/role">Role Pengguna</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#">Panduan</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#">Jaminan</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}/bid-sengketa">Bid Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast Sengketa</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/tentang-pemerintah">Tentang Aplikasi</a>
                    </li> --}}
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                    </li>

                    <div class="vr vr-none me-2"></div>
                    <hr class="hr-none">

                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-outline-brown rounded-3 login-mb" href="{{url('/')}}/login">Login</a>
                    </li>
                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-brown text-white rounded-3" href="{{url('/')}}/register">Register</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="{{url('/')}}/contact">Hubungi Kami</a>-->
                    <!--</li>-->
                </ul>

            </div>
        </div>
    </nav>

    <div class="mobile">
        <div class="row d-flex mb-1 mt-1">
            <div class="col text-center">
                <a href="{{url('/')}}/login" class="text-dark" style="text-decoration:none"><i
                        class="fa-solid fa-right-to-bracket"></i> Login</a>
            </div>
            <div class="col text-center">
                <a href="{{url('/')}}/register" class="text-dark" style="text-decoration:none"><i
                        class="fa-solid fa-pen-to-square"></i> Register</a>
            </div>
            <div class="col text-center">
                <a href="#" class="text-dark" style="text-decoration:none"><i class="fa-solid fa-key"></i> Forgot</a>
            </div>
        </div>
    </div>

    
    <div class="container">

        <div class="row justify-content-center mb-2">

            <div class="col-lg-12">

                <div class="row mt-2 g-2">

                    <img src="{{asset('/uploads/sengketa-banner-2.jpg')}}" style="width:100%" class="mb-2">

                    <div class="col-6">
                        <a class="btn btn-sm btn-dark w-100" href="{{url('')}}/register">Daftar Sekarang</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-sm btn-danger w-100" data-bs-toggle="modal"
                            data-bs-target="#korbanSengketaModal">Buat Laporan</a>
                    </div>


                </div>

                <style>
                    .dropdown-item.ini {
                        box-shadow: 0px 6px 23px 0px rgb(0 0 0 / 25%);
                        background-color: white;
                        margin-bottom: 2px;
                        border-left: 5px solid #06ad5f;
                    }

                    .dropdown-menu.ini {
                        position: relative !important;
                        margin-top: 10px !important;
                        transform: translate(0px, 0px) !important;
                    }

                </style>

                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="">
                                <div class="row mb-2" id="titleSponsor">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Sengketa Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>11,874</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2" id="titleLawyer" style="display:none">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Kasus Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>8,512</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2" id="titlePemerintah" style="display:none">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Data Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>3,462</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <div class=" mb-3">
                                <center>
                                    <div class="row g-0">
                                        <div class="col-12">
                                            <select name="jenis_objek" id="jenis_objek" class="form-select">
                                                <option value="" selected disabled>Sort Objek Sengketa</option>
                                                <option value="sp">Sengketa Pertanahan</option>
                                                <option value="pp">Perkara Pertanahan</option>
                                                <option value="kp">Konflik Pertanahan</option>
                                                <option value="all">Tampil Semua</option>
                                            </select>
                                        </div>
                                        <div class="col mt-2">
                                            <a class="tab btn btn-outline-secondary rounded-0 active"
                                                style="width:100%;border:1px solid rgba(146,111,52,1)  "
                                                id="btnSponsor">Sponsor </a>
                                        </div>
                                        <div class="col mt-2">
                                            <a class="tab btn btn-outline-abu rounded-0"
                                                style="width:100%;border:1px solid hsla(337, 85%, 31%, 1)"
                                                id="btnLawyer">Pengacara </a>
                                        </div>
                                        <div class="col mt-2">
                                            <a class="tab btn btn-outline-secondary rounded-0"
                                                style="width:100%;border:1px solid #581845" id="btnPemerintah"
                                                id="btnPemerintah">Pemerintah</a>
                                        </div>
                                    </div>
                                </center>
                            </div>

                            <form action="">
                                <div class="row">
                                    <div class="col" style="margin-top : -12px">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </form>

                            <div class="col-lg-12 mt-2 show" id="dataSponsor">
                                <div class="row">
                                    <?php $counter = 1 ?>
                                    @foreach($bid_sengketa as $bs)
                                    <div class="col-md-6 mb-3 {{$bs['kode_objek']}}">
                                        <div class="card mb-2">

                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid {{$bs['kode']}} <img
                                                                src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="card-header bg-white">-->
                                            <!--    <div class="row">-->
                                            <!--        <div class="col-lg-12">-->
                                            <!--            <span class="badge bg-secondary float-end"><a-->
                                            <!--                    href="{{url('')}}/login?title=Bid Sponsor" class="text-white"-->
                                            <!--                    style="text-decoration:none">Lihat Berkas</a></span>-->
                                            <!--            <span class="float-end">&nbsp;</span>-->
                                            <!--            <form action="{{url('/')}}/bid-sengketa/podcast"class="form-sengketa{{$bs['id']}}"method="get">-->
                                            <!--                <input type="hidden" name="owner"value="{{$bs['owner']}}">-->
                                            <!--                <input type="hidden" name="objek"value="{{$bs['objek']}}">-->
                                            <!--                <input type="hidden" name="luas"value="{{$bs['luas']}}">-->
                                            <!--                <input type="hidden" name="lokasi"value="{{$bs['lokasi']}}">-->
                                            <!--                <input type="hidden" name="komentar"value="">-->
                                            <!--                <input type="hidden" name="link_yt"value="">-->
                                            <!--                <input type="hidden" name="form"value="sponsor">-->
                                            <!--            </form>-->
                                            <!--            <span class="badge bg-dark float-end" onclick="return document.querySelector('form.form-sengketa<?=$bs['id']?>').submit()">Lihat Podcast Sengketa</span>-->
                                            <!--            <span class="float-end">&nbsp;</span>-->

                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->




                                            <div class="card-body">
                                                <div class="img mb-2">
                                                    <img src="{{$bs['img']}}" style="width: 100%; max-height:390px;" alt="">
                                                </div>
                                            @if($bs['id'] < 5)
                                                <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT</div>
                                            @else
                                            @endif
                                            <table>
                                                <tr>
                                                    <td>Owner/Korban</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['owner']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Objek Sengketa</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['objek']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Objek</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['luas']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['lokasi']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kebutuhan Dana</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['dana']}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Imbal Hasil</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['imbal_hasil']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jaminan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['jaminan']}}</td>

                                                </tr>

                                                <tr>
                                                    <td>Jumlah Bid</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['jumlah_bid']}}</td>
                                                </tr>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-center" style="border-right: 1px solid">

                                                    <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                        data-bs-target="#berkasSponsor" style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <i class="fa-regular fa-circle-xmark"></i></h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus masuk sebagai sponsor sebelum melihat
                                                                    berkas.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col text-center">
                                                    <span
                                                        onclick="return document.querySelector('form.form-sengketa<?=$bs['id']?>').submit()"
                                                        style="cursor:pointer"><i
                                                            class="fa-solid fa-play text-danger"></i> Lihat Podcast
                                                        (9)</span>
                                                </div>
                                            </div>

                                            <form action="{{url('/')}}/bid-sengketa/podcast"
                                                class="form-sengketa{{$bs['id']}}" method="get">
                                                <input type="hidden" name="owner" value="{{$bs['owner']}}">
                                                <input type="hidden" name="objek" value="{{$bs['objek']}}">
                                                <input type="hidden" name="luas" value="{{$bs['luas']}}">
                                                <input type="hidden" name="lokasi" value="{{$bs['lokasi']}}">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt" value="{{$bs['link_yt']}}">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!--<a href="{{url('/')}}/login?title=Bid Sponsor"-->
                                                        <!--    class="btn mt-3 rounded-5 text-white" style="-->
                                                        <!--    border: 0px;-->
                                                        <!--    background: rgb(223,189,105);-->
                                                        <!--    background: linear-gradient(90deg, rgba(223,189,105,1) 0%, rgba(146,111,52,1) 100%);-->
                                                        <!--    height: 45px" -->
                                                        <!--    type="button"><i class="fa-solid fa-gavel"></i> Bid Sponsor</a>-->
                                                        <!-- Button trigger modal -->
                                                        <button type="button"
                                                            class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                            data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                            BID
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade my-auto" id="exampleSponsor"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Anda harus masuk sebagai sponsor sebelum
                                                                        melakukan bid.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($counter % 4 == 0)
                                <!--<div class="col-md-12 mb-3">-->
                                <!--    TEST-->
                                <!--</div>-->
                                @endif
                                <?php $counter++ ?>
                                @endforeach
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>




                            <input type="checkbox" id="check">
                            <label class="chat-btn" for="check">
                                <img src="{{asset('/')}}/images/kol_senter1.jpg" alt="" srcset=""
                                    class="rounded-circle ilangono" style="width: 50px;height:auto">
                                <i class="fa fa-close close"></i> </label>
                            <div class="wrapper btn-chatz">
                                <div class="header btn-chatz">
                                    <h6>Customer Service</h6>
                                </div>
                                <div class="text-center p-2"> <span>Masukan nama dan email dahulu!</span> </div>
                                <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                                    <input type="text" class="form-control" placeholder="Email"> <textarea
                                        class="form-control" placeholder="Masukan Pesan"></textarea> <button
                                        class="btn btn-success btn-block">Kirim</button>
                                </div>
                            </div>

                        </div>





                        <div class="col-lg-12 mt-2" id="dataLawyer" style="display:none">
                            <div class="row">

                                @foreach($bid_pengacara as $bp)
                                <div class="col-lg-6 mt-1 mb-1">

                                    <div class="card">
                                        <div class="card-header text-white px-3 py-1" style="        
                                            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);
                                            ">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bid {{$bp['kode']}} <img
                                                            src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h4>
                                                        </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="card-header bg-white">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col-lg-12">-->
                                        <!--            <span class="badge bg-secondary float-end"><a-->
                                        <!--                    href="{{url('')}}/login?title=Bid Sponsor" class="text-white"-->
                                        <!--                    style="text-decoration:none">Lihat Berkas</a></span>-->
                                        <!--            <span class="float-end">&nbsp;</span>-->
                                        <!--            <span class="badge bg-dark float-end" data-bs-toggle="modal"-->
                                        <!--                data-bs-target="#podcastLawyer">Lihat Podcast Sengketa</span>-->
                                        <!--            <span class="float-end">&nbsp;</span>-->
                                        <!--            <span class="badge bg-danger float-end">Terverifikasi</span>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="card-body">
                                            @if($bp['id'] >3)
                                            <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT</div>
                                            @else
                                            @endif


                                            <table>
                                                <tr>
                                                    <td>Owner/Korban</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['owner']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Objek Sengketa</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['objek']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Objek</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['luas']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['lokasi']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kebutuhan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['kebutuhan']}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Anggaran</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['anggaran']}}</td>
                                                </tr>


                                                <tr>
                                                    <td>Jumlah Bid</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['jumlah_bid']}}</td>
                                                </tr>

                                            </table>

                                            <hr>

                                            <div class="row g-0">
                                                <div class="col text-center" style="border-right: 1px solid">
                                                    <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                        data-bs-target="#berkasPengacara" style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade my-auto" id="berkasPengacara" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <i class="fa-regular fa-circle-xmark"></i></h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus masuk sebagai pengacara sebelum melihat
                                                                    berkas.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <span
                                                        onclick="return document.querySelector('form.form-sengketa<?=$bp['id']?>').submit()"
                                                        style="cursor:pointer"><i
                                                            class="fa-solid fa-play text-danger"></i> Lihat Podcast
                                                        (9)</span>
                                                </div>
                                            </div>
                                            <form action="{{url('/')}}/bid-sengketa/podcast" class="form-sengketa90"
                                                method="get">
                                                <input type="hidden" name="owner" value="{{$bp['owner']}}">
                                                <input type="hidden" name="objek" value="{{$bp['objek']}}">
                                                <input type="hidden" name="luas" value="{{$bp['luas']}}">
                                                <input type="hidden" name="lokasi" value="{{$bp['lokasi']}}">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt" value="">
                                                <input type="hidden" name="form" value="pengacara">
                                            </form>
                                            <hr>
                                            <div class="row justify-content-center no-gutters"
                                                style="margin-top:-15px;">

                                                <div class="col-4">
                                                    <!--<div class="d-grid gap-2">-->
                                                    <!--    <a href="{{url('/')}}/login?title=Bid Sengketa"-->
                                                    <!--        class="btn btn-success mt-2" type="button">Bid Pengacara</a>-->

                                                    <div class="d-grid gap-2 ">

                                                        <!--<a href="{{url('/')}}/login?title=Bid Sponsor"-->
                                                        <!--            class="btn mt-3 rounded-5 text-white" style="-->
                                                        <!--            border: 0px;-->
                                                        <!--            background: rgb(223,189,105);-->
                                                        <!--        background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);-->
                                                        <!--            height: 45px" -->
                                                        <!--            type="button"><i class="fa-solid fa-gavel"></i> Bid Pengacara</a>-->
                                                        <button type="button"
                                                            class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                            data-bs-toggle="modal" data-bs-target="#examplePengacara">
                                                            BID
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade my-auto" id="examplePengacara"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Anda harus masuk sebagai pengacara sebelum
                                                                        melakukan bid.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-12" id="dataPemerintah" style="display:none">
                            <div class="row">
                                @foreach($bid_pemerintah as $bpm)
                                <div class="col-lg-6 mt-2 mb-2">
                                    <div class="card">
                                        <div class="card-header text-white px-3 py-1  bg-secondary">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h5 class="mb-0 text-center">Data Terusan</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">

                                            <!-- Modal -->
                                            <div class="modal fade" id="podcastPemerintah" tabindex="-1"
                                                aria-labelledby="podcastLawyer" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <div class="row g-0">
                                                                <div class="col-12">
                                                                    <h5 id="exampleModalLabel">Podcast Sengketa Tanah
                                                                    </h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <small class="text-dark">
                                                                        Hasil Wawancara Korban
                                                                    </small>
                                                                </div>
                                                            </div>

                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="row justify-content-center">
                                                                <div class="col-lg-6">

                                                                    <div class="card bg-dark rounded-0" width="100%"
                                                                        style="height:200px">
                                                                        <div class="card-body center">
                                                                            <h3
                                                                                class="text-white text-uppercase text-center">
                                                                                Belum ada Video
                                                                            </h3>
                                                                        </div>
                                                                    </div>

                                                                    <table class="table">
                                                                        <tr>
                                                                            <td> Owner/Korban</td>
                                                                            <td>:</td>
                                                                            <td>&nbsp;Rival Santoso</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Objek Sengketa</td>
                                                                            <td>:</td>
                                                                            <td>&nbsp;Sengketa Pertanahan</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Luas Objek</td>

                                                                            <td>:</td>
                                                                            <td>&nbsp;12.3 Ha</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Lokasi</td>

                                                                            <td>:</td>
                                                                            <td>&nbsp;Ngawi, Jawa Timur</td>
                                                                        </tr>
                                                                    </table>
                                                                    <div class="d-grid gap-2">
                                                                        <button class="alert alert-warning mt-2"
                                                                            type="button">Keterangan: Data sengketa
                                                                            tanah
                                                                            ini telah diterima oleh Platform
                                                                            Sengketa Tanah dan akan diteruskan pada
                                                                            instansi
                                                                            terkait. </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row">
                                                                        <div class="d-flex flex-column col-md-12">

                                                                            <div class="coment-bottom bg-white p-1">
                                                                                <div
                                                                                    class="d-flex flex-row add-comment-section mt-4 mb-4">
                                                                                    <img class="img-fluid img-responsive rounded-circle me-2"
                                                                                        src="https://i.imgur.com/qdiP4DB.jpg"
                                                                                        width="38">
                                                                                    <input type="text"
                                                                                        class="form-control me-3 rounded-0"
                                                                                        placeholder="Tambah Komentar">
                                                                                    <button
                                                                                        class="btn btn-primary rounded-0"
                                                                                        type="button">Komentar</button>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="center">
                                                                                    <h3
                                                                                        class="text-dark text-uppercase text-center">
                                                                                        Belum ada Komentar
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <hr>
                                                            <div class="row" style="margin-top:-20px">
                                                                <div class="col-12 p-2">

                                                                    <span class="fa-stack fa-lg float-end">
                                                                        <i class="fa fa-circle fa-stack-2x "
                                                                            style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                                                                        <i
                                                                            class="fa-solid fa-share fa-stack-1x fa-inverse"></i>

                                                                    </span> <span class="float-start mt-2">Bagikan Video
                                                                        ini</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            <table>
                                                <tr>
                                                    <td>Owner/Korban</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bpm['owner']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Objek Sengketa</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bpm['objek']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Objek</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bpm['luas']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bpm['lokasi']}}</td>
                                                </tr>
                                                <!--<tr>-->
                                                <!--    <td>Status Data</td>-->
                                                <!--    <td></td>-->
                                                <!--    <td>:</td>-->
                                                <!--    <td></td>-->
                                                <!--</tr>-->



                                            </table>


                                            <div class="row justify-content-center no-gutters">
                                                <div class="col-12">
                                                    <div class="d-grid gap-2">
                                                        <button class="alert alert-warning mt-2"
                                                            type="button">Keterangan:
                                                            Data sengketa tanah ini telah diterima oleh Platform
                                                            Sengketa Tanah dan akan diteruskan pada instansi terkait.
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                                @endforeach
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>


        <div class="row justify-content-center mb-3 mt-4 text-center g-0">
            <p class="fw-bold text-center" style="text-align: justify">Ikuti Sosial Media Kami</a></p>

            <div class="col">
                <a class="btn p-0" href="https://www.instagram.com/sengketatanah.id/" role="button">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"
                            style="text-shadow: -3px 3px 5px #bbbbbb;color: #8a3ab9"></i>
                        <i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col">
                <a class="btn p-0" href="https://m.youtube.com/channel/UCXQW3lPJ68brYiThnxX18-A" role="button">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x text-danger" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                        <i class="fa-brands fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col">
                <a class="btn p-0" href="#" role="button">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                        <i class="fa-brands fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col">
                <a class="btn p-0" href="https://mobile.twitter.com/sengketatanahid" role="button">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x text-info" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                        <i class="fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn p-0" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        id="dropdownMenuButton1">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x " style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-solid fa-share fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                                data-show-count="false"><i class="fa-brands fa-twitter"></i> Tweet</a></li>
                        <li>
                            <a target="_blank"
                                onClick='window.open("https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse","Ratting","width=550,height=550,left=150,top=200,toolbar=0,status=0,");'
                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse"
                                class="fb-xfbml-parse-ignore dropdown-item"><i class="fa-brands fa-facebook"></i>
                                Facebook</a>
                        </li>
                    </ul>
                </div>

                <a href="" class=""></a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>

            <div class="modal fade" id="korbanSengketaModal" tabindex="-1" aria-labelledby="korbanSengketaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <div class="row">
                                <div class="col-12 text-center text-uppercase">
                                    <h5 class="modal-title" id="formSponsoranModalLabel">Korban Sengketa Tanah</h5>
                                </div>
                                <div class="col-12 text-center">
                                    <h6 class="modal-title" style="font-size:12px">Korban adalah orang yang dirugikan,
                                        dirampas,
                                        atau kehilangan hak atas tanah yang dimilikinya*</h6>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="text-start" action="{{url('sengketa/send')}}"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                @if ($errors->all())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif

                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama Pelapor</label>
                                    <input type="text" class="form-control rounded-0" id="nama"
                                        placeholder="Masukkan Nama Anda" aria-describedby="input-nama" name="nama"
                                        required>
                                    <div id="input-nama" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control rounded-0" id="Alamat"
                                        placeholder="Masukkan Alamat Anda" aria-describedby="input-Alamat" name="alamat"
                                        required>
                                    <div id="input-Alamat" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="no_hp" class="form-label">Nomor Hp</label>
                                    <input type="number" class="form-control rounded-0" id="no_hp"
                                        placeholder="Masukkan Nomor HP Anda" aria-describedby="input-no_hp" name="no_hp"
                                        required>
                                    <div id="input-no_hp" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-0" id="email"
                                        placeholder="Masukkan Email Anda" aria-describedby="input-email" name="email"
                                        required>
                                    <div id="input-email" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control rounded-0" id="password"
                                        placeholder="buat password Anda" aria-describedby="input-password"
                                        name="password" required>
                                    <div id="input-password" class="form-text"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label">Objek Sengketa</label>
                                            <select class="form-select rounded-0" aria-label="Default select example"
                                                name="objek_sengketa" required>
                                                <option value="Sengketa Pertanahan">Sengketa Pertanahan</option>
                                                <option value="Konflik Pertanahan">Konflik Pertanahan</option>
                                                <option value="Perkara Pertanahan">Perkara Pertanahan</option>
                                                <option value="Penjualan Lahan">Penjualan Lahan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-2">
                                            <label for="luas" class="form-label">Luas Tanah (meter/ha)</label>
                                            <input type="text" class="form-control rounded-0" id="luas"
                                                placeholder="Masukkan Luas Tanah" aria-describedby="input-luas"
                                                name="luas" required>
                                            <div id="input-luas" class="form-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="lokasi" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control rounded-0" id="lokasi"
                                        placeholder="Masukkan Lokasi" aria-describedby="input-lokasi" name="lokasi"
                                        required>
                                    <div id="input-lokasi" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="kronologi" class="form-label">Kronologi</label>
                                    <textarea id="kronologi" class="form-control rounded-0"
                                        placeholder="Masukkan Kronologi" aria-describedby="input-kronologi"
                                        name="kronologi" cols="30" rows="10" required></textarea>
                                    <div id="input-kronologi" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Status Pelapor</label>
                                    <select class="form-select rounded-0" aria-label="Default select example"
                                        name="status_pelapor" required>
                                        <option value="Pemilik">Pemilik</option>
                                        <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Pilih Jenis Pertolongan</label>
                                    <select class="form-select rounded-0" aria-label="Default select example"
                                        name="jenis_pertolongan" required>
                                        <option selected disabled>Pilih Pertolongan</option>
                                        <option value="sponsor">Sponsor</option>
                                        <option value="pengacara">Pengacara</option>
                                        <option value="pemerintah">Pemerintah</option>
                                    </select>
                                </div>

                                <div id="pengembalian_dana" class="alert alert-danger sponsor" role="alert">
                                    <strong>
                                        Saya membutuhkan bantuan pendanaan dari sponsor untuk menyelesaikan permasalahan
                                        sengketa tanah saya.
                                    </strong>
                                </div>

                                <div class="mb-2 pengacara">
                                    <label class="form-label">Pilih Tindakan Pengacara</label>
                                    <select class="form-select rounded-0" aria-label="Default select example"
                                        name="bantuan_pengacara" required>
                                        <option selected disabled>Pilih Bantuan Pengacara</option>
                                        <option value="konsultasi">Konsultasi</option>
                                        <option value="pendampingan">Pendampingan</option>
                                        <option value="penindakan">Penindakan</option>
                                    </select>
                                </div>

                                <div class="mb-2 pengacara">
                                    <label for="anggaran_pengacara" class="form-label">Anggaran Pengacara</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control rounded-0"
                                                id="anggaran_pengacara-s" placeholder="Anggaran mulai dari ..."
                                                aria-describedby="input-anggaran_pengacara-s"
                                                name="anggaran_pengacara-s">
                                        </div>
                                        <div class="col-1 text-center"
                                            style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                            -
                                        </div>
                                        <div class="col">
                                            <input type="number" class="form-control rounded-0"
                                                id="anggaran_pengacara-e" placeholder="Sampai ..."
                                                aria-describedby="input-anggaran_pengacara-e"
                                                name="anggaran_pengacara-e">
                                        </div>
                                    </div>
                                </div>

                                <div id="pengembalian_dana" class="alert alert-danger pemerintah" role="alert">
                                    <strong>
                                        Saya hanya membutuhkan pertolongan agar permasalahan sengketa tanah saya
                                        diteruskan
                                        pada
                                        Pemerintah.
                                    </strong>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label for="keb_dana" class="form-label">Jumlah Dana Sponsor</label>
                                    <input type="number" class="form-control rounded-0" id="keb_dana"
                                        placeholder="Sebutkan Nilai Kebutuhan" aria-describedby="input-keb_dana"
                                        name="keb_dana" required>
                                    <div id="input-keb_dana" class="form-text"></div>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label class="form-label">Pengembalian Dana Sponsor</label>
                                    <select class="form-select rounded-0" aria-label="Default select example"
                                        name="pengembalian_dana_sponsor" required>
                                        <option selected disabled>Pilih Jenis Pengembalian</option>
                                        <option value="70/30">Bagi Hasil 70/30*</option>
                                        <option value="60/40">Bagi Hasil 60/40*</option>
                                        <option value="50/50">Bagi Hasil 50/50*</option>
                                        <option value="lain">Fee 50% Dari Pinjaman</option>
                                        <option value="lain">Fee 75% Dari Pinjaman</option>
                                        <option value="lain">Fee 100% Dari Pinjaman</option>
                                    </select>
                                    <small id="pengembalian_dana_sponsor" class="form-text text-muted">Bagi hasil di
                                        rekomendasikan untuk kasus-kasus sengketa tanah yang berat. Tanda bintang(*)
                                        adalah
                                        pembagian untuk sponsor. </small>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label class="form-label" for="jaminan_dana">Jaminan Dana Sponsor</label>
                                    <select class="form-select rounded-0" aria-label="Default select example"
                                        name="jaminan" required>
                                        <option selected disabled>Pilih Jaminan</option>
                                        <option value="ada">Ada Jaminan</option>
                                        <option value="tidak">Tidak Ada Jaminan</option>
                                    </select>
                                </div>

                                <div class="mb-2 jaminan_berupa">
                                    <label for="jaminan_berupa" class="form-label">Jaminan Berupa</label>
                                    <select class="form-select rounded-0" id="lokasi" placeholder="Masukkan Jaminan"
                                        aria-describedby="input-jaminan" name="jaminan_berupa" required>
                                        <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                        <option value="Sertifikat Rumah">Sertifikat Rumah</option>
                                    </select>
                                </div>
                                {{-- <div class="mb-2">
                                <label for="ktp" class="form-label">Foto KTP</label>
                                <input class="form-control rounded-0" type="file" id="ktp" name="foto_ktp" required>
                            </div>
                            <div class="mb-2">
                                <label for="foto_lokasi" class="form-label">Foto Lokasi</label>
                                <input class="form-control rounded-0" type="file" id="foto_lokasi" name="foto_lokasi"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="dokumenTanah" class="form-label">Foto Dokumen Hak Tanah</label>
                                <input class="form-control rounded-0" type="file" id="dokumenTanah" name="dokumen_tanah"
                                    required>
                            </div> --}}
                                <div class="mb-2 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" style="text-align:justify"
                                        for="exampleCheck1">Dengan
                                        mengisi form ini saya
                                        menyatakan bahwa semua data yang diberikan benar adanya dan laporan ini tidak
                                        sedang dalam penanganan hukum pihak lain. Saya bersedia melakukan wawancara
                                        mendalam
                                        di
                                        <b>PODCAST SENGKETA TANAH</b> dan bekerja sama dengan
                                        Sponsor melalui <b>PLATFORM SENGKETA TANAH</b> untuk diselesaikan.</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-dark">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
        <div class="row mt-4">
            <div class="card-body bg-dark text-white text-center">
                <p></p>
                <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width:250px" class="img-fluid">
                <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved</p>
                <hr>
                <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No. 36,
                    TB Simatupang, Jakarta Selatan</p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>



        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
        </script>
        <script>
            $('#jenis_objek').on('change', function () {
                let jenisObjek = $(this).find('option').filter(':selected').val();
                if (jenisObjek == "sp") {

                    $('div.col-md-6.kp').hide()
                    $('div.col-md-6.pp').hide()
                    $('div.col-md-6.sp').show()
                } else if (jenisObjek == "kp") {

                    $('div.col-md-6.kp').show()
                    $('div.col-md-6.pp').hide()
                    $('div.col-md-6.sp').hide()
                } else if (jenisObjek == "pp") {
                    $('div.col-md-6.kp').hide()
                    $('div.col-md-6.pp').show()
                    $('div.col-md-6.sp').hide()
                } else {
                    $('div.col-md-6.kp').show()
                    $('div.col-md-6.pp').show()
                    $('div.col-md-6.sp').show()
                }

            });

            $('#btnLawyer').on('click', function () {
                $('#dataSponsor').hide()
                $('#dataPemerintah').hide()
                $('#dataLawyer').show()

            });
            $('#btnSponsor').on('click', function () {
                $('#dataSponsor').show()
                $('#dataLawyer').hide()
                $('#dataPemerintah').hide()
            });
            $('#btnPemerintah').on('click', function () {
                $('#dataLawyer').hide()
                $('#dataSponsor').hide()
                $('#dataPemerintah').show()
            });

            $(document).ready(function () {
                $(".tab").click(function () {
                    $(".tab").removeClass("active");
                    // $(".tab").addClass("active"); // instead of this do the below 
                    $(this).addClass("active");
                });
            });

            $(document).ready(function () {
                $('#myTable').DataTable();
            });

            $('#btnLawyer').on('click', function () {
                $('#titleSponsor').hide()
                $('#titlePemerintah').hide()
                $('#titleLawyer').show()

            });

            $('#btnSponsor').on('click', function () {
                $('#titleSponsor').show()
                $('#titleLawyer').hide()
                $('#titlePemerintah').hide()
            });
            $('#btnPemerintah').on('click', function () {
                $('#titleLawyer').hide()
                $('#titleSponsor').hide()
                $('#titlePemerintah').show()
            });

            $(function () {
                $('#searchlink').on('click', function (e) {
                    $(this).toggleClass('open');
                });
            });



            $(function () {
                var hidestuff = function () {
                    $(".jaminan_berupa").hide();
                }

                $("select[name='jaminan']").change(function () {
                    hidestuff();

                    var value = $(this).val();
                    if (value == "ada") {
                        $(".jaminan_berupa").show();
                    }
                });
                hidestuff();
            });

            $(function () {
                var hidestuff = function () {
                    $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
                }

                $("select[name='pengelolaan_dana']").change(function () {
                    hidestuff();

                    var value = $(this).val();
                    if (value == "platform") {
                        $(".pengelolaan-platform").show();
                    }
                    if (value == "sendiri") {
                        $(".pengelolaan-sendiri").show();
                    }
                });
                hidestuff();
            });

            $(function () {
                var hidestuff = function () {
                    $(".law-firm").hide();
                }

                $("select[name='mewakili']").change(function () {
                    hidestuff();

                    var value = $(this).val();
                    if (value == "law-firm") {
                        $(".law-firm").show();
                    }
                });
                hidestuff();
            });


            $(document).ready(function () {
                $("#carouselExampleControls").swiperight(function () {
                    $(this).carousel('prev');
                });
                $("#carouselExampleControls").swipeleft(function () {
                    $(this).carousel('next');
                });
            });

            $(function () {
                var hidestuff = function () {
                    $(".sponsor, .pengacara, .pemerintah").hide();
                }

                $("select[name='jenis_pertolongan']").change(function () {
                    hidestuff();

                    var value = $(this).val();
                    if (value == "sponsor") {
                        $(".sponsor").show();
                    }
                    if (value == "pengacara") {
                        $(".pengacara").show();
                    }
                    if (value == "pemerintah") {
                        $(".pemerintah").show();
                    }
                });
                hidestuff();
            });

        </script>
</body>

</html>