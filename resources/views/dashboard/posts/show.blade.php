@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h2 class="my-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts/" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back to all my post(s)</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}"
                method="post" class="my-1 d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" name="submit" class="btn btn-danger text-center text-dark" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i>
                     Delete</button>
            </form>
            

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3">
            {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection