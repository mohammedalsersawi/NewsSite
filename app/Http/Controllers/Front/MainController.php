<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $newss = News::all();
        $latest_news = News::latest()->take(3)->get();
        $two_section = News::where('category_id', '=', 2)->take(3)->get();
        $three_section = News::where('category_id', '=', 2)->get();
        $fourth_section = News::where('category_id', '=', 2)->latest()->take(5)->get();
        $section = News::where('category_id', '=', 2)->latest()->take(4)->get();
        return view('front.index', compact('categories', 'newss', 'two_section', 'three_section', 'latest_news', 'fourth_section' ,'section'));
    }
    public function show($slug, $id)
    {
        return $id;
    }
}
