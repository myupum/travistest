<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers;

use App\Article;

class UsersController extends Controller
{
  public function index()
  {
      	return view('hello.index');		
  }

  public function show(id $id)
  {
    	return view('hello.index');		
  }

  public function store()
  {
    	return view('hello.index');		
	}

  public function update(id $id)
  {
    	return view('hello.index');		
  }

  public function destroy(id $id)
  {
    	return view('hello.index');		
  }

}
