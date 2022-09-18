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
                        <a class="nav-link" aria-current="page" href="{{url('/')}}/layanan">Layanan</a>
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
                        <a class="nav-link" href="#">Bid Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/tentang-pemerintah">Tentang Pemerintah</a>
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
                    <a type="button" href="{{url('')}}/bid-sengketa" 
                    style="
                    border: 0px;
                    background: linear-gradient(90deg, rgba(223,189,105,1) 0%, rgba(146,111,52,1) 100%);"
                    class="btn rounded-5 text-white mt-3">Bergabung</a>
    
            </div>
        </div>


    </div>
    
    <div class="container mt-5" id="card2">

        @if(Session::has('error'))
        <div class="row mb-3">
            {{Session::get('error')}}
        </div>
        @endif

        <div class="card-body text-center mt-4">
            <h2 class="card-title fw-bolder" style="color: #61481C">DUKUNGAN PEMERINTAH</h4>
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

        <div class="row text-center fw-bold fs-3" style="padding:10px; color: #61481C">
            "Platform Sengketa Tanah adalah aplikasi yang paling tepat untuk membantu perjuangan Anda dalam persengketaan masalah tanah"
        </div>

        <div class="row mt-2" style="padding: 10px">
            <div class="card p-0 rounded-3 shadow">
                <div class="card-header text-white" style="background-color: #61481C;">
                    <h4 class="mb-0 fw-bolder text-center">4 ROLE PENGGUNA</h4>
                </div>
                <div class="card-body text-dark">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C"><i class="fa-solid fa-person"></i>
                                        Korban Sengketa</h4>
                                    <hr>
                                    Korban adalah orang yang dirugikan, dirampas, atau kehilangan hak atas tanah yang
                                    dimilikinya
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C"><i
                                            class="fa-solid fa-user-tie"></i> Sponsor</h4>
                                    <hr>
                                    Sponsor adalah orang/badan usaha/kelompok yang membiayai urusan hukum korban
                                    sengketa tanah
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C"><i class="fa-solid fa-gavel"></i>
                                        Pengacara</h4>
                                    <hr>
                                    Pengacara adalah seorang pribadi atau badan hukum (Law Firm) yang menangani sengketa
                                    tanah
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-3 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" style="width:185px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:#61481C">
                                        Pemerintah</h4>
                                    <hr>
                                    Pemerintah adalah kementerian yang mempunyai tugas menyelenggarakan urusan di bidang agraria/pertanahan dan tata ruang dalam pemerintahan untuk membantu Presiden dalam menyelenggarakan pemerintahan negara
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

            <a class="btn text-white mt-4" style="background: #61481C">Daftar Sekarang</a>
        </div>

        {{-- <div class="row justify-content-center mb-3 mt-2">
            <div class="col-lg-12">
                <h3 class="text-center">
                    <span class="text-dark fw-bold text-uppercase">Jaminan</span>
                </h3>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>1. Laporan Sengketa Terverifikasi</b></h6>
                        Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor, Pengacara).
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>2. Sponsor Terverifikasi</b></h6>
                        Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah Anda.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>3. Pengacara Terverifikasi</b></h6>
                        Upload dan kirimkan dokumen pendukung laporan Anda.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>4. Pembayaran Aman</b></h6>
                        Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan hukum pengacara, dan
                        bantuan pemerintah.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>5. Bantuan Analisa</b></h6>
                        Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>6. Kesepakatan Terlindungi</b></h6>
                        Yay! Selamat, kamu telah mendapatkan.
                    </div>
                </div>

                <div class="row g-2 mt-2">
                    <div class="col-12">
                        <h6 class="text-primary"><b>7. Bantuan Customer Support</b></h6>
                        Yay! Selamat, kamu telah mendapatkan.
                    </div>
                </div>

            </div>
        </div> --}}
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
                    tanah dengan Sponsor dan Kantor hukum untuk menuntaskan masalah persengketaan tanah tersebut.</p>

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
