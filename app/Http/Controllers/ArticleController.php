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
      $articles = Article::all()->random(5);
      foreach ($articles as $article) {
        # code...
        $article['truncated_title'] = substr($article->title, 1, 10).'....';
        $article['truncated_body'] = substr($article->body, 1, 15).'....';
      }
      return response()->json([
        'status' => true,
        'data' => $articles
      ], 200);
    }

    /**
     * Detail Article
     */
    public function detail($id) 
    {
      $article = Article::find($id);
      return response([
        'status' => true,
        'data' => $article
      ]);
    }
}
