<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Blog;
use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        $blog = new Blog;
        $blog->user_id = Auth::user()->id;
        $blog->titre = $request->input('titre');
        $blog->description = $request->input('description');
        $blog->banniere = $request->input('banniere');
        $blog->save();

        return new Response();
    }
}