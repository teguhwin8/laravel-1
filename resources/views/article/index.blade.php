@extends('layouts.app')

@section('content')
    <h1>Ini adalah halaman artikel</h1>
    @foreach ($articles as $article)
        <p><strong>{{ $article['title'] }}</strong></p>
        <p>{{ $article['content'] }}</p>
		@endforeach
		<div>
			{{ $articles->links() }}
		</div>
@endsection
