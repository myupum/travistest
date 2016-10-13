@extends('layout')
@section('content')

<h2>一覧</h2>
	@foreach($articles as $article)
		<p>{{ $article -> id}}</p>
		<p>{{ $article -> title}}</p>
	@endforeach
@endsection