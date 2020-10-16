@extends('layouts.app')

@section('content')
    <h1>Bikin Artikel Baru</h1>
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            @error('title')
            <div class="text-danger my-3">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group mt-3">
            <label for="subject">Subject</label>
            @error('subject')
            <div class="text-danger my-3">{{ $message }}</div>
            @enderror
            <textarea name="subject" id="subject" cols="30" rows="10" class="form-control">{{ old('subject') }}</textarea>
        </div>
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
