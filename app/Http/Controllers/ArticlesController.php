<?php

namespace App\Http\Controllers;

use App\Article;
// use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // Render a list of a resource
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }


    // Render a single Article
    public function show(Article $article)  // thay $id với | Article $article
    {
        return view('articles.show', ['article' => $article]);
    }


    // Create a Article giao diện
    public function create()
    {
        return view('articles.create');
    }


    // Xử lý redirect sau khi create
    public function store()
    {
        Article::create($this->validateArticle());
        // return redirect('/articles');
        return redirect(route('articles.index'));
    }

    //Edit Article
    public function edit(Article $article) // Replace $id -> Article $article
    {
        return view('articles.edit', compact('article'));
    }


    // Update Article a single article
    public function update(Article $article) // Replace $id -> Article $article
    {
        $article->update($this->validateArticle());
        // return redirect('/articles/' . $article->id);
        return redirect(route('articles.show', $article));
    }



    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}

/*
namespace App\Http\Controllers;

use App\Article;
// use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of a  resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)  // thay $id với | Article $article
    {
        // Show a single resource
        // $article = Article::find($id);
        // $article = Article::findOrFail($id);
        // return $article;
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Show a view to create a new  resource
        return view('articles.create');
    }

    public function store()
    {
        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);

        // Persist the new resource
        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();
        // Article::create(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));
        Article::create($this->validateArticle());
        // return redirect('/articles');
        return redirect(route('articles.index'));
    }

    public function edit(Article $article) // Replace $id -> Article $article
    {
        //find the article associated with the id
        // $article = Article::find($id);

        // Show a view to edit an existing resource
        // return view('articles.edit', ['article' => article]);
        // Hoặc dùng compact thay cho ['' => ]
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) // Replace $id -> Article $article
    {
        // Persist the edited resource
        // $article = Article::find($id);
        // request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

        // return redirect('/articles/' . $article->id);

        // $article->update(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));

        $article->update($this->validateArticle());
        // return redirect('/articles/' . $article->id);
        return redirect(route('articles.show', $article));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
    // public function destroy()
    // {
    //     // Delete the resource
    // }
}

*/