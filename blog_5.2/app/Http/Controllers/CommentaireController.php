<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Blog;
use App\Article;
use App\User;
use App\Commentaire;
use Illuminate\Support\Facades\Auth as Auth;

class CommentaireController extends Controller
{
    public function create(Request $request)
    {
    	$commentaire = new Commentaire;
    	$commentaire->user_id = Auth::user()->id;
    	$commentaire->article_id = $request->input('article_id');

        return new Response();
    }
}