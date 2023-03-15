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
        $categories = Category::all();
        $slider_newss = News::latest()->with('images')->take(5)->get();
        $latest_news = News::latest()
            ->whereNotIn('id', $slider_newss->pluck('id')->toArray())
            ->take(4)
            ->get();
        $section_two = News::latest()
            ->whereNotIn('id', $latest_news->pluck('id')->merge($slider_newss->pluck('id'))->toArray())
            ->take(3)
            ->get();
        $newss = News::all();
        $section_three = Content::where('key', '=', 'section_three')->first();
        $section_fourth = Content::where('key', '=', 'section_fourth')->first();


        // $section_two_data = News::where('category_id', '=', $section_two->value)->with('images')->take(3)->get();
        $section_three_data = News::where('category_id', '=', $section_three->value)->with('images')->get();
        $laste_secFourth = News::where('category_id', '=', $section_fourth->value)->latest()->with('images')->limit(1)->first();
        $section_fourth_data = News::where('category_id', '=', $section_fourth->value)
            ->where('id', '!=', $laste_secFourth->id)
            ->latest()->with('images')->limit(4)->get();
        // $three_section = News::where('category_id', '=', 2)->get();





        return view('front.index', compact(
            'categories',
            'newss',
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
        $latest_news = News::where('category_id', '=', $id)->with('images')->take(3)->get();
        $trending_news = News::where('category_id', '=', $id)->with('images')->take(3)->get();
        $newss = News::with('images')
            ->latest()->where('category_id', '=', $id)
            // ->whereNotIn('id', $latest_news->pluck('id')->toArray())
            ->paginate(6);
        return view('front.details-category', compact('latest_news', 'newss', 'trending_news'));
    }


    public function showCategories()
    {
        return $categories = Category::all();
        return response()->json($categories);
    }
    public function showNewss($slug, $id)
    {
        return $id;
    }
    public function loadnewss(Request $request, $id)
    {
        $newss = News::with('images')
            ->latest()->where('category_id', '=', $id)
            // ->whereNotIn('id', $latest_news->pluck('id')->toArray())
            ->paginate(6);
            return view('front.show-newss' ,compact('newss'))->render();
    }
}
