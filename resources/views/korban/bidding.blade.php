<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="container-fluid mt-3 mb-5">
    {{-- <a class="btn btn-successs my-4" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a> --}}
    <div class="row justify-content-center mb-2">
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Project
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Bidding
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Agenda
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Progress
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
@endsection
