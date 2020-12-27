<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        // $article = \DB::table('articles')->where('id',1)->first();
        //$article= Article::where('id',2)->firstorFail();

        //return view('article',[ 'articles' => $article]);

//        $article = App\Models\Article::all();
//        $article = App\Models\Article::take(2);
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles' => $articles]);
    }


    public function show($articleId)
    {


        return view('articles.show', ['article' => Article::where('id', $articleId)->firstorFail()]);

    }


    public function show3()
    {
        return view('home', ['articles' => Article::take(3)->latest()->get()]);
    }


    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', ['tags' => $tags]);
    }

    public function store()
    {
        //need protected $fillable =['titel', 'description','img','viewable']; in Model for multi CU, /!\Security
        //Article::create($this->validateArticle());
        $this->validateArticle();
        $article = new Article(request([
            'titel',
            'description',
            'viewable' ,
            'img',
            'tags']));
        $article->save();
        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));

    }

    public function edit($articleId)
    {

        return view('articles.edit', ['article' => Article::findOrFail($articleId)]);
    }

    public function update($articleId)
    {
        //no eloquent++ methode for clarity /security reason
        $this->validateArticle();

        $article = Article::findOrFail($articleId);
        $article->titel = request('titel');
        $article->description = request('description');
        $article->viewable = request('viewable');
        $article->save();


        return redirect(route('articles.show'), $articleId);

    }

    public function validateArticle()
    {

        return request()->validate([
            'titel' => 'required',
            'description' => 'required',
            'viewable' => '',
            'img' => '',
            'tags'=>'exists:tags,id'
        ]);
    }

}

