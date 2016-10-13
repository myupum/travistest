@extends('layout')
@section('content')

<h2>記事作成</h2>
<form method="post" action="http://localhost:8000/article/store">
	<p>タイトル：<input type="text" name="title" /></p>
	<p>本文：<input type="text" name="body" /></p>
	<p>ユーザID：<input type="text" name="user_id" /></p>
	 <input type="submit" value="送信" />　
	 {{ csrf_field() }}
</form>
@endsection