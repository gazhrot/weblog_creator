<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Blog;
use App\Article;
use App\Categorie;

class CategorieController extends Controller
{
    public function create(Request $request)
    {
        $categorie = new Categorie;
        $categorie->blog_id = 1;
        $categorie->name = $request->input('name');
        $categorie->save();
        return new Response();
    }
}