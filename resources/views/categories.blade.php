@extends('layouts.main')

@section('container')
<h1>Post {{ $title }}</h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $c)
        <div class="col-md-4 my-2">
            <a href="posts?category={{ $c->slug }}">
                <div class="card text-bg-dark text-white">
                    <img src="https://source.unsplash.com/600x400?{{ $c->name }}" class="card-img" alt="{{ $c->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill px-4 py-2"
                            style="background-color: rgba(0,0,0,0.7)">{{ $c->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
