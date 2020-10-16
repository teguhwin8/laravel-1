@extends('layouts.app')

@section('content')
    <h1>Edit Artikel Baru</h1>
    <form action="/artikel/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <x-input label="Judul" field="title" type="text" value="{{ $article->title }}" />
        <x-textarea label="Subject" field="subject" value="{{ $article->subject }}" />
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
