@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="m-3 d-flex ">
                    <img src="https://source.unsplash.com/40x40?{{ $campaign->kota }}" alt=""
                        style="width: 50px;height:50px" class="rounded-circle d-inline">
                    <ul class="ps-2 mb-0" style="list-style: none;">
                        <li style="margin-bottom: -7px"><a
                                href="../campaigns?organized={{ $campaign->organized->username }}"
                                class="text-decoration-none fs-5"
                                style="color: #12433F">{{ $campaign->organized->name }}</a></li>
                        <li style="margin-top: -5px"><small>
                                {{ \Carbon\Carbon::parse($campaign->created_at)->translatedFormat('j F Y') }}</small>
                        </li>
                    </ul>
                </div>
                <img src="https://source.unsplash.com/1200x400?{{ $campaign->kota }}" class="img-fluid"
                    alt="{{ $campaign->kota }}">
                <h2 class="mt-3 mx-3">{{ $campaign->title }}</h2>
                <article class="m-3 ">
                    {!! $campaign->description !!}
                </article>
                <a href="/campaigns" class="text-decoration-none d-block mb-3 mx-3"><i
                        class="bi bi-arrow-left-circle-fill" style="color: blue"></i> Back to all campaign</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Detail Kampanye
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tanggal Pelaksanaan: 12 Desember 2023</li>
                    <li class="list-group-item" style="background-color: rgb(208, 231, 169)">8 hari tersisa menuju hari pelaksanaan</li>
                    <li class="list-group-item" style="background-color: rgba(250, 192, 192, 0.637)">Kampanye telah berakhir.</li>
                    <li class="list-group-item">Lokasi Penanaman: Purwakarta</li>
                    <li class="list-group-item">
                        <p class="mb-2">Volunteer: 30/70 Orang</p>
                        <div class="progress mb-2" role="progressbar" aria-label="volunteer" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: {{ $campaign->jml_volunteer }}%">
                                {{ $campaign->jml_volunteer }}%</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <button type="submit" class="btn btn-custom w-100">Join</button>
                    </li>
                </ul>
                <div class="card-header">
                    Daftar Volunteer
                </div>
                <table class="table table-responsive">
                    <thead>
                        <tr class="text-center">
                            <td style="border-right: #D8D8D8 solid 1px">
                                No
                            </td>
                            <td>
                                Nama
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td style="border-right: #D8D8D8 solid 1px">1</td>
                            <td>Dwika Jaya Fitrohyati</td>
                        </tr>
                        <tr class="text-center">
                            <td style="border-right: #D8D8D8 solid 1px">2</td>
                            <td>Fany Lailatunisa</td>
                        </tr>
                        <tr class="text-center">
                            <td style="border-right: #D8D8D8 solid 1px">3</td>
                            <td>Rizal Aglal Faozi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
