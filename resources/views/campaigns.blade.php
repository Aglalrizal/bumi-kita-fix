@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/campaigns">
            {{-- @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">    
            @endif
            @if (request('organized'))
                <input type="hidden" name="organized" value="{{ request('organized') }}">    
            @endif --}}
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-custom" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>


@if ($campaigns->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $campaigns[0]->kota }}" class="card-img-top"
        alt="{{ $campaigns[0]->kota }}">
    <div class="card-body text-center">
        <h5 class="card-title"><a href="/campaigns/{{ $campaigns[0]->slug }}"
                class="text-decoration-none text-dark">{{ $campaigns[0]->title }}</a></h5>
        <p>
            <small class="text-body-secondary">
                Organized By. <a href="../campaigns?organized={{ $campaigns[0]->organized->username }}"
                    class="text-decoration-none">{{ $campaigns[0]->organized->name }}</a> akan dilaksanakan di {{ $campaigns[0]->kota }} | Created
                {{ $campaigns[0]->created_at->diffForHumans() }}</small>
        </p>
        @if( $campaigns[0]->daysDiff  > 0)
        <p><i class="bi bi-check-circle-fill" style="color: green"></i> {{ $campaigns[0]->daysDiff }} hari tersisa, ayo daftar!</p>
        @else
        <p><i class="bi bi-x-circle-fill" style="color: red"></i> Kampanye telah berakhir</p>
        @endif
        <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: {{ $campaigns[0]->jml_volunteer }}%">{{ $campaigns[0]->jml_volunteer }}%</div>
        </div>
        <a href="/campaigns/{{ $campaigns[0]->slug }}" class="text-decoration-none btn btn-custom">Detail Kampanye</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($campaigns->skip(1) as $campaign)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute py-2 px-3" style="background-color: rgba(0,0,0,0.6)"><a
                        href="?lokasi={{ $campaign->kota }}"
                        class="text-decoration-none text-white">{{ $campaign->kota }}</a></div>
                <img src="https://source.unsplash.com/800x600?{{ $campaign->kota }}" class="card-img-top"
                    alt="{{ $campaign->lokasi }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $campaign->title }}</h5>
                    <p>
                        <small class="text-body-secondary">
                            Organized By. <a href="../campaigns?organized={{ $campaign->organized->username }}"
                                class="text-decoration-none">{{ $campaign->organized->name }}</a> | Created
                            {{ $campaign->created_at->diffForHumans() }}</small>
                    </p>
                    @if( $campaign->daysDiff  > 0)
                    <p><i class="bi bi-check-circle-fill" style="color: green"></i> {{ $campaign->daysDiff }} hari tersisa, ayo daftar!</p>
                    @else
                    <p><i class="bi bi-x-circle-fill" style="color: red"></i> Kampanye telah berakhir</p>
                    @endif
                    <p class="mb-0">Volunteers</p>
                    <div class="progress mb-3" role="progressbar" aria-label="volunteer" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: {{ $campaign->jml_volunteer }}%">{{ $campaign->jml_volunteer }}%</div>
                    </div>
                    <a href="/campaigns/{{ $campaign->slug }}" class="btn btn-custom text-decoration-none">Detail Kampanye</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No campaign found.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $campaigns->links() }}
</div>


@endsection
