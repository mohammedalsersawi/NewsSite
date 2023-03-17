<?php

namespace App\Http\Controllers\Admin\Content;

use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Http\Controllers\Admin\ResponseTrait;

class ContentController extends Controller
{
    use ResponseTrait;

    public function index()
    {

        $data = Content::with('category')->skip(2)->take(PHP_INT_MAX)->get();
        $category = Category::all();
        return view("admin.page.content.index", compact('data', 'category'));
    }


    public function store(Request $request)
    {

        $input = $request->all();
        $data = Content::with('category')->skip(2)->take(PHP_INT_MAX)->get();

        // قم بتحديث كل سجل في الجدول
        foreach ($data as $item) {
            $item->value = $input[$item->key];
            $item->save();
        }
        return $this->sendResponse(null, __('item_added'));
    }
}
