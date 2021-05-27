<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
class HomeController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('parent_id',0)->get();
        $articles_class = Article::class;
        $category_full = Category::get();
        View::share('articles_class',$articles_class);
        View::share('categories',$categories);
        View::share('category_full',$category_full);
        View::share('tags',Tag::get());
        View::share('about', \App\Models\About::first());
    }

    public function home()
    {
        $latest = Article::orderBy('created_at','asc')->paginate(4);
        return view('front.home')->with('latest',$latest);
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
