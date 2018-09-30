<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {   
        // $request is an array {"title":"ein","body":"Heuter ist 2018 09 30"}
        $article = Article::create($request->all());

        return response()->json($article, 201);
        
    }

    public function update(Request $request, Article $article)
    {
        /**
        * Update the specified user.
        *
        * @param  Request  $request
        * @param  string  $article = id
        * @return Response
        */

        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
