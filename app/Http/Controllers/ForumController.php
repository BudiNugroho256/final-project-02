<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ForumController extends Controller
{
    public function index()
    {
    
        $articles = Article::latest()->get();

        return view('forum', compact('articles'));
    }
}
