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
    public function create(Request $request, $id)
    {
        $categorie = new Categorie;
        $categorie->blog_id = $id;
        $categorie->name = $request->input('categorie');
        $categorie->save();

        return redirect('office');
    }
}