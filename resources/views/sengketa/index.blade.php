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
    <style>
        html,
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
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

    </style>
</head>

<body class="bg-light">
    <div class="container mt-3" id="card2">
        <div class="row justify-content-center mb-1">
            <div class="col-md-5">
                <img src="{{asset('/uploads/sengketa_tanah.png')}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center mb-3 text-center">
            <h2>
                <div class="fw-bold"> <br>SOLUSI SENGKETA TANAH</div>
            </h2>
            <p style="text-align: justify">Platform Sengketa Tanah adalah inovator teknologi dalam bidang sengketa
                pertanahan di Indonesia yang mempertemukan korban sengketa tanah dengan sponsor, pengacara dan
                pemerintah. Sekarang, semua masalah pertanahan menjadi lebih mudah untuk dibantu.</p>
            <p style="text-align: justify">Banyak korban sengketa tanah kehabisan biaya dan tenaga untuk memperjuangkan
                hak mereka. Disini, jika Anda menemui masalah tersebut, Platform Sengketa Tanah adalah alat yang paling
                tepat untuk menemukan bantuan Sponsor, Pengacara bahkan bantuan Pemerintah untuk membantu perjuangan
                Anda.</p>
        </div>

        <div class="row mb-3">
            <div class="card-body bg-danger text-white text-center">
                <h4 class="card-title p-3 fw-bolder">PILIH KLASIFIKASI ANDA</h5>
            </div>
        </div>
        @if(Session::has('error'))
        <div class="row mb-3">
            {{Session::get('error')}}
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-6">
                <button type="button" data-bs-toggle="modal" data-bs-target="#korbanSengketaModal"
                    class="btn btn-glass btn-dark w-100 mt-2 mb-2">Korban <br> Sengketa</a>
            </div>
            <div class="col-6">
                <a type="button" data-bs-toggle="modal" data-bs-target="#formSponsoranModal"
                    class="btn btn-glass btn-dark w-100 mt-2 mb-2">Form <br> Sponsor</a>
            </div>
            <div class="col-6">
                <a type="button" data-bs-toggle="modal" data-bs-target="#formLawFirmModal"
                    class="btn btn-glass btn-dark w-100 mt-2 mb-2">Form <br> Pengacara</a>
            </div>
            <div class="col-6">
                <!-- <a type="button" data-bs-toggle="modal" data-bs-target="#dataSengketaModal"
                    class="btn btn-glass btn-dark w-100 mt-2 mb-2">Data <br> Sengketa</a> -->

                <a type="button" href="{{url('/')}}/data-sengketa" class="btn btn-glass btn-dark w-100 mt-2 mb-2">Data
                    <br> Sengketa</a>

            </div>
        </div>

        <div class="row mt-4">
            <div class="fom-gup d-flex justify-content-between">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-solid fa-pen-to-square fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="fw-bold">Tulis Laporan</div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-white"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-solid fa-share fa-stack-1x "></i>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="fw-bold">Proses Verifikasi</div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-white"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-solid fa-handshake fa-stack-1x "></i>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="fw-bold">Proses Kesepakatan</div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-white"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-solid fa-scale-balanced fa-stack-1x "></i>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="fw-bold">Proses Hukum</div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-white"
                                style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                            <i class="fa-regular fa-circle-check fa-stack-1x "></i>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="fw-bold">Selesai</div>
                    </div>
                </div>

            </div>
        </div>

        <iframe class="mt-4" width="100%" height="315" src="https://www.youtube.com/embed/7H7sWToPY0c"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <div class="row mt-2 justify-content-center">
            <a href="https://berita.sengketatanah.id" class="btn btn-outline-primary text-center rounded-0 w-75">BERITA
                SENGKETA TANAH</a>
        </div>

        <div class="row mt-3">
            <div class="card-body bg-danger text-white text-center">
                <h4 class="card-title p-3 pb-0 fw-bolder">JUMLAH SENGKETA MASUK</h4>
                <h1 class="card-title p-3 fw-bolder display-3">517</h1>
            </div>
        </div>

        <div class="row">
            <div class="card-body text-center">
                <div class="row mt-2">
                    <div class="col">
                        <h1 class="card-title p-3 pb-0 fw-bolder display-3 text-danger">423</h1>
                        <p class="card-title p-3 pt-0 fw-bolder">KORBAN <br> SENGKETA</p>
                    </div>
                    <div class="col">
                        <h1 class="card-title p-3 pb-0 fw-bolder display-3 text-danger">521</h1>
                        <p class="card-title p-3 pt-0 fw-bolder">TOTAL <br> SPONSOR</p>
                    </div>
                    <div class="col">
                        <h1 class="card-title p-3 pb-0 fw-bolder display-3 text-danger">356</h1>
                        <p class="card-title p-3 pt-0 fw-bolder">TOTAL <br> PENGACARA</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card-body text-center bg-success">
                <h4 class="card-title p-3 pb-0 pt-0 fw-bolder display-3 text-white">237 KASUS SELESAI!</h4>
            </div>
        </div>

        <div class="card-body text-center mt-5">
            <h2 class="card-title fw-bolder">DUKUNGAN PEMERINTAH</h4>
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
                            <p class="card-text">"Sesuai perintah Bapak Presiden, semua kasus mafia tanah yang ada di
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
                                <p class="card-text">"Presiden Joko Widodo menegaskan kepada Kementerian ATR/BPN untuk
                                    serius dalam memberantas mafia tanah" <br> -<b> Ir. H. Joko Widodo (Presiden RI)</b>
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
                                <p class="card-text">"Sesuai perintah Bapak Presiden, semua kasus mafia tanah yang ada
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
        </div>

        <div class="row justify-content-center text-center">
            <h2>
                <div class="fw-bold"> <br>TENTANG KAMI</div>
            </h2>
            <p style="text-align: justify">SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan masalah
                sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa tanah atau korban mafia
                tanah dengan Sponsor dan Kantor hukum untuk menuntaskan masalah persengketaan tanah tersebut. <a
                    href="#">Pelajari Platform Sengketa Tanah Lebih Lanjut</a></p>
        </div>

        <div class="row justify-content-center text-center mb-4">
            <h2>
                <div class="fw-bold"> <br>HUBUNGI KAMI</div>
            </h2>
            <a href="https://wa.me/6281235757667" class="btn btn-success w-25">Whatsapp</a>
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

        </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
        <div class="row mt-4">
            <div class="card-body bg-dark text-white text-center">
                <p></p>
                <img src="{{asset('/uploads/sengketa-logo.png')}}" alt="" srcset="" class="img-fluid">
                <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved</p>
                <hr>
                <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No. 36,
                    TB Simatupang, Jakarta Selatan</p>
            </div>
        </div>


        <!--<div class="world-news mt-4">-->
        <!--    <div class="row">-->
        <!--        <div class="col-sm-12">-->
        <!--            <div class="d-flex position-relative  float-left">-->
        <!--                <h3 class="section-title">Berita Sengketa Tanah</h3>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">-->
        <!--            <div class="position-relative image-hover">-->
        <!--                <img src="https://img.antaranews.com/cache/800x533/2022/09/11/IMG-20220909-WA0012.jpg.webp"-->
        <!--                    class="img-fluid" alt="world-news" />-->
        <!--                <span class="thumb-title">Berita</span>-->
        <!--            </div>-->
        <!--            <h5 class="font-weight-bold mt-3">-->
        <!--                Kejari Tanjungpinang pakai kearifan lokal tangani sengketa tanah-->
        <!--            </h5>-->
        <!--            <p class="fs-15 font-weight-normal">-->
        <!--                Tanjungpinang (ANTARA) - Kejaksaan Negeri Tanjungpinang di Provinsi Kepulauan Riau mengupayakan-->
        <!--                Sponsoran sengketa tanah melalui kearifan...-->
        <!--            </p>-->
        <!--            <a href="#" class="font-weight-bold text-dark pt-2">Baca Article</a>-->
        <!--        </div>-->
        <!--        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">-->
        <!--            <div class="position-relative image-hover">-->
        <!--                <img src="https://cdn-2.tstatic.net/pontianak/foto/bank/images/Glorio-Sanen-tengah.jpg"-->
        <!--                    class="img-fluid" alt="world-news" />-->
        <!--                <span class="thumb-title">Berita</span>-->
        <!--            </div>-->
        <!--            <h5 class="font-weight-bold mt-3">-->
        <!--                Minta Polisi Telusuri Siapa Aktor Keributan saat Sidang Lapangan Sengketa Tanah di Sungai Raya-->
        <!--            </h5>-->
        <!--            <p class="fs-15 font-weight-normal">-->
        <!--                TRIBUN PONTIANAK.CO.ID, PONTIANAK - Keributan berujung pengeroyokan saat Sidang Lapangan kasus-->
        <!--                Sengketa Tanah di Kecamatan Sungai Raya,...-->
        <!--            </p>-->
        <!--            <a href="#" class="font-weight-bold text-dark pt-2">Baca Article</a>-->
        <!--        </div>-->

        <!--        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">-->
        <!--            <div class="position-relative image-hover">-->
        <!--                <img src="https://www.lampost.co/upload/sengketa-20-tahun-lebih-ahli-waris-poerba-ratoe-pasang-klaim-pemilik-tanah-di-desa-sumbermarga.jpeg"-->
        <!--                    class="img-fluid" alt="world-news" />-->
        <!--                <span class="thumb-title">Berita</span>-->
        <!--            </div>-->
        <!--            <h5 class="font-weight-bold mt-3">-->
        <!--                Sengketa 20 Tahun Lebih, Ahli Waris Poerba Ratoe Pasang Klaim Pemilik Tanah di Desa Sumbermarga-->
        <!--            </h5>-->
        <!--            <p class="fs-15 font-weight-normal">-->
        <!--                Sukadana (Lampost.co): Sejumlah ahli waris kepemilikan atas tanah ... setempat terkesan lamban-->
        <!--                menyelesaikan sengketa lahan yang telah...-->
        <!--            </p>-->
        <!--            <a href="#" class="font-weight-bold text-dark pt-2">Baca Article</a>-->
        <!--        </div>-->

        <!--        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">-->
        <!--            <div class="position-relative image-hover">-->
        <!--                <img src="https://foto.kontan.co.id/k8Db13gKrn714uLSuWWu-eN4_xA=/smart/2021/03/08/656651036p.jpg"-->
        <!--                    class="img-fluid" alt="world-news" />-->
        <!--                <span class="thumb-title">Berita</span>-->
        <!--            </div>-->
        <!--            <h5 class="font-weight-bold mt-3">-->
        <!--                Kasus Sengketa Tanah di Gili Trawangan, Kementerian ATR/BPN: Selesaikan Secara Adil-->
        <!--            </h5>-->
        <!--            <p class="fs-15 font-weight-normal">-->
        <!--                Lebih lanjut dia mengatakan, terdaftarnya seluruh bidang tanah hingga Sponsoran sengketa dan-->
        <!--                konflik pertanahan, tak lain adalah bertujuan...-->
        <!--            </p>-->
        <!--            <a href="#" class="font-weight-bold text-dark pt-2">Baca Article</a>-->
        <!--        </div>-->

        <!--    </div>-->
        <!--</div>-->
    </div>

    <!-- Modal -->
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

    <!-- Modal -->
    <div class="modal fade" id="formSponsoranModal" tabindex="-1" aria-labelledby="formSponsoranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <div class="row">
                        <div class="col-12 text-center text-upppercase">
                            <h5 class="modal-title text-uppercase" id="formSponsoranModalLabel">Buat Akun Sponsor</h5>
                        </div>
                        <div class="col-12 text-center">
                            <h6 class="modal-title" style="font-size:12px">Sponsor adalah orang/badan usaha/kelompok
                                yang membiayai urusan hukum korban sengketa tanah*</h6>
                        </div>
                    </div>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-0" id="nama" aria-describedby="input-nama"
                                name="nama" required>
                            <div id="input-nama" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control rounded-0" id="Alamat"
                                aria-describedby="input-Alamat" name="alamat" required>
                            <div id="input-Alamat" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">Nomor Hp</label>
                            <input type="number" class="form-control rounded-0" id="no_hp"
                                aria-describedby="input-no_hp" name="no_hp" required>
                            <div id="input-no_hp" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" id="no_hp" aria-describedby="input-no_hp"
                                name="no_hp" required>
                            <div id="input-no_hp" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" id="password"
                                aria-describedby="input-password" name="password" required>
                            <div id="input-password" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Pengelolaan Dana</label>
                            <select class="form-select rounded-0" aria-label="Default select example"
                                name="pengelolaan_dana" required>
                                <option selected disabled>Pilih Pengelolaan</option>
                                <option value="sendiri">Dikelola Sendiri</option>
                                <option value="platform">Dikelola Platform</option>
                            </select>
                        </div>

                        <div id="pengembalian_dana" class="alert alert-danger pengelolaan-sendiri" role="alert">
                            <strong>
                                Anda akan mengelola dana Anda sendiri dan bebas memilih sengketa pertanahan yang paling
                                baik untuk Anda selesaikan.
                            </strong>
                        </div>

                        <div id="pengembalian_dana" class="alert alert-danger pengelolaan-platform" role="alert">
                            <strong>
                                Dikelola platform
                                adalah pengelolaan sumber dana sponsor yang dijalankan oleh platform SENGKETA TANAH.
                                Platform akan memberikan analisa seputar persengketaan tanah yang bisa diselesaikan dan
                                menguntungkan. Semua persetujuan penggunaan dana tetap merupakan keputusan
                                sponsor.
                            </strong>
                        </div>

                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" style="text-align:justify" for="exampleCheck1">Dengan
                                mengisi form ini saya
                                menyatakan bahwa saya selaku pribadi dan atau badan usaha dan atau sebuah kelompok
                                tertarik untuk membantu persoalan sengketa tanah sebagai Sponsor. Hal-hal lain
                                yang timbul sebagai Sponsor, baik berupa biaya-biaya operasional korban, biaya pengacara
                                dan biaya proses-proses
                                hukum lainnya siap saya tanggung termasuk biaya fee platform atas keberhasilan
                                persengketaan.</label>
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

    <!-- Modal -->
    <div class="modal fade" id="formLawFirmModal" tabindex="-1" aria-labelledby="formLawFirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <h5 class="modal-title text-uppercase" id="formSponsoranModalLabel">Buat Akun Pengacara</h5>
                        </div>
                        <div class="col-12 text-center">
                            <h6 class="modal-title" style="font-size:12px">Pengacara adalah seorang pribadi atau badan
                                hukum (Law Firm) yang menangani sengketa tanah*</h6>
                        </div>
                    </div>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-0" id="nama" aria-describedby="input-nama"
                                name="nama" required>
                            <div id="input-nama" class="form-text"></div>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Mewakili</label>
                            <select class="form-select rounded-0" aria-label="Default select example" name="mewakili"
                                required>
                                <option value="pribadi">Pribadi</option>
                                <option value="law-firm">Law Firm</option>
                            </select>
                        </div>

                        <div class="mb-2 law-firm">
                            <label for="nama-law" class="form-label">Nama Law Firm</label>
                            <input type="text" class="form-control rounded-0" id="nama-law"
                                aria-describedby="input-nama-law" name="nama-law">
                            <div id="input-nama" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control rounded-0" id="Alamat"
                                aria-describedby="input-Alamat" name="alamat" required>
                            <div id="input-Alamat" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">Nomor Hp</label>
                            <input type="number" class="form-control rounded-0" id="no_hp"
                                aria-describedby="input-no_hp" name="no_hp" required>
                            <div id="input-no_hp" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" id="no_hp" aria-describedby="input-no_hp"
                                name="no_hp" required>
                            <div id="input-no_hp" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" id="password"
                                aria-describedby="input-password" name="password" required>
                            <div id="input-password" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="logo_lawfirm" class="form-label">Logo Law Firm/Foto Pribadi</label>
                            <input class="form-control rounded-0" type="file" id="logo_lawfirm" name="logo_lawfirm"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="tentang" class="form-label">Tentang Anda/Law Firm Anda</label>
                            <textarea id="tentang" class="form-control rounded-0"
                                placeholder="Ceritakan Profil Law Firm Anda" aria-describedby="input-tentang"
                                name="tentang" cols="30" rows="10" required></textarea>
                            <div id="input-tentang" class="form-text"></div>
                        </div>

                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" style="text-align:justify" for="exampleCheck1">Dengan
                                mengisi form ini saya
                                menyatakan bahwa saya mewakili pribadi/firma hukum tersebut menyatakan minat dan
                                tertarik
                                untuk membantu persoalan sengketa tanah sebagai kuasa hukum pada platform SENGKETA
                                TANAH dan siap dikenakan biaya fee platform atas sebuah transaski jasa hukum yang
                                terjadi di dalam platform.</label>
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

    <!-- Modal -->
    <div class="modal fade" id="dataSengketaModal" tabindex="-1" aria-labelledby="dataSengketaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <h5 class="modal-title" id="dataSengketaModalLabel">Data Sengketa Masuk</h5>
                        </div>

                    </div>
                </div>
                <div class="modal-body p-0">
                    <center>
                        <div class="mt-2 mb-2">
                            <a href="#" class="btn btn-primary rounded-0" style="width:30%">Sponsor</a>

                            <a href="#" class="btn btn-success rounded-0" style="width:30%">Pengacara</a>

                            <a href="#" class="btn btn-warning rounded-0" style="width:30%">Pemerintah</a>
                    </center>
                </div>

                <div class="container">
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-11">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 mb-3">

                                            <span class="badge bg-dark float-end ml-1">Lihat Kronologi</span> <span
                                                class="float-end">&nbsp;</span>
                                            <span class="badge bg-danger float-end">Terverifikasi</span>
                                        </div>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>Owner</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Objek Sengketa</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Objek</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Kebutuhan Dana</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>Imbal Hasil</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jaminan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>Jumlah Bid</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                    </table>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary mt-2" type="button">Bid Sengketa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-11 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 mb-3">

                                            <span class="badge bg-dark float-end ml-1">Lihat Kronologi</span> <span
                                                class="float-end">&nbsp;</span>
                                            <span class="badge bg-danger float-end">Terverifikasi</span>
                                        </div>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>Owner</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Objek Sengketa</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Objek</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Kebutuhan Lawyer</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>Pembayaran</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>Sesuai Kesepakatan</td>
                                        </tr>


                                        <tr>
                                            <td>Jumlah Bid</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                    </table>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success mt-2" type="button">Bid Sengketa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-11 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 mb-3">
                                            <span class="badge bg-dark float-end ml-1">Lihat Kronologi</span> <span
                                                class="float-end">&nbsp;</span>
                                            <span class="badge bg-danger float-end">Terverifikasi</span>
                                        </div>
                                    </div>
                                    <table>
                                        <tr>
                                            <td>Owner</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Objek Sengketa</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Objek</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Kebutuhan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>Diteruskan pada Pemerintah</td>
                                        </tr>
                                    </table>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-warning mt-2" type="button">Bid Sengketa</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--<table class="table" style="width:100%" id="myTable">-->
                    <!--    <thead class="thead-dark">-->
                    <!--        <tr>-->
                    <!--            <th>No</th>-->
                    <!--            <th>Nama</th>-->
                    <!--            <th>Objek</th>-->
                    <!--            <th>Luas</th>-->
                    <!--            <th>Lokasi</th>-->

                    <!--            <th>Kebutuhan Dana</th>-->
                    <!--            <th>Pengembalian Dana</th>-->
                    <!--            <th>Jaminan Dana</th>-->
                    <!--            <th>Status Laporan</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <?php $i = 1; ?>-->
                    <!--@foreach($sengketa as $data)-->
                    <!--<tr>-->
                    <!--    <td>{{$i++}}</td>-->
                    <!--    <td>{{$data->nama}}</td>-->
                    <!--    <td>{{$data->objek_sengketa}}</td>-->
                    <!--    <td>{{$data->lokasi}}</td>-->
                    <!--    <td>{{$data->luas}} meter</td>-->
                    <!--    <td></td>-->
                    <!--    <td></td>-->
                    <!--    <td></td>-->
                    <!--    <td>-->
                    <!--        @if($data->status_laporan == 1)-->
                    <!--        <span class="badge bg-primary">Menunggu Verifikasi</span>-->
                    <!--        @elseif($data->status_laporan == 2)-->
                    <!--        <span class="badge bg-dark">Terverifikasi</span>-->
                    <!--        @elseif($data->status_laporan == 3)-->
                    <!--        <span class="badge bg-warning">Diproses</span>-->
                    <!--        @elseif($data->status_laporan == 4)-->
                    <!--        <span class="badge bg-success">Selesai</span>-->
                    <!--        @endif-->
                    <!--    </td>-->
                    <!--</tr>-->
                    <!--@endforeach-->
                    <!--    </tbody>-->
                    <!--</table>-->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

    </script>

</body>

</html>
