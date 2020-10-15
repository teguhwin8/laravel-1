<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	public function index()
	{
		$articles = Article::paginate(5);
		return view('article.index', compact('articles'));
	}

	public function single($slug)
	{
		return view('article.single', ['slug' => $slug]);
	}
}
