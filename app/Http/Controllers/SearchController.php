<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Articles                                
        $articles = Article::where('title', 'LIKE', '%'.$request->search.'%' )
							->orWhere('description', 'LIKE', '%'.$request->search.'%' )
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->paginate(9);

        $search = $request->search;

        return view('search', compact('articles', 'search'));
    }
}
