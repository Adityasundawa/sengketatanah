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
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            height: auto;
        }

        @media (max-width: 1000px) {
            .puter {
                margin-bottom: 50px;
                width: 100%
            }
        }

        @media (min-width: 1000px) {
            body {
                height: 100vh;
            }
        }

        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        .aboute-bottom {
            position: fixed;
            bottom: 0;
            z-index: 1030;
            left: 0;
            right: 0;
        }

        .aboute-bottom svg {
            opacity: 75%;
        }

        .aboute-bottom h6 {
            opacity: 75%;
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
            display: block;
            padding: 5px 30px 5px 10px;
            color: white;
            position: absolute;
            width: 100px;
            z-index: 999;
            margin-top: 0px;
            margin-left: -15px;
            margin-bottom: -10px;

        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid transparent;
            border-top: 17px solid transparent;
            border-bottom: 17px solid transparent;
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

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown {
            color: #61481C;
            background: rgba(173, 128, 50, 25%);
            border: 2px solid #61481C;
        }

        .btn.btn-outline-brown:hover {
            color: #fff;
            background: #61481C;
            border: 2px solid #61481C;
        }

        .btn.btn-outline-brownie {
            color: #A47E3B;
            background: rgba(240, 184, 86, 25%);
            border: 2px solid #A47E3B;
        }

        .btn.btn-outline-brownie:hover {
            color: #fff;
            background: #A47E3B;
            border: 2px solid #A47E3B;
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

        .mobile-scroll {
            overflow-x: hidden
        }

        @media (max-width: 1199.98px) {
            .mobile-scroll {
                overflow-x: scroll;


            }

            .mobile-scroll::-webkit-scrollbar {
                opacity: 100;
            }

            .mobile-scroll::-webkit-scrollbar-thumb {
                background: transparent;
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

        .scroll-simple::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        .scroll-simple::-webkit-scrollbar-track {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
        }

        .scroll-simple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.2);
        }

        .scroll-simple::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        .scroll-simple::-webkit-scrollbar-thumb:active {
            background: rgba(0, 0, 0, .9);
        }

    </style>
</head>

<body>

    @include('layouts.template-public.header')


    <div class="card aboute-bottom rounded-0 mobile">
        <div class="card border-0 shadow-sm" style="margin-top:-10px">
            <div class="card-body p-0">
                <div class="row g-0">

                    <div class="col text-center">

                        <a class="btn btn-sm mb-0 p-0 w-100" href="{{url('')}}/">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.79200973510743,76.80000000000001)">
                                            <path
                                                d="m498.195312 222.695312c-.011718-.011718-.023437-.023437-.035156-.035156l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.8125-33.328126-13.8125-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.140626.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.445312 13.238281 31.277344 13.746093.480468.046876.964843.070313 1.453124.070313h8.324219v153.699219c0 30.414062 24.746094 55.160156 55.167969 55.160156h81.710938c8.28125 0 15-6.714844 15-15v-120.5c0-13.878906 11.289062-25.167969 25.167968-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.285156 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.160156v-153.699219h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.808594 18.359375-18.371093 18.367187-48.253906.023437-66.636719zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">HOME</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">

                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-panduan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 296.999 296.999"
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
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">PANDUAN</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-panduan-m").click(function () {
                                $("#panduan-m").toggleClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-jaminan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 32 32"
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
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">JAMINAN</h6>
                                </div>
                        </button>

                        <script>
                            $("#btn-jaminan-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").toggleClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>

                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-chat-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 361.014 361.014"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="180.507" cx="180.507" cy="180.507" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,54.15209197998048,54.151945495605474)">
                                            <g>
                                                <g id="Layer_5_47_">
                                                    <path d="M331.035,126.94H318.01c-3.563,0-3.682-2.333-3.805-3.494C307.375,59.094,252.77,8.791,186.637,8.791h-12.26
                                                    c-65.644,0-119.929,49.56-127.409,113.229c-0.191,1.631-0.291,4.92-3.291,4.92H29.978C20.987,126.94,0,136.401,0,184.18v25.075
                                                    c0,35.436,20.987,43.609,29.978,43.609h43.584c8.991,0,16.347-7.356,16.347-16.347v-93.23c0-8.991-7.356-16.347-16.347-16.347
                                                    c0,0-2.052-0.18-1.529-3.835c7.192-50.319,50.129-89.313,102.344-89.313h12.26c51.86,0,94.912,38.418,102.2,88.288
                                                    c0.235,1.608,1.111,4.86-1.385,4.86c-8.991,0-16.347,7.356-16.347,16.347v93.23c0,8.991,7.356,16.347,16.347,16.347h8.184
                                                    c2.25,0,1.868,1.798,1.667,2.704c-6.667,30.104-21.637,64.256-55.238,64.256h-24.889c-2.54,0-3.167-1.861-3.65-2.743
                                                    c-4.032-7.367-11.851-12.364-20.841-12.364h-22.933c-13.118,0-23.753,10.634-23.753,23.753c0,13.119,10.635,23.752,23.753,23.752
                                                    h22.933c9.112,0,17.023-5.132,21.005-12.662c0.348-0.658,0.633-2.026,3.321-2.026h25.054c22.823,0,53.365-11.341,69.259-65.373
                                                    c1.694-5.758,3.068-11.496,4.187-17.026c0.154-0.761,0.25-2.27,2.625-2.27h12.9c8.991,0,29.978-8.174,29.978-43.609v-25.075
                                                    C361.013,137.082,340.026,126.94,331.035,126.94z" fill="#61481c"
                                                        data-original="#000000" class=""></path>
                                                </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px;margin-top:13px">CHAT</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-chat-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").toggleClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-tentang-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 24 24"
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
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">TENTANG</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-tentang-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").toggleClass('show');
                            });

                        </script>

                    </div>





                    <ol id="panduan-m" class="list-group panduan list-group-numbered shadow dropdown-menu rounded-0 p-0"
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

                    <ol id="jaminan-m" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-tie"></i></b>
                                    </h5>
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
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-gavel"></i></b>
                                    </h5>
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
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-handshake"></i></b>
                                    </h5>
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
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-gear"></i></b>
                                    </h5>
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

                    <ol id="chat-m"
                        class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <h2>
                            <div class="fw-bold" style="color: #61481C"> Customer Service</div>
                        </h2>
                        <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                            <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control"
                                placeholder="Masukan Pesan"></textarea> <button
                                class="btn btn-brown btn-block">Kirim</button>
                        </div>
                    </ol>

                    <ol id="tentang-m"
                        class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none; max-height: 500px; overflow-y: auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row desktop mb-4">
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
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
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
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
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
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
                                <div id="carouselExampleControlsPres" class="carousel slide mobile mb-4">
                                    <div class="carousel-inner mb-5">
                                        <div class="carousel-item active">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
                                                <div class="card rounded-0"
                                                    style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                                                    <div class="card-body">
                                                        <p class="card-text">"Presiden Joko Widodo menegaskan
                                                            kepada Kementerian ATR/BPN untuk serius dalam
                                                            memberantas mafia tanah" <br> -<b>
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
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
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
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
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
                                    <button class="carousel-control-prev my-auto"
                                        style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%"
                                        type="button" data-bs-target="#carouselExampleControlsPres"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next my-auto"
                                        style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%"
                                        type="button" data-bs-target="#carouselExampleControlsPres"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <style>
                            @media (min-width: 1400px) {
                                .container-lsa {
                                    max-width: 1000px !important;
                                }
                            }

                        </style>
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="mb-2" style="width: 75px" alt="">
                        <div class="container-lsa mx-auto mb-3">
                            <h2>
                                <div class="fw-bold" style="color: #61481C"> TENTANG KAMI</div>
                            </h2>
                            SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                            masalah
                            sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa
                            tanah
                            atau korban
                            mafia
                            tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah
                            persengketaan tanah
                            tersebut.

                            <h2>
                                <div class="fw-bold mt-5" style="color: #61481C"> VISI MISI</div>
                            </h2>
                            <div class="text-start">
                                <h5>VISI</h5>
                                Membantu Masyarakat dan Pemerintah Indonesia dalam penyelesaian Sengketa
                                Pertanahan, Konflik Pertanahan dan Perkara Pertanahan dengan membangun ekosistem
                                steakholder terkait, seperti Korban Sengketa, Sponsor, Pengacara dan
                                Pemerintahnya itu sendiri agar semua jenis permasalahan tanah lebih cepat
                                diselesaikan. Tujuan utama Platform Sengketa Tanah adalah membawa persoalan
                                tanah yang dulunya tabu menjadi lebih terbuka dengan pendekatan ecommerce yang
                                profit oriented.
                                <h5 class="mt-3">MISI</h5>
                                <ol style="padding-left: 1rem">
                                    <li>Membantu masyarakat Indonesia menyelesaikan persolan sengketa
                                        pertanahan, konflik pertanahan dan perkara pertanahan dengan menyediakan
                                        bantuan akses pada sponsor, pengacara dan pemerintah.</li>
                                    <li>Membantu Pemerintah Indonesia dalam hal ini Kementrian ATR/BPN untuk
                                        menyelesaikan persolan sengketa pertanahan, konflik pertanahan dan
                                        perkara pertanahan dengan menyediakan sortasi data persengketaan tanah
                                        yang terjadi di masyarakat.</li>
                                    <li>Mengangkat semua jenis persoalan tanah dengan multi komprehensif, mulai
                                        dari dokumen pertanahan, analisa, pengecekan sampai kepada wawancara
                                        mendalam pada korban dan pihak terkait yang disajikan dengan audio
                                        visual untuk memudahkan steak holder mengambil keputusan.
                                    <li>Menjadi platform khusus pertanahan yang dipercaya publik dengan komitmen
                                        kuat penyelesaian kasus-kasus persengketaan tanah.</li>
                                    <li>Mengintegrasikan semua jenis bidang seputar pertanahan dalam satu
                                        platform seperti sengketa pertanahan, jual beli lahan, kerja sama lahan
                                        sampai dengan pelelangan lahan.</li>
                                    <li>Menyediakan berbagai tenaga ahli pertanahan dalam platform untuk
                                        membantu desiminasi permasalahan dalam rangka menentukan tindakan yang
                                        akan diambil, baik untuk korban, sponsor, pengacara maupun pemerintah.
                                    </li>
                                    <li>Menjadi platform yang terintegrasi dengan kementrian ATR/BPN</li>
                                </ol>

                            </div>
                        </div>

                    </ol>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="row justify-content-center mb-2">
            
            <div class="col-lg-12">

                <div class="row g-2 mt-2 desktop">

                    <div class="col-auto">
                        <a href="{{url('')}}/pilih-user" class="btn" style="background-color: #61481C; color: #fff"
                            href="{{url('')}}/register">Daftar Sekarang</a>
                    </div>

                    <div class="col-auto">
                        <a class="btn" style="background-color: #A47E3B; color: #fff" href="{{url('')}}/join">Pelajari
                            Jasa Pengacara</a>
                    </div>

                    <div class="col-lg">
                        <div class="card border-0">
                            <div class="input-group">
                                <div class="input-group-prepend my-auto">
                                    <span class="px-3">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search" name="" id="">
                                <button class="btn h-100 mb-0" style="color: #fff; background: #E6B325">Search</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg mobile mt-2">
                        <div class="card border-0">
                            <div class="input-group">
                                <div class="input-group-prepend my-auto">
                                    <span class="px-3">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search" name="" id="">
                                <button class="btn h-100 mb-0" style="color: #fff; background: #E6B325">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="card mb-0 border-0 mt-3" style="z-index:999">
                        <div class="card-body pb-0">
                            <div class="row g-2 justify-content-between text-center scroll-simple"
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
                                    <a href="{{url('/')}}/bidding-pengacara"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000000000001)">
                                                <path
                                                    d="M488,176H435.2002a103.81249,103.81249,0,0,1-91.76465-55.05859L333.647,102.58789A87.85219,87.85219,0,0,0,288,62.002V48a32,32,0,0,0-64,0V62.002a87.85457,87.85457,0,0,0-45.64746,40.58594l-9.7876,18.35352A103.81381,103.81381,0,0,1,76.7998,176H24a8.00008,8.00008,0,0,0-8,8v32a8.00008,8.00008,0,0,0,8,8H76.57812L50.39624,296H40a8.00008,8.00008,0,0,0-8,8,64,64,0,0,0,128,0,8.00008,8.00008,0,0,0-8-8H141.60376l-26.18188-72h19.51367a95.96823,95.96823,0,0,0,63.21631-23.75293l21.05371-18.42285A55.85554,55.85554,0,0,1,224,178.08691V390.11133L211.05566,416H192a7.99927,7.99927,0,0,0-6.3999,3.2002L164.00024,448H128a8.00008,8.00008,0,0,0-8,8v32a8.00008,8.00008,0,0,0,8,8H384a8.00008,8.00008,0,0,0,8-8V456a8.00008,8.00008,0,0,0-8-8H347.99976L326.3999,419.2002A7.99927,7.99927,0,0,0,320,416H300.94434L288,390.11133V178.08691a55.85554,55.85554,0,0,1,4.79443,3.73731H292.794l21.05419,18.42285A95.96823,95.96823,0,0,0,377.06445,224h19.51367l-26.18188,72H360a8.00008,8.00008,0,0,0-8,8,64,64,0,0,0,128,0,8.00008,8.00008,0,0,0-8-8H461.60376l-26.18188-72H488a8.00008,8.00008,0,0,0,8-8V184A8.00008,8.00008,0,0,0,488,176ZM240,48a16,16,0,0,1,32,0v9.46777a87.941,87.941,0,0,0-32,0ZM96,352a48.07871,48.07871,0,0,1-47.3335-40h94.667A48.07871,48.07871,0,0,1,96,352Zm28.57812-56H67.42188l26.18188-72h4.79248ZM376,480H136V464H376Zm-48-32H184l12-16H316Zm-55.15527-52.42188L283.05566,416H228.94434l10.21093-20.42188A7.99934,7.99934,0,0,0,240,392V170.35352a55.56338,55.56338,0,0,1,32,0V392A7.99934,7.99934,0,0,0,272.84473,395.57812ZM416,352a48.07871,48.07871,0,0,1-47.3335-40h94.667A48.07871,48.07871,0,0,1,416,352Zm28.57812-56H387.42188l26.18188-72h4.79248ZM480,208H377.06445a79.97228,79.97228,0,0,1-52.68017-19.79395l-21.0542-18.42285h-.00049a71.87558,71.87558,0,0,0-94.65967,0l-21.0542,18.42285A79.97228,79.97228,0,0,1,134.93555,208H32V192H76.7998a119.78374,119.78374,0,0,0,105.88282-63.5293l9.78759-18.35351a72.00063,72.00063,0,0,1,127.05909,0l9.78857,18.35351A119.78241,119.78241,0,0,0,435.2002,192H480Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="M256,88a24,24,0,1,0,24,24A24.02718,24.02718,0,0,0,256,88Zm0,32a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,256,120Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Bid <br> Pengacara</div>
                                    </a>
                                </div>

                                {{-- <div class="col mb-4">
                                    <a href="{{url('/')}}/jual-beli-lahan" class="btn btn-outline-light text-dark w-100rounded-4 shadow">
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
                                <a href="{{url('/')}}/kerjasama-lahan"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
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
                                <a href="{{url('/')}}/lelang-lahan"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
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
                                </div> --}}

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/bid-lahan"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                        href="https://mitra.atrbpn.go.id">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512.00015 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256.000075" cx="256.000075" cy="256" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80007324218752,71.998388671875)">
                                            <path
                                                d="m509.445312 249.359375-41.695312-36.148437c6.902344-9.628907 12.222656-20.054688 12.222656-29.324219 0-26.246094-21.355468-47.601563-47.601562-47.601563-13.972656 0-26.558594 6.054688-35.273438 15.675782l-98.984375-85.816407c3.332031-6.3125 5.488281-12.660156 5.488281-18.542969 0-26.246093-21.355468-47.601562-47.601562-47.601562s-47.601562 21.355469-47.601562 47.601562c0 5.914063 2.183593 12.300782 5.542968 18.648438l-98.769531 86.023438c-8.722656-9.800782-21.421875-15.988282-35.542969-15.988282-26.246094 0-47.601562 21.355469-47.601562 47.601563 0 9.433593 5.511718 20.066406 12.59375 29.835937l-42.078125 36.648438c-3.390625 2.949218-3.390625 8.386718 0 11.335937l248.519531 216.457031c2.800781 2.4375 7.09375 2.433594 9.886719-.011718l137.015625-119.890625c3.125-2.730469 3.441406-7.480469.707031-10.605469-2.734375-3.121094-7.484375-3.4375-10.605469-.707031l-22.953125 20.085937-85.5625-97.785156v-48.871094l105.75-58.753906 3.53125 3.0625c-2.601562 5.875-4.058593 12.371094-4.058593 19.199219 0 24.902343 38.363281 58.144531 42.738281 61.851562 2.769531 2.347657 6.953125 2.347657 9.71875 0 2.050781-1.738281 11.574219-9.96875 21.113281-20.789062l34.738281 30.113281-77.226562 67.570312c-2.878907 2.519532-3.386719 6.941407-1.152344 10.046876 2.550781 3.546874 7.757813 4.148437 11.050781 1.265624l83.71875-73.253906c3.382813-2.957031 3.367188-8.390625-.027344-11.332031zm-253.445312-234.328125c17.957031 0 32.566406 14.609375 32.566406 32.570312 0 12.121094-18.339844 33.011719-32.566406 46.082032-8.84375-8.125-19.273438-19.269532-25.90625-29.457032-.144531-.257812-.304688-.507812-.480469-.753906-3.757812-5.917968-6.183593-11.472656-6.183593-15.875 0-17.957031 14.609374-32.566406 32.570312-32.566406zm-4.859375 94.417969c2.769531 2.351562 6.953125 2.351562 9.71875 0 2.632813-2.230469 17.566406-15.15625 29.046875-30.523438l83.304688 72.21875-100.027344 55.574219-94.988282-89.402344 43.96875-38.292968c11.472657 15.324218 26.347657 28.203124 28.976563 30.425781zm-171.511719 41.871093c17.957032 0 32.566406 14.609376 32.566406 32.566407 0 12.125-18.339843 33.015625-32.566406 46.085937-14.226562-13.074218-32.570312-33.964844-32.570312-46.085937 0-17.957031 14.609375-32.566407 32.570312-32.566407zm-25.550781 74.097657c9.394531 10.585937 18.667969 18.605469 20.691406 20.320312 2.765625 2.347657 6.949219 2.347657 9.71875 0 4.375-3.707031 42.738281-36.949219 42.738281-61.851562 0-6.675781-1.386718-13.03125-3.878906-18.800781l43.453125-37.847657 97.714844 91.964844v45.355469h-72.652344c-1.628906 0-3.210937.527344-4.511719 1.5l-84.320312 63.242187-84.113281-73.261719zm201.910156 237.101562-141.363281-123.125 79.746094-59.808593h74.253906l85.175781 97.347656zm176.382813-232.546875c-14.226563-13.074218-32.570313-33.964844-32.570313-46.085937 0-17.957031 14.613281-32.566407 32.570313-32.566407 17.957031 0 32.570312 14.609376 32.570312 32.566407 0 12.121093-18.34375 33.015625-32.570312 46.085937zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m256 71.148438c12.984375 0 23.550781-10.5625 23.550781-23.546876 0-12.988281-10.566406-23.550781-23.550781-23.550781s-23.550781 10.5625-23.550781 23.550781c0 12.984376 10.566406 23.546876 23.550781 23.546876zm0-32.066407c4.695312 0 8.519531 3.820313 8.519531 8.519531 0 4.695313-3.824219 8.515626-8.519531 8.515626s-8.519531-3.820313-8.519531-8.515626c0-4.699218 3.824219-8.519531 8.519531-8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m432.371094 160.335938c-12.984375 0-23.550782 10.566406-23.550782 23.550781s10.566407 23.550781 23.550782 23.550781 23.550781-10.566406 23.550781-23.550781-10.566406-23.550781-23.550781-23.550781zm0 32.070312c-4.695313 0-8.519532-3.820312-8.519532-8.519531 0-4.695313 3.824219-8.515625 8.519532-8.515625 4.695312 0 8.519531 3.820312 8.519531 8.515625 0 4.699219-3.824219 8.519531-8.519531 8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m208.398438 368.277344c0 24.898437 38.367187 58.140625 42.742187 61.847656 1.398437 1.191406 3.128906 1.785156 4.859375 1.785156s3.457031-.59375 4.859375-1.785156c4.375-3.707031 42.742187-36.949219 42.742187-61.847656 0-26.25-21.355468-47.601563-47.601562-47.601563s-47.601562 21.351563-47.601562 47.601563zm80.167968 0c0 12.121094-18.339844 33.011718-32.566406 46.082031-14.226562-13.070313-32.570312-33.964844-32.570312-46.082031 0-17.960938 14.609374-32.570313 32.570312-32.570313 17.957031 0 32.566406 14.609375 32.566406 32.570313zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m232.449219 368.277344c0 12.984375 10.566406 23.546875 23.550781 23.546875s23.550781-10.5625 23.550781-23.546875c0-12.988282-10.566406-23.550782-23.550781-23.550782s-23.550781 10.5625-23.550781 23.550782zm32.070312 0c0 4.695312-3.824219 8.515625-8.519531 8.515625s-8.519531-3.820313-8.519531-8.515625c0-4.699219 3.824219-8.519532 8.519531-8.519532s8.519531 3.820313 8.519531 8.519532zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m103.179688 183.886719c0-12.984375-10.566407-23.550781-23.550782-23.550781s-23.550781 10.566406-23.550781 23.550781 10.566406 23.550781 23.550781 23.550781 23.550782-10.566406 23.550782-23.550781zm-32.070313 0c0-4.695313 3.820313-8.515625 8.519531-8.515625 4.695313 0 8.515625 3.820312 8.515625 8.515625 0 4.699219-3.820312 8.519531-8.515625 8.519531-4.699218 0-8.519531-3.824219-8.519531-8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Bid <br> Lahan</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/bid-rumah"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                        href="https://mitra.atrbpn.go.id">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.79999942779543,74.40000457763674)">
                                            <path
                                                d="M471.982,417.008Q472,416.5,472,416a32.036,32.036,0,0,0-32-32V236l28.8-21.6a8,8,0,0,0-.08-12.859L400,151.322V64a8,8,0,0,0,8-8V24a8,8,0,0,0-8-8H320a8,8,0,0,0-8,8V56a8,8,0,0,0,8,8V92.861l-59.28-43.32a8,8,0,0,0-9.44,0l-208,152A8,8,0,0,0,43.2,214.4L72,236V384a32.036,32.036,0,0,0-32,32q0,.5.018,1.008A32,32,0,0,0,48,480H464a32,32,0,0,0,7.982-62.992ZM328,32h64V48H328Zm8,72V64h48v75.63L335.243,104ZM256,65.908,450.555,208.084l-18.628,13.971L260.706,97.53a8,8,0,0,0-9.412,0L80.073,222.055,61.445,208.084ZM32,448a16.019,16.019,0,0,1,15.76-16l.019,0c.409.057.818.106,1.235.133a8,8,0,0,0,8.023-10.716A15.727,15.727,0,0,1,56,416a16.019,16.019,0,0,1,16-16v64H48A16.019,16.019,0,0,1,32,448Zm344,16H280V288h96Zm16,0V280a8,8,0,0,0-8-8H272a8,8,0,0,0-8,8V464H88V236.074L256,113.892,424,236.074V464Zm72,0H440V400a16.019,16.019,0,0,1,16,16,15.727,15.727,0,0,1-1.037,5.421,8,8,0,0,0,8.023,10.716c.417-.027.826-.076,1.235-.133l.019,0a16,16,0,0,1-.24,32Z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="M224,272H128a8,8,0,0,0-8,8V392a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8V280A8,8,0,0,0,224,272Zm-8,56H184V288h32Zm-48-40v40H136V288Zm-32,56h32v40H136Zm48,40V344h32v40Z"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <circle cx="304" cy="368" r="8"
                                                transform="translate(-152.323 508.032) rotate(-67.5)" fill="#61481c"
                                                data-original="#000000" class=""></circle>
                                        </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Bid <br> Rumah</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-appraisal" class="btn btn-outline-light text-dark w-100 rounded-4 shadow" href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 1600 1600" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="800" cx="800" cy="800" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,240.0000114440918,240)">
                                            <g>
                                                <g>
                                                    <path d="m1075.1 1463h-813.2c-25 0-45.3-20.3-45.3-45.3v-1049.6c0-25 20.3-45.3 45.3-45.3h142.6c13.3 0 24 10.7 24 24s-10.7 24-24 24h-139.9v1044.2h807.8v-1044.2h-139.9c-13.3 0-24-10.7-24-24s10.7-24 24-24h142.6c25 0 45.3 20.3 45.3 45.3v1049.6c0 25-20.3 45.3-45.3 45.3z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path d="m932.5 418.1h-528c-13.3 0-24-10.7-24-24v-190.8c0-39 31.7-70.7 70.7-70.7h76.7c13.3 0 24 10.7 24 24s-10.7 24-24 24h-76.7c-12.5 0-22.7 10.2-22.7 22.7v166.7h480v-166.7c0-12.5-10.2-22.7-22.7-22.7h-76.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h76.7c39 0 70.7 31.7 70.7 70.7v190.8c0 13.2-10.8 24-24 24z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <g>
                                                        <path d="m1158.8 1568h-980.6c-36.7 0-66.6-29.9-66.6-66.6v-1217c0-36.7 29.9-66.6 66.6-66.6h226.3c13.3 0 24 10.7 24 24s-10.7 24-24 24h-226.3c-10.3 0-18.6 8.4-18.6 18.6v1217c0 10.3 8.4 18.6 18.6 18.6h980.6c10.3 0 18.6-8.4 18.6-18.6v-1217c0-10.3-8.4-18.6-18.6-18.6h-226.3c-13.3 0-24-10.7-24-24s10.7-24 24-24h226.3c36.7 0 66.6 29.9 66.6 66.6v1217c0 36.7-29.9 66.6-66.6 66.6z" fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
                                                    <g fill="rgb(0,0,0)">
                                                        <path d="m809.1 236.3h-281.2c-13.3 0-24-10.7-24-24v-136.3c0-24.3 19.7-44 44-44h241.2c24.3 0 44 19.7 44 44v135.6.7c0 13.3-10.7 24-24 24zm-257.2-48h233.2v-108.3h-233.2z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <g>
                                                            <g>
                                                                <path d="m967.6 638h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z" fill="#61481c" data-original="#000000" class=""></path>
                                                                <path d="m402.7 657.3c-6.1 0-12.3-2.3-17-7l-33.2-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.6 4.6-10.8 7-16.9 7z" fill="#61481c" data-original="#000000" class=""></path>
                                                            </g>
                                                            <g>
                                                                <path d="m967.6 844.5h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z" fill="#61481c" data-original="#000000" class=""></path>
                                                                <path d="m402.7 863.8c-6.1 0-12.3-2.3-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.5 4.6-10.7 7-16.8 7z" fill="#61481c" data-original="#000000" class=""></path>
                                                            </g>
                                                            <g>
                                                                <path d="m967.6 1051h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z" fill="#61481c" data-original="#000000" class=""></path>
                                                                <path d="m402.7 1070.3c-6.4 0-12.5-2.5-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.3 4.5-10.4 7-16.8 7z" fill="#61481c" data-original="#000000" class=""></path>
                                                            </g>
                                                            <g>
                                                                <path d="m967.6 1257.6h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z" fill="#61481c" data-original="#000000" class=""></path>
                                                                <path d="m402.7 1276.8c-6.1 0-12.3-2.3-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.5 4.7-10.7 7-16.8 7z" fill="#61481c" data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g fill="rgb(0,0,0)">
                                                    <path d="m1464.4 1170.5h-141.8c-13.3 0-24-10.7-24-24v-486.2c0-13.3 10.7-24 24-24h141.8c13.3 0 24 10.7 24 24v486.2c0 13.3-10.7 24-24 24zm-117.8-48h93.9v-438.2h-93.9z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path d="m1393.5 1343.5c-9.7 0-18.5-5.9-22.2-14.9l-70.9-173c-3-7.4-2.2-15.8 2.3-22.5 4.5-6.6 11.9-10.6 19.9-10.6h141.8c8 0 15.5 4 19.9 10.6 4.5 6.6 5.3 15.1 2.3 22.5l-70.9 173c-3.7 9-12.5 14.9-22.2 14.9zm-35.2-173 35.1 85.7 35.1-85.7z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path d="m1464.4 684.3h-141.8c-13.3 0-24-10.7-24-24v-75.3c0-46.3 37.7-84 84-84h21.8c46.3 0 84 37.7 84 84v75.3c0 13.3-10.8 24-24 24zm-117.9-48h93.8v-51.3c0-19.9-16.1-36-36-36h-21.8c-19.9 0-36 16.1-36 36z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Appraisal</div>
                                </a>
                            </div>

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/jasa-ppat"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                        href="https://mitra.atrbpn.go.id">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path
                                                    d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Jasa <br> PPAT</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/jasa-notaris"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                        href="https://mitra.atrbpn.go.id">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path
                                                    d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Jasa <br> Notaris</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/jasa-tukang-ukur"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
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
                                        <div class="mt-0" style="font-size: 12px">Jasa <br> Petugas Ukur</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/podcast-sengketa"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
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

                                <div class="col mb-4">
                                    <a href="{{url('/')}}/advokasi-pemerintah"
                                        class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 511"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="255.5" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.48344733715058)">
                                            <path
                                                d="m256 131.46875c13.273438 0 24.066406-10.796875 24.066406-24.066406 0-13.273438-10.796875-24.070313-24.066406-24.070313s-24.066406 10.796875-24.066406 24.070313c0 13.269531 10.796875 24.066406 24.066406 24.066406zm0-33.136719c5 0 9.066406 4.070313 9.066406 9.070313 0 4.996094-4.066406 9.066406-9.066406 9.066406s-9.066406-4.066406-9.066406-9.066406 4.066406-9.070313 9.066406-9.070313zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m504.5 461.261719h-9.066406v-25.632813c0-4.140625-3.359375-7.5-7.5-7.5h-25.632813v-25.632812c0-4.140625-3.355469-7.5-7.5-7.5h-9.0625v-164.128906h9.0625c4.144531 0 7.5-3.359376 7.5-7.5v-25.632813h25.632813c4.144531 0 7.5-3.359375 7.5-7.5v-33.132813c0-4.140624-3.355469-7.5-7.5-7.5h-14.222656l-213.441407-147.769531c-2.566406-1.7773435-5.96875-1.7773435-8.539062 0l-213.4375 147.769531h-14.226563c-4.140625 0-7.5 3.355469-7.5 7.5v33.132813c0 4.140625 3.359375 7.5 7.5 7.5h25.632813v25.632813c0 4.140624 3.359375 7.5 7.5 7.5h9.066406v164.128906h-9.066406c-4.140625 0-7.5 3.355468-7.5 7.5v25.632812h-25.632813c-4.140625 0-7.5 3.359375-7.5 7.5v25.632813h-9.066406c-4.144531 0-7.5 3.355469-7.5 7.5v33.128906c0 4.144531 3.355469 7.5 7.5 7.5h497c4.144531 0 7.5-3.355469 7.5-7.5v-33.128906c0-4.140625-3.355469-7.5-7.5-7.5zm-57.199219-33.132813h-67.832031v-18.132812h67.832031zm-51.269531-33.132812v-164.128906h34.703125v164.128906zm51.269531-179.128906h-67.832031v-18.132813h67.832031zm-75.332031 15h9.0625v164.128906h-9.0625c-4.144531 0-7.5 3.355468-7.5 7.5v25.632812h-59.550781v-25.632812c0-4.144532-3.359375-7.5-7.5-7.5h-9.066407v-164.128906h9.066407c4.140625 0 7.5-3.359376 7.5-7.5v-25.632813h59.550781v25.632813c0 4.140624 3.355469 7.5 7.5 7.5zm-149.882812-33.132813h67.832031v18.132813h-67.832031zm16.5625 33.132813h34.703124v164.128906h-34.703124zm51.269531 179.128906v18.132812h-67.832031v-18.132812zm-258.351563-245.394532h9.070313.007812.003907 121.800781c4.144531 0 7.5-3.359374 7.5-7.5 0-4.144531-3.355469-7.5-7.5-7.5h-97.804688l191.355469-132.480468 191.359375 132.480468h-254.910156c-4.140625 0-7.5 3.355469-7.5 7.5 0 4.140626 3.359375 7.5 7.5 7.5h278.816406.023437 9.144532v18.132813h-448.867188zm33.132813 33.132813h67.835937v18.132813h-67.835937zm51.269531 33.132813v164.128906h-34.703125v-164.128906zm-51.269531 179.128906h67.835937v18.132812h-67.835937zm75.335937-15h-9.066406v-164.128906h9.066406c4.140625 0 7.5-3.359376 7.5-7.5v-25.632813h59.550782v25.632813c0 4.140624 3.355468 7.5 7.5 7.5h9.0625v164.128906h-9.0625c-4.144532 0-7.5 3.355468-7.5 7.5v25.632812h-59.550782v-25.632812c0-4.144532-3.359375-7.5-7.5-7.5zm-108.46875 48.132812h448.867188v18.132813h-448.867188zm465.433594 51.265625h-482v-18.132812h482zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                        </svg>
                                        <div class="mt-0" style="font-size: 12px">Advokasi <br> Pemerintah</div>
                                    </a>
                                </div>

                                <div class="col mb-4">
                                    <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                        href="https://mitra.atrbpn.go.id">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png"
                                            class="p-2" width="85px" alt="">
                                        <div class="mt-0" style="font-size: 12px">Mitra <br> BPN</div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mobile mt-2">
                <div class="row g-0">
                    <div class="col-auto ms-auto" style="margin-top:5px">
                        <div class="d-grid gap-2 me-1">
                            <a href="{{url('')}}/pilih-user" class="btn btn-sm btn-outline-brown rounded-5 fw-bold"
                                href="{{url('')}}/register">Daftar Sekarang</a>
                        </div>
                    </div>

                    <div class="col me-auto" style="margin-top:5px">
                        <div class="ms-1 d-grid gap-2">
                            <a class="btn btn-sm btn-outline-brownie rounded-5 fw-bold" href="{{url('')}}/join">Pelajari Jasa Pengacara</a>
                        </div>
                    </div>
                </div>
            </div>
      
        <div class="row justify-content-center mb-3 p-0">
            <div class="col-lg-12 mt-3">
                <h5>
                    Cari Jasa Pengacara
                </h5>
                <form class="row g-1">
                    <div class="col-6">
                        <select id="provinsi" class="form-select rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                        </select>
                    </div>
                    <div class="col-6">
                        <select id="kota" class="form-select rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                            <option selected disabled>Pilih Kota/Kabupaten</option>
                        </select>
                    </div>
                 
                </form>
                <script>
                    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                        .then(response => response.json())
                        .then(provinces => {
                            let provinsi = document.getElementById('provinsi');
                            provinsi.innerHTML += `
                        
                            <option selected disabled>Pilih Provinsi</option>  
                            
                            `;
                            provinces.forEach(function(data) {

                                provinsi.innerHTML += `
                            
                                <option value="${data.id}">${data.name}</option>  
                                
                                `;
                            })
                        });
                    $('select#provinsi').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/kota-prov-id",
                            data: {
                                prov_id: $('select#provinsi').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let kota = document.getElementById('kota');
                                kota.innerHTML += `
                                
                                    <option selected disabled>Pilih Kota</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    kota.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=provinsi]').val($('select#provinsi option:selected').text());
                            }
                        });
                    })
                    $('select#kota').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/kec-kot-id",
                            data: {
                                kota_id: $('select#kota').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let kecamatan = document.getElementById('kecamatan');
                                kecamatan.innerHTML += `
                                
                                    <option selected disabled>Pilih kecamatan</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    kecamatan.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=kota]').val($('select#kota option:selected').text());
                            }

                        });
                    })
                    $('select#kecamatan').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/des-kec-id",
                            data: {
                                kec_id: $('select#kecamatan').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let desa = document.getElementById('desa');
                                desa.innerHTML += `
                                
                                    <option selected disabled>Pilih desa</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    desa.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=kecamatan]').val($('select#kecamatan option:selected').text());
                            }

                        });
                    })
                    $('select#desa').on('change', function() {

                        $('input[name=desa]').val($('select#desa option:selected').text());

                    })
                </script>
                <div class="card mt-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4>
                                    4532 Pengacara Ditemukan
                                </h4>
                                <p>
                                Semua Wilayah
                                </p>
                                <div class="row">

                                    <?php
                                    $name = [
                                        "Budi K.",
                                        "Rudi H.",

                                        "Ustman A.",
                                        "Joko L.",

                                        "James Tate",
                                        "Robert K.",
                                        "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Noto Adi', 'Agus Susan'
                                    ];
                                    ?>

                                    @for($i=13;$i> 0;$i--)
                                    <div class="col-12 " id='orang-kotak'>
                                        <hr>
                                        <div class="row">

                                            <div class="col-sm">

                                                <table style="width:100%">
                                                    <tr>
                                                        <td rowspan="3">
                                                            <form action="{{url('')}}/detail-main-petugas" method="get" id="form-lawyer-{{$i}}">
                                                                <input type="hidden" name="name" value="{{$name[$i]}}">
                                                                <input type="hidden" name="img" value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                                                <input type="hidden" name="jenis_petugas" value="Lawyer">
                                                            </form>
                                                            <img onclick="return  $('form#form-lawyer-<?= $i ?>').submit()" src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" class="rounded-circle img-thumbnail " style="width:70px;height:auto;object-fit:cover;cursor: pointer;">
                                                        </td>
                                                        <td>
                                                            <b onclick="return  $('form#form-lawyer-<?= $i ?>').submit()" style="cursor: pointer;" class="ms-1 text-success">
                                                                {{$name[$i]}}
                                                            </b>
                                                            <span class="badge bg-success pt-1 pb-1">
                                                                aktif
                                                            </span>

                                                        </td>
                                                        <td>
                                                            <form action="{{url('')}}/detail-petugas" method="get">
                                                                <input type="hidden" name="name" value="{{$name[$i]}}">
                                                                <input type="hidden" name="img" value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                                                <input type="hidden" name="jenis_petugas" value="Notaris">
                                                            </form>
                                                            <button class="mobile btn btn-outline-dark float-end" onclick="return $($(this).parent()).find('form').submit()">
                                                                <i class="fa fa-comment"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <small class="ms-1">
                                                                Lorem, ipsum dolor sit amet consectetur adipisicing.
                                                            </small>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <div class="col-auto">
                                                <div class="desktop">
                                                    <div class="float-end">
                                                        <form action="{{url('')}}/detail-petugas" method="get">
                                                            <input type="hidden" name="name" value="{{$name[$i]}}">
                                                            <input type="hidden" name="img" value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                                            <input type="hidden" name="jenis_petugas" value="Notaris">
                                                        </form>
                                                        <button onclick="return $($(this).parent()).find('form').submit()" class="btn btn-outline-dark pt-1 pb-1 mt-0 mb-0">
                                                            <i class="fa fa-comment"></i>
                                                            Hubungi
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                    @endfor
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-4">
                            <img src="{{asset('')}}images/PENGACARA VIP_BANNER.jpg" class="img-fluid">

                                <div class="row">

                                    <?php
                                    $name = [
                                        "Budi K.",
                                        "Rudi H.",

                                        "Ustman A.",
                                        "Joko L.",

                                        "James Tate",
                                        "Robert K.",
                                        "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Noto Adi', 'Agus Susan'
                                    ];
                                    ?>

                                    @for($i=7;$i> 0;$i--)
                                    <div class="col-lg-12" id='orang-kotak'>

                                        <div class="card border-0 mt-1 shadow" style="background:#FAFAD2">
                                            <div class="card-body p-2">
                                                <div class="text-center">

                                                    <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" class="rounded-circle img-fluid shadow " style="width:70px;height:auto;object-fit:cover;">
                                                    <br>
                                                    <b class="text-danger">
                                                        {{$name[$i]}}
                                                    </b>

                                                    <p>
                                                        Pengacara
                                                    </p>
                                                    <button class="btn btn-dark  pt-1 pb-1 mt-0 mb-0">
                                                        <i class="fa fa-comment"></i>
                                                        Chat
                                                    </button>
                                                    <button class="btn btn-dark  pt-1 pb-1 mt-0 mb-0">
                                                        <i class="fa fa-phone"></i>
                                                        Telepon
                                                    </button>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>


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

                @media screen and (min-width: 768px) {
                    .store {
                        width: 216px;
                    }

                    .appstore {
                        width: 185px;
                    }
                }

            </style>

            <hr>

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <b>Download Aplikasinya!</b>
                    <p class="fw-lighter mb-0">Platform Seputar Tanah No. 1 di Indonesia</p>
                </div>
                <div class="col-12 mb-2 text-center">
                    <a href="#"><img src="{{asset('/')}}uploads/google-play-badge.png" class="store" alt=""></a>
                    <a href="#"><img src="{{asset('/')}}uploads/appstore-badge.png" class="appstore" alt=""></a>
                </div>
            </div>

            <hr>





            {{-- <div id="fb-root"></div>
            <script async defer crossorigin="anonymous"
                src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
            <div class="row mt-4 puter g-0">
                <div class="card-body text-white text-center   bg-card-dark-mode" style="background: #61481C">
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
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous">
            </script> --}}
            
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0"
        nonce="Ee2Zutm6"></script>

        </div>
    </div>

    @include('layouts.template-public.footer')


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
            @include('layouts.dark_mode')
</body>

</html>
