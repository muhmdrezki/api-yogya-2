<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Get All Article
     */
    public function index()
    {
      $articles = Article::all();
      return response()->json([
        'status' => true,
        'data' => $articles
      ], 200);
    }
}
