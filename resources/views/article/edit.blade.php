@extends('layout')
@section('content')

<h2>記事変更</h2>
	<p>{{ $article-> title}}</p>

<form method="post" action="http://localhost:8000/article/store">
	<p>タイトル：<input type="text" name="title" value= {{ $article-> title}} /></p>
	<p>本文：<input type="text" name="body" value= {{ $article-> body}} /></p>
	<p>ユーザID：<input type="text" name="user_id" value= {{ $article-> user_id}} /></p>
	<input type="hidden" name="id" value= {{ $article-> id}} /></p>
	 <input type="submit" value="送信" />　
	 {{ csrf_field() }}
</form>
@endsection