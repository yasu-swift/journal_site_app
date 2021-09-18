<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Articleクラスを読み込む
use App\Models\Article;
class ArticleController extends Controller
{
        // showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
}
