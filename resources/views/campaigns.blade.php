@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3 mt-5">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/campaigns">
            @if (request('kota'))
                <input type="hidden" name="kota" value="{{ request('kota') }}">
            @endif
            @if (request('provinsi'))
                <input type="hidden" name="provinsi" value="{{ request('provinsi') }}">
            @endif
            @if (request('organized'))
            <input type="hidden" name="organized" value="{{ request('organized') }}">
            @endif 
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari judul, penyelenggara, lokasi ataupun deskripsi kampanye" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-custom" type="submit">Cari</button>
            </div>
        </form>
    </div>
</div>


@if ($campaigns->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $campaigns[0]->kota->name }}" class="card-img-top"
        alt="{{ $campaigns[0]->kota->name }}">
    <div class="card-body text-center">
        <h5 class="card-title"><a href="/campaigns/{{ $campaigns[0]->slug }}"
                class="text-decoration-none text-dark">{{ $campaigns[0]->title }}</a></h5>
        <p>
            <small class="text-body-secondary">
                Diselenggarakan oleh <a href="../campaigns?organized={{ $campaigns[0]->organized->username }}"
                    class="text-decoration-none text-success">{{ $campaigns[0]->organized->name }}</a> akan dilaksanakan di
                <a href="?kota={{ $campaigns[0]->kota->slug }}" class="text-decoration-none text-success">{{ $campaigns[0]->kota->name }}</a>, <a href="?provinsi={{ $campaigns[0]->kota->provinsi->slug }}" class="text-decoration-none text-success">{{ $campaigns[0]->kota->provinsi->name }}</a> | Dibuat
                {{ $campaigns[0]->created_at->diffForHumans() }}</small>
        </p>
        @if( $campaigns[0]->daysDiff > 0)
        <p><i class="bi bi-check-circle-fill" style="color: green"></i> {{ $campaigns[0]->daysDiff }} hari tersisa, ayo
            daftar!</p>
        @else
        <p><i class="bi bi-x-circle-fill" style="color: red"></i> Kampanye telah berakhir</p>
        @endif
        <div class="progress mb-2" role="progressbar" aria-label="volunteer" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success"
                style="width: {{ intval($campaigns[0]->volunteers()->count()/$campaigns[0]->jml_volunteer*100) }}%">
                {{ intval($campaigns[0]->volunteers()->count()/$campaigns[0]->jml_volunteer*100) }}%</div>
        </div>
        <a href="/campaigns/{{ $campaigns[0]->slug }}" class="text-decoration-none btn btn-custom">Detail Kampanye</a>
    </div>
</div>
<div class="container px-0">
    <div class="row">
        @foreach ($campaigns->skip(1) as $campaign)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute py-2 px-3 text-white w-100" style="background-color: rgba(0,0,0,0.6)"><a
                        href="?kota={{ $campaign->kota->slug }}"
                        class="text-decoration-none text-white">{{ $campaign->kota->name }}</a> | <a href="?provinsi={{ $campaign->kota->provinsi->slug }}" class="text-decoration-none text-white">{{ $campaign->kota->provinsi->name }}</a></div>
                <img src="https://source.unsplash.com/800x600?{{ $campaign->kota->name }}" class="card-img-top"
                    alt="{{ $campaign->kota->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $campaign->title }}</h5>
                    <p>
                        <small class="text-body-secondary">
                            Diselenggarakan oleh <a href="../campaigns?organized={{ $campaign->organized->username }}"
                                class="text-decoration-none">{{ $campaign->organized->name }}</a> | Dibuat
                            {{ $campaign->created_at->diffForHumans() }}</small>
                    </p>
                    @if( $campaign->daysDiff > 0)
                    <p><i class="bi bi-check-circle-fill" style="color: green"></i> {{ $campaign->daysDiff }} hari
                        tersisa, ayo daftar!</p>
                    @else
                    <p><i class="bi bi-x-circle-fill" style="color: red"></i> Kampanye telah berakhir</p>
                    @endif
                    <p class="mb-0">Sukarelawan</p>
                    <div class="progress mb-2" role="progressbar" aria-label="volunteer" aria-valuemin="0"
                        aria-valuemax="100">
                        <div class="progress-bar bg-success"
                            style="width: {{ intval($campaign->volunteers()->count()/$campaign->jml_volunteer*100) }}%">
                            {{ intval($campaign->volunteers()->count()/$campaign->jml_volunteer*100) }}%</div>
                    </div>
                    <a href="/campaigns/{{ $campaign->slug }}" class="btn btn-custom text-decoration-none">Detail
                        Kampanye</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">Kampanye tidak ditemukan</p>
@endif

<div class="d-flex justify-content-center">
    {{ $campaigns->links() }}
</div>


@endsection
