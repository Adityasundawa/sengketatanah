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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #eee;
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .bg-brown {
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

        .text-brown{
            color: #61481C !important;
        }

        .text-light-brown{
            color: #BF9742 !important;
        }

        .text-lighter-brown{
            color: #E6B325 !important;
        }

        .card {
            border-radius: 15px;
        }

        .card.card-main {
            background-color: #E6B325; 
        }

        .card.kriteria {
            background-color: #BF9742; 
        }

        .card.card-child {
            position: relative;
            width: 90%;
            bottom: 45px;
            margin-left: auto;
            margin-right: auto;
        }

        .text-child-item {
            font-size: 12px
        }

        .image-collab {
            width: 230px;
        }
        
        @media (max-width: 1199.98px) { 
            .card.card-child {
                width: 95%;
            }
        }

        @media (max-width: 991.98px) { 
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 50%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }

            .image-collab {
                width: 200px;
            }
        }

        @media (max-width: 767.98px) { 
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 75%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }

            .card-main .card-body .p-5{
                padding: 0 !important;
                padding-bottom: 3rem !important
            }

            .card-main .card-body .p-5 .col-md-7.mt-5{
                margin-top: 1.5rem !important;
            }
        }

        @media (max-width: 320.98px) {
            .image-collab {
                width: 180px;
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}/bid-sengketa">Bid Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast Sengketa</a>
                    </li> -->
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
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        
        <div class="card border-0 card-main">
            <div class="card-body">
                <div class="row p-5 g-0">
                    <div class="col-md-12 text-center mb-3">
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1 style="font-weight: 700">Solusi Tepat dan Terpercaya Untuk Membantu Masalah Pertanahan Anda</h1>  
                    </div>
                    <div class="col-md-12 mt-4">
                        <p class="mb-0">Kami mempertemukan korban sengketa tanah atau korban mafia tanah dengan Sponsor, Kantor Hukum, dan Pemerintah untuk menuntaskan masalah persengketaan tanah yang anda alami.</p>  
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card border-0 text-white card-child bg-brown">
            <div class="card-body">
                <div class="row align-items-center px-2 text-child-item">
                    <div class="col-lg-12">
                        <h5>Apa Yang Anda Dapatkan di Sengketatanah.id</h5>
                    </div>
                    <div class="col-lg jual-sekarang mt-1">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pendanaan dari sponsor
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pengacara dan kantor hukum
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan advokasi pada pemerintah
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan konsultasi dan mediasi
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan negoisasi dan penyelesaian
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan wawancara Podcast
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang text-end"><button class="btn btn-light text-brown rounded-3 fw-bold w-100">Daftar Sekarang</button></div>
                </div>
            </div>
        </div>

        <div class="row pt-5 mb-5">
            <div class="col-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Bekerjasama Dengan:</h3>
                <img class="mt-4 image-collab" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" alt="">
            </div>
        </div>

        <div class="row text-center pt-4 mb-4">
            <h2 class="fw-bold text-brown">"Jika Anda Membutuhkan Bantuan Pendanaan Untuk Menyelesaikan Masalah Sengketa Pertanahan, Ini Adalah Aplikasi yang Tepat"</h2>
        </div>
        

        <div class="row mb-5 pt-4 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">3 Langkah Mencari Bantuan Sponsor</h3>
            </div>
            <div class="col-md-7 mt-4">
                <div class="row justify-content-center text-center g-2">
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-brown"></i>
                            <i class="fa-solid fa-file-lines fa-stack-1x text-white"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Masukkan data tanah Anda</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-file-signature fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Tentukan kebutuhan, jaminan, dan pengembalian</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-handshake fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Dapatkan sponsor</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">4 Roles Dalam Penyelesaian Sengketatanah.id</h3>
            </div>
            <div class="card mt-4">
                <div class="card-body p-5">
                    <div class="row">
                        
                        <div class="col-md-6 mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <h3>Pemerintah</h3>
                                    <div class="mt-3">Kementerian ATR/BPN yang menyelenggarakan urusan di bidang
                                        agraria/pertanahan dan tata ruang.</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <h3>Korban Sengketa</h3>
                                    <div class="mt-3">Korban adalah orang yang dirugikan, dirampas, atau terancam kehilangan hak atas tanah yang
                                        dimilikinya.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <h3>Sponsor</h3>
                                    <div class="mt-3">Sponsor adalah orang/badan usaha/kelompok yang membiayai urusan hukum korban
                                        sengketa tanah.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <h3>Pengacara</h3>
                                    <div class="mt-3">Pengacara adalah seorang pribadi atau badan hukum (Law Firm) yang menangani persoalan sengketa
                                        tanah.
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-3 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700"><i class="fa-solid fa-gears"></i> Apa Saja Layanan Sengketatanah.id</h3>
            </div>
            <div class="card kriteria mt-4">
                <div class="card-body p-5">
                    <div class="row">
                        
                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/bid-sengketa">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="86px" x="0" y="0" viewBox="0 0 50 60"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="25" cx="25" cy="30" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,7.500000286102296,9)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="001---Bid-Sign" fill="rgb(0,0,0)" fill-rule="nonzero">
                                                        <path id="Shape"
                                                            d="m3 52h8.072c.4576865.0004997.9089573.107668 1.318.313l1.456.733c2.5817025 1.2790372 5.42284 1.9475804 8.304 1.954h2.63c.5642399.6337052 1.3715062.9973386 2.22 1v1c0 1.6568542 1.3431458 3 3 3s3-1.3431458 3-3v-1c1.1856144.005247 2.2620981-.691231 2.7432243-1.7748484.4811261-1.0836175.2758048-2.3492169-.5232243-3.2251516 1.0400491-1.1305142 1.0400491-2.8694858 0-4 1.0400491-1.1305142 1.0400491-2.8694858 0-4 .5806193-.6333292.85885-1.4868812.7629994-2.3407179-.0958505-.8538368-.5564082-1.6244534-1.2629994-2.1132821 1.9862979-.6121975 3.325279-2.4679926 3.28-4.546 0-1.1045695-.8954305-2-2-2h-3v-2h14c1.6568542 0 3-1.3431458 3-3v-24c0-1.65685425-1.3431458-3-3-3h-34c-1.6568542 0-3 1.34314575-3 3v24c0 1.6568542 1.3431458 3 3 3h14v2h-2.64c-4.3481249.0027575-8.558163 1.5272159-11.9 4.309-.5364453.4462991-1.2121774.6907656-1.91.691h-7.55c-1.65685425 0-3 1.3431458-3 3v9c0 1.6568542 1.34314575 3 3 3zm22-11c0-.5522847.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1zm9 4c0 .5522847-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1zm-1 3c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1zm-2 9c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-1h2zm2-3h-6c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h6c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1zm3-20c0 2.1-1.684 2.748-3 2.932v-2.932zm-24-7v-24c0-.55228475.4477153-1 1-1h34c.5522847 0 1 .44771525 1 1v24c0 .5522847-.4477153 1-1 1h-34c-.5522847 0-1-.4477153-1-1zm19 3v8h-2v-8zm-29 10c0-.5522847.44771525-1 1-1h7.55c1.1656656-.0009424 2.2943701-.4091295 3.191-1.154 2.982163-2.4823219 6.7388958-3.8429391 10.619-3.846h2.64v4h-1c-1.1856144-.005247-2.2620981.691231-2.7432243 1.7748484-.4811261 1.0836175-.2758048 2.3492169.5232243 3.2251516-1.0400491 1.1305142-1.0400491 2.8694858 0 4-.5967576.6515543-.8725607 1.5349101-.752536 2.4102596s.6234232 1.6518641 1.373536 2.1187404c-.2595214.4470314-.3977522.9541075-.401 1.471h-1.85c-2.570894-.0058162-5.1060912-.602152-7.41-1.743l-1.451-.731c-.6882064-.3448961-1.4472076-.5249748-2.217-.526h-8.072c-.55228475 0-1-.4477153-1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m25 11c-.0033061-2.76005315-2.2399468-4.99669388-5-5h-3c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2h3c2.1566753.0062173 4.0727751-1.3751502 4.7484261-3.423267.675651-2.0481169-.0423886-4.2984577-1.7794261-5.576733 1.272967-.9358543 2.0265663-2.4200479 2.031-4zm-2 8c0 1.6568542-1.3431458 3-3 3h-3v-6h3c1.6568542 0 3 1.3431458 3 3zm-3-5h-3v-6h3c1.6568542.00000003 2.9999999 1.34314578 2.9999999 3 0 1.6568542-1.3431457 3-2.9999999 3z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m38 24h2c3.3123376-.0033074 5.9966926-2.6876624 6-6v-6c-.0033074-3.31233757-2.6876624-5.99669262-6-6h-2c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2zm0-16h2c2.209139 0 4 1.790861 4 4v6c0 2.209139-1.790861 4-4 4h-2z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m34 23c0-.5522847-.4477153-1-1-1h-2v-14h2c.5522847 0 1-.44771525 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .44771525-1 1s.4477153 1 1 1h2v14h-2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Bid Sengketa</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jual-beli-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="32" cx="32" cy="32" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,9.600008887052539,9.600000000000001)">
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m62.9 52.553-10-20a1 1 0 0 0 -.9-.553h-17v-6h12a1 1 0 0 0 1-1v-18a1 1 0 0 0 -1-1h-30a1 1 0 0 0 -1 1v18a1 1 0 0 0 1 1h12v6h-17a1 1 0 0 0 -.895.553l-10 20a1 1 0 0 0 -.105.447v4a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1v-4a1 1 0 0 0 -.1-.447zm-59.282-.553 4-8h10.6l-2 8zm16.662-8h10.72v8h-12.72zm20.939-10 2 8h-10.219v-8zm-10.219 8h-10.22l2-8h8.22zm2 2h10.719l2 8h-12.719zm14.779 8-2-8h10.6l4 8zm7.6-10h-10.1l-2-8h8.1zm-37.379-34h28v16h-28zm13 18h2v6h-2zm-18.382 8h8.1l-2 8h-10.1zm-9.618 22v-2h58v2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m26.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m26.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m39.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m37.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m48.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m53.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m13.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m14.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m32 13a1 1 0 0 1 1 1h2a3 3 0 0 0 -2-2.816v-1.184h-2v1.184a2.993 2.993 0 0 0 1 5.816 1 1 0 1 1 -1 1h-2a3 3 0 0 0 2 2.816v1.184h2v-1.184a2.993 2.993 0 0 0 -1-5.816 1 1 0 0 1 0-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m37 13h4v2h-4z" fill="#61481c"
                                                    data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m37 17h4v2h-4z" fill="#61481c"
                                                    data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m23 13h4v2h-4z" fill="#61481c"
                                                    data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m23 17h4v2h-4z" fill="#61481c"
                                                    data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jual Beli Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/kerjasama-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 511.99992 511"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="255.99996" cx="255.99996" cy="255.5" fill="#f8f9fa" shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.79987218379975,75.92755157947542)">
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m509.914062 214.859375-85.695312-111.320313c-3.171875-4.117187-8.957031-5.132812-13.34375-2.34375l-55.328125 35.1875h-72.160156c-.933594 0-1.863281.199219-2.761719.460938l-55.949219 16.105469-58.054687-15.878907-56.410156-35.875c-4.3125-2.742187-9.992188-1.8125-13.199219 2.164063l-94.785157 117.40625c-3.40625 4.21875-2.84375 10.378906 1.265626 13.914063l49.679687 42.753906 44.570313 60.0625c-13.035157 13.886718-12.78125 35.789062.78125 49.355468 6.011718 6.007813 13.65625 9.402344 21.519531 10.191407-.273438 1.78125-.414063 3.589843-.414063 5.425781 0 9.476562 3.691406 18.386719 10.390625 25.085938 6.703125 6.703124 15.613281 10.394531 25.089844 10.394531.128906 0 .253906-.007813.378906-.011719-.003906.242188-.015625.480469-.015625.722656 0 9.476563 3.691406 18.386719 10.390625 25.089844 6.703125 6.699219 15.613281 10.390625 25.089844 10.390625 1.871094 0 3.722656-.152344 5.539063-.433594.769531 7.890625 4.171874 15.570313 10.203124 21.601563 6.914063 6.917968 16 10.375 25.085938 10.375s18.171875-3.457032 25.089844-10.375l5.425781-5.425782 2.277344 1.835938c6.859375 6.644531 15.765625 9.964844 24.671875 9.964844 9.085937 0 18.171875-3.457032 25.085937-10.375 7.058594-7.058594 10.515625-16.375 10.371094-25.644532 9.265625.140626 18.585937-3.3125 25.644531-10.367187 7.050782-7.054687 10.507813-16.363281 10.371094-25.628906 9.652344.152343 18.808594-3.554688 25.640625-10.386719 7.058594-7.058594 10.515625-16.375 10.371094-25.644531 9.273437.140625 18.585937-3.3125 25.644531-10.371094 12.046875-12.046875 13.597656-30.667969 4.664062-44.414063l32.542969-68.15625 48.925781-42.101562c4.042969-3.480469 4.660157-9.511719 1.40625-13.734375zm-402.914062-91.910156 40.5625 25.792969-88.238281 107.5-35.359375-30.433594zm5.722656 227.921875 12.242188-12.242188c.371094-.371094.761718-.722656 1.160156-1.050781 2.394531-1.953125 5.292969-3.117187 8.363281-3.394531.085938-.007813.175781-.007813.261719-.011719.4375-.035156.875-.058594 1.316406-.054687 4.195313.058593 8.09375 1.773437 10.984375 4.824218 5.671875 5.996094 5.367188 15.792969-.679687 21.839844l-11.871094 11.871094c-6.003906 6.003906-15.773438 6.003906-21.777344 0-6.003906-6.007813-6.003906-15.777344 0-21.78125zm31.496094 62.484375c-2.910156-2.90625-4.511719-6.773438-4.511719-10.886719s1.601563-7.980469 4.511719-10.890625l23.738281-23.738281c4.546875-4.546875 11.695313-5.792969 17.507813-3.023438 5.992187 2.855469 9.363281 9.359375 8.484375 15.902344-.46875 3.492188-2.09375 6.78125-4.585938 9.277344l-23.363281 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm35.84375 36.191406c-2.910156-2.90625-4.511719-6.773437-4.511719-10.886719 0-4.113281 1.601563-7.980468 4.511719-10.890625l23.734375-23.738281c4.863281-4.859375 12.664063-5.90625 18.617187-2.441406 5.4375 3.164062 8.285157 9.375 7.351563 15.5625-.511719 3.402344-2.128906 6.601562-4.5625 9.035156l-23.359375 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm40.828125 31.5625c-6.003906-6.003906-6.003906-15.773437 0-21.777344l12.242187-12.242187c.371094-.371094.757813-.71875 1.15625-1.046875.011719-.007813.019532-.015625.027344-.023438 1.992188-1.617187 4.332032-2.699219 6.828125-3.171875.058594-.007812.117188-.015625.175781-.023437.429688-.078125.867188-.140625 1.304688-.179688.175781-.015625.351562-.015625.53125-.027343.359375-.019532.714844-.042969 1.078125-.039063 4.191406.058594 8.09375 1.769531 10.984375 4.824219.355469.375.6875.765625.992188 1.167968 4.617187 6.035157 3.996093 15-1.734376 20.734376l-11.808593 11.808593c-6.003907 6.003907-15.773438 6-21.777344-.003906zm187.285156-112.042969c-6.003906 6.007813-15.773437 6.003906-21.777343 0-.21875-.21875-.449219-.421875-.683594-.613281l-64.554688-65.234375c-3.902344-3.941406-10.257812-3.972656-14.199218-.070312-3.941407 3.898437-3.972657 10.253906-.074219 14.195312l65.253906 65.933594c.007813.007812.015625.015625.023437.023437 6.003907 6.003907 6.003907 15.777344 0 21.78125-2.910156 2.910157-6.777343 4.511719-10.890624 4.511719-4.117188 0-7.984376-1.601562-10.890626-4.511719l-43.652343-44.105469c-3.898438-3.941406-10.253907-3.972656-14.195313-.074218-3.941406 3.902344-3.972656 10.257812-.074218 14.199218l42.984374 43.429688c.21875.273438.453126.535156.703126.785156 6.003906 6.003906 6.003906 15.777344 0 21.78125-6.007813 6.003906-15.78125 6-21.785157-.003906l-23.824219-24.074219c-3.902343-3.941406-10.257812-3.976562-14.199218-.074219-3.941406 3.898438-3.972656 10.253907-.074219 14.195313l23.160156 23.398437c.21875.273438.453125.539063.707031.789063 6.003907 6.003906 6.003907 15.777344 0 21.78125-6.003906 6.007813-15.773437 6.003906-21.777343 0-.691407-.691406-1.503907-1.222656-2.277344-1.816406-.65625-.5-.828125-.847657-.5-1.644531.332031-.808594.828125-1.539063 1.160156-2.351563.367188-.90625.664063-1.839844.953125-2.777344 1.539063-4.960937 1.992188-10.296875 1.300782-15.445312-1.328126-9.878907-6.761719-18.792969-14.996094-24.433594-4.449219-3.042969-9.597656-5.039063-14.933594-5.789063 2.585938-11.40625-.519531-23.773437-8.597656-32.308593-6.648438-7.023438-15.628906-10.964844-25.289063-11.097657-.351562-.003906-.703125-.003906-1.058593 0 .214843-9.21875-3.136719-18.378906-9.492188-25.09375-6.652344-7.023437-15.632812-10.964843-25.289062-11.097656-2.871094-.039062-5.769532.265625-8.566407.910156-1.195312-8.316406-5.386719-16.011718-11.734375-21.515624-6.308594-5.460938-14.242187-8.492188-22.691406-8.609376-8.894531-.128906-17.632812 3.152344-24.238281 9.117188l-38.808594-52.292969 92.84375-113.109375 29.589844 8.09375-38.644531 68.191406c-4.671876 8.246094-5.851563 17.816407-3.324219 26.949219 2.527343 9.136719 8.457031 16.738281 16.703125 21.410157.515625.292968 1.035156.570312 1.5625.835937.039062.019531.078125.039063.121094.058594 1.386718.691406 2.8125 1.285156 4.257812 1.785156 6.730469 2.332031 14 2.585937 21.011719.648437 9.132812-2.527343 16.734375-8.460937 21.40625-16.703124l25.113281-44.316407 44.839844 3.179688 119.402344 119.398437c6 6.007813 6 15.777344-.003907 21.78125zm4.160157-46.019531-112.011719-112.007813c-.210938-.214843-.433594-.417968-.664063-.609374-1.613281-1.34375-3.613281-2.15625-5.722656-2.304688l-54.902344-3.894531c-3.796875-.261719-7.570312 1.757812-9.445312 5.066406l-28.234375 49.828125c-2.027344 3.578125-5.328125 6.152344-9.292969 7.25-3.960938 1.097656-8.117188.582031-11.699219-1.445312-3.578125-2.027344-6.152343-5.328126-7.25-9.292969-1.097656-3.964844-.585937-8.121094 1.445313-11.699219l37.691406-66.519531 15.273438-4.394531c.101562-.03125.199218-.070313.300781-.101563l57.003906-16.460937h68.875l85.984375 109.304687zm40.503906-73.039063-79.515625-101.136718 40.582031-25.808594 74.300781 96.511719zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m310.183594 117.53125c2.570312 0 5.140625-.980469 7.101562-2.941406l68.578125-68.578125c3.921875-3.921875 3.921875-10.277344 0-14.199219s-10.277343-3.921875-14.199219 0l-68.578124 68.578125c-3.921876 3.921875-3.921876 10.277344 0 14.199219 1.960937 1.960937 4.53125 2.941406 7.097656 2.941406zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m194.714844 114.589844c1.960937 1.960937 4.53125 2.941406 7.101562 2.941406 2.566406 0 5.136719-.980469 7.097656-2.941406 3.921876-3.921875 3.921876-10.277344 0-14.199219l-68.578124-68.578125c-3.921876-3.921875-10.277344-3.921875-14.199219 0s-3.921875 10.277344 0 14.199219zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m256 117.53125c5.542969 0 10.039062-4.496094 10.039062-10.039062v-56.753907c0-5.542969-4.496093-10.039062-10.039062-10.039062s-10.039062 4.496093-10.039062 10.039062v56.753907c0 5.542968 4.496093 10.039062 10.039062 10.039062zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m246.734375 14.351562c1.59375 3.863282 5.566406 6.398438 9.757813 6.179688 4.140624-.214844 7.777343-3.011719 9.058593-6.953125 1.285157-3.972656-.113281-8.5-3.441406-11.03125-3.394531-2.5859375-8.128906-2.730469-11.679687-.382813-3.960938 2.617188-5.496094 7.828126-3.695313 12.1875zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Kerjasama Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/lelang-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 479.976 479.976"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="239.988" cx="239.988" cy="239.988" fill="#f8f9fa" shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Pelelangan Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-tukang-ukur">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="92px" x="0" y="0" viewBox="0 0 54 60"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="27" cx="27" cy="30" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,8.084528160095218,8.999380803108217)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="022---Tape-Measure" fill="rgb(0,0,0)" fill-rule="nonzero"
                                                        transform="translate(0 -1)">
                                                        <path id="Shape"
                                                            d="m35.264 1.609c-3.7378983-.44229717-7.5002037-.64571016-11.264-.609-13.458 0-24 5.271-24 12v16c0 5.383 6.783 9.917 16.775 11.445-2.7926667 2.016-5.7446667 4.0936667-8.856 6.233-.52171701.3581018-.84249019.9425814-.86438596 1.5749943s.25768537 1.2376783.75338596 1.6310057l13.344 10.677c.7075125.5643386 1.7047481.5868449 2.437.055 2.234-1.627 4.415-3.327 6.539-5.072 2.0666667-1.7006667 4.0666667-3.4456667 6-5.235.01-.011.024-.014.033-.025l.007-.012c1.8933333-1.75 3.708-3.5286667 5.444-5.336.021-.02.049-.028.068-.051s.016-.033.027-.048c1.274-1.329 2.516-2.666 3.689-4.011 3.332-3.822 7.478-8.577 8.268-14.434.806-5.974-.307-14.827-6.094-20.117-3.615-3.316-8.248-4.147-12.306-4.666zm-11.264 1.391c11.925 0 22 4.58 22 10 0 6.481-12.9 10-22 10-11.925 0-22-4.58-22-10s10.075-10 22-10zm-22 26v-11.126c3.67 4.233 12.033 7.126 22 7.126 5.2574546.0850922 10.482356-.8399846 15.391-2.725-6.137036 5.6608759-12.6126553 10.9432928-19.391 15.818v-5.093c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5.6c-1.6868152-.2203923-3.35715-.5524548-5-.994v-5.606c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5c-1.38319746-.4632171-2.72192488-1.0499144-4-1.753v-6.247c0-.5522847-.44771525-1-1-1s-1 .4477153-1 1v4.931c-1.9-1.482-3-3.176-3-4.931zm20.4 30-13.349-10.673c1.525-1.048 3.157-2.182 4.851-3.375.8795125.5637678 1.9341854.788068 2.967.631.6467275-.1382595 1.3217636.0033584 1.858396.3898785s.8848318.9819079.958604 1.6391215c.402216 2.320963 2.5831155 3.8968216 4.913 3.55.6475955-.1324477 1.3210571.0126426 1.8566662.3999993.535609.3873568.8843101.9815027.9613338 1.6380007.1115411.5302585.3016372 1.040889.564 1.515-1.819 1.467-3.681 2.902-5.581 4.285zm29.291-32.88c-.2314302 1.5810662-.7085194 3.1162541-1.414 4.55l-1.422-2c-.3203252-.4501121-.9448879-.5553252-1.395-.235s-.5553252.9448879-.235 1.395l1.991 2.8c-.9637169 1.5504227-2.0385323 3.0289622-3.216 4.424l-2.783-3.182c-.2344926-.2711789-.5962086-.3960829-.9480668-.3273765-.3518582.0687063-.6400157.3205093-.7552681.6599819-.1152523.3394726-.0399631.7146672.1973349.9833946l2.977 3.412c-.267.309-.532.614-.791.91-.974 1.118-2 2.23-3.046 3.337l-4.2-3.6c-.2690133-.2485449-.6523779-.3301409-.9992902-.2126907-.3469124.1174502-.6018621.415153-.66456.7760016-.0626979.3608485.0768884.7271025.3638502.9546891l4.117 3.533c-1.315 1.345-2.685 2.675-4.093 3.99l-4.725-4.048c-.2715218-.2322227-.6463077-.3019501-.9831793-.1829166-.3368717.1190335-.5846503.4087439-.6500001.7600001-.0653497.3512561.0616575.7106939.3331794.9429165l4.55 3.894c-1.4 1.273-2.857 2.52-4.334 3.75-.0840051-.2267706-.1538069-.4585525-.209-.694-.4011847-2.3176237-2.5798838-3.8905859-4.906-3.542-.6498109.1317688-1.3251096-.0145721-1.8620778-.4035225-.5369682-.3889505-.8865429-.9849718-.9639222-1.6434775-.3956791-2.3200929-2.5801354-3.8932042-4.906-3.533-.2990527.032209-.6006079.0338843-.9.005 11.38-8.1 24.973-18.56 30.1-25.628 1.2497329-1.3192534 1.9876535-3.0411864 2.081-4.856.052-3.144-2.156-5.638-4.789-7.387 1.0986623.52852923 2.1165304 1.21069956 3.023 2.026 4.878 4.462 6.256 12.442 5.457 18.372z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m23.969 19c4.091 0 10.919-1.174 12.678-4.88 1.194-2.516-.879-5.1-3.215-6.678-2.2044717-1.3965907-4.6319185-2.40518012-7.177-2.982-.778402-.19740877-1.6042675-.03956041-2.255.431-.3982804.28692111-.7127686.67493952-.911 1.124-6.945.227-12.089 2.953-12.089 6.485 0 4.715 7.876 6.5 12.969 6.5zm7.343-3.2.358-7.106c.2226667.13333333.4376667.26966667.645.409 3.756 2.532 3.677 4.942-1.003 6.697zm-6.456-8.717v-.019c.017091-.22037403.1305214-.42198743.31-.551.1701891-.12668716.3886521-.16934997.594-.116 1.3508165.33520878 2.6737454.77417913 3.957 1.313l-.438 8.706c-1.6840136.3905512-3.4072936.5865005-5.136.5840236zm-2.072.946-.639 8.9c-5.511-.398-9.145-2.538-9.145-4.429 0-1.977 3.965-4.19 9.784-4.471z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m27 11c-.5522847 0-1 .4477153-1 1v1c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-1c0-.5522847-.4477153-1-1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m16.625 49.219c-.4313344-.3451779-1.060822-.2753344-1.406.156-.3451779.4313344-.2753344 1.060822.156 1.406l5 4c.4313344.3451779 1.060822.2753344 1.406-.156.3451779-.4313344.2753344-1.060822-.156-1.406z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa Tukang Ukur</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/podcast-sengketa">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="256" cx="256" cy="256" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000457763674)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="XMLID_81_">
                                                    <g id="XMLID_393_">
                                                        <path id="XMLID_433_"
                                                            d="m256 350.502c46.317 0 84-37.682 84-84v-155.502c0-27.061-13.158-52.623-35.199-68.378-4.495-3.212-10.74-2.172-13.95 2.32-3.212 4.493-2.174 10.739 2.319 13.951 9.158 6.546 16.298 15.315 20.904 25.275h-19.074c-5.522 0-10 4.477-10 10s4.478 10 10 10h24.625c.244 2.258.375 4.537.375 6.832v13.168h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-128v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-13.168c0-2.295.131-4.574.375-6.832h24.625c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.078c4.638-10.03 11.846-18.849 21.101-25.412 4.505-3.195 5.566-9.437 2.371-13.942-3.194-4.504-9.436-5.566-13.941-2.372-22.2 15.746-35.453 41.374-35.453 68.558v155.502c0 46.318 37.683 84 84 84zm-64-126.334h128v42.334c0 35.29-28.71 64-64 64s-64-28.71-64-64z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_442_"
                                                            d="m370 256.502c-5.522 0-10 4.477-10 10 0 57.346-46.654 104-104 104s-104-46.654-104-104c0-5.523-4.478-10-10-10s-10 4.477-10 10c0 58.032 40.074 106.873 94 120.323v34.269c-28.346 1.604-50.917 25.166-50.917 53.906 0 5.523 4.478 10 10 10h141.834c5.522 0 10-4.477 10-10 0-28.741-22.571-52.302-50.917-53.906v-34.269c53.926-13.45 94-62.291 94-120.323 0-5.523-4.478-10-10-10zm-54.583 208.498h-118.834c4.28-13.883 17.23-24 32.5-24h53.834c15.27 0 28.22 10.117 32.5 24zm-49.417-74.498v30.498h-20v-30.498z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_444_"
                                                            d="m10 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_445_"
                                                            d="m102 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_446_"
                                                            d="m56 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_447_"
                                                            d="m502 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_448_"
                                                            d="m410 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_449_"
                                                            d="m456 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_450_"
                                                            d="m256 286.84c2.63 0 5.21-1.07 7.069-2.93 1.86-1.87 2.931-4.44 2.931-7.07s-1.07-5.21-2.931-7.08c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21 1.07-7.07 2.93c-1.86 1.87-2.93 4.44-2.93 7.08 0 2.63 1.069 5.2 2.93 7.07 1.86 1.86 4.44 2.93 7.07 2.93z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_451_"
                                                            d="m256.13 47c2.63 0 5.21-1.07 7.07-2.93 1.859-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07-4.44-2.93-7.07-2.93c-2.64 0-5.21 1.07-7.08 2.93-1.86 1.86-2.92 4.44-2.92 7.07s1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Podcast Sengketa</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-notaris">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 25.916 25.916"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="12.958" cx="12.958" cy="12.958" fill="#ffffff" shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,3.8875187158584605,3.88741898238659)">
                                                <g>
                                                    <g>
                                                        <path style="" d="M7.938,8.13c0.09,0.414,0.228,0.682,0.389,0.849c0.383,2.666,2.776,4.938,4.698,4.843
                                                        c2.445-0.12,4.178-2.755,4.567-4.843c0.161-0.166,0.316-0.521,0.409-0.938c0.104-0.479,0.216-1.201-0.072-1.583
                                                        c-0.017-0.02-0.127-0.121-0.146-0.138c0.275-0.992,0.879-2.762-0.625-4.353c-0.815-0.862-1.947-1.295-2.97-1.637
                                                        c-3.02-1.009-5.152,0.406-6.136,2.759C7.981,3.256,7.522,4.313,8.078,6.32C8.024,6.356,7.975,6.402,7.934,6.458
                                                        C7.645,6.839,7.833,7.651,7.938,8.13z" fill="#BF9742" data-original="#030104" class=""></path>
                                                                                                <path style="" d="M23.557,22.792c-0.084-1.835-0.188-4.743-1.791-7.122c0,0-0.457-0.623-1.541-1.037
                                                        c0,0-2.354-0.717-3.438-1.492l-0.495,0.339l0.055,3.218l-2.972,7.934c-0.065,0.174-0.231,0.289-0.416,0.289
                                                        s-0.351-0.115-0.416-0.289l-2.971-7.934c0,0,0.055-3.208,0.054-3.218c0.007,0.027-0.496-0.339-0.496-0.339
                                                        c-1.082,0.775-3.437,1.492-3.437,1.492c-1.084,0.414-1.541,1.037-1.541,1.037c-1.602,2.379-1.708,5.287-1.792,7.122
                                                        c-0.058,1.268,0.208,1.741,0.542,1.876c4.146,1.664,15.965,1.664,20.112,0C23.35,24.534,23.614,24.06,23.557,22.792z"
                                                                                                    fill="#BF9742" data-original="#030104" class=""></path>
                                                                                                <path style="" d="M13.065,14.847l-0.134,0.003c-0.432,0-0.868-0.084-1.296-0.232l1.178,1.803l-1.057,1.02
                                                        l1.088,6.607c0.009,0.057,0.058,0.098,0.116,0.098c0.057,0,0.106-0.041,0.116-0.098l1.088-6.607l-1.058-1.02l1.161-1.776
                                                        C13.888,14.756,13.487,14.83,13.065,14.847z" fill="#BF9742" data-original="#030104" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa Notaris</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="https://mitra.atrbpn.go.id">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png"
                                            class="p-2" width="100px" alt="">
                                        <div class="mt-3">Mitra BPN</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-ppat">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            width="100px" x="0" y="0" viewBox="0 0 25.916 25.916"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <circle r="12.958" cx="12.958" cy="12.958" fill="#ffffff" shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,3.8875187158584605,3.88741898238659)">
                                                <g>
                                                    <g>
                                                        <path style="" d="M7.938,8.13c0.09,0.414,0.228,0.682,0.389,0.849c0.383,2.666,2.776,4.938,4.698,4.843
                                                        c2.445-0.12,4.178-2.755,4.567-4.843c0.161-0.166,0.316-0.521,0.409-0.938c0.104-0.479,0.216-1.201-0.072-1.583
                                                        c-0.017-0.02-0.127-0.121-0.146-0.138c0.275-0.992,0.879-2.762-0.625-4.353c-0.815-0.862-1.947-1.295-2.97-1.637
                                                        c-3.02-1.009-5.152,0.406-6.136,2.759C7.981,3.256,7.522,4.313,8.078,6.32C8.024,6.356,7.975,6.402,7.934,6.458
                                                        C7.645,6.839,7.833,7.651,7.938,8.13z" fill="#BF9742" data-original="#030104" class=""></path>
                                                                                                <path style="" d="M23.557,22.792c-0.084-1.835-0.188-4.743-1.791-7.122c0,0-0.457-0.623-1.541-1.037
                                                        c0,0-2.354-0.717-3.438-1.492l-0.495,0.339l0.055,3.218l-2.972,7.934c-0.065,0.174-0.231,0.289-0.416,0.289
                                                        s-0.351-0.115-0.416-0.289l-2.971-7.934c0,0,0.055-3.208,0.054-3.218c0.007,0.027-0.496-0.339-0.496-0.339
                                                        c-1.082,0.775-3.437,1.492-3.437,1.492c-1.084,0.414-1.541,1.037-1.541,1.037c-1.602,2.379-1.708,5.287-1.792,7.122
                                                        c-0.058,1.268,0.208,1.741,0.542,1.876c4.146,1.664,15.965,1.664,20.112,0C23.35,24.534,23.614,24.06,23.557,22.792z"
                                                                                                    fill="#BF9742" data-original="#030104" class=""></path>
                                                                                                <path style="" d="M13.065,14.847l-0.134,0.003c-0.432,0-0.868-0.084-1.296-0.232l1.178,1.803l-1.057,1.02
                                                        l1.088,6.607c0.009,0.057,0.058,0.098,0.116,0.098c0.057,0,0.106-0.041,0.116-0.098l1.088-6.607l-1.058-1.02l1.161-1.776
                                                        C13.888,14.756,13.487,14.83,13.065,14.847z" fill="#BF9742" data-original="#030104" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa PPAT</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-1">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Frequently Asked Questions</h3>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Apakah penjual perlu mengembalikan dana renovasi?</h6>
                        <p style="font-size: 14px">Penjual akan mengembalikan dana renovasi setelah rumah berhasil terjual melalui perantara lain atau pribadi (bukan melalui Rumalaku). Jika terjual melalui Rumalaku, dana renovasi akan dipotong dari harga jual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kenapa Sengketatanah.id -->
        <div class="ps-4 mt-5" style="margin-bottom:-20px">
            <h5>
                Kenapa <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a> ?
            </h5>
        </div>
        <div class="row justify-content-between p-4" id="row-why" style="margin-bottom:30px;">
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.8000016629696,76.80000228881838)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="453.185" cy="371.168" r="10" fill="#ffffff" data-original="#000000"
                                        class=""></circle>
                                    <path
                                        d="m511.701 288.728c-.65-2.59-2.34-4.84-4.64-6.189l-77.268-45.564c-.629-1.691-1.389-3.347-2.292-4.951-2.154-3.828-4.982-7.131-8.298-9.842-.924-3.345-4.99-11.879-5.889-13.299 1.59-8.019.292-16.25-3.768-23.462-4.027-7.154-10.339-12.557-17.982-15.461 4.05-9.376 3.982-20.328-1.145-29.827-4.522-8.378-12.104-14.421-21.35-17.017-2.871-.806-5.788-1.244-8.698-1.322.672-6.927-.783-13.884-4.275-20.087-4.555-8.091-12.03-13.94-21.049-16.472-8.959-2.515-18.383-1.455-26.549 2.984-.998.53-18.363 9.755-42.912 22.952-19.735-11.604-51.53-30.263-51.53-30.263-5.438-3.21-11.642-4.908-17.941-4.908-12.199 0-23.69 6.406-29.99 16.722-4.825 7.909-6.251 17.202-4.015 26.167.023.092.051.18.075.272-8.985 2.157-16.943 7.779-21.801 15.743-4.828 7.907-6.256 17.2-4.021 26.166.022.09.05.177.073.266-8.983 2.158-16.941 7.778-21.806 15.742-4.312 7.061-5.901 15.228-4.599 23.282-1.608 1.572-3.108 3.174-4.492 4.797-6.837 2.795-12.75 7.69-16.662 14.095-3.499 5.731-5.202 12.192-5.027 18.729l-78.611 42.756c-2.357 1.276-4.104 3.445-4.847 6.021-.743 2.575-.421 5.342.894 7.678l76.814 136.467c1.835 3.26 5.227 5.097 8.723 5.097 1.631 0 3.286-.4 4.814-1.242l53.281-29.336c2.339-1.288 4.066-3.457 4.796-6.025s.402-5.322-.91-7.647l-10-17.726 25.171-13.904c14.723 7.383 30.526 11.083 46.561 11.083 17.355 0 34.975-4.332 51.761-12.969 13.128 5.181 26.594 7.77 39.936 7.77 14.842 0 29.526-3.207 43.397-9.582l24.641 14.747-10.622 17.37c-1.38 2.27-1.81 5.04-1.17 7.62.63 2.569 2.3 4.83 4.58 6.189l52.21 31.15c1.55.92 3.32 1.41 5.12 1.41 3.51 0 6.71-1.79 8.54-4.79l9.35-15.33c2.87-4.71 1.38-10.88-3.33-13.75-1.57-.96-3.36-1.46-5.2-1.46-3.52 0-6.71 1.79-8.54 4.79l-4.2 6.88-35.02-20.9 71.11-116.299 35.07 20.58-20.08 32.91c-2.88 4.71-1.38 10.87 3.32 13.75 1.57.96 3.37 1.46 5.2 1.46 3.52 0 6.72-1.79 8.55-4.79v-.01l25.38-41.58c1.392-2.28 1.812-5.061 1.162-7.641zm-121.064 2.615s23.041-12.007 23.097-12.038c7.69-4.198 13.393-10.916 16.238-19.052l5.865 3.433-55.159 90.401-20.765-12.428c-.001 0 30.583-50.025 30.724-50.316zm-207.442-188.202c2.732-4.471 7.561-7.141 12.92-7.141 2.723 0 5.409.736 7.764 2.128l19.043 11.263c3.433 2.03 5.845 5.241 6.792 9.041.929 3.728.332 7.598-1.682 10.895v.001c-1.094 1.791-2.544 3.264-4.205 4.404-.918.499-1.827.993-2.739 1.488-4.138 1.734-9.02 1.685-13.201-.559l-19.581-11.573c-.001 0-.002-.001-.003-.002-3.43-2.031-5.841-5.24-6.788-9.037-.931-3.732-.333-7.607 1.68-10.908zm-25.739 42.18c2.73-4.476 7.555-7.147 12.905-7.147 2.724 0 5.409.736 7.764 2.129l33.33 19.703c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903v.001c-4.1 6.717-13.105 9.095-20.125 5.343l-33.889-20.036c-3.428-2.027-5.837-5.234-6.784-9.029-.929-3.731-.331-7.604 1.688-10.911zm-25.756 42.179c2.695-4.412 7.646-7.153 12.919-7.153 2.716 0 5.398.736 7.752 2.128l34.286 20.272c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903-4.265 6.981-13.537 9.229-20.673 5.012l-34.284-20.271c-3.433-2.03-5.845-5.241-6.792-9.041-.93-3.728-.332-7.598 1.681-10.894zm13.972 48.411c3.433 2.029 5.844 5.242 6.792 9.044.93 3.732.333 7.604-1.681 10.902v.001c-4.267 6.987-13.547 9.241-20.683 5.023l-19.043-11.263c-3.432-2.029-5.844-5.241-6.792-9.044-.93-3.731-.333-7.603 1.681-10.901 2.695-4.412 7.646-7.153 12.919-7.153 2.723 0 5.408.736 7.764 2.129zm-55.002 176.549-66.969-118.975 35.779-19.372 66.941 118.662zm38.308-55.857-52.004-92.184 13.35-7.206c2.767 3.846 6.329 7.123 10.553 9.621l7.94 4.696 41.397 73.343zm42.214-15.252-32.953-58.381c11.727-.143 23.134-6.078 29.613-16.69v.001c3.188-5.221 4.883-11.049 5.029-16.987 1.969.335 3.951.519 5.927.519 11.872 0 23.473-5.958 30.029-16.696 4.826-7.903 6.253-17.195 4.018-26.162-.081-.323-.175-.641-.265-.961 8.492-2.212 16.14-7.583 21.045-15.619 4.826-7.903 6.253-17.195 4.018-26.162-1.095-4.396-3.01-8.449-5.61-12.007.894-.488 85.678-46.238 85.877-46.344.034-.018.068-.036.102-.055 3.571-1.949 7.697-2.416 11.62-1.314 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.371 2.356 7.272 1.291 10.986-1.092 3.809-3.644 6.975-7.187 8.917l-.025.014c-.003.001-.005.003-.008.005l-55.702 30.4c-4.848 2.646-6.633 8.72-3.987 13.568 1.816 3.326 5.246 5.211 8.787 5.211 1.619 0 3.261-.395 4.782-1.225l65.425-35.708c3.571-1.948 7.699-2.415 11.62-1.314 3.98 1.117 7.231 3.695 9.155 7.26 3.766 6.977.829 15.929-6.525 19.943l-64.951 35.448c-4.847 2.647-6.631 8.723-3.984 13.569 1.816 3.326 5.246 5.21 8.786 5.21 1.619 0 3.262-.395 4.784-1.225l60.627-33.103c3.55-1.91 7.642-2.363 11.538-1.27 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.291 10.985-1.095 3.818-3.656 6.99-7.159 8.902l-61.21 31.448c-4.918 2.513-6.868 8.537-4.354 13.455 1.769 3.461 5.275 5.451 8.913 5.451 1.531 0 3.085-.353 4.542-1.098l55.475-28.355c3.526-1.863 7.577-2.297 11.432-1.214 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.292 10.985-1.087 3.791-3.62 6.945-7.137 8.891l-148.579 77.422c-.057.029-.114.06-.17.091-28.16 15.374-57.984 16.098-84.287 2.131zm116.899 3.428 68.213-35.545-17.239 28.178c-16.063 7.808-33.577 10.276-50.974 7.367z"
                                        fill="#ffffff" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Korban Sengketa
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami mempertemukan korban sengketa tanah yang membutuhkan bantuan pendanaan sponsor,
                            pengacara atau pemerintah.
                        </p>
                        <a href="{{url('')}}/bidding-sponsor" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79999542236328,76.7997756958008)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M404.267,315.41c-10.048-20.949-45.995-50.027-80.725-78.123c-19.371-15.659-37.675-30.464-49.344-42.133    c-2.923-2.944-7.296-3.883-11.157-2.496c-7.189,2.603-11.627,4.608-15.125,6.165c-5.333,2.389-7.125,3.2-14.315,3.925    c-3.179,0.32-6.037,2.027-7.808,4.672c-15.083,22.549-30.699,20.629-41.131,17.131c-3.328-1.109-3.925-2.539-4.245-3.904    c-2.24-9.365,9.003-31.168,23.573-45.739c34.667-34.688,52.544-43.371,90.304-26.496c42.837,19.157,85.76,34.155,86.187,34.304    c5.611,1.941,11.648-1.003,13.589-6.571c1.92-5.568-1.003-11.648-6.571-13.589c-0.427-0.149-42.496-14.848-84.48-33.643    c-48.917-21.867-75.755-7.467-114.091,30.891c-14.592,14.592-34.411,44.117-29.291,65.771c2.197,9.216,8.683,16.043,18.325,19.221    c24.171,7.979,46.229,0.341,62.656-21.461c6.784-1.045,10.475-2.581,16.021-5.077c2.005-0.896,4.352-1.941,7.467-3.2    c12.203,11.456,28.672,24.789,46.016,38.805c31.36,25.365,66.923,54.123,74.923,70.763c3.947,8.213-0.299,13.568-3.179,16.021    c-4.224,3.627-10.005,4.779-13.141,2.581c-3.456-2.368-7.957-2.517-11.52-0.384c-3.584,2.133-5.589,6.165-5.141,10.304    c0.725,6.784-5.483,10.667-8.171,12.011c-6.827,3.456-13.952,2.859-16.619,0.384c-2.987-2.773-7.275-3.584-11.072-2.176    c-3.797,1.429-6.443,4.928-6.827,8.981c-0.64,6.997-5.824,13.717-12.587,16.341c-3.264,1.237-8,1.984-12.245-1.899    c-2.645-2.389-6.315-3.307-9.749-2.475c-3.477,0.853-6.272,3.371-7.488,6.72c-0.405,1.067-1.323,3.627-11.307,3.627    c-7.104,0-19.883-4.8-26.133-8.939c-7.488-4.928-54.443-39.957-94.997-73.92c-5.696-4.8-15.552-15.083-24.256-24.171    c-7.723-8.064-14.784-15.381-18.411-18.453c-4.544-3.84-11.264-3.264-15.04,1.259c-3.797,4.501-3.243,11.243,1.259,15.04    c3.307,2.795,9.707,9.557,16.768,16.917c9.515,9.941,19.349,20.224,25.963,25.771c39.723,33.259,87.467,69.163,96.981,75.413    c7.851,5.163,24.768,12.416,37.867,12.416c10.517,0,18.603-2.411,24.213-7.125c7.509,2.923,16.043,2.944,24.256-0.256    c9.707-3.755,17.685-11.328,22.208-20.501c8.405,1.792,18.027,0.533,26.773-3.861c8.555-4.309,14.741-10.901,17.813-18.603    c8.491,0.448,17.237-2.56,24.469-8.768C407.979,346.407,411.349,330.109,404.267,315.41z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M213.333,138.663h-96c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h96    c5.888,0,10.667-4.779,10.667-10.667S219.221,138.663,213.333,138.663z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M435.52,292.711c-3.307-4.885-9.92-6.229-14.805-2.901l-31.189,20.949c-4.885,3.285-6.187,9.92-2.901,14.805    c2.069,3.051,5.44,4.715,8.875,4.715c2.027,0,4.096-0.576,5.931-1.813l31.189-20.949    C437.504,304.231,438.805,297.597,435.52,292.711z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M369.301,343.613c-7.637-6.016-41.792-40.981-62.912-62.997c-4.075-4.267-10.837-4.416-15.083-0.32    c-4.267,4.075-4.395,10.837-0.32,15.083c5.483,5.717,53.845,56.128,65.088,65.003c1.941,1.536,4.288,2.283,6.592,2.283    c3.136,0,6.272-1.408,8.405-4.075C374.72,353.981,373.931,347.261,369.301,343.613z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M326.677,365.01c-12.779-10.219-44.885-44.331-52.139-52.224c-4.011-4.352-10.731-4.608-15.083-0.64    c-4.331,3.989-4.629,10.752-0.64,15.083c0.384,0.405,38.699,41.771,54.528,54.443c1.963,1.557,4.331,2.325,6.656,2.325    c3.115,0,6.229-1.387,8.341-3.989C332.011,375.399,331.264,368.679,326.677,365.01z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M284.224,386.493c-15.211-12.821-46.336-45.952-52.416-52.459c-4.032-4.309-10.795-4.544-15.083-0.512    c-4.309,4.032-4.523,10.773-0.512,15.083c8.747,9.365,38.528,40.939,54.251,54.208c2.005,1.685,4.437,2.517,6.869,2.517    c3.029,0,6.059-1.301,8.171-3.797C289.301,397.01,288.725,390.29,284.224,386.493z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M124.672,120.253C106.389,102.93,33.28,97.319,11.307,96.018c-3.029-0.149-5.824,0.853-7.957,2.88    C1.216,100.903,0,103.719,0,106.663v192c0,5.888,4.779,10.667,10.667,10.667h64c4.608,0,8.704-2.965,10.133-7.36    c1.557-4.779,38.315-117.589,43.157-173.056C128.235,125.671,127.04,122.471,124.672,120.253z M66.88,287.997H21.333V118.098    c34.283,2.709,71.275,8.597,84.715,15.125C100.395,179.943,74.816,262.951,66.88,287.997z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M501.333,117.33c-83.755,0-130.219,21.44-132.16,22.336c-2.773,1.301-4.843,3.712-5.696,6.635s-0.427,6.059,1.173,8.661    c13.184,21.227,54.464,139.115,62.4,167.872c1.28,4.629,5.483,7.829,10.283,7.829h64c5.888,0,10.667-4.779,10.667-10.667v-192    C512,122.087,507.221,117.33,501.333,117.33z M490.667,309.33h-45.355c-10.112-32.939-39.979-118.827-56.64-154.325    c16.277-5.525,51.243-15.019,101.995-16.213V309.33z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Kerjasama Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami membantu para pemilik lahan tidur di seluruh Indonesia untuk di kerjasamakan agar bisa
                            produktif dan menghasilkan manfaat.
                        </p>
                        <a href="{{url('')}}/kerjasama-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79991760253907,76.80000457763674)">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m269.833 141.018c0-74.393-60.523-134.917-134.916-134.917s-134.917 60.524-134.917 134.917 60.523 134.917 134.917 134.917 134.916-60.524 134.916-134.917zm-253.833 0c0-65.571 53.346-118.917 118.917-118.917 65.57 0 118.916 53.346 118.916 118.917s-53.346 118.917-118.916 118.917c-65.571-.001-118.917-53.347-118.917-118.917zm118.917 69.326c-4.418 0-8-3.582-8-8v-6.387c-15.416-2.651-27.313-12.734-30.853-26.935-1.069-4.287 1.54-8.629 5.827-9.698 4.29-1.069 8.629 1.54 9.698 5.827 2.94 11.792 14.981 15.699 24.404 15.488 8.178-.195 15.821-3.05 19.474-7.273 2.085-2.41 2.856-5.174 2.429-8.698-.7-5.764-4.081-12.805-24.186-16.105-27.651-4.54-34.1-18.794-34.642-29.953-.75-15.446 9.993-28.375 26.733-32.172.37-.084.741-.163 1.116-.236v-6.512c0-4.418 3.582-8 8-8s8 3.582 8 8v6.442c11.333 2.109 22.3 8.991 27.908 22.347 1.71 4.074-.205 8.763-4.279 10.473-4.075 1.71-8.763-.206-10.473-4.279-4.951-11.791-16.994-14.841-26.733-12.632-7.2 1.633-14.735 6.639-14.291 15.792.153 3.157.56 11.542 21.252 14.94 8.54 1.402 34.527 5.668 37.477 29.965.969 7.982-1.179 15.276-6.211 21.093-5.515 6.377-14.447 10.753-24.65 12.249v6.262c0 4.421-3.582 8.002-8 8.002zm104.913-69.326c0-57.85-47.064-104.914-104.914-104.914s-104.914 47.064-104.914 104.914 47.064 104.914 104.914 104.914 104.914-47.065 104.914-104.914zm-193.828 0c0-49.027 39.887-88.914 88.914-88.914s88.914 39.887 88.914 88.914-39.886 88.914-88.914 88.914-88.914-39.887-88.914-88.914zm255.255-9.999 64.346 47.208c2.431 1.784 5.659 2.05 8.348.686 2.689-1.362 4.385-4.121 4.385-7.136v-16.312c34.256 1.036 66.152 9.809 77.423 53.699.814 3.172 3.48 5.527 6.728 5.945.342.044.684.065 1.023.065 2.877 0 5.567-1.553 6.99-4.114 13.761-24.763 13.545-53.877-.577-77.88-16.529-28.095-49.646-44.917-91.588-46.807v-15.659c0-3.107-1.799-5.934-4.615-7.249-2.815-1.314-6.137-.88-8.52 1.114l-64.346 53.854c-1.885 1.578-2.939 3.934-2.861 6.39.079 2.458 1.282 4.742 3.264 6.196zm61.078-43.177v6.353c0 4.418 3.582 8 8 8 39.907 0 71.179 14.25 85.798 39.098 7.762 13.193 10.221 28.354 7.361 42.989-8.232-16.167-20.563-28.027-36.835-35.385-18.602-8.412-38.911-9.546-56.324-9.546-4.418 0-8 3.582-8 8v8.634l-43.386-31.831zm-131.882 325.807-64.346-47.207c-2.43-1.783-5.658-2.048-8.348-.686-2.689 1.362-4.385 4.121-4.385 7.136v16.312c-34.256-1.036-66.152-9.809-77.423-53.699-.814-3.172-3.48-5.527-6.728-5.945-3.246-.417-6.422 1.186-8.013 4.049-13.761 24.763-13.545 53.877.577 77.88 16.529 28.095 49.646 44.917 91.588 46.807v15.659c0 3.107 1.799 5.934 4.615 7.249 1.081.504 2.236.751 3.384.751 1.843 0 3.668-.636 5.136-1.865l64.346-53.855c1.885-1.578 2.939-3.934 2.861-6.391-.079-2.457-1.282-4.741-3.264-6.195zm-61.078 43.178v-6.353c0-4.418-3.582-8-8-8-39.907 0-71.179-14.25-85.798-39.098-7.762-13.193-10.221-28.354-7.361-42.989 8.232 16.167 20.563 28.027 36.835 35.385 18.602 8.412 38.911 9.546 56.324 9.546 4.418 0 8-3.582 8-8v-8.634l43.386 31.831zm340.88.81c-8.404-27.138-25.618-51.508-48.473-68.622-13.268-9.935-27.957-17.24-43.526-21.739 20.86-12.79 34.807-35.8 34.807-62.011 0-40.081-32.608-72.688-72.689-72.688s-72.689 32.608-72.689 72.688c0 26.21 13.947 49.22 34.807 62.01-15.57 4.499-30.259 11.804-43.527 21.739-22.855 17.114-40.07 41.484-48.473 68.622-3.59 11.589-1.601 23.351 5.599 33.118 7.199 9.766 17.846 15.145 29.979 15.145h188.608c12.133 0 22.779-5.379 29.979-15.145 7.198-9.767 9.187-21.528 5.598-33.117zm-186.57-152.372c0-31.258 25.431-56.688 56.689-56.688s56.689 25.43 56.689 56.688c0 31.255-25.425 56.683-56.679 56.689-.004 0-.008 0-.012 0-.003 0-.007 0-.01 0-31.252-.006-56.677-25.434-56.677-56.689zm168.091 175.995c-4.166 5.652-10.079 8.639-17.1 8.639h-188.607c-7.021 0-12.934-2.987-17.1-8.639-4.167-5.652-5.271-12.184-3.194-18.891 15.634-50.489 61.683-84.411 114.587-84.415h.011.01c52.904.005 98.952 33.927 114.587 84.416 2.078 6.706.973 13.237-3.194 18.89z"
                                    fill="#ffffff" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Jual Beli Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Jual dan beli lahan lebih mudah dan cepat di seluruh wilayah Indonesia dengan platform
                            sengketatanah.id yang efisien dan praktis.
                        </p>
                        <a href="{{url('')}}/jual-beli-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                width="62" x="0" y="0" viewBox="0 0 479.976 479.976"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <circle r="239.988" cx="239.988" cy="239.988" fill="#61481c" shape="circle"></circle>
                                <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="mt-1">
                            <b>
                                Membantu Pelelangan Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami melakukan kerjasama dengan berbagai balai lelang pertanahan. Anda juga bisa menjual
                            lahan dengan sistem lelang disini.
                        </p>
                        <a href="{{url('')}}/lelang-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bicara Sengketatanah.id -->
        <div class="ps-4" style="margin-bottom:-38px">
            <h5 style="margin-bottom:-30px">
                Bicara <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a>
            </h5>
        </div>

        <div class="row justify-content-between mb-3 p-4" style="overflow-x: auto; flex-wrap: nowrap;margin-top:50px">

            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBUQEA8PDxUQEA8WFRUSDxUQEBAVFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGislHR0rLS0rKy0rLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLSsrLSstLS0tLf/AABEIAREAuQMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABGEAACAQIDAwgGBgcGBwAAAAAAAQIDEQQhMQUSUQYHE0FhcYGRIjJCUqGxFHKSwdHwIzNiorLC4RU0Y3N0ghYkNVNkk/H/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAjEQEBAAICAgICAwEAAAAAAAAAAQIRAyESMQRBIlETYfAy/9oADAMBAAIRAxEAPwD2IBgbCAYAIBhYBAOwWAQDAIQDABAAAIBgAhEhAIBgAhEhFCAYgLQAZlSAYAIBgEIBgAgGBQhDABAMAEAxAIBgAgGIBAMAFYRICiYDsBlSAkAERjAIQDNDyt5VYbZtPfrNuck9ynHOc7fJdrKN5KSSu2klq27JGmx3KrZ9F2niqKfBS335RTZ4nyk5x8din6E1Rh7NOn60e1t6vtOVqVa1R3k5SlLWUpNt+PWFe7bU5zsDRyi51Jfswe73+lutnI7V51a8sqTVBNL0rRnJP6so2t2Xd+KPN50pxVsrvX0kYdSMov0la/in+I2PTI85+JhnHEyqdlbDQ3Xb/L0b8jq+TnOnhq+7HEKNJyyco33Yvq3ovO3am+1I8HjK+V/DqL4RvZ9ednx7H5PyGx9ZwmpJNNNNXTTumuxjPHOa3lXUhNYacnOEnaKk77rem7d5dyyz6tT2OLuVAAAQAhgAhEhAIBgBYAARQAAAAAAQrVIwi5yajGKbbbskkrts+dOWO0/puKnVc97O0UpdS0twXYe5ct8XCjs/EVJ6KlJJcZSyivNo+Z1O7c+pcMvL89ZRNuMXxb7rJ8LmLUqTb9JtJ8PvLqFOpWe7GN+xXsvwMupsivo4vy/NzPlGphb3I1apR14/gRhOzt1P82sbCWxa69l8BU9iVW9P/pPKHjf019aGsl4rh/QysJP0W/24mXS2PWv6ja0MyjyartWims7r45DykWYZX6PZE3Co5RdrVIuNtcpZWsfSWyZN0YSlq4JvK2ueh8y4vDYnBzjOpTa9O6TvaVuvLqPbObDlrHaFLoau5HEUldqK3YzheyklxXWl2G5dxnKadzYBgGSAAAQDABCGAFgABFADABAMQHDc8OMVPZ0oddacUv8Ab6R4NhKM6i6KEd6VSSWXwPZefL+70F/iT+SOQ5ttlKdfpJL1ItrvJldRvDHd06TYXJqlhKMYWTm0nOXF/gZssFB+wn4G1xazKIxPnZ38n1cJ+LBWBhpux8kR/syn7kfI2dg3Cdt9NbDAQXsryMinQitEkX2ISY2eKvaWy6WKpOnUindZO2aPJqlGvsrGxnTbTpVE09Lrt7Gsj2Og8zkecbZalFVMrtdx6+HKvF8jCaes7D2lDF4eniIWtVgnZO9no1fsdzOOB5lsTKeznCTv0VecVxSai/m2d8el4CsFhgBEBgAhDACwBgRSAYAIBiA8655aO9Qoa/rZd2hh832B3KcpW6kjoec3CqeFhO1+jrQ/eyFydpqnhYyta6cjObvwoY2GZRCBqtp7WxEpvo6Ut1ZaZs1EtqbQT/UtLtV/ijyXi3dvdOTUdl0YbhqdjbRrT/WwUe7rN063YieMdJdqJwKnTNftbG1k7U1nn1XNNHGbSk/1Xo8cov4j+OX7S56dbh6buYvLDCOWGv7qZgbLx2KhL9JTbi+rWx0e14qphKls/wBG2vDM78ePjHn5btq+Zulu4auv/J/kR6CcXzWU7Yaq/ervvyhE7Q9D599gAAiAAABAMRRYAwIpAMQARnJJNt2STbfBIka/lBJrC1WvcYt1Nt8eHnnMf3dOc5UbVhicNOnGLa3oWlwakmm1wNnRoKFKMH7MIr4HOYS0Yb0rWlr2rRW+Z02KeR55nbLt9Ln+PjxZ6w9Oc2vilCSjThvSbS4JX65S6kc1V21i1ivozpQ/Wbt87btr799LHZVoLgY/0Ze6vI545T7i3C3Wrpg4Oo5K7jbddn/TijY2W7cjOn1FsqdonO++nRq8XVlFXUd5t2X4vsNB/bWM+lLDbkFHpN3fcW47tr7901l2WOtVMHR7EdMLJO4zljb6umNszGycnGpBq0mt5K8ZL3ou2j4NHRU6alCUepxa80aullqbTAm8Mu3LlnW2o2JjZYKmouN4Tm5WSzWSTbb7jtKc1JKS0aTXczhK9ZVITdrOLbXC0NP3bnZbIT6CnfXo4/I6ceVtrHy+DHDjxynV3qssAGdXziAYAIBiAsAACgAABEK1JTi4PSSafiWCCy6u44OtQ3JKnJeordnouz+RvXNSpprNNZBt7D7s+k6ppprqvb+iMfZtujcUrbr07Hn87nms1bH2OTk/l48c/wDf2olEW6XV1ZmPUmcjHtXCLbvbJOxe119pgVnP2ZOKbu7a+A1Xna2rtrZJ99iRqxbVjKOeqLo2NdShKzTqVJXd3vO9/uS7EZMKli+l0yVEzqPoxk9LRb8kYFGV2ZuIcuiluptuyyV3m89Ow3h+3DPuyNZgcO6k1laNW+T9azeeXcdolbJdRqtjYFxSqTjaVrK+qXcbU78eOo83zebzy1PUAwA6PEAAAAAACwBAFMQAACGAFdSnGStJKSfU1dGJXwVOMW4QjHuVrozhTV012Mlm2sc7PtzGJRqcVX3M5Xt2Jt+SNtiXZmBON3meDPqvrcd6a2e16WkVOX+yX4FUtpZ5U6jf1XY2FbCReit3FXQvizpjlh9vXjeLXbHpbTfXSn5JfeXUa7qO6pzgn71r+RZTwyWuZktdhjPKWdOXJ4b/ABi/DxsdDsuFo34mgwkXJqK6zqaNPdio8Ed+Cfb53ysvpMAGj0PCBiJAIBgAgGADGIYUAAAAhiAQDOe2rygisVSwVKSlUqSm6jWfRQpwc2n+1KyXZd9hRh43rMSm75Fs60Zrei7p5mHVi+o+bnl2+xjjplysQlYwJ4trJpkPpy4GZY3qtimiU7JGuhi76GVRTbuzWOmbtu9h0/TTetn4G+ObweNUKkIKzlU30lxtFv5pG42XtOjiaaqUZqSaV17UW1pJdTPdx/8APT5vyN+fbMGIZtwNDEMIAAAAAACQAAUAI5vb3LfA4RNOoq017FJqVn2y0XzLodKazbW38Jg472IrQp5ZRvepLugs2eRcoedDGVrxotYaL6oZ1Gu2b+6xwdfE1Ks3KcpScnm5Nyk+1tl0PU9v850616eDhKjF3vUlbpWv2Usod+b7jT83mL3tr0t53c6eIWebb6OT+5nGQnbM2vITEtbVw0/8bd+3GUP5jX1oem1KLoVZ0uqMm4/Uecfhl4FjZueU2Bckq0VdwvvJauL6/DXzNJDNHy+XDxyfY4uTzwlQnBPVFcsJDgZUIk3TMTF02xKVFLRFsq26gkjHrp6LNvRdbZfR7Z3JbDSq4vp5aUU0vrS/BfM88wu2q2FqznQm4OFWrFWzjKKm8pJ5NZHs3J/BdDSjF66y73qfOOHxj3pb2k5Sd+9tn0uCeOOnyfkZ+eds9PauTPOLhcQlDEtYaro28qM3xUvZ7pebO2hJNJppprJp3TXYz5dxGUuFzO2PynxmEdqNepTs/VUrwf8AteT8jdkcH0uB5NsPnamrRxdGM179L0J+MXk/gd5sjldgMVZU8RBSfsVP0c+5J5PwbJ40b0AAyAAADkNoc4+z6eUHOu17sd2PnL8Dmtp869SzVGhThwc5ObXhkjypYhkJTN9K6HbHK/G4m/S4ipJP2U92H2VZHPVa7erK5MgyWgbGqrjpFyvwEid7EE5VLrPLs4GXsCv0eLoT93E0H5Tjc1zZdgpWqQfCpD+JFH1E5R3W28rfA5XFYZU5ejfclnHL1f2X+dDa4+reFOne2+k32qKWXm/gShLLdkk78VkznycfnHp4c7h3+2ikmmS33Y2GKwFlvQu7dWrt2MwlA8eWFxuq9+Ocym4qSLMFRtLpZLKKe5f2paLwRmYLDqUs81FXt739C6cbyd+ry7jtw8W/yrly82vxjM2ZtPehPfVpUld20ate/wAD5loNuMfqr5H0XayqJe1h61+12v8AifOlPRdx69afOz99LJ15WtrbQqlNyzaS7ncUxRf3hhJSLqddrrMe4JjY6/YHLnH4S0YV3KC9ip+kh4Xzj4NHZ4Hncll02Fg+Lp1HF+Ckn8zyBSJKZd79pp9FbG5ebOxO7FVuhnJpKFVbrbfCSvH4nT2PlKlXaqQfC/3Hcf8AE+J/79X7bNTjmXo3pwcXkDZFDObRMAC4DE5CbIgMuwf6yH+ZD+JFCLcPK04vhKL8mgPoyVNSlvPPdSjHw1+NzLhTaWev5yK8NdpNLqRlKJp12lSpprgYuNwSteNk/JPvM2kh1I3MZSZdUxzuN3GqpKNP1W5zaa0e6rlkKFlq+0yOj17xSiXHGY9Rcs7btizorRZOSnH7UWvvPnCWUmuEmvifR+LjkfOFX15fXl82arnlUJla+5k5la6zLCQCGgGNMiwTKGn6a7n80bTpmamnnM2e6bwSsFAOXrMTOakACAQkMQDJJ2IoYV9M7NqXpwfGEX8DMRp+TVdSwtGXvUaT84Jm3Ra0nT1JLUjT1LDIpksyE8i2ZXa+ZRiV4cT5o3rtvi2/M+mMa7Rk+EX8j5jo+qu5fI1UqcitE2yJGQiSENADIXJSIgEH6XkbH6S+C8jWU/W8TNuaxqVVJ+kSaK6r6+0usYaVCZNoiwhWIkiLCi40yIyD3vm5xHSbOoPXdhuf+tuH8p1aR5vzNY3ew1Wi3nSq7y7IzX4xkejpmq1FtPUmV09SwyiqosxMlPUgwrXbcq7mHqy92jVflFs+aoaeCPoTl1W3NnYl6f8AL1F4yW6vmfPZpKUmIGxBlNEkQTByAlNld8iUrvq8yqs8rcRRLCyzzMzfRgU2WiUOoy6hK6RjVGPBT1XaZVlSRWy1lcioiRZIiwpMBIEyDu+aLH9HjnSbyr0pLvlD0l8N89siz5q5O476Pi6NbRU60G/qt2l+62fSFN3Rr6WMmGo75kKRcZFdRZlbRZVKZSKriednFqns6cb51qtKC+1vv4QZ4hc9L56cfeWHw6einVl4+hD+c8yuWs0XI9oNiX5yIiUWyUURRNICTlkYtZ5pGRNmI3eTFE4ss32VRJ3EEpsqw87T7yUmY6dnftMq3CYpEaUsicjQqZFk5EGBEQ2RIiR9C8itq/ScDRqXvLo1Gf14ejL4q/ifPJ6lzM7Suq2Fk9HGrHPqfozt4qP2jUaj1ajPUvuYtFLMyWSlQrMxZzL8R2mFiMRGKcnpFNt8Es2WDwfnHx3TbSrcKTjSXdBZ/vORzLZdj8U61WpVetWpUn3b8nL7yhsiExkbkkRE0TRWiVyiNZmJTfzLMRPIqpaEF0SVyCGA5aGO9QAitnh9C2QwNQVyK5AAQmRAAGdtzQ/9Rf8Apqv8dMAE9q9vo/czJYgLWqxMdp4mm29/dMR/pq/8EgAsHzkRGBhgkSQAAyXUAFViYgjT0GBlE0MACv/Z"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">

                        <h6 style="margin-top:10px">
                            <b>
                                Joko Hartanto
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://nugasin.com/template/assets/photo/WhatsApp_Image_2021-06-26_at_09_47_29.jpeg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Budi Susilo
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://s.kaskus.id/r540x540/images/2020/11/13/10653066_202011130432060327.jpg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Ikhsan Jamaludin
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <style>
            .store {
                width: 171px;
            }
    
            .appstore {
                width: 140px;
                margin-left: 10px
            }
    
            @media screen and (min-width: 768px) {
                .store {
                    width: 216px;
                }
    
                .appstore {
                    width: 185px;
                }
            }
    
        </style>

        <div class="row justify-content-center">
            <div class="col-11 mt-2 text-center">
                <b>Download Aplikasinya!</b>
                <p class="fw-lighter mb-0">Platform Seputar Tanah No. 1 di Indonesia</p>
            </div>
            <div class="col-11 mb-2 text-center">
                <a href="#"><img src="{{asset('/')}}uploads/google-play-badge.png" class="store" alt=""></a>
                <a href="#"><img src="{{asset('/')}}uploads/appstore-badge.png" class="appstore" alt=""></a>
            </div>
        </div>
    
        <hr>
    
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0"
            nonce="Ee2Zutm6"></script>
            
        </div>
        <div class="row mt-4">
            <div class="card-body text-white text-center" style="background: #61481C">
                <p></p>
                <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width:250px" class="img-fluid">
                <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved
                </p>
                <hr>
                <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No.
                    36,
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
</body>

</html>
