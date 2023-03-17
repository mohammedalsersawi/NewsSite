<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\News;
use App\Http\Controllers\Admin\ResponseTrait;

class MainController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        News::with('images')->get();
        $categories = Category::where(['status' => 1])->take(15)->get();
        $slider_newss = News::latest()->with('images')
            ->where(['status' => 1, 'view_main' => 1])
            ->take(5)->get();
        $latest_news = News::latest()
            ->where(['status' => 1, 'view_main' => 1])
            ->whereNotIn('id', $slider_newss->pluck('id')->toArray())
            ->take(3)
            ->get();
        $section_two = News::latest()
            ->where(['status' => 1, 'view_main' => 1])
            ->whereNotIn('id', $latest_news->pluck('id')->merge($slider_newss->pluck('id'))->toArray())
            ->take(3)
            ->get();
        $section_three = Content::where('key', '=', 'section_three')->first();
        $section_fourth = Content::where('key', '=', 'section_fourth')->first();

        // $section_two_data = News::where('category_id', '=', $section_two->value)->with('images')->take(3)->get();
        $section_three_data = News::where('category_id', '=', $section_three->value)
            ->where(['status' => 1])
            ->with('images')->get();
        $laste_secFourth = News::where('category_id', '=', $section_fourth->value)->latest()
            ->where(['status' => 1])
            ->with('images')->limit(1)->first();
        $section_fourth_data = News::where('category_id', '=', $section_fourth->value)
            ->where('id', '!=', $laste_secFourth->id)
            ->where(['status' => 1])
            ->latest()->with('images')->limit(4)->get();
        // $three_section = News::where('category_id', '=', 2)->get();

        return view('front.index', compact(
            'categories',
            'section_two',
            'section_three_data',
            'latest_news',
            'laste_secFourth',
            'section_fourth_data',
            'slider_newss'

        ));
    }
    public function show($slug, $id)
    {
        $latest_news = News::where('category_id', '=', $id)
            ->where(['status' => 1])
            ->with('images')->take(3)->get();
        $trending_news = News::where('category_id', '=', $id)
            ->where(['status' => 1])
            ->with('images')->take(3)->get();
        $newss = News::with('images')
            ->latest()->where('category_id', '=', $id)
            ->where(['status' => 1])
            ->paginate(6);
        return view('front.details-category', compact('latest_news', 'newss', 'trending_news'));
    }


    public function showCategories()
    {
        $categories = Category::where(['status' => 1])->take(8)->get();
        return response()->json($categories);
    }
    public function showNewss($slug, $id)
    {
        $data = News::with('images')->where('id', $id)
            ->where(['status' => 1])
            ->get();
        $latest_news = News::with('images')
            ->where(['status' => 1])
            ->take(10)->get();
        return view('front.news_details', compact('data', 'latest_news'));
    }
    public function loadnewss(Request $request, $id)
    {
        $newss = News::with('images')
            ->where(['status' => 1])
            ->latest()->where('category_id', '=', $id)
            // ->whereNotIn('id', $latest_news->pluck('id')->toArray())
            ->paginate(6);
        return view('front.show-newss', compact('newss'))->render();
    }
}
