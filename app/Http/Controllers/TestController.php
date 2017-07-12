<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class TestController extends Controller
{
    public function index()
    {
        $article = Article::findOrFail(2);
        dd($article);
    }
}
