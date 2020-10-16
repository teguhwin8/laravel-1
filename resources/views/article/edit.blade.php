@extends('layouts.app')
@section('title', 'Edit Artikel')
@section('content')
    <h1>Edit Artikel Baru</h1>
    <form action="/artikel/{{ $article->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <x-input label="Judul" field="title" type="text" value="{{ $article->title }}" />
                <x-textarea label="Subject" field="subject" value="{{ $article->subject }}" />
                @if ($article->thumbnail)
                    <img src="/image/{{ $article->thumbnail }}" width="150" class="d-block">
                @endif
            </div>
            <div class="col-md-6 mt-3">
                <span class="text-warning">Gambar maksimal 1MB *</span>
                <x-upload field="thumbnail" label="Pilih Thumbnail" />
            </div>
        </div>
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
