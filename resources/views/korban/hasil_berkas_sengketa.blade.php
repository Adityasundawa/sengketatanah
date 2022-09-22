
@extends('layouts.template-korban.main')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Berkas Foto Ktp
                </div>
                <div class="card-body">
                     <img class="img-fluid" src="{{asset('/')}}images/users/ktp/{{$sengketa['foto_ktp']}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Berkas Foto Lokasi
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="{{asset('/')}}images/users/lokasi/{{$sengketa['foto_lokasi']}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Berkas Dokumen Hak Tanah
                </div>
                <div class="card-body">
                    --
                </div>
            </div>
        </div>
    </div>
</div>

@endsection