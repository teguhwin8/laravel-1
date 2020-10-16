<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
	public function index()
	{
		$articles = Article::orderBy('id', 'desc')->paginate(6);
		return view('article.index', compact('articles'));
	}

	public function show($title)
	{
		$article = Article::where('title', $title)->first();
		return view('article.show', compact('article'));
	}

	public function create()
	{
		return view('article.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required|min:3|max:255',
			'subject' => 'required',
		]);

		Article::create([
			'title' => $request['title'],
			'slug' => Str::slug($request['title']),
			'subject' => $request['subject']
		]);

		return (redirect('/artikel'));
	}

	public function edit($id)
	{
		$article = Article::find($id);
		return view('article.edit', compact('article'));
	}

	public function update(Request $request, $id)
	{
		Article::find($id)->update([
			'title' => $request['title'],
			'subject' => $request['subject']
		]);

		return (redirect('/artikel'));
	}

	public function destroy($id)
	{
		Article::find($id)->delete();
		return (redirect('/artikel'));
	}
}
