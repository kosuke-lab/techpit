<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = [
        //     (object)
        //     [
        //         'id' => 1,
        //         'title' => 'タイトル2',
        //         'body' => '本文',
        //         'created_at' => now(), 
        //         'user' =>(object)[
        //             'id' => 2,
        //             'name' => 'ユーザー名1',
        //      ]
        //     ]
        // ];

         $articles = Article::all()->sortByDesc('created_at');

        return view ('articles.index',['article' => $articles]);   
     }
}
