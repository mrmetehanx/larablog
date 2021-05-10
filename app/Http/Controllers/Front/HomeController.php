<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\Category;
use App\Models\Article;

class HomeController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('parent_id',0)->get();
        $articles = Article::class;
        View::share('articles',$articles);
        View::share('categories',$categories);
    }

    public function home()
    {
        return view('front.home');
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = Article::where('category_id', $category->id)->paginate(9);
        return view('front.category')->with('category',$category)->with('articles',$articles);
    }

    public function post($slug)
    {
        $article = Article::where('slug',$slug)->first();
        return view('front.post')->with('article',$article);
    }

    public function author(Request $request)
    {
        return view('front.author');
    }

    public function search(Request $request)
    {
        return view('front.search');
    }

    public function contact(Request $request)
    {
        return view('front.contact');
    }

    public function about()
    {
        return view('front.about');
    }

}
