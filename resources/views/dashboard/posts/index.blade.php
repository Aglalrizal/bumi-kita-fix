@extends('dashboard.layouts.main')

@section('container')
<h2 class="my-2">My Post(s)</h2>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissable fade show d-flex justify-content-between col-lg-8 mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="table-responsive small col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary my-3"><i class="bi bi-plus-circle"></i> Create New Post</a>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info text-center text-dark my-1"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-center text-dark my-1"><i class="bi bi-pencil-square"></i>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}"
                method="post" class="my-1 d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" name="submit" class="btn btn-danger text-center text-dark" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection