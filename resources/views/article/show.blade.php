@extends('layouts.app')
@section('title'){{ $article->title }}@endsection
@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->subject }}</p>
    <div class="d-flex">
        <a href="/artikel/{{ $article->id }}/edit" class="btn btn-sm mr-3 btn-info">Edit</a>
        <form action="/artikel/{{ $article->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-sm mr-3 btn-danger" type="submit">Hapus</button>
        </form>
        <a href="/artikel" class="btn btn-sm mr-3 btn-info"> Kembali </a>
    </div>
@endsection
