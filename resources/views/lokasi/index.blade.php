@extends('layouts.main')

@section('container')
<h1 class="pt-3 mt-3">{{ $title }}</h1>
<div class="container px-0" style="min-height: 63vh">
    <div class="row ">
        @foreach ($lokasi as $p)
        <div class="col-md-3 my-2">
            <a href="lokasi/{{ $p->slug }}">
                <div class="card text-bg-dark text-white">
                    <img src="https://source.unsplash.com/600x400?{{ $p->name }}" class="card-img" alt="{{ $p->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill px-4 py-2"
                            style="background-color: rgba(0,0,0,0.7)">{{ $p->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    {{ $lokasi->links() }}
</div>
@endsection
