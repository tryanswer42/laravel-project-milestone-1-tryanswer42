<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show()
    {
       $article = \DB::table('articles')->where('id',1)->first();



        return view('article',[ 'articles' => $article]);
    }

}

