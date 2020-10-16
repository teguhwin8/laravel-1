@extends('layouts.app')
@section('title', 'Buat Artikel Baru')
@section('content')
    <h1>Bikin Artikel Baru</h1>
    <form action="/artikel" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <x-input label="Judul" field="title" type="text" placeholder="Masukkan judul artikel..." />
                <x-textarea label="Subject" field="subject" placeholder="Masukkan subject artikel..." />
            </div>
            <div class="col-md-6 mt-3">
                <span class="text-warning">Gambar maksimal 1MB *</span>
                <x-upload field="thumbnail" label="Pilih Thumbnail" />
            </div>
        </div>
        <button class="btn btn-primary my-3" type="submit">Simpan</button>
    </form>
@endsection
