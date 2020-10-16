@extends('layouts.app')

@section('content')
    <h1>Bikin Artikel Baru</h1>
    <form action="/artikel" method="POST">
        @csrf
        <x-input label="Judul" field="title" type="text" placeholder="Masukkan judul artikel..."/>
        <x-textarea label="Subject" field="subject" placeholder="Masukkan subject artikel..." />
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
