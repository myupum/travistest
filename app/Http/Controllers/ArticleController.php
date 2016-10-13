<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
  public function index()
  {
    $articles = Article::all();
    return view('article.index')->with(compact('articles'));
  }

  public function create()
  {
    return view('article.create');
  }

  public function store(Request $request)
  {
	$data = $request -> all();

	// パターン1
	$article= new Article;
	
	if(!is_null($data["id"]) ){
	$article = Article::find($data["id"]);
	//	$article->id = $data["id"];
	}

	$article->title = $data["title"];
	$article->body = $data["body"];
	$article->user_id = $data["user_id"];
	
	$article->save();

	// パターン2
//	$article= new Article;	
//	$article->fill($data)->save();

	// パターン3
//	Article::create($data);

//	var_dump($article);

	return redirect() -> to('article/complete');	
  }

  public function complete()
  {
    return view('article.complete');
  }

  public function edit($id)
  {
  	$article = Article::find($id); 
    return view('article.edit')->with(compact('article'));
  }

}
