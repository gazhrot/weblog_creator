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
        if ($request->file('photo')->isValid()) {
            $extension = $request->file('photo')->extension();
            $fileName = uniqid() . '.' . $extension; 
            $request->file('photo')->move('../public/upload', $fileName);
        }

        $article = new Article;
        $article->titre = $request->input('titre');
        $article->chapo = $request->input('chapo');
        $article->corps = $request->input('corps');
        $article->photo = $fileName;
        $article->save();

        return new Response();
    }
}