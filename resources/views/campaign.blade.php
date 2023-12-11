@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="m-3 d-flex ">
                    <img src="https://source.unsplash.com/40x40?people" alt="foto profil"
                        style="width: 50px;height:50px" class="rounded-circle d-inline">
                    <ul class="ps-2 mb-0" style="list-style: none;">
                        <li style="margin-bottom: -7px"><a
                                href="../campaigns?organized={{ $campaign->organized->username }}"
                                class="text-decoration-none fs-5"
                                style="color: #12433F">{{ $campaign->organized->name }}</a></li>
                        <li style="margin-top: -5px"><small>
                            Dibuat pada {{ \Carbon\Carbon::parse($campaign->created_at)->translatedFormat('j F Y') }}</small>
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
                        class="bi bi-arrow-left-circle-fill" style="color: blue"></i> Kembali ke seluruh kampanye</a>
            </div>
        </div>
        <div class="col-md-4">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable fade show d-flex justify-content-between" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif(session()->has('fail'))
            <div class="alert alert-danger alert-dismissable fade show d-flex justify-content-between" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Detail Kampanye
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tanggal Pelaksanaan: {{ \Carbon\Carbon::parse($campaign->hari_pelaksanaan)->translatedFormat('j F Y') }}</li>
                    @if($campaign->daysDiff>0)
                    <li class="list-group-item" style="background-color: rgb(208, 231, 169)">{{ $campaign->daysDiff }} hari tersisa menuju hari pelaksanaan</li>
                    @else
                    <li class="list-group-item" style="background-color: rgba(250, 192, 192, 0.637)">Kampanye telah berakhir.</li>
                    @endif
                    <li class="list-group-item">Lokasi Penanaman: {{ $campaign->kota->name }}</li>
                    <li class="list-group-item">
                        <p class="mb-2">Volunteer: {{ $campaign->volunteers()->count() }}/{{ $campaign->jml_volunteer }} Orang</p>
                        <div class="progress mb-2" role="progressbar" aria-label="volunteer" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: {{ intval($campaign->volunteers()->count()/$campaign->jml_volunteer*100) }}%">
                                {{ intval($campaign->volunteers()->count()/$campaign->jml_volunteer*100) }}%</div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <form id="volunteerForm" action="/volunteer" method="post">
                            @csrf
                            <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">
                        <button type="button" class="btn btn-custom w-100 {{ $registered||$campaign->daysDiff<=0 ? 'disabled' : '' }}" onclick="confirmSubmission()">Bergabung</button>
                        </form>
                    </li>
                </ul>
                @if($users->count())
                <div class="card-header">
                    Daftar Sukarelawan
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
                        @foreach ($users as $user)
                        <tr class="text-center">
                            <td style="border-right: #D8D8D8 solid 1px">{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmSubmission() {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: 'Klik "Iya" untuk bergabung',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#12433f',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('volunteerForm').submit();
            }
        });
    }
</script>
