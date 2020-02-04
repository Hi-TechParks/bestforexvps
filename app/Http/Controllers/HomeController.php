<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\AricleCategory;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Reviews
        $reviews = Review::where('status', '1')
                    ->orderBy('order', 'asc')
                    ->get();

        return view('website.index', compact('reviews'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function review($slug)
    {
        // Reviews
        /*$review = Review::where('slug', $slug)
                    ->firstOrFail();*/

        return view('website.review');
        return view('website.review', compact('review'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function article($slug)
    {
        // Article
        /*$article = AricleCategory::where('slug', $slug)
                    ->firstOrFail();*/

        return view('website.single-blog');
        return view('website.single-blog', compact('article'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function comparison()
    {
        // Reviews
        $reviews = Review::where('status', '1')
                    ->orderBy('order', 'asc')
                    ->get();

        return view('website.comparison', compact('reviews'));
    }
}
