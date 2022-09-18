<?php 
use App\Models\Bid_Sengketa;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="container mt-3">
    <div class="row">
        @foreach ($sengketa as $item)
        <div class="col-md-6 mb-3 sp">
            <div class="card mb-2">
                <div class="card-header bg-dark text-white px-3 py-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="mb-0">Kode Bid SP-00{{$item['id']}}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="badge bg-secondary float-end"><a
                                    href="https://sengketatanah.id/login?title=Bid Sponsor" class="text-white"
                                    style="text-decoration:none">Lihat
                                    Berkas</a></span>
                            <span class="float-end">&nbsp;</span>
                            <form action="https://sengketatanah.id/bid-sengketa/podcast" class="form-sengketa1"
                                method="get">
                                <input type="hidden" name="owner" value=" Ali Shadiqin">
                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                <input type="hidden" name="luas" value=" 2.4 Ha">
                                <input type="hidden" name="lokasi" value=" Blitar, Jawa timur">
                                <input type="hidden" name="komentar" value="">
                                <input type="hidden" name="link_yt" value="">
                                <input type="hidden" name="form" value="sponsor">
                            </form>
                            <br>
                            <span class="badge bg-dark float-end"
                                onclick="return document.querySelector('form.form-sengketa1').submit()">Lihat
                                Podcast Sengketa</span>
                            <span class="float-end">&nbsp;</span>
                            <span class="badge bg-danger float-end">Terverifikasi</span>
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
                                <td>&nbsp; {{$item['name']}}</td>
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
                                <td>&nbsp;{{count(Bid_Sengketa::where('sengketa_id',$item['id'])->get());}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
        @endforeach
    </div>
</div>
@endsection