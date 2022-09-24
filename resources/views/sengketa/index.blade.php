<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sengketa Tanah, Dapatkan solusi bantuan pendanaan dan bantuan hukum disini. Bebaskan Indonesia dari Mafia Tanah!" />
    <meta property="og:title" content="Sengketa Tanah" />
    <meta property="og:url" content="https://sengketatanah.id/" />
    <meta property="og:description"
        content="Platform SENGKETA TANAH siap membantu anda dalam urusan hukum persengketaan tanah di seluruh wilayah Indonesia." />
    <meta property="og:image" content="{{asset('/uploads/sengketa-logo_pas.ico')}}" />
    <title>Sengketa Tanah</title>
    <link rel="icon" href="{{asset('/uploads/sengketa-logo_pas-9.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href=" https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        html,
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif
        }

        @media (min-width: 1400px) {
            .container {
                max-width: 1000px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1000px;
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

        . .btn-glass {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(17, 17, 17, 0);
        }

        . .btn-glass:hover {
            border-color: #000000;
            background-color: #111111;
        }

        . .btn-glass:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(17, 17, 17, 0.5);
        }

        . .btn-glass.btn-primary {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(42, 143, 189, 0);
        }

        . .btn-glass.btn-primary:hover {
            border-color: #1c607e;
            background-color: #2a8fbd;
        }

        . .btn-glass.btn-primary:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(42, 143, 189, 0.5);
        }

        . .btn-glass.btn-success {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(127, 175, 27, 0);
        }

        . .btn-glass.btn-success:hover {
            border-color: #4f6d11;
            background-color: #3cb22e;
        }

        . .btn-glass.btn-success:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(127, 175, 27, 0.5);
        }

        . .btn-glass.btn-warning {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(251, 184, 41, 0);
        }

        . .btn-glass.btn-warning:hover {
            border-color: #d49104;
            background-color: #fbb829;
        }

        . .btn-glass.btn-warning:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(251, 184, 41, 0.5);
        }

        . .btn-glass.btn-danger {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(240, 35, 17, 0);
        }

        . .btn-glass.btn-danger:hover {
            border-color: #aa180b;
            background-color: #f02311;
        }

        . .btn-glass.btn-danger:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(240, 35, 17, 0.5);
        }

        . .btn-glass.btn-info {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(108, 223, 234, 0);
        }

        . .btn-glass.btn-info:hover {
            border-color: #29d0e0;
            background-color: #6cdfea;
        }

        . .btn-glass.btn-info:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(108, 223, 234, 0.5);
        }

        .btn-glass {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
            display: inline-block;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 1em 2em;
            font-family: Lato;
            font-weight: 300;
            border: 1px dotted transparent;
            letter-spacing: 0.98pt;
            text-transform: uppercase;
            -webkit-transition: background-position 2s cubic-bezier(0, 1, 0, 1), border-color 500ms, background-color 500ms;
            transition: background-position 2s cubic-bezier(0, 1, 0, 1), border-color 500ms, background-color 500ms;
            position: relative;
            background-attachment: fixed, scroll;
            background-size: 100vw 100vh, cover;
            background-position: center center, 0 0;

            background-image: -webkit-repeating-linear-gradient(135deg, rgba(255, 255, 255, 0) 8%, rgba(255, 255, 255, 0.075) 10%, rgba(255, 255, 255, 0.075) 14%, rgba(255, 255, 255, 0.15) 14%, rgba(255, 255, 255, 0.15) 15%, rgba(255, 255, 255, 0.075) 17%, rgba(255, 255, 255, 0) 30%, rgba(255, 255, 255, 0) 36%, rgba(255, 255, 255, 0.075) 40%, rgba(255, 255, 255, 0.15) 42%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0.075) 60%, rgba(255, 255, 255, 0.075) 66%, rgba(255, 255, 255, 0.15) 66%, rgba(255, 255, 255, 0.075) 70%, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 0) 100%), -webkit-radial-gradient(ellipse farthest-corner, transparent, rgba(0, 0, 0, 0.2) 110%);

            background-image: repeating-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, rgba(255, 255, 255, 0.075) 10%, rgba(255, 255, 255, 0.075) 14%, rgba(255, 255, 255, 0.15) 14%, rgba(255, 255, 255, 0.15) 15%, rgba(255, 255, 255, 0.075) 17%, rgba(255, 255, 255, 0) 30%, rgba(255, 255, 255, 0) 36%, rgba(255, 255, 255, 0.075) 40%, rgba(255, 255, 255, 0.15) 42%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0.075) 60%, rgba(255, 255, 255, 0.075) 66%, rgba(255, 255, 255, 0.15) 66%, rgba(255, 255, 255, 0.075) 70%, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 0) 100%), radial-gradient(ellipse farthest-corner, transparent, rgba(0, 0, 0, 0.2) 110%);
        }

        .btn-glass:hover {
            background-position: -100vw 0, 0 0;
        }

        .btn-glass:active {
            background-position: -75vw 0, 0 0;
            border-style: solid;
        }

        .fom-gup {
            background: linear-gradient(to top, #dfdfdf, #ffffff) repeat-x center;
            background-size: 2px 2px;
            min-width: 50px;

        }

        input::placeholder {
            font-weight: lighter;
            opacity: .35;
        }

        textarea::placeholder {
            font-weight: lighter;
            opacity: .35;
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

    </style>
</head>

<body class="bg-light">


    <nav class="navbar navbar-expand-lg bg-light mb-2">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/tentang-pemerintah">Tentang Aplikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="{{url('/')}}/contact">Hubungi Kami</a>-->
                    <!--</li>-->
                </ul>
                
            </div>
        </div>
    </nav>
    
    <div class="text-white rounded-0 jumbotron">
        <div class="row">
            <div class="col-md-12 text-center mt-3">
                <img src="{{asset('/uploads/sengketa-logo_pas-9.png')}}" style="width: 150px" alt="" srcset=""
                    class="img-fluid">
            </div>
            <div class="col-md text-center my-auto mt-3">
                <h1>Solusi Untuk Anda</h1>
                <p>Platform Sengketa Tanah adalah inovator teknologi dalam bidang Sengketa
                    pertanahan di Indonesia yang mempertemukan korban sengketa tanah dengan sponsor, pengacara dan
                    pemerintah.</p>
                    <a type="button" href="{{url('/')}}/bid-sengketa" 
                    style="
                    border: 0px;
                    background: linear-gradient(90deg, rgba(223,189,105,1) 0%, rgba(146,111,52,1) 100%);"
                    class="btn rounded-5 text-white mt-3">Bergabung</a>
    
            </div>
        </div>


    </div>
    
    <div class="container mt-3" id="card2">

        @if(Session::has('error'))
        <div class="row mb-3">
            {{Session::get('error')}}
        </div>
        @endif

        <div class="card mb-3">
            <div class="card-body">
                <div class="row justify-content-between g-0 text-center">
                    <div class="col mt-1 mb-1">
                        <button class="btn p-0">
                            <img src="{{asset('/')}}images/icon/icon_rounded.png" class="" style="width:65px;" alt="">
                            <div class="mt-0" style="font-size: 12px">Bid Sengketa</div>
                        </button>
                    </div>
                    <div class="col mt-1 mb-1">
                        <button class="btn p-0">
                            <img src="{{asset('/')}}images/icon/icon_rounded.png" class="" style="width:65px;" alt="">
                            <div class="mt-0" style="font-size: 12px">Jual Beli Lahan</div>
                        </button>
                    </div>
                    <div class="col mt-1 mb-1">
                        <button class="btn p-0">
                            <img src="{{asset('/')}}images/icon/icon_rounded.png" class="" style="width:65px;" alt="">
                            <div class="mt-0" style="font-size: 12px">Kerjasama Lahan</div>
                        </button>
                    </div>
                    <div class="col mt-1 mb-1">
                        <button class="btn p-0">
                            <img src="{{asset('/')}}images/icon/icon_rounded.png" class="" style="width:65px;" alt="">
                            <div class="mt-0" style="font-size: 12px">Pelelangan Lahan</div>
                        </button>
                    </div>
                    <div class="col mt-1 mb-1">
                        <button class="btn p-0">
                            <img src="{{asset('/')}}images/icon/icon_rounded.png" class="" style="width:65px;" alt="">
                            <div class="mt-0" style="font-size: 12px">Jasa Tukang Ukur</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body text-center">
            <h2 class="card-title fw-bolder" style="col mt-1or: #61481C">DUKUNGAN PEMERINTAH MENGATASI PERSENGKETAAN TANAH</h4>
        </div>
        <div class="row desktop mb-5 mt-3">
            <div class="col-md">
                <div class="card-body text-center container" style="height:500px">
                    <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                        style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                    <div class="card rounded-0"
                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                        <div class="card-body">
                            <p class="card-text">"Presiden Joko Widodo menegaskan kepada Kementerian ATR/BPN untuk
                                serius dalam memberantas mafia tanah"
                                <br> -<b> Ir. H. Joko Widodo (Presiden RI)</b>
                            </p>
                        </div>
                    </div>
                    <p class="card-title fw-bolder text-dark"></p>
                </div>
            </div>
            <div class="col-md">
                <div class="card-body text-center container" style="height:500px">
                    <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}"
                        style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                    <div class="card rounded-0"
                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                        <div class="card-body">
                            <p class="card-text">"Sesuai perintah Bapak Presiden, semua kasus mafia tanah yang ada
                                di
                                Indonesia harus
                                diselesaikan" <br> -<b> Hadi Tjahjanto (Mentri ATR/BPN) </b>
                            </p>
                        </div>
                    </div>
                    <p class="card-title fw-bolder text-dark"></p>
                </div>
            </div>
            <div class="col-md">
                <div class="card-body text-center container" style="height:500px">
                    <img src="{{asset('/uploads/kapolri.png')}}" style="width:300px; height:400px;object-fit:cover"
                        alt="" srcset="" class="img-fluid">
                    <div class="card rounded-0"
                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                        <div class="card-body">
                            <p class="card-text">"Penyidik tidak perlu ragu ragu dalam mengusut tuntas masalah mafia
                                tanah, penyidik agar tindak tegas siapapun dalang dan bekingannya" <br> -<b> Listyo
                                    Sigit Prabowo (Kapolri) </b>
                            </p>
                        </div>
                    </div>
                    <p class="card-title fw-bolder text-dark"></p>
                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide mobile mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-body text-center container" style="height:505px">
                        <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                            style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                        <div class="card rounded-0"
                            style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                            <div class="card-body">
                                <p class="card-text">"Presiden Joko Widodo menegaskan kepada Kementerian ATR/BPN
                                    untuk
                                    serius dalam memberantas mafia tanah" <br> -<b> Ir. H. Joko Widodo (Presiden
                                        RI)</b>
                                </p>
                            </div>
                        </div>
                        <p class="card-title fw-bolder text-dark"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-body text-center container" style="height:505px">
                        <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}"
                            style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                        <div class="card rounded-0"
                            style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                            <div class="card-body">
                                <p class="card-text">"Sesuai perintah Bapak Presiden, semua kasus mafia tanah yang
                                    ada
                                    di Indonesia harus
                                    diselesaikan"<br> -<b> Hadi Tjahjanto (Mentri ATR/BPN) </b>
                                </p>
                            </div>
                        </div>
                        <p class="card-title fw-bolder text-dark"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-body text-center container" style="height:505px">
                        <img src="{{asset('/uploads/kapolri.png')}}"
                            style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                        <div class="card rounded-0"
                            style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                            <div class="card-body">
                                <p class="card-text">"Penyidik tidak perlu ragu ragu dalam mengusut tuntas masalah
                                    mafia

                                    tanah, penyidik agar tindak tegas siapapun dalang dan bekingannya" <br> -<b>
                                        Listyo
                                        Sigit Prabowo (Kapolri) </b>
                                </p>
                            </div>
                        </div>
                        <p class="card-title fw-bolder text-dark"></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="text-center fs-3" style="padding:10px; color: #61481C">
            "Platform Sengketa Tanah adalah aplikasi yang paling tepat untuk membantu perjuangan Anda dalam mengatasi persengketaan masalah tanah"
        </div>

        <div class="row mt-2" style="padding: 10px">
            <div class="card p-0 rounded-3 shadow">
                <div class="card-header text-white" style="background-color: #61481C;">
                    <h4 class="mb-0 fw-bolder text-center">4 ROLE PENGGUNA</h4>
                </div>
                <div class="card-body text-dark">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-3 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" style="width:208px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C">
                                        1. Pemerintah</h4>
                                    <hr>
                                    Pemerintah adalah kementerian yang mempunyai tugas menyelenggarakan urusan di bidang agraria/pertanahan dan tata ruang dalam pemerintahan untuk membantu Presiden dalam menyelenggarakan pemerintahan negara termasuk masalah persengketaan tanah
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C">2. Korban Sengketa</h4>
                                    <hr>
                                    Korban adalah orang yang dirugikan, dirampas, atau terancam kehilangan hak atas tanah yang
                                    dimilikinya
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C">3. Sponsor</h4>
                                    <hr>
                                    Sponsor adalah orang/badan usaha/kelompok yang membiayai urusan hukum korban
                                    sengketa tanah
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C">4. Pengacara</h4>
                                    <hr>
                                    Pengacara adalah seorang pribadi atau badan hukum (Law Firm) yang menangani sengketa
                                    tanah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="text-white rounded-0 jumbotron">
            <div class="row">
                <div class="col-md text-center">
                    <img src="{{asset('/uploads/sengketa-logo_pas-9.png')}}" style="width: 150px" alt="" srcset=""
                        class="img-fluid">
                </div>
            </div>
    
        </div>
        <div class="row mt-3" style="padding: 10px">
            <h3 style="color: #61481C" class="fw-semibold text-center"><i class="fa-solid fa-book-open"></i> PANDUAN</h3>

            <ol class="list-group list-group-numbered shadow mt-2" style="padding-right: 0px">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Buat Akun Sengketa Tanah</div>
                        Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor, Pengacara).
                    </div>
                    <i class="fa-solid fa-user-plus fs-6" style="color: #61481C"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Buat Laporan Sengketa Tanah</div>
                        Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah Anda.
                    </div>
                    <i class="fa-solid fa-file-circle-plus fs-6" style="color: #61481C"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Tampilkan Dokumen</div>
                        Upload dan kirimkan dokumen pendukung laporan Anda.
                    </div>
                    <i class="fa-solid fa-file-lines fs-6" style="color: #61481C"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Temukan Bantuan</div>
                        Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan hukum pengacara, dan
                        bantuan pemerintah.
                    </div>
                    <i class="fa fa-circle-question fs-6" style="color: #61481C"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Pilih Bantuan</div>
                        Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                    </div>
                    <i class="fa-regular fa-circle-question fs-6" style="color: #61481C"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold" style="color: #61481C">Dapatkan Bantuan</div>
                        Yay! Selamat, kamu telah mendapatkan.
                    </div>
                    <i class="fa-solid fa-handshake-angle fs-6" style="color: #61481C"></i>
                </li>
            </ol>
        </div>

        <hr>
        {{-- <div class="row justify-content-center mb-3 mt-2">
            <div class="col-lg-12">
                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>1. Buat Akun Sengketa Tanah</b></h6>
                        Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor, Pengacara).
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>2. Buat Laporan Sengketa Tanah</b></h6>
                        Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah Anda.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>3. Tampilkan Dokumen</b></h6>
                        Upload dan kirimkan dokumen pendukung laporan Anda.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>4. Temukan Bantuan</b></h6>
                        Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan hukum pengacara, dan
                        bantuan pemerintah.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>5. Pilih Bantuan</b></h6>
                        Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>6. Dapatkan Bantuan</b></h6>
                        Yay! Selamat, kamu telah mendapatkan.
                    </div>
                </div>

            </div>
        </div> --}}

        <div class="text-white rounded-0 jumbotron">
            <div class="row">
                <div class="col-md text-center">
                    <img src="{{asset('/uploads/sengketa-logo_pas-9.png')}}" style="width: 150px" alt="" srcset=""
                        class="img-fluid">
                </div>
            </div>
    
        </div>

        <div class="row" style="padding: 10px">
            <h3 style="color: #61481C" class="fw-semibold text-center mt-3"><i class="fa-solid fa-shield-halved"></i> JAMINAN</h3>
            
            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-file-circle-check"></i></b></h5>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 style="color: #61481C" class="mb-0"><b>Laporan Sengketa Terverifikasi</b></h5>
                        Semua laporan sengketa yang masuk diverifikasi secara ketat sebelum disajikan.
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-tie"></i></b></h5>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 style="color: #61481C" class="mb-0"><b>Sponsor Terverifikasi</b></h5>
                        Setiap sponsor yang terlibat di verifikasi kemampuan dan sumber dananya.
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-gavel"></i></b></h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <h5 style="color: #61481C" class="mb-0"><b>Pengacara Terverifikasi</b></h5>
                            Setiap pengacara wajib memiliki sertifikasi advokat yang dibutuhkan.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-hand-holding-dollar"></i></b></h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <h5 style="color: #61481C" class="mb-0"><b>Pembayaran Aman</b></h5>
                            Setiap transaksi yang terjadi menggunakan platform pembayaran Sengketa Tanah.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-chart-line"></i></b></h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                        <h5 style="color: #61481C" class="mb-0"><b>Bantuan Analisa</b></h5>
                            Kami memberikan bantuan analisa terhadap permasalahan yang relevan untuk diatasi.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-handshake"></i></b></h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <h5 style="color: #61481C" class="mb-0"><b>Kesepakatan Terlindungi</b></h5>
                            Semua kesepakatan yang terjadi dilindungi perjanjian hukum yang ketat dan mengikat.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-gear"></i></b></h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <h5 style="color: #61481C" class="mb-0"><b>Bantuan Customer Support</b></h5>
                            Layanan CS 24 jam siap membantu anda.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-4 text-center">
                <a class="btn text-white mt-4" href="{{url('')}}/register" style="background: #61481C">Daftar Sekarang</a>
                <!--<a data-bs-toggle="modal" data-bs-target="#korbanSengketaModal" class="btn text-white mt-4" style="background: #61481C">Daftar Sekarang</a>-->
            </div>

            
        </div>

        <hr>

        <div class="row justify-content-center mt-2 mb-4">

            <div class="row justify-content-center text-center">
                <h2>
                    <div class="fw-bold" style="color: #61481C"> <br>TENTANG KAMI</div>
                </h2>
                <p style="text-align: center">SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                    masalah
                    sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa tanah atau korban
                    mafia
                    tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah persengketaan tanah tersebut.</p>

            </div>

            <hr>

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
                            <i class="fa fa-circle fa-stack-2x text-danger"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-brands fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a class="btn p-0" href="#" role="button">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-primary"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-brands fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a class="btn p-0" href="https://mobile.twitter.com/sengketatanahid" role="button">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-info"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
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

            </div>

            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous"
                src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>

            <div class="row mt-4" style="padding: 0px">
                <div class="card-body text-white text-center" style="background-color: #61481C;">
                    <p></p>
                    <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width: 250px" alt="" srcset=""
                        class="img-fluid">
                    <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved
                    </p>
                    <hr>
                    <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No.
                        36,
                        TB Simatupang, Jakarta Selatan</p>
                </div>
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
                            <h6 class="modal-title" style="font-size:12px">Korban adalah orang yang dirugikan, dirampas,
                                atau kehilangan hak atas tanah yang dimilikinya*</h6>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{url('sengketa/send')}}" enctype="multipart/form-data">
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
                            <input type="text" class="form-control rounded-0" id="nama" placeholder="Masukkan Nama Anda"
                                aria-describedby="input-nama" name="nama" required>
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
                                placeholder="Masukkan Email Anda" aria-describedby="input-email" name="email" required>
                            <div id="input-email" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" id="password"
                                placeholder="buat password Anda" aria-describedby="input-password" name="password"
                                required>
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
                                        placeholder="Masukkan Luas Tanah" aria-describedby="input-luas" name="luas"
                                        required>
                                    <div id="input-luas" class="form-text"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control rounded-0" id="lokasi" placeholder="Masukkan Lokasi"
                                aria-describedby="input-lokasi" name="lokasi" required>
                            <div id="input-lokasi" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="kronologi" class="form-label">Kronologi</label>
                            <textarea id="kronologi" class="form-control rounded-0" placeholder="Masukkan Kronologi"
                                aria-describedby="input-kronologi" name="kronologi" cols="30" rows="10"
                                required></textarea>
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
                                    <input type="number" class="form-control rounded-0" id="anggaran_pengacara-s"
                                        placeholder="Anggaran mulai dari ..."
                                        aria-describedby="input-anggaran_pengacara-s" name="anggaran_pengacara-s">
                                </div>
                                <div class="col-1 text-center"
                                    style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                    -
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control rounded-0" id="anggaran_pengacara-e"
                                        placeholder="Sampai ..." aria-describedby="input-anggaran_pengacara-e"
                                        name="anggaran_pengacara-e">
                                </div>
                            </div>
                        </div>

                        <div id="pengembalian_dana" class="alert alert-danger pemerintah" role="alert">
                            <strong>
                                Saya hanya membutuhkan pertolongan agar permasalahan sengketa tanah saya diteruskan pada
                                Pemerintah.
                            </strong>
                        </div>

                        <div class="mb-2 sponsor">
                            <label for="keb_dana" class="form-label">Jumlah Dana Sponsor</label>
                            <input type="number" class="form-control rounded-0" id="keb_dana"
                                placeholder="Sebutkan Nilai Kebutuhan" aria-describedby="input-keb_dana" name="keb_dana"
                                required>
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
                                rekomendasikan untuk kasus-kasus sengketa tanah yang berat. Tanda bintang(*) adalah
                                pembagian untuk sponsor. </small>
                        </div>

                        <div class="mb-2 sponsor">
                            <label class="form-label" for="jaminan_dana">Jaminan Dana Sponsor</label>
                            <select class="form-select rounded-0" aria-label="Default select example" name="jaminan"
                                required>
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
                        <div class="mb-2">
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
                        </div>
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" style="text-align:justify" for="exampleCheck1">Dengan
                                mengisi form ini saya
                                menyatakan bahwa semua data yang diberikan benar adanya dan laporan ini tidak
                                sedang dalam penanganan hukum pihak lain. Saya bersedia melakukan wawancara mendalam di
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
        </script>
        <script type="text/javascript" src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>
        <script>
            $(document).ready(function () {
                var table = $('#myTable').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true
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

            $(document).ready(function () {
                $("#carouselExampleControls").swiperight(function () {
                    $(this).carousel('prev');
                });
                $("#carouselExampleControls").swipeleft(function () {
                    $(this).carousel('next');
                });
            });

            $(document).ready(function () {
                $("#carouselExampleControls").swiperight(function () {
                    $(this).carousel('prev');
                });
                $("#carouselExampleControls").swipeleft(function () {
                    $(this).carousel('next');
                });
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

            $(document).ready(function () {
                $(".tab").click(function () {
                    $(".tab").removeClass("active");
                    // $(".tab").addClass("active"); // instead of this do the below 
                    $(this).addClass("active");
                });
            });

        </script>

</body>

</html>
