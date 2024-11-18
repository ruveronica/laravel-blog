<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all()->sortBy("id");
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:50',
        ]);

        $article = new Article();
        $article->title = $validated['title'];
        $article->description = $validated['description'];
        $article->save();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:10',
        ]);

        $article = Article::findOrFail($request->id);
        $article->update($validated);

        return redirect()->route('articles.index')->with('success', 'Artículo actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artículo eliminado con éxito.');

    }
}