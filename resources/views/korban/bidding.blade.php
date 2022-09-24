<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

  
            {{-- <a class="btn btn-successs my-4" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a> --}}
       
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <a href="{{url('')}}/korban/list_sengketa_saya">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-deepblue">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">9526</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-cart fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Project</p>
                                    <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{url('')}}/korban/bidding">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">$8323</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-dollar fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Bidding</p>
                                    <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">6200</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Agenda</p>
                                    <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
    
                <div class="col">
                    <div class="card radius-10 bg-gradient-moonlit">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">5630</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-envelope fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Proggress</p>
                                <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <style>
                    @media (min-width: 768px) {
                        .col-md-9.sp {
                            padding-right: 0px !important
                        }

                        .col-md-3.sp {
                            padding-left: 0px !important
                        }
                    }
                </style>
                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-9 sp">
                            <div class="card mb-0 rounded-0">
                                <div class="card-header bg-white">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><b>Bidding 1</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body">

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Owner/Korban</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>Yudi Cahya Prawira</td>
                                            </tr>
                                            <tr>
                                                <td>Objek Sengketa</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; Sengketa Pertanahan</td>
                                            </tr>
                                            <tr>
                                                <td>Luas Objek</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; 3.1 hektar Ha</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; Gegesik, Cirebon</td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan Dana</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; Rp.125000000</td>
                                            </tr>

                                            <tr>
                                                <td>Imbal Hasil</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; Fee 75% Dari Pinjaman</td>
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
                                                <td>&nbsp; Sertifikat Rumah
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Bid</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp; <b class="text-danger">SP-002</b></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;
                                                    <span class="badge badge-success">Selesai</span>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 sp text-white">
                            <div class="card mb-0 bg-dark h-100 rounded-0 d-flex">
                                <div class="card-body align-items-center d-flex justify-content-center">
                                    <h1 class="text-center">
                                        Video Tidak Ada
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
