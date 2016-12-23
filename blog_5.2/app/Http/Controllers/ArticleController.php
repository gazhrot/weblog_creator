<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Blog;
use App\Article;

class ArticleController extends Controller
{
    public function create(Request $request)
    {

        $article = new Article;
        $article->titre = $request->input('titre');
        $article->chapo = $request->input('chapo');
        $article->corps = $request->input('corps');
        $article->save();

        return new Response();
    }
}