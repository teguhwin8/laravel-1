@extends('layouts.app')
@section('title', 'List Artikel')
@section('content')
    <h1>List Artikel</h1>
    @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row">
            @foreach ($articleChunk as $article)
                <div class="col-md-4 px-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->subject }}</p>
                            <a href="/artikel/{{ $article->slug }}" class="stretched-link"></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <div>
        {{ $articles->links() }}
    </div>
    @include('layouts.footer')
@endsection
