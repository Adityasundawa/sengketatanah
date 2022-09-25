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
            /* position: absolute;
            right: 14px;
            bottom: 30px; */
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
            /* display: flex; */
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
            /* padding: 13px; */
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

        .desktop-2 {
            display: block;
        }

        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }

            .desktop-2 {
                display: none;
            }
        }

        .col-12 {
            width: 33.3333%
        }

        @media (max-width: 1400px) {
            .col-12 {
                width: 38% !important
            }

        }

        @media (max-width: 992px) {
            .col-12 {
                width: 51% !important
            }

        }

        @media (max-width: 768px) {
            .col-12 {
                width: 100% !important
            }

        }

        .row.mobile-scroll {
            overflow-x: hidden
        }

        @media (max-width: 1199.98px) {
            .row.mobile-scroll {
                overflow-x: scroll
            }

            .col-10.arrow-desktop {
                width: 100%
            }

            .col-1.arrow-desktop {
                display: none
            }

            .col-1.arrow-desktop {
                display: none
            }
        }

        table {
            width: 100%;
            text-align: start
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

    <div class="text-white rounded-0 jumbotron">
        <div class="row">
            <div class="col-md-12 text-center mt-3">
                <div class="mobile">

                    <img src="{{asset('/uploads/sengketa-logo_pas-9.png')}}" style="width: 100px" alt="" srcset=""
                        class="img-fluid">
                </div>
                <div class="desktop-2">
                    <img src="{{asset('/uploads/sengketa-logo_pas-9.png')}}" style="width: 150px" alt="" srcset=""
                        class="img-fluid">
                </div>
            </div>
            <div class="col-md text-center my-auto mt-3">
                <h1>Solusi Untuk Anda</h1>
                <h3>"Kami mempertemukan korban sengketa tanah dengan sponsor, pengacara dan
                    pemerintah dalam satu platform."</h3>

            </div>
        </div>

    </div>

    <div class="container mt-4">

        <div class="row justify-content-center mb-4">

            <div class="col-lg-12">

                <div class="card mb-3 border-0">
                    <div class="card-body pb-0">
                        <div class="row justify-content-between text-center"
                            style="overflow-x: auto; flex-wrap: nowrap">
                            <div class="col mb-4">
                                <a href="{{url('/')}}/bid-sengketa"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="71px" x="0" y="0" viewBox="0 0 50 60"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="25" cx="25" cy="30" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,7.500000286102296,9)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="001---Bid-Sign" fill="rgb(0,0,0)" fill-rule="nonzero">
                                                    <path id="Shape"
                                                        d="m3 52h8.072c.4576865.0004997.9089573.107668 1.318.313l1.456.733c2.5817025 1.2790372 5.42284 1.9475804 8.304 1.954h2.63c.5642399.6337052 1.3715062.9973386 2.22 1v1c0 1.6568542 1.3431458 3 3 3s3-1.3431458 3-3v-1c1.1856144.005247 2.2620981-.691231 2.7432243-1.7748484.4811261-1.0836175.2758048-2.3492169-.5232243-3.2251516 1.0400491-1.1305142 1.0400491-2.8694858 0-4 1.0400491-1.1305142 1.0400491-2.8694858 0-4 .5806193-.6333292.85885-1.4868812.7629994-2.3407179-.0958505-.8538368-.5564082-1.6244534-1.2629994-2.1132821 1.9862979-.6121975 3.325279-2.4679926 3.28-4.546 0-1.1045695-.8954305-2-2-2h-3v-2h14c1.6568542 0 3-1.3431458 3-3v-24c0-1.65685425-1.3431458-3-3-3h-34c-1.6568542 0-3 1.34314575-3 3v24c0 1.6568542 1.3431458 3 3 3h14v2h-2.64c-4.3481249.0027575-8.558163 1.5272159-11.9 4.309-.5364453.4462991-1.2121774.6907656-1.91.691h-7.55c-1.65685425 0-3 1.3431458-3 3v9c0 1.6568542 1.34314575 3 3 3zm22-11c0-.5522847.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1zm9 4c0 .5522847-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1zm-1 3c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1zm-2 9c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-1h2zm2-3h-6c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h6c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1zm3-20c0 2.1-1.684 2.748-3 2.932v-2.932zm-24-7v-24c0-.55228475.4477153-1 1-1h34c.5522847 0 1 .44771525 1 1v24c0 .5522847-.4477153 1-1 1h-34c-.5522847 0-1-.4477153-1-1zm19 3v8h-2v-8zm-29 10c0-.5522847.44771525-1 1-1h7.55c1.1656656-.0009424 2.2943701-.4091295 3.191-1.154 2.982163-2.4823219 6.7388958-3.8429391 10.619-3.846h2.64v4h-1c-1.1856144-.005247-2.2620981.691231-2.7432243 1.7748484-.4811261 1.0836175-.2758048 2.3492169.5232243 3.2251516-1.0400491 1.1305142-1.0400491 2.8694858 0 4-.5967576.6515543-.8725607 1.5349101-.752536 2.4102596s.6234232 1.6518641 1.373536 2.1187404c-.2595214.4470314-.3977522.9541075-.401 1.471h-1.85c-2.570894-.0058162-5.1060912-.602152-7.41-1.743l-1.451-.731c-.6882064-.3448961-1.4472076-.5249748-2.217-.526h-8.072c-.55228475 0-1-.4477153-1-1z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m25 11c-.0033061-2.76005315-2.2399468-4.99669388-5-5h-3c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2h3c2.1566753.0062173 4.0727751-1.3751502 4.7484261-3.423267.675651-2.0481169-.0423886-4.2984577-1.7794261-5.576733 1.272967-.9358543 2.0265663-2.4200479 2.031-4zm-2 8c0 1.6568542-1.3431458 3-3 3h-3v-6h3c1.6568542 0 3 1.3431458 3 3zm-3-5h-3v-6h3c1.6568542.00000003 2.9999999 1.34314578 2.9999999 3 0 1.6568542-1.3431457 3-2.9999999 3z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m38 24h2c3.3123376-.0033074 5.9966926-2.6876624 6-6v-6c-.0033074-3.31233757-2.6876624-5.99669262-6-6h-2c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2zm0-16h2c2.209139 0 4 1.790861 4 4v6c0 2.209139-1.790861 4-4 4h-2z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m34 23c0-.5522847-.4477153-1-1-1h-2v-14h2c.5522847 0 1-.44771525 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .44771525-1 1s.4477153 1 1 1h2v14h-2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Bid <br> Sengketa</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 64 64"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="32" cx="32" cy="32" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,9.600008887052539,9.600000000000001)">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m62.9 52.553-10-20a1 1 0 0 0 -.9-.553h-17v-6h12a1 1 0 0 0 1-1v-18a1 1 0 0 0 -1-1h-30a1 1 0 0 0 -1 1v18a1 1 0 0 0 1 1h12v6h-17a1 1 0 0 0 -.895.553l-10 20a1 1 0 0 0 -.105.447v4a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1v-4a1 1 0 0 0 -.1-.447zm-59.282-.553 4-8h10.6l-2 8zm16.662-8h10.72v8h-12.72zm20.939-10 2 8h-10.219v-8zm-10.219 8h-10.22l2-8h8.22zm2 2h10.719l2 8h-12.719zm14.779 8-2-8h10.6l4 8zm7.6-10h-10.1l-2-8h8.1zm-37.379-34h28v16h-28zm13 18h2v6h-2zm-18.382 8h8.1l-2 8h-10.1zm-9.618 22v-2h58v2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m26.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m26.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m39.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m37.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m48.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m53.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m13.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m14.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m32 13a1 1 0 0 1 1 1h2a3 3 0 0 0 -2-2.816v-1.184h-2v1.184a2.993 2.993 0 0 0 1 5.816 1 1 0 1 1 -1 1h-2a3 3 0 0 0 2 2.816v1.184h2v-1.184a2.993 2.993 0 0 0 -1-5.816 1 1 0 0 1 0-2z"
                                                fill="#61481c" data-original="#000000" class=""></path>
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
                                    <div class="mt-0" style="font-size: 12px">Jual Beli <br> Lahan</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 511.99992 511"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="255.99996" cx="255.99996" cy="255.5" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.79987218379975,75.92755157947542)">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m509.914062 214.859375-85.695312-111.320313c-3.171875-4.117187-8.957031-5.132812-13.34375-2.34375l-55.328125 35.1875h-72.160156c-.933594 0-1.863281.199219-2.761719.460938l-55.949219 16.105469-58.054687-15.878907-56.410156-35.875c-4.3125-2.742187-9.992188-1.8125-13.199219 2.164063l-94.785157 117.40625c-3.40625 4.21875-2.84375 10.378906 1.265626 13.914063l49.679687 42.753906 44.570313 60.0625c-13.035157 13.886718-12.78125 35.789062.78125 49.355468 6.011718 6.007813 13.65625 9.402344 21.519531 10.191407-.273438 1.78125-.414063 3.589843-.414063 5.425781 0 9.476562 3.691406 18.386719 10.390625 25.085938 6.703125 6.703124 15.613281 10.394531 25.089844 10.394531.128906 0 .253906-.007813.378906-.011719-.003906.242188-.015625.480469-.015625.722656 0 9.476563 3.691406 18.386719 10.390625 25.089844 6.703125 6.699219 15.613281 10.390625 25.089844 10.390625 1.871094 0 3.722656-.152344 5.539063-.433594.769531 7.890625 4.171874 15.570313 10.203124 21.601563 6.914063 6.917968 16 10.375 25.085938 10.375s18.171875-3.457032 25.089844-10.375l5.425781-5.425782 2.277344 1.835938c6.859375 6.644531 15.765625 9.964844 24.671875 9.964844 9.085937 0 18.171875-3.457032 25.085937-10.375 7.058594-7.058594 10.515625-16.375 10.371094-25.644532 9.265625.140626 18.585937-3.3125 25.644531-10.367187 7.050782-7.054687 10.507813-16.363281 10.371094-25.628906 9.652344.152343 18.808594-3.554688 25.640625-10.386719 7.058594-7.058594 10.515625-16.375 10.371094-25.644531 9.273437.140625 18.585937-3.3125 25.644531-10.371094 12.046875-12.046875 13.597656-30.667969 4.664062-44.414063l32.542969-68.15625 48.925781-42.101562c4.042969-3.480469 4.660157-9.511719 1.40625-13.734375zm-402.914062-91.910156 40.5625 25.792969-88.238281 107.5-35.359375-30.433594zm5.722656 227.921875 12.242188-12.242188c.371094-.371094.761718-.722656 1.160156-1.050781 2.394531-1.953125 5.292969-3.117187 8.363281-3.394531.085938-.007813.175781-.007813.261719-.011719.4375-.035156.875-.058594 1.316406-.054687 4.195313.058593 8.09375 1.773437 10.984375 4.824218 5.671875 5.996094 5.367188 15.792969-.679687 21.839844l-11.871094 11.871094c-6.003906 6.003906-15.773438 6.003906-21.777344 0-6.003906-6.007813-6.003906-15.777344 0-21.78125zm31.496094 62.484375c-2.910156-2.90625-4.511719-6.773438-4.511719-10.886719s1.601563-7.980469 4.511719-10.890625l23.738281-23.738281c4.546875-4.546875 11.695313-5.792969 17.507813-3.023438 5.992187 2.855469 9.363281 9.359375 8.484375 15.902344-.46875 3.492188-2.09375 6.78125-4.585938 9.277344l-23.363281 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm35.84375 36.191406c-2.910156-2.90625-4.511719-6.773437-4.511719-10.886719 0-4.113281 1.601563-7.980468 4.511719-10.890625l23.734375-23.738281c4.863281-4.859375 12.664063-5.90625 18.617187-2.441406 5.4375 3.164062 8.285157 9.375 7.351563 15.5625-.511719 3.402344-2.128906 6.601562-4.5625 9.035156l-23.359375 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm40.828125 31.5625c-6.003906-6.003906-6.003906-15.773437 0-21.777344l12.242187-12.242187c.371094-.371094.757813-.71875 1.15625-1.046875.011719-.007813.019532-.015625.027344-.023438 1.992188-1.617187 4.332032-2.699219 6.828125-3.171875.058594-.007812.117188-.015625.175781-.023437.429688-.078125.867188-.140625 1.304688-.179688.175781-.015625.351562-.015625.53125-.027343.359375-.019532.714844-.042969 1.078125-.039063 4.191406.058594 8.09375 1.769531 10.984375 4.824219.355469.375.6875.765625.992188 1.167968 4.617187 6.035157 3.996093 15-1.734376 20.734376l-11.808593 11.808593c-6.003907 6.003907-15.773438 6-21.777344-.003906zm187.285156-112.042969c-6.003906 6.007813-15.773437 6.003906-21.777343 0-.21875-.21875-.449219-.421875-.683594-.613281l-64.554688-65.234375c-3.902344-3.941406-10.257812-3.972656-14.199218-.070312-3.941407 3.898437-3.972657 10.253906-.074219 14.195312l65.253906 65.933594c.007813.007812.015625.015625.023437.023437 6.003907 6.003907 6.003907 15.777344 0 21.78125-2.910156 2.910157-6.777343 4.511719-10.890624 4.511719-4.117188 0-7.984376-1.601562-10.890626-4.511719l-43.652343-44.105469c-3.898438-3.941406-10.253907-3.972656-14.195313-.074218-3.941406 3.902344-3.972656 10.257812-.074218 14.199218l42.984374 43.429688c.21875.273438.453126.535156.703126.785156 6.003906 6.003906 6.003906 15.777344 0 21.78125-6.007813 6.003906-15.78125 6-21.785157-.003906l-23.824219-24.074219c-3.902343-3.941406-10.257812-3.976562-14.199218-.074219-3.941406 3.898438-3.972656 10.253907-.074219 14.195313l23.160156 23.398437c.21875.273438.453125.539063.707031.789063 6.003907 6.003906 6.003907 15.777344 0 21.78125-6.003906 6.007813-15.773437 6.003906-21.777343 0-.691407-.691406-1.503907-1.222656-2.277344-1.816406-.65625-.5-.828125-.847657-.5-1.644531.332031-.808594.828125-1.539063 1.160156-2.351563.367188-.90625.664063-1.839844.953125-2.777344 1.539063-4.960937 1.992188-10.296875 1.300782-15.445312-1.328126-9.878907-6.761719-18.792969-14.996094-24.433594-4.449219-3.042969-9.597656-5.039063-14.933594-5.789063 2.585938-11.40625-.519531-23.773437-8.597656-32.308593-6.648438-7.023438-15.628906-10.964844-25.289063-11.097657-.351562-.003906-.703125-.003906-1.058593 0 .214843-9.21875-3.136719-18.378906-9.492188-25.09375-6.652344-7.023437-15.632812-10.964843-25.289062-11.097656-2.871094-.039062-5.769532.265625-8.566407.910156-1.195312-8.316406-5.386719-16.011718-11.734375-21.515624-6.308594-5.460938-14.242187-8.492188-22.691406-8.609376-8.894531-.128906-17.632812 3.152344-24.238281 9.117188l-38.808594-52.292969 92.84375-113.109375 29.589844 8.09375-38.644531 68.191406c-4.671876 8.246094-5.851563 17.816407-3.324219 26.949219 2.527343 9.136719 8.457031 16.738281 16.703125 21.410157.515625.292968 1.035156.570312 1.5625.835937.039062.019531.078125.039063.121094.058594 1.386718.691406 2.8125 1.285156 4.257812 1.785156 6.730469 2.332031 14 2.585937 21.011719.648437 9.132812-2.527343 16.734375-8.460937 21.40625-16.703124l25.113281-44.316407 44.839844 3.179688 119.402344 119.398437c6 6.007813 6 15.777344-.003907 21.78125zm4.160157-46.019531-112.011719-112.007813c-.210938-.214843-.433594-.417968-.664063-.609374-1.613281-1.34375-3.613281-2.15625-5.722656-2.304688l-54.902344-3.894531c-3.796875-.261719-7.570312 1.757812-9.445312 5.066406l-28.234375 49.828125c-2.027344 3.578125-5.328125 6.152344-9.292969 7.25-3.960938 1.097656-8.117188.582031-11.699219-1.445312-3.578125-2.027344-6.152343-5.328126-7.25-9.292969-1.097656-3.964844-.585937-8.121094 1.445313-11.699219l37.691406-66.519531 15.273438-4.394531c.101562-.03125.199218-.070313.300781-.101563l57.003906-16.460937h68.875l85.984375 109.304687zm40.503906-73.039063-79.515625-101.136718 40.582031-25.808594 74.300781 96.511719zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m310.183594 117.53125c2.570312 0 5.140625-.980469 7.101562-2.941406l68.578125-68.578125c3.921875-3.921875 3.921875-10.277344 0-14.199219s-10.277343-3.921875-14.199219 0l-68.578124 68.578125c-3.921876 3.921875-3.921876 10.277344 0 14.199219 1.960937 1.960937 4.53125 2.941406 7.097656 2.941406zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m194.714844 114.589844c1.960937 1.960937 4.53125 2.941406 7.101562 2.941406 2.566406 0 5.136719-.980469 7.097656-2.941406 3.921876-3.921875 3.921876-10.277344 0-14.199219l-68.578124-68.578125c-3.921876-3.921875-10.277344-3.921875-14.199219 0s-3.921875 10.277344 0 14.199219zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m256 117.53125c5.542969 0 10.039062-4.496094 10.039062-10.039062v-56.753907c0-5.542969-4.496093-10.039062-10.039062-10.039062s-10.039062 4.496093-10.039062 10.039062v56.753907c0 5.542968 4.496093 10.039062 10.039062 10.039062zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m246.734375 14.351562c1.59375 3.863282 5.566406 6.398438 9.757813 6.179688 4.140624-.214844 7.777343-3.011719 9.058593-6.953125 1.285157-3.972656-.113281-8.5-3.441406-11.03125-3.394531-2.5859375-8.128906-2.730469-11.679687-.382813-3.960938 2.617188-5.496094 7.828126-3.695313 12.1875zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Kerjasama <br> Lahan</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 479.976 479.976"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="239.988" cx="239.988" cy="239.988" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
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
                                    <div class="mt-0" style="font-size: 12px">Pelelangan <br> Lahan</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="77px" x="0" y="0" viewBox="0 0 54 60"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="27" cx="27" cy="30" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,8.084528160095218,8.999380803108217)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="022---Tape-Measure" fill="rgb(0,0,0)" fill-rule="nonzero"
                                                    transform="translate(0 -1)">
                                                    <path id="Shape"
                                                        d="m35.264 1.609c-3.7378983-.44229717-7.5002037-.64571016-11.264-.609-13.458 0-24 5.271-24 12v16c0 5.383 6.783 9.917 16.775 11.445-2.7926667 2.016-5.7446667 4.0936667-8.856 6.233-.52171701.3581018-.84249019.9425814-.86438596 1.5749943s.25768537 1.2376783.75338596 1.6310057l13.344 10.677c.7075125.5643386 1.7047481.5868449 2.437.055 2.234-1.627 4.415-3.327 6.539-5.072 2.0666667-1.7006667 4.0666667-3.4456667 6-5.235.01-.011.024-.014.033-.025l.007-.012c1.8933333-1.75 3.708-3.5286667 5.444-5.336.021-.02.049-.028.068-.051s.016-.033.027-.048c1.274-1.329 2.516-2.666 3.689-4.011 3.332-3.822 7.478-8.577 8.268-14.434.806-5.974-.307-14.827-6.094-20.117-3.615-3.316-8.248-4.147-12.306-4.666zm-11.264 1.391c11.925 0 22 4.58 22 10 0 6.481-12.9 10-22 10-11.925 0-22-4.58-22-10s10.075-10 22-10zm-22 26v-11.126c3.67 4.233 12.033 7.126 22 7.126 5.2574546.0850922 10.482356-.8399846 15.391-2.725-6.137036 5.6608759-12.6126553 10.9432928-19.391 15.818v-5.093c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5.6c-1.6868152-.2203923-3.35715-.5524548-5-.994v-5.606c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5c-1.38319746-.4632171-2.72192488-1.0499144-4-1.753v-6.247c0-.5522847-.44771525-1-1-1s-1 .4477153-1 1v4.931c-1.9-1.482-3-3.176-3-4.931zm20.4 30-13.349-10.673c1.525-1.048 3.157-2.182 4.851-3.375.8795125.5637678 1.9341854.788068 2.967.631.6467275-.1382595 1.3217636.0033584 1.858396.3898785s.8848318.9819079.958604 1.6391215c.402216 2.320963 2.5831155 3.8968216 4.913 3.55.6475955-.1324477 1.3210571.0126426 1.8566662.3999993.535609.3873568.8843101.9815027.9613338 1.6380007.1115411.5302585.3016372 1.040889.564 1.515-1.819 1.467-3.681 2.902-5.581 4.285zm29.291-32.88c-.2314302 1.5810662-.7085194 3.1162541-1.414 4.55l-1.422-2c-.3203252-.4501121-.9448879-.5553252-1.395-.235s-.5553252.9448879-.235 1.395l1.991 2.8c-.9637169 1.5504227-2.0385323 3.0289622-3.216 4.424l-2.783-3.182c-.2344926-.2711789-.5962086-.3960829-.9480668-.3273765-.3518582.0687063-.6400157.3205093-.7552681.6599819-.1152523.3394726-.0399631.7146672.1973349.9833946l2.977 3.412c-.267.309-.532.614-.791.91-.974 1.118-2 2.23-3.046 3.337l-4.2-3.6c-.2690133-.2485449-.6523779-.3301409-.9992902-.2126907-.3469124.1174502-.6018621.415153-.66456.7760016-.0626979.3608485.0768884.7271025.3638502.9546891l4.117 3.533c-1.315 1.345-2.685 2.675-4.093 3.99l-4.725-4.048c-.2715218-.2322227-.6463077-.3019501-.9831793-.1829166-.3368717.1190335-.5846503.4087439-.6500001.7600001-.0653497.3512561.0616575.7106939.3331794.9429165l4.55 3.894c-1.4 1.273-2.857 2.52-4.334 3.75-.0840051-.2267706-.1538069-.4585525-.209-.694-.4011847-2.3176237-2.5798838-3.8905859-4.906-3.542-.6498109.1317688-1.3251096-.0145721-1.8620778-.4035225-.5369682-.3889505-.8865429-.9849718-.9639222-1.6434775-.3956791-2.3200929-2.5801354-3.8932042-4.906-3.533-.2990527.032209-.6006079.0338843-.9.005 11.38-8.1 24.973-18.56 30.1-25.628 1.2497329-1.3192534 1.9876535-3.0411864 2.081-4.856.052-3.144-2.156-5.638-4.789-7.387 1.0986623.52852923 2.1165304 1.21069956 3.023 2.026 4.878 4.462 6.256 12.442 5.457 18.372z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m23.969 19c4.091 0 10.919-1.174 12.678-4.88 1.194-2.516-.879-5.1-3.215-6.678-2.2044717-1.3965907-4.6319185-2.40518012-7.177-2.982-.778402-.19740877-1.6042675-.03956041-2.255.431-.3982804.28692111-.7127686.67493952-.911 1.124-6.945.227-12.089 2.953-12.089 6.485 0 4.715 7.876 6.5 12.969 6.5zm7.343-3.2.358-7.106c.2226667.13333333.4376667.26966667.645.409 3.756 2.532 3.677 4.942-1.003 6.697zm-6.456-8.717v-.019c.017091-.22037403.1305214-.42198743.31-.551.1701891-.12668716.3886521-.16934997.594-.116 1.3508165.33520878 2.6737454.77417913 3.957 1.313l-.438 8.706c-1.6840136.3905512-3.4072936.5865005-5.136.5840236zm-2.072.946-.639 8.9c-5.511-.398-9.145-2.538-9.145-4.429 0-1.977 3.965-4.19 9.784-4.471z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m27 11c-.5522847 0-1 .4477153-1 1v1c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-1c0-.5522847-.4477153-1-1-1z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m16.625 49.219c-.4313344-.3451779-1.060822-.2753344-1.406.156-.3451779.4313344-.2753344 1.060822.156 1.406l5 4c.4313344.3451779 1.060822.2753344 1.406-.156.3451779-.4313344.2753344-1.060822-.156-1.406z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Tukang Ukur</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000457763674)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="XMLID_81_">
                                                <g id="XMLID_393_">
                                                    <path id="XMLID_433_"
                                                        d="m256 350.502c46.317 0 84-37.682 84-84v-155.502c0-27.061-13.158-52.623-35.199-68.378-4.495-3.212-10.74-2.172-13.95 2.32-3.212 4.493-2.174 10.739 2.319 13.951 9.158 6.546 16.298 15.315 20.904 25.275h-19.074c-5.522 0-10 4.477-10 10s4.478 10 10 10h24.625c.244 2.258.375 4.537.375 6.832v13.168h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-128v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-13.168c0-2.295.131-4.574.375-6.832h24.625c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.078c4.638-10.03 11.846-18.849 21.101-25.412 4.505-3.195 5.566-9.437 2.371-13.942-3.194-4.504-9.436-5.566-13.941-2.372-22.2 15.746-35.453 41.374-35.453 68.558v155.502c0 46.318 37.683 84 84 84zm-64-126.334h128v42.334c0 35.29-28.71 64-64 64s-64-28.71-64-64z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_442_"
                                                        d="m370 256.502c-5.522 0-10 4.477-10 10 0 57.346-46.654 104-104 104s-104-46.654-104-104c0-5.523-4.478-10-10-10s-10 4.477-10 10c0 58.032 40.074 106.873 94 120.323v34.269c-28.346 1.604-50.917 25.166-50.917 53.906 0 5.523 4.478 10 10 10h141.834c5.522 0 10-4.477 10-10 0-28.741-22.571-52.302-50.917-53.906v-34.269c53.926-13.45 94-62.291 94-120.323 0-5.523-4.478-10-10-10zm-54.583 208.498h-118.834c4.28-13.883 17.23-24 32.5-24h53.834c15.27 0 28.22 10.117 32.5 24zm-49.417-74.498v30.498h-20v-30.498z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_444_"
                                                        d="m10 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_445_"
                                                        d="m102 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_446_"
                                                        d="m56 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_447_"
                                                        d="m502 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_448_"
                                                        d="m410 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_449_"
                                                        d="m456 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_450_"
                                                        d="m256 286.84c2.63 0 5.21-1.07 7.069-2.93 1.86-1.87 2.931-4.44 2.931-7.07s-1.07-5.21-2.931-7.08c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21 1.07-7.07 2.93c-1.86 1.87-2.93 4.44-2.93 7.08 0 2.63 1.069 5.2 2.93 7.07 1.86 1.86 4.44 2.93 7.07 2.93z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_451_"
                                                        d="m256.13 47c2.63 0 5.21-1.07 7.07-2.93 1.859-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07-4.44-2.93-7.07-2.93c-2.64 0-5.21 1.07-7.08 2.93-1.86 1.86-2.92 4.44-2.92 7.07s1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Podcast <br> Sengketa</div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body pb-1 pt-2">
                        <div class="row">
                            <div class="col-3 text-center mb-2">

                                <button class="btn btn-sm" id="btn-panduan" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="70px" x="0" y="0" viewBox="0 0 296.999 296.999"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="148.4995" cx="148.4995" cy="148.4995" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,44.54984436035157,44.54998970031738)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543     v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382     C115.322,40.849,70.226,35.107,45.432,35.049z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0     c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779     c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344     c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427     C297,76.568,292.232,71.801,286.373,71.801z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301     c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342     C30.49,232.13,18.332,219.963,18.332,205.042z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
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
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">PANDUAN</h6>
                                </button>

                                <script>
                                    $("#btn-panduan").click(function () {
                                        $("#panduan").toggleClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#tentang").removeClass('show');
                                    });

                                </script>


                            </div>

                            <div class="col-3 text-center mb-2">
                                <button class="btn btn-sm" id="btn-jaminan" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="70px" x="0" y="0" viewBox="0 0 32 32"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="16" cx="16" cy="16" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,4.799999713897705,4.800377225875856)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="_26-Guranteed"
                                                data-name="26-Guranteed">
                                                <path
                                                    d="m27 6c-5.56 0-10.33-3.74-10.38-3.78a1 1 0 0 0 -1.24 0c-.05.04-4.8 3.78-10.38 3.78a1 1 0 0 0 -1 1v9c0 6.71 2.71 10 11.59 13.91a1 1 0 0 0 .82 0c8.88-3.91 11.59-7.2 11.59-13.91v-9a1 1 0 0 0 -1-1zm-11 18a8 8 0 1 1 8-8 8 8 0 0 1 -8 8z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m18.29 13.29-3.29 3.3-1.29-1.3a1 1 0 0 0 -1.42 1.42l2 2a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 -1.42-1.42z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">JAMINAN</h6>
                                </button>

                                <script>
                                    $("#btn-jaminan").click(function () {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").toggleClass('show');
                                        $("#chat").removeClass('show');
                                        $("#tentang").removeClass('show');
                                    });

                                </script>

                            </div>

                            <div class="col-3 text-center mb-2">
                                <button class="btn btn-sm" id="btn-chat" type="button">
                                    <img src="{{asset('')}}images/cus.svg" style="width:55px;margin-top:9px" alt=""
                                        srcset="">
                                    <h6 class=" mb-0" style="font-weight:bold;margin-top:13px">CHAT</h6>
                                </button>

                                <script>
                                    $("#btn-chat").click(function () {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#chat").toggleClass('show');
                                        $("#tentang").removeClass('show');
                                    });

                                </script>
                            </div>

                            <div class="col-3 text-center mb-2">
                                <button class="btn btn-sm" id="btn-tentang" type="button" style="margin-left:-10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="70px" x="0" y="0" viewBox="0 0 24 24"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="12" cx="12" cy="12" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,3.600000000000003,3.600000000000003)">
                                            <g xmlns="http://www.w3.org/2000/svg" fill="rgb(0,0,0)">
                                                <path
                                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m12 9a1 1 0 0 0 -1 1v8a1 1 0 0 0 2 0v-8a1 1 0 0 0 -1-1z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <circle cx="12" cy="6" r="1" fill="#61481c" data-original="#000000"
                                                    class=""></circle>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">TENTANG</h6>
                                </button>

                                <script>
                                    $("#btn-tentang").click(function () {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#chat").removeClass('show');
                                        $("#tentang").toggleClass('show');
                                    });

                                </script>

                            </div>

                            <ol id="panduan"
                                class="list-group panduan list-group-numbered shadow dropdown-menu rounded-0 p-0"
                                style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Buat Akun Sengketa Tanah</div>
                                        Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor,
                                        Pengacara).
                                    </div>
                                    <i class="fa-solid fa-user-plus fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Buat Laporan Sengketa Tanah
                                        </div>
                                        Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah
                                        Anda.
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
                                        Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan
                                        hukum pengacara, dan
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
                                        Yay! Selamat, kamu telah mendapatkan bantuan.
                                    </div>
                                    <i class="fa-solid fa-handshake-angle fs-6" style="color: #61481C"></i>
                                </li>
                            </ol>

                            <ol id="jaminan" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3"
                                style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <div class="col-md-12">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-user-tie"></i></b></h5>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 style="color: #61481C" class="mb-0"><b>Sponsor Terverifikasi</b>
                                            </h5>
                                            Setiap sponsor yang terlibat di verifikasi kemampuan dan sumber dananya.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-gavel"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Pengacara
                                                        Terverifikasi</b></h5>
                                                Setiap pengacara wajib memiliki sertifikasi advokat yang dibutuhkan.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-hand-holding-dollar"></i></b>
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Pembayaran Aman</b></h5>
                                                Setiap transaksi yang terjadi menggunakan platform pembayaran
                                                Sengketa Tanah.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-chart-line"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Bantuan Analisa</b></h5>
                                                Kami memberikan bantuan analisa terhadap permasalahan yang relevan
                                                untuk diatasi.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-handshake"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Kesepakatan
                                                        Terlindungi</b></h5>
                                                Semua kesepakatan yang terjadi dilindungi perjanjian hukum yang
                                                ketat dan mengikat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i
                                                        class="fa-solid fa-user-gear"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Bantuan Customer
                                                        Support</b></h5>
                                                Layanan CS 24 jam siap membantu anda.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ol>

                            <ol id="chat"
                                class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                                style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <h2>
                                    <div class="fw-bold" style="color: #61481C"> Customer Service</div>
                                </h2>
                                <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                                    <input type="text" class="form-control" placeholder="Email"> <textarea
                                        class="form-control" placeholder="Masukan Pesan"></textarea> <button
                                        class="btn btn-success btn-block">Kirim</button>
                                </div>
                            </ol>

                            <ol id="tentang"
                                class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                                style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row desktop mb-4">
                                            <div class="col-md">
                                                <div class="card-body text-center container" style="height:500px">
                                                    <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                        style="width:300px; height:400px;object-fit:cover" alt=""
                                                        srcset="" class="img-fluid">
                                                    <div class="card rounded-0"
                                                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Presiden Joko Widodo menegaskan kepada
                                                                Kementerian
                                                                ATR/BPN untuk
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
                                                        style="width:300px; height:400px;object-fit:cover" alt=""
                                                        srcset="" class="img-fluid">
                                                    <div class="card rounded-0"
                                                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Sesuai perintah Bapak Presiden, semua
                                                                kasus mafia
                                                                tanah yang ada
                                                                di
                                                                Indonesia harus
                                                                diselesaikan" <br> -<b> Hadi Tjahjanto (Mentri ATR/BPN)
                                                                </b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="card-title fw-bolder text-dark"></p>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="card-body text-center container" style="height:500px">
                                                    <img src="{{asset('/uploads/kapolri.png')}}"
                                                        style="width:300px; height:400px;object-fit:cover" alt=""
                                                        srcset="" class="img-fluid">
                                                    <div class="card rounded-0"
                                                        style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Penyidik tidak perlu ragu ragu dalam
                                                                mengusut
                                                                tuntas masalah mafia
                                                                tanah, penyidik agar tindak tegas siapapun dalang dan
                                                                bekingannya"
                                                                <br> -<b> Listyo
                                                                    Sigit Prabowo (Kapolri) </b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="card-title fw-bolder text-dark"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="carouselExampleControlsPres" class="carousel slide mobile  mb-4"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner  mb-5">
                                                <div class="carousel-item active">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                            style="width:300px; height:400px;object-fit:cover" alt=""
                                                            srcset="" class="img-fluid">
                                                        <div class="card rounded-0"
                                                            style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                                                            <div class="card-body">
                                                                <p class="card-text">"Presiden Joko Widodo menegaskan
                                                                    kepada Kementerian ATR/BPN untuk serius dalam memberantas mafia tanah" <br> -<b> 
                                                                        Ir. H. Joko Widodo (Presiden RI)</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="card-title fw-bolder text-dark"></p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}"
                                                            style="width:300px; height:400px;object-fit:cover" alt=""
                                                            srcset="" class="img-fluid">
                                                        <div class="card rounded-0"
                                                            style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                            <div class="card-body">
                                                                <p class="card-text">"Sesuai perintah Bapak Presiden,
                                                                    semua kasus
                                                                    mafia tanah yang
                                                                    ada
                                                                    di Indonesia harus
                                                                    diselesaikan"<br> -<b> Hadi Tjahjanto (Mentri
                                                                        ATR/BPN) </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="card-title fw-bolder text-dark"></p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/kapolri.png')}}"
                                                            style="width:300px; height:400px;object-fit:cover" alt=""
                                                            srcset="" class="img-fluid">
                                                        <div class="card rounded-0"
                                                            style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                            <div class="card-body">
                                                                <p class="card-text">"Penyidik tidak perlu ragu ragu
                                                                    dalam mengusut
                                                                    tuntas masalah
                                                                    mafia

                                                                    tanah, penyidik agar tindak tegas siapapun dalang
                                                                    dan
                                                                    bekingannya" <br> -<b>
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
                                    </div>
                                </div>
                                <style>
                                    @media (min-width: 1400px){
                                    .container-lsa {
                                        max-width: 1000px !important;
                                    }
                                }
                                </style>
                                <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="mb-2" style="width: 75px" alt="">
                                <div class="container-lsa mx-auto">
                                    <h2>
                                        <div class="fw-bold" style="color: #61481C"> TENTANG KAMI</div>
                                    </h2>
                                    SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                                    masalah
                                    sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa tanah
                                    atau korban
                                    mafia
                                    tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah
                                    persengketaan tanah
                                    tersebut.
                                </div>
                                
                            </ol>
                        </div>

                    </div>
                </div>

                <!-- bidding -->
                <div class="card mb-3 border-0 shadow-sm ">
                    <div class="card-header bg-white">

                        <table style="width:100%">
                            <tr>
                                <td rowspan="2" style="width: 40px">
                                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                                </td>
                                <td>
                                    <h5 color="text-dark" style="margin-bottom: 0px !important">
                                        Bidding Sponsor
                                    </h5>
                                </td>
                                <td class="text-end" rowspan="2">
                                    <a href="#" class="text-success fw-bold" style="text-decoration: none">Lihat
                                        Semua</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Sengketa <span class="badge bg-danger">11,874</span></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="card-body" style="background-color:#FAFAD2;">

                        <div class="row align-items-center justify-content-center">

                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-button" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-10 arrow-desktop text-center">
                                <div class="row mobile-scroll mt-2" id="lelang-card" style="flex-wrap: nowrap">

                                    <div class="col-12 ">
                                        <div class="card mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan1.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid SP-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">




                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Owner/Korban</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bahru</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Objek Sengketa</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Sengketa Pertanahan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 1 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kebutuhan Dana</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Rp.450.000.000</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Imbal Hasil</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Fee 50% Dari Pinjaman</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jaminan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Sertifikat Tanah</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Podcast
                                                            (9)</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa1" method="get">
                                                    <input type="hidden" name="owner" value=" Bahru">
                                                    <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                    <input type="hidden" name="luas" value=" 1 Ha">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan2.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid KP-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"> </h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">

                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Owner/Korban</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Fatah</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Objek Sengketa</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Konflik Pertanahan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 5000 m</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kebutuhan Dana</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Rp.500.000.000</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Imbal Hasil</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bagi Hasil 70/30*</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jaminan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Sertifikat Rumah</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa2').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Podcast
                                                            (9)</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa2" method="get">
                                                    <input type="hidden" name="owner" value=" Fatah">
                                                    <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                    <input type="hidden" name="luas" value=" 5000 m">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan3.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid PP-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Owner/Korban</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Objek Sengketa</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Perkara Pertanahan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kebutuhan Dana</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Rp.200.000.000</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Imbal Hasil</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bagi Hasil 60/40*</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jaminan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Sertifikat Tanah</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa3').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Podcast
                                                            (9)</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan4.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">

                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid PP-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Owner/Korban</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Objek Sengketa</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Perkara Pertanahan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kebutuhan Dana</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Rp.200.000.000</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Imbal Hasil</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bagi Hasil 60/40*</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jaminan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Sertifikat Tanah</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas (12)
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa3').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Podcast
                                                            (9)</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas " value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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



                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-button" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <script>
                            $('#right-button').click(function () {
                                event.preventDefault();
                                $('#lelang-card').animate({
                                    scrollLeft: "+=300px"
                                }, "slow");
                            });

                            $('#left-button').click(function () {
                                event.preventDefault();
                                $('#lelang-card').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            });

                        </script>

                    </div>
                </div>

                <!-- Kerja sama lahan -->
                <div class="card mb-3 border-0 shadow-sm ">
                    <div class="card-header bg-white">
                        <table style="width:100%">
                            <tr>
                                <td rowspan="2" style="width: 40px">
                                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                                </td>
                                <td>
                                    <h5 color="text-dark" style="margin-bottom: 0px !important">
                                        Kerja Sama Lahan
                                    </h5>
                                </td>
                                <td class="text-end" rowspan="2">
                                    <a href="#" class="text-success fw-bold" style="text-decoration: none">Lihat
                                        Semua</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Lahan Tersedia <span class="badge bg-danger">4,323</span></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="card-body" style="background-color:#FAFAD2;">


                        <div class="row align-items-center justify-content-center">

                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-button1" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-10 arrow-desktop text-center">
                                <div class="row mt-2 mobile-scroll justify-content-between" id="lelang-card1"
                                    style="flex-wrap: nowrap">

                                    <div class="col-12 ">
                                        <div class="card mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan1.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang KSL-004 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">





                                                <table>
                                                    <tbody>
                                                        </tr>

                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bahru</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 1 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>
                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa1" method="get">
                                                    <input type="hidden" name="owner" value=" Bahru">
                                                    <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                    <input type="hidden" name="luas" value=" 1 Ha">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan2.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="
                                    background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang KSL-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">


                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Fatah</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 5000 m</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>



                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa2" method="get">
                                                    <input type="hidden" name="owner" value=" Fatah">
                                                    <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                    <input type="hidden" name="luas" value=" 5000 m">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan3.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="
                                    background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang KSL-002 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">


                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>




                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                BID
                                                            </button>


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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
                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan4.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">

                                            <div class="card-header text-white px-3 py-1" style="
                                    background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang KSL-003 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">


                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>




                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <!-- <button type="button"
                                                        class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-button1" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>



                        <script>
                            $('#right-button1').click(function () {
                                event.preventDefault();
                                $('#lelang-card1').animate({
                                    scrollLeft: "+=300px"
                                }, "slow");
                            });

                            $('#left-button1').click(function () {
                                event.preventDefault();
                                $('#lelang-card1').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            });

                        </script>




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
                <!-- podcast Sengketa -->
                <div class="card mb-3 border-0 shadow-sm ">
                    <div class="card-header bg-white">
                        <table style="width:100%">
                            <tr>
                                <td rowspan="2" style="width: 40px">
                                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                                </td>
                                <td>
                                    <h5 color="text-dark" style="margin-bottom: 0px !important">
                                        Podcast Sengketa
                                    </h5>
                                </td>
                                <td class="text-end" rowspan="2">
                                    <a href="#" class="text-success fw-bold" style="text-decoration: none">Lihat
                                        Semua</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Video <span class="badge bg-danger">10</span></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="card-body" style="background-color:#000;">
                        <style>
                            .texto {
                                font-size: 11px;
                            }
                            @media (min-width: 992px) { 
                                #vid_frame {
                                    height: 500px !important;
                                }
                                .vid-lamo {
                                    height: 500px !important;
                                }
                                .pencet {
                                    cursor: pointer;
                                }
                                .texto {
                                    font-size: 16px
                                }
                             }
                        </style>
                        <div class="container">
                            
                            <div class="row">
                                <div class="col-lg">
                                    <iframe id="vid_frame" src="https://www.youtube.com/embed/-RkCcavzXq8" width="100%" height="250px" frameborder="0"></iframe>
                                </div>
                                <div class="vr desktop"></div>
                                <div class="col-lg-5 vid-lamo" style="height: 250px; overflow-y: scroll">
                                    <hr class="border-light">

                                    <div class="row mb-3 g-0">
                                        <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/-RkCcavzXq8?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago" width="100%" src="https://i.ytimg.com/vi/-RkCcavzXq8/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDYuRgylXJIKoNUa4El8SsT1f88ng"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PetaniMengadu</div>
                                        </div>
                                    </div>

                                    <hr class="border-light">

                                    <div class="row mb-3 g-0">
                                        <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/byby3HJ3OCI?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago"  width="100%" height="100%" src="https://i.ytimg.com/vi/byby3HJ3OCI/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCHbyFGnyjuYbXClrL-dy7-iFeVOQ"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PodcastSengketaTanah1</div>
                                       </div>
                                    </div>

                                    <hr class="border-light">
                                   
                                   <div class="row mb-3 g-0">
                                       <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/-RkCcavzXq8?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago"  width="100%" src="https://i.ytimg.com/vi/-RkCcavzXq8/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDYuRgylXJIKoNUa4El8SsT1f88ng"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PetaniMengadu</div>
                                       </div>
                                   </div>

                                   <hr class="border-light">
                                
                                   <div class="row mb-3 g-0">
                                       <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/byby3HJ3OCI?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago"  width="100%" src="https://i.ytimg.com/vi/byby3HJ3OCI/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCHbyFGnyjuYbXClrL-dy7-iFeVOQ"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PodcastSengketaTanah1</div>
                                       </div>
                                   </div>

                                   <hr class="border-light">
                                   
                                   <div class="row mb-3 g-0">
                                       <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/-RkCcavzXq8?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago"  width="100%" src="https://i.ytimg.com/vi/-RkCcavzXq8/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDYuRgylXJIKoNUa4El8SsT1f88ng"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PetaniMengadu</div>
                                       </div>
                                   </div>

                                   <hr class="border-light">
                                
                                   <div class="row mb-3 g-0">
                                       <div class="row g-2 pencet" onclick="document.getElementById('vid_frame').src='http://www.youtube.com/embed/byby3HJ3OCI?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                                            <div class="col-4"><img class="imago"  width="100%" src="https://i.ytimg.com/vi/byby3HJ3OCI/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCHbyFGnyjuYbXClrL-dy7-iFeVOQ"></div>
                                            <div class="col-8 text-white texto">Mafia Tanah Sikat Lahan Garapan Petani Pancawati Bogor #PodcastSengketaTanah1</div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                          <!-- THE PLAYLIST -->
                          {{-- <div class="vid-list-container">
                              <div class="vid-list">
                                   
                                   
                                
                                   
                                
                               </div>
                          </div> --}}
                        
                        </div>


                        {{-- <div class="row mt-2 justify-content-between" id="lelang-card"
                            style="overflow-x: auto; flex-wrap: nowrap">

                            <div class="col-12 bid">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/-RkCcavzXq8"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="col-12 bid">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/byby3HJ3OCI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="col-12 bid">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1I4iEKK1qbQ"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>


                        </div>
                        <div class="desktop-2">
                            <div class="row mt-2 justify-content-between" id="lelang-card"
                                style="overflow-x: auto; flex-wrap: nowrap">
                                <div class="col-12 bid">
                                    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1I4iEKK1qbQ"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>

                                <div class="col-12 bid">
                                    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/-RkCcavzXq8"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>

                                <div class="col-12 bid">
                                    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/byby3HJ3OCI"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>



                            </div>
                        </div> --}}

                    </div>
                </div>

                <!-- Jual beli Lahan -->
                <div class="card mb-3 border-0 shadow-sm ">
                    <div class="card-header bg-white">
                        <table style="width:100%">
                            <tr>
                                <td rowspan="2" style="width: 40px">
                                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                                </td>
                                <td>
                                    <h5 color="text-dark" style="margin-bottom: 0px !important">
                                        Jual Beli Lahan
                                    </h5>
                                </td>
                                <td class="text-end" rowspan="2">
                                    <a href="#" class="text-success fw-bold" style="text-decoration: none">Lihat
                                        Semua</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Lahan Tersedia <span class="badge bg-danger">4,323</span></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="card-body" style="background-color:#FAFAD2;">

                        <div class="row align-items-center justify-content-center">

                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-button2" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>

                            <div class="col-10 arrow-desktop text-center">

                                <div class="row mt-2 mobile-scroll justify-content-between" id="lelang-card2"
                                    style="flex-wrap: nowrap">

                                    <div class="col-12 ">
                                        <div class="card mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan1.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang JBL-004 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.450.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>

                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bahru</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 1 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>
                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa1" method="get">
                                                    <input type="hidden" name="owner" value=" Bahru">
                                                    <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                    <input type="hidden" name="luas" value=" 1 Ha">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <!-- <button type="button"
                                                        class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan2.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div div class="card-header text-white px-3 py-1"
                                                style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang JBL-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.500.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Fatah</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 5000 m</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa2" method="get">
                                                    <input type="hidden" name="owner" value=" Fatah">
                                                    <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                    <input type="hidden" name="luas" value=" 5000 m">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <!-- <button type="button"
                                                        class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan3.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang JBL-002 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.200.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <!-- <button type="button"
                                                        class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan4.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">

                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang JBL-003 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.200.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <!-- <button type="button"
                                                        class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                </div>
                            </div>

                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-button2" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                        </div>



                        <script>
                            $('#right-button2').click(function () {
                                event.preventDefault();
                                $('#lelang-card2').animate({
                                    scrollLeft: "+=300px"
                                }, "slow");
                            });

                            $('#left-button2').click(function () {
                                event.preventDefault();
                                $('#lelang-card2').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            });

                        </script>


                    </div>

                </div>
                <!-- lelang -->
                <div class="card mb-4 border-0 shadow-sm ">
                    <div class="card-header bg-white">
                        <table style="width:100%">
                            <tr>
                                <td rowspan="2" style="width: 40px">
                                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                                </td>
                                <td>
                                    <h5 color="text-dark" style="margin-bottom: 0px !important">
                                        Lelang Lahan
                                    </h5>
                                </td>
                                <td class="text-end" rowspan="2">
                                    <a href="#" class="text-success fw-bold" style="text-decoration: none">Lihat
                                        Semua</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Berakhir Dalam <span class="badge bg-danger"><i
                                                class="fa-solid fa-clock"></i> &nbsp;01:08:59</span></p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-body" style="background-color:#FAFAD2;">

                        <div class="row align-items-center justify-content-center">

                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-button3" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>

                            <div class="col-10 arrow-desktop text-center">



                                <div class="row mobile-scroll justify-content-between" id="lelang-card3"
                                    style="flex-wrap: nowrap">
                                    <div class="col-12 ">
                                        <div class="card mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan1.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Lelang LL-004 <img
                                                                src="https://sengketatanah.id/uploads/biru_centang.png"
                                                                alt="" class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.450.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>

                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Bahru</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 1 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>


                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>
                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa1" method="get">
                                                    <input type="hidden" name="owner" value=" Bahru">
                                                    <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                    <input type="hidden" name="luas" value=" 1 Ha">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                    BID
                                                </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan2.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Lelang LL-001 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.500.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">

                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Fatah</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Pancawati, Bogor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 5000 m</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>



                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa2" method="get">
                                                    <input type="hidden" name="owner" value=" Fatah">
                                                    <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                    <input type="hidden" name="luas" value=" 5000 m">
                                                    <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                    BID
                                                </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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

                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan3.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Lelang LL-002 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.100.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>




                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>



                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                    BID
                                                </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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
                                    
                                    <div class="col-12">
                                        <div class="card mb-2 mx-auto" style="width: 21rem;">
                                            <img src="{{asset('')}}images/lahan4.jpeg" class="card-img-top" alt="..."
                                                style="height:200px;width:auto;object-fit:cover">

                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Lelang LL-003 <img
                                                                src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-0">
                                                <table class="mt-2 mb-2">
                                                    <tr>
                                                        <td class="text-start">
                                                            <h5>
                                                                <b class="text-primary">
                                                                    Rp.200.000.000
                                                                </b>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-dark float-end"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleSponsor">&nbsp;&nbsp;&nbsp;BID&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <hr style="margin-top:-4px">
                                                <table>
                                                    <tbody>
                                                        </tr>
                                                        <tr>
                                                            <td>Owner</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Ophelia Suartini</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; Medan, Sumatra Utara</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luas Objek</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp; 3.2 Ha</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Lahan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Tanah Darat</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peruntukan</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;Permukiman</td>
                                                        </tr>




                                                        <tr>
                                                            <td>Jumlah Bid</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>&nbsp;6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="#" class="text-dark  mx-auto" data-bs-toggle="modal"
                                                            data-bs-target="#berkasSponsor"
                                                            style="text-decoration:none">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas
                                                        </a>


                                                        <div class="modal fade my-auto" id="berkasSponsor" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
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
                                                            onclick="return document.querySelector('form.form-sengketa1').submit()"
                                                            style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i>
                                                            Lihat Video</span>
                                                    </div>
                                                </div>

                                                <form action="http://localhost:8000/bid-sengketa/podcast"
                                                    class="form-sengketa3" method="get">
                                                    <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                    <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                    <input type="hidden" name="luas" value=" 3.2 Ha">
                                                    <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt"
                                                        value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">
                                                            <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                    BID
                                                </button> -->


                                                            <div class="modal fade my-auto" id="exampleSponsor"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header p-0">
                                                                            <h1
                                                                                class="modal-title mx-auto text-danger display-1">
                                                                                <i
                                                                                    class="fa-regular fa-circle-xmark"></i>
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
                                </div>
                            </div>

                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-button3" class="btn rounded-5 text-white"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                        </div>



                        <script>
                            $('#right-button3').click(function () {
                                event.preventDefault();
                                $('#lelang-card3').animate({
                                    scrollLeft: "+=300px"
                                }, "slow");
                            });

                            $('#left-button3').click(function () {
                                event.preventDefault();
                                $('#lelang-card3').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            });

                        </script>


                    </div>

                </div>


            </div>
        </div>
        <style>
            .store {
                width: 171px;
            }
            .appstore {
                width: 140px;
                margin-left: 10px
            }
            @media screen and (min-width: 768px){
                .store {
                    width: 216px;
                }
                .appstore {
                    width: 185px;
                }
            }
        </style>

<style>
    .icon-wrapper {
        width: 62px;
        height: 64px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: #61481C;
        box-shadow: 0px 4px 8pxrgba(41, 128, 185, 0.24);
        border-radius: 100px;
    }
  /* width */
#row-why::-webkit-scrollbar {
  width: 0px;
}
#row-why::-webkit-scrollbar {
  width: 0px;
}

/* Track */
#row-why::-webkit-scrollbar-track {
  background: #f1f1f1;
  width: 0px;
}

/* Handle */
#row-why::-webkit-scrollbar-thumb {
  background: #888;
  width: 0px;
}

/* Handle on hover */
#row-why::-webkit-scrollbar-thumb:hover {
  background: #555;
  width: 0px;
}

</style>

<div class="p-4">
<h5>
    Kenapa Sengketatanah.id ?
</h5>
</div>
<div class="row justify-content-between p-4"id="row-why" style="margin-bottom:30px;">
    <div class="col-sm col-lg-3">
        <div class="card border-0 mt-3 shadow p-1">
            <div class="card-body">
                <div class="icon-wrapper">
                    <svg height="26px" viewBox="0 0 32 32" width="26px" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(0, 0)" fill="#fff">
                            <path
                                d="M20.5002 5.83337C23.3291 5.83337 26.0422 6.95718 28.0426 8.95757C30.043 10.958 31.1668 13.6711 31.1668 16.5C31.1668 19.329 30.043 22.0421 28.0426 24.0425C26.0422 26.0429 23.3291 27.1667 20.5002 27.1667C17.6712 27.1667 14.9581 26.0429 12.9577 24.0425C10.9573 22.0421 9.8335 19.329 9.8335 16.5C9.8335 13.6711 10.9573 10.958 12.9577 8.95757C14.9581 6.95718 17.6712 5.83337 20.5002 5.83337ZM20.5002 8.50004C18.3784 8.50004 16.3436 9.3429 14.8433 10.8432C13.343 12.3435 12.5002 14.3783 12.5002 16.5C12.5002 18.6218 13.343 20.6566 14.8433 22.1569C16.3436 23.6572 18.3784 24.5 20.5002 24.5C22.6219 24.5 24.6567 23.6572 26.157 22.1569C27.6573 20.6566 28.5002 18.6218 28.5002 16.5C28.5002 14.3783 27.6573 12.3435 26.157 10.8432C24.6567 9.3429 22.6219 8.50004 20.5002 8.50004ZM19.1668 11.1667H21.1668V16.2067L24.2735 19.3134L22.8602 20.7267L19.1668 17.0334V11.1667ZM3.16683 24.5C2.81321 24.5 2.47407 24.3596 2.22402 24.1095C1.97397 23.8595 1.8335 23.5203 1.8335 23.1667C1.8335 22.8131 1.97397 22.4739 2.22402 22.2239C2.47407 21.9738 2.81321 21.8334 3.16683 21.8334H8.2735C8.68683 22.78 9.22016 23.6734 9.8335 24.5H3.16683ZM4.50016 17.8334C4.14654 17.8334 3.8074 17.6929 3.55735 17.4428C3.30731 17.1928 3.16683 16.8537 3.16683 16.5C3.16683 16.1464 3.30731 15.8073 3.55735 15.5572C3.8074 15.3072 4.14654 15.1667 4.50016 15.1667H7.2335L7.16683 16.5L7.2335 17.8334H4.50016ZM5.8335 11.1667C5.47987 11.1667 5.14074 11.0262 4.89069 10.7762C4.64064 10.5261 4.50016 10.187 4.50016 9.83337C4.50016 9.47975 4.64064 9.14061 4.89069 8.89057C5.14074 8.64052 5.47987 8.50004 5.8335 8.50004H9.8335C9.22016 9.32671 8.68683 10.22 8.2735 11.1667H5.8335Z">
                            </path>
                        </g>
                    </svg>
                </div>
                <h6 class="mt-1">
                    <b>
                        Membantu Persengketa Tanah
                    </b>
                </h6>
                <p style="font-size: small;">
                   Kami mempertemukan korban sengketa tanah yang membutuhkan bantuan pendanaan sponsor, pengacara atau pemerintah.
                </p>
                <a href="{{url('')}}/bidding-sponsor" class="text-info" style="text-decoration:none">Bergabung</a>
            </div>
        </div>
    </div>
    <div class="col-sm col-lg-3">
        <div class="card border-0 mt-3 shadow p-1">
            <div class="card-body">
                <div class="icon-wrapper">
                    <svg height="26px" viewBox="0 0 32 32" width="26px" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(0, 0)" fill="#fff">
                            <path
                                d="M16.5 5.5C12.6 5.5 9.5 8.6 9.5 12.5C9.49317 13.6469 9.76985 14.7777 10.3054 15.7918C10.841 16.8059 11.619 17.672 12.57 18.313C9.01 19.846 6.5 23.392 6.5 27.5H8.5C8.5 23.1 12.1 19.5 16.5 19.5C16.841 19.5 17.173 19.468 17.5 19.422V24C17.5 29.2 24.3 32.2 24.6 32.3L25 32.5L25.4 32.3C25.7 32.2 32.5 29.2 32.5 24V18.5H31.6C29.7 18.5 28.6 17.8 27.7 17.3C26.8 16.9 26 16.5 25 16.5C24 16.5 23.2 16.9 22.5 17.3C21.994 17.582 21.386 17.922 20.62 18.17C21.5162 17.5219 22.245 16.6695 22.7459 15.6834C23.2468 14.6973 23.5053 13.606 23.5 12.5C23.5 8.6 20.4 5.5 16.5 5.5ZM16.5 7.5C19.3 7.5 21.5 9.7 21.5 12.5C21.5 15.3 19.3 17.5 16.5 17.5C13.7 17.5 11.5 15.3 11.5 12.5C11.5 9.7 13.7 7.5 16.5 7.5ZM25 18.5C25.5 18.5 25.9 18.7 26.7 19.1L27 19.2C27.8 19.6 28.9 20.2 30.5 20.4V23.9C30.5 27.2 26.2 29.6 25 30.2C23.8 29.6 19.5 27.2 19.5 23.9V20.4C21.2 20.2 22.3 19.6 23.1 19.2L23.4 19.1H23.6C24.2 18.6 24.5 18.5 25 18.5Z">
                            </path>
                        </g>
                    </svg>
                </div>
                <h6 class="mt-1">
                    <b>
                        Membantu Kerjasama Lahan
                    </b>
                </h6>
                <p style="font-size: small;">
                    Kami membantu para pemilik lahan tidur di seluruh Indonesia untuk di kerjasamakan agar bisa produktif dan menghasilkan profit.
                </p>
                <a href="{{url('')}}/kerjasama-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
            </div>
        </div>
    </div>
    <div class="col-sm col-lg-3">
        <div class="card border-0 mt-3 shadow p-1">
            <div class="card-body">
                <div class="icon-wrapper" style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 479.976 479.976"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="text-white">
                        <circle r="239.988" cx="239.988" cy="239.988" fill="#61481C" shape="circle">
                        </circle>
                        <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                        fill="#61481c" data-original="#000000" class=""></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                        fill="#FFFFFF" data-original="#000000" class=""></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                        fill="#FFFFFF" data-original="#000000" class=""></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                        fill="#FFFFFF" data-original="#000000" class=""></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                        fill="#FFFFFF" data-original="#000000" class=""></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                        fill="#FFFFFF" data-original="#000000" class=""></path>
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
                        Membantu Jual Beli Lahan
                    </b>
                </h6>
                <p style="font-size: small;">
                    Jual dan beli lahan lebih mudah dan cepat di seluruh wilayah Indonesia dengan platform sengketatanah.id yang efisien dan praktis.
                </p>
                <a href="{{url('')}}/jual-beli-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
            </div>
        </div>
    </div>
    <div class="col-sm col-lg-3">
        <div class="card border-0 mt-3 shadow p-1">
            <div class="card-body">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0"
                        viewBox="0 0 511.99992 511" style="enable-background:new 0 0 512 512" xml:space="preserve"
                        class="">
                        <g>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m509.914062 214.859375-85.695312-111.320313c-3.171875-4.117187-8.957031-5.132812-13.34375-2.34375l-55.328125 35.1875h-72.160156c-.933594 0-1.863281.199219-2.761719.460938l-55.949219 16.105469-58.054687-15.878907-56.410156-35.875c-4.3125-2.742187-9.992188-1.8125-13.199219 2.164063l-94.785157 117.40625c-3.40625 4.21875-2.84375 10.378906 1.265626 13.914063l49.679687 42.753906 44.570313 60.0625c-13.035157 13.886718-12.78125 35.789062.78125 49.355468 6.011718 6.007813 13.65625 9.402344 21.519531 10.191407-.273438 1.78125-.414063 3.589843-.414063 5.425781 0 9.476562 3.691406 18.386719 10.390625 25.085938 6.703125 6.703124 15.613281 10.394531 25.089844 10.394531.128906 0 .253906-.007813.378906-.011719-.003906.242188-.015625.480469-.015625.722656 0 9.476563 3.691406 18.386719 10.390625 25.089844 6.703125 6.699219 15.613281 10.390625 25.089844 10.390625 1.871094 0 3.722656-.152344 5.539063-.433594.769531 7.890625 4.171874 15.570313 10.203124 21.601563 6.914063 6.917968 16 10.375 25.085938 10.375s18.171875-3.457032 25.089844-10.375l5.425781-5.425782 2.277344 1.835938c6.859375 6.644531 15.765625 9.964844 24.671875 9.964844 9.085937 0 18.171875-3.457032 25.085937-10.375 7.058594-7.058594 10.515625-16.375 10.371094-25.644532 9.265625.140626 18.585937-3.3125 25.644531-10.367187 7.050782-7.054687 10.507813-16.363281 10.371094-25.628906 9.652344.152343 18.808594-3.554688 25.640625-10.386719 7.058594-7.058594 10.515625-16.375 10.371094-25.644531 9.273437.140625 18.585937-3.3125 25.644531-10.371094 12.046875-12.046875 13.597656-30.667969 4.664062-44.414063l32.542969-68.15625 48.925781-42.101562c4.042969-3.480469 4.660157-9.511719 1.40625-13.734375zm-402.914062-91.910156 40.5625 25.792969-88.238281 107.5-35.359375-30.433594zm5.722656 227.921875 12.242188-12.242188c.371094-.371094.761718-.722656 1.160156-1.050781 2.394531-1.953125 5.292969-3.117187 8.363281-3.394531.085938-.007813.175781-.007813.261719-.011719.4375-.035156.875-.058594 1.316406-.054687 4.195313.058593 8.09375 1.773437 10.984375 4.824218 5.671875 5.996094 5.367188 15.792969-.679687 21.839844l-11.871094 11.871094c-6.003906 6.003906-15.773438 6.003906-21.777344 0-6.003906-6.007813-6.003906-15.777344 0-21.78125zm31.496094 62.484375c-2.910156-2.90625-4.511719-6.773438-4.511719-10.886719s1.601563-7.980469 4.511719-10.890625l23.738281-23.738281c4.546875-4.546875 11.695313-5.792969 17.507813-3.023438 5.992187 2.855469 9.363281 9.359375 8.484375 15.902344-.46875 3.492188-2.09375 6.78125-4.585938 9.277344l-23.363281 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm35.84375 36.191406c-2.910156-2.90625-4.511719-6.773437-4.511719-10.886719 0-4.113281 1.601563-7.980468 4.511719-10.890625l23.734375-23.738281c4.863281-4.859375 12.664063-5.90625 18.617187-2.441406 5.4375 3.164062 8.285157 9.375 7.351563 15.5625-.511719 3.402344-2.128906 6.601562-4.5625 9.035156l-23.359375 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm40.828125 31.5625c-6.003906-6.003906-6.003906-15.773437 0-21.777344l12.242187-12.242187c.371094-.371094.757813-.71875 1.15625-1.046875.011719-.007813.019532-.015625.027344-.023438 1.992188-1.617187 4.332032-2.699219 6.828125-3.171875.058594-.007812.117188-.015625.175781-.023437.429688-.078125.867188-.140625 1.304688-.179688.175781-.015625.351562-.015625.53125-.027343.359375-.019532.714844-.042969 1.078125-.039063 4.191406.058594 8.09375 1.769531 10.984375 4.824219.355469.375.6875.765625.992188 1.167968 4.617187 6.035157 3.996093 15-1.734376 20.734376l-11.808593 11.808593c-6.003907 6.003907-15.773438 6-21.777344-.003906zm187.285156-112.042969c-6.003906 6.007813-15.773437 6.003906-21.777343 0-.21875-.21875-.449219-.421875-.683594-.613281l-64.554688-65.234375c-3.902344-3.941406-10.257812-3.972656-14.199218-.070312-3.941407 3.898437-3.972657 10.253906-.074219 14.195312l65.253906 65.933594c.007813.007812.015625.015625.023437.023437 6.003907 6.003907 6.003907 15.777344 0 21.78125-2.910156 2.910157-6.777343 4.511719-10.890624 4.511719-4.117188 0-7.984376-1.601562-10.890626-4.511719l-43.652343-44.105469c-3.898438-3.941406-10.253907-3.972656-14.195313-.074218-3.941406 3.902344-3.972656 10.257812-.074218 14.199218l42.984374 43.429688c.21875.273438.453126.535156.703126.785156 6.003906 6.003906 6.003906 15.777344 0 21.78125-6.007813 6.003906-15.78125 6-21.785157-.003906l-23.824219-24.074219c-3.902343-3.941406-10.257812-3.976562-14.199218-.074219-3.941406 3.898438-3.972656 10.253907-.074219 14.195313l23.160156 23.398437c.21875.273438.453125.539063.707031.789063 6.003907 6.003906 6.003907 15.777344 0 21.78125-6.003906 6.007813-15.773437 6.003906-21.777343 0-.691407-.691406-1.503907-1.222656-2.277344-1.816406-.65625-.5-.828125-.847657-.5-1.644531.332031-.808594.828125-1.539063 1.160156-2.351563.367188-.90625.664063-1.839844.953125-2.777344 1.539063-4.960937 1.992188-10.296875 1.300782-15.445312-1.328126-9.878907-6.761719-18.792969-14.996094-24.433594-4.449219-3.042969-9.597656-5.039063-14.933594-5.789063 2.585938-11.40625-.519531-23.773437-8.597656-32.308593-6.648438-7.023438-15.628906-10.964844-25.289063-11.097657-.351562-.003906-.703125-.003906-1.058593 0 .214843-9.21875-3.136719-18.378906-9.492188-25.09375-6.652344-7.023437-15.632812-10.964843-25.289062-11.097656-2.871094-.039062-5.769532.265625-8.566407.910156-1.195312-8.316406-5.386719-16.011718-11.734375-21.515624-6.308594-5.460938-14.242187-8.492188-22.691406-8.609376-8.894531-.128906-17.632812 3.152344-24.238281 9.117188l-38.808594-52.292969 92.84375-113.109375 29.589844 8.09375-38.644531 68.191406c-4.671876 8.246094-5.851563 17.816407-3.324219 26.949219 2.527343 9.136719 8.457031 16.738281 16.703125 21.410157.515625.292968 1.035156.570312 1.5625.835937.039062.019531.078125.039063.121094.058594 1.386718.691406 2.8125 1.285156 4.257812 1.785156 6.730469 2.332031 14 2.585937 21.011719.648437 9.132812-2.527343 16.734375-8.460937 21.40625-16.703124l25.113281-44.316407 44.839844 3.179688 119.402344 119.398437c6 6.007813 6 15.777344-.003907 21.78125zm4.160157-46.019531-112.011719-112.007813c-.210938-.214843-.433594-.417968-.664063-.609374-1.613281-1.34375-3.613281-2.15625-5.722656-2.304688l-54.902344-3.894531c-3.796875-.261719-7.570312 1.757812-9.445312 5.066406l-28.234375 49.828125c-2.027344 3.578125-5.328125 6.152344-9.292969 7.25-3.960938 1.097656-8.117188.582031-11.699219-1.445312-3.578125-2.027344-6.152343-5.328126-7.25-9.292969-1.097656-3.964844-.585937-8.121094 1.445313-11.699219l37.691406-66.519531 15.273438-4.394531c.101562-.03125.199218-.070313.300781-.101563l57.003906-16.460937h68.875l85.984375 109.304687zm40.503906-73.039063-79.515625-101.136718 40.582031-25.808594 74.300781 96.511719zm0 0"
                                fill="#ffffff" data-original="#000000" class=""></path>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m310.183594 117.53125c2.570312 0 5.140625-.980469 7.101562-2.941406l68.578125-68.578125c3.921875-3.921875 3.921875-10.277344 0-14.199219s-10.277343-3.921875-14.199219 0l-68.578124 68.578125c-3.921876 3.921875-3.921876 10.277344 0 14.199219 1.960937 1.960937 4.53125 2.941406 7.097656 2.941406zm0 0"
                                fill="#ffffff" data-original="#000000" class=""></path>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m194.714844 114.589844c1.960937 1.960937 4.53125 2.941406 7.101562 2.941406 2.566406 0 5.136719-.980469 7.097656-2.941406 3.921876-3.921875 3.921876-10.277344 0-14.199219l-68.578124-68.578125c-3.921876-3.921875-10.277344-3.921875-14.199219 0s-3.921875 10.277344 0 14.199219zm0 0"
                                fill="#ffffff" data-original="#000000" class=""></path>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m256 117.53125c5.542969 0 10.039062-4.496094 10.039062-10.039062v-56.753907c0-5.542969-4.496093-10.039062-10.039062-10.039062s-10.039062 4.496093-10.039062 10.039062v56.753907c0 5.542968 4.496093 10.039062 10.039062 10.039062zm0 0"
                                fill="#ffffff" data-original="#000000" class=""></path>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m246.734375 14.351562c1.59375 3.863282 5.566406 6.398438 9.757813 6.179688 4.140624-.214844 7.777343-3.011719 9.058593-6.953125 1.285157-3.972656-.113281-8.5-3.441406-11.03125-3.394531-2.5859375-8.128906-2.730469-11.679687-.382813-3.960938 2.617188-5.496094 7.828126-3.695313 12.1875zm0 0"
                                fill="#ffffff" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </div>
                <h6 class="mt-1">
                    <b>
                        Membantu Pelelangan Lahan
                    </b>
                </h6>
                <p style="font-size: small;">
                    Kami melakukan kerjasama dengan berbagai balai lelang pertanahan. Anda juga bisa menjual lahan dengan sistem lelang disini.
                </p>
                <a href="{{url('')}}/lelang-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
            </div>
        </div>
    </div>
</div>
<div class="p-4">
<h5 style="margin-bottom:-30px">
   Bicara tentang Sengketatanah.id
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
</div>


<hr>

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
        

        <div class="row justify-content-center mb-3 mt-4 text-center g-0" >
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
                                    <h6 class="modal-title" style="font-size:12px">Korban adalah orang yang
                                        dirugikan,
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
                                        Saya membutuhkan bantuan pendanaan dari sponsor untuk menyelesaikan
                                        permasalahan
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
                                        menyatakan bahwa semua data yang diberikan benar adanya dan laporan ini
                                        tidak
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

        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
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