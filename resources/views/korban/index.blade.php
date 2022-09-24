<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
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
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Project</p>
                            <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Bidding</p>
                            <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Agenda</p>
                            <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
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
        <!--end row-->

        <div class="row">
            @foreach ($sengketa as $item)
            <?php $users = User::where('id',$item['user_id'])->first(); ?>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="col-6">
                                <b>PROJECT</b><b class="text-danger"> SP-00{{$item['id']}}</b>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-9 mt-1">
                                        <div class="d-flex  justify-content-end">
                                            @if($item['status_sengketa'] == 1)
                                            <span class="badge badge-danger">Menunggu Verifikasi</span>
                                            @elseif($item['status_sengketa'] == 2)
                                            <span class="badge badge-success">Terverifikasi Tahap 1</span>
                                            @elseif($item['status_sengketa'] == 3)
                                            <span class="badge badge-success">Terverifikasi Tahap 2</span>
                                            @elseif($item['status_sengketa'] == 4)
                                            <span class="badge badge-success">Selesai</span>
                                            @elseif($item['status_sengketa'] == 0)
                                            <span class="badge badge-danger">Pending</span>
                                            @endif
                                        </div>
                                    </div>
                               
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($item['status_sengketa'] == 1)
                        <div class="alert alert-danger" id="alert" role="alert">
                            Data Anda telah kami terima dan mohon menunggu petugas kami melakukan verifikasi. Saat
                            ini anda belum dapat mengirimkan dokumen. Pastikan telepon/hp Anda dapat di hubungi
                        </div>
                        
                        @elseif($item['status_sengketa'] == 2)
                        <div class="alert alert-warning" id="alert" role="alert">
                            <b>Selamat, </b>Anda berhasil melewati tahap verifikasi 1. Silahkan pilih lampiran
                            dokumen Anda untuk melewati tahap berikutnya
                        </div>
                        @elseif($item['status_sengketa'] == 3)
                        <div class="alert alert-warning" id="alert" role="alert">
                            <b>Selamat, </b>Anda berhasil melewati verifikasi tahap 2. Untuk menampilkan project,
                            Anda harus melewati sesi wawancara via Podcast Sengketa Tanah atau Zoom.
                        </div>
                        {{-- @elseif($item['status_sengketa']s == 3)s
                        <span class="badge badge-warning">Diproses</span>
                        @elseif($item['status_sengketa'] == 4)
                        <span class="badge badge-success">Selesai</span>
                        @elseif($item['status_sengketa'] == 0)
                        <span class="badge badge-danger">Pending</span> --}}
                        @endif

                        <table>
                            <tbody>
                                <tr>
                                    <td>Owner/Korban</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$users->name}}</td>
                                </tr>
                                <tr>
                                    <td>Objek Sengketa</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$item['objek_sengketa']}}</td>
                                </tr>
                                <tr>
                                    <td>Luas Objek</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$item['luas']}} Ha</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$item['lokasi']}}</td>
                                </tr>
                                <tr>
                                    <td>Kebutuhan Dana</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; Rp.{{$item['jumlah_dana']}}</td>
                                </tr>

                                <tr>
                                    <td>Imbal Hasil</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$item['pengembalian_dana']}}</td>
                                </tr>
                                <tr>
                                    <td>Jaminan</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{$item['jaminan_berupa']}}</td>

                                </tr>

                                <tr>
                                    <td>Jumlah Bid</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; {{count(Bid_Sengketa::where('sengketa_id',$item['id'])->get());}}
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td>Kode Bid</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp; <b class="text-danger">SP-00{{$item['id']}}</b></td>
                                </tr> --}}
                                {{-- <tr>
                                    <td>Status</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp;
                                        @if($item['status_sengketa'] == 1)
                                        <span class="badge badge-danger">Menunggu verifikasi</span>
                                        @elseif($item['status_sengketa'] == 2)
                                        <span class="badge badge-success">Terverifikasi tahap 1</span>
                                        @elseif($item['status_sengketa'] == 3)
                                        <span class="badge badge-warning">Terverifikasi tahap 2</span>
                                        @elseif($item['status_sengketa'] == 4)
                                        <span class="badge badge-success">Selesai</span>
                                        @elseif($item['status_sengketa'] == 0)
                                        <span class="badge badge-danger">Pending</span>
                                        @endif</td>
                                </tr> --}}
                            </tbody>
                        </table>

                        @if ($item['status_sengketa'] == 1)
                        @if ($item['status_file_upload'] == "yes")
                        <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"
                            class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Lihat Berkas</a>
                        @else
                        <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}"
                            class="btn btn-block btn-sm text-white mt-4 disabled" style="background:#8f8f8f" disable>Upload Dokumen</a>
                        @endif

                        @elseif($item['status_sengketa'] == 3)
                        <div class="row mt-4">
                            <div class="col-6">
                                <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"class="btn btn-block btn-sm text-white" style="background:#8f8f8f">Lihat Berkas</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-sm text-white" style="background:#8f8f8f">Jadwalkan Wawancara</a>
                            </div>
                        </div>
                        @else
                        @if ($item['status_file_upload'] == "yes")
                        <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"
                            class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Lihat Berkas</a>
                        @else
                        <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}"
                            class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Upload Dokumen</a>
                        @endif
                        @endif
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
