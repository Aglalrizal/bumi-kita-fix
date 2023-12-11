@extends('dashboard.layouts.main')

@section('container')
<h2 class="my-2">Daftar Kampanye oleh {{ auth()->user()->name }}</h2>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissable fade show d-flex justify-content-between mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="table-responsive small">
    <a href="/dashboard/campaigns/create" class="btn btn-primary my-3"><i class="bi bi-plus-circle"></i> Buat Kampanye Baru</a>
<table class="table table-striped table-sm border-right text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Volunteer</th>
            <th scope="col">Target Volunteer</th>
            <th scope="col">Tanggal Kegiatan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $campaign)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $campaign->title }}</td>
            <td>{{ $campaign->kota->name }}</td>
            <td>{{ $campaign->volunteers()->count() }}</td>
            <td>{{ $campaign->jml_volunteer }}</td>
            <td> {{ \Carbon\Carbon::parse($campaign->hari_pelaksanaan)->translatedFormat('j F Y') }}</td>
            <td>
                <a href="/dashboard/campaigns/{{ $campaign->slug }}" class="btn btn-info text-center text-dark my-1"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/campaigns/{{ $campaign->slug }}/edit" class="btn btn-warning text-center text-dark my-1"><i class="bi bi-pencil-square"></i>
                </a>
                <form action="/dashboard/campaigns/{{ $campaign->id }}"
                method="post" class="my-1 d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" name="submit" class="btn btn-danger text-center text-dark" onclick="return confirm('are you sure?')"><i class="bi bi-x-circle"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
