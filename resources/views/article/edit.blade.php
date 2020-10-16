@extends('layouts.app')

@section('content')
    <h1>Edit Artikel Baru</h1>
    <form action="/artikel/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            @error('title')
            <div class="text-danger my-3">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title') ? old('title') : $article->title }}">
        </div>
        <div class="form-group mt-3">
            <label for="subject">Subject</label>
            @error('subject')
            <div class="text-danger my-3">{{ $message }}</div>
            @enderror
            <textarea name="subject" id="subject" cols="30" rows="10"
                class="form-control">{{ old('subject') ? old('subject') : $article->subject }}</textarea>
        </div>
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
