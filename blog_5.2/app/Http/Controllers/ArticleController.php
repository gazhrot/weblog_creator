<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Blog;
use App\Article;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        dd($request->all());
    }
}