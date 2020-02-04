<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleCategory;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Article Categories
        $article_categories = ArticleCategory::where('status', '1')
                                            ->orderBy('title', 'ASC')
                                            ->paginate(9);

        // Articles                                
        $articles = Article::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        return view('articles', compact('article_categories', 'articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        // Article Categories
        $article_categories = ArticleCategory::where('id', $id)
                                            ->where('status', '1')
                                            ->get();

        // Articles                                
        $articles = Article::where('category_id', $id)
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->paginate(9);

        return view('article-category', compact('article_categories', 'articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Article Categories
        $article_categories = ArticleCategory::where('status', '1')
                                            ->orderBy('title', 'ASC')
                                            ->get();

        // Articles                                
        $articles = Article::where('id', $id)
                            ->where('status', '1')
                            ->get();

        return view('article', compact('article_categories', 'articles'));
    }
}
