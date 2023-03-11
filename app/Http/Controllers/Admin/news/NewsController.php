<?php

namespace App\Http\Controllers\Admin\news;

use App\Models\news;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ResponseTrait;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{

    use ResponseTrait;

    public function index()
    {
        $category = Category::all();
        $status =  News::STATUS;
        return view('admin.page.news.index', compact('category', 'status'));
    }

    public function store(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['title'] = 'required|string|max:150';
        $rules['slug'] = 'required|string|max:45';
        $rules['image'] = 'required|image';
        $rules['video'] = 'required_if:videoSwitch,on';
        $rules['albom'] = 'required_if:albomSwitch,on';
        $rules['content'] = 'required|string';
        $rules['category_id'] = 'required|numeric|exists:categories,id';
        $messages = [
            'title.required' => 'عنوان الخبر مطلوب',
            'title.string' => ' عنوان الخبر  يجب أن يكون نص',
            'title.max' => '  عنوان الخبر يجب أن لا يتجاوز 150 حرفًا',
            'slug.required' => 'حقل الاسم المستعار مطلوب',
            'image.required' => 'صورة الخبر مطلوبة',
            'video.required_if' => 'يجب تحميل الفيديو في حالة   تفعيله.',
            'albom.required_if' => 'يجب تحميل البوم الصور في حالة   تفعيله.',
        ];
        $this->validate($request, $rules, $messages);
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        $news->slug = arabicSlug($request->slug);
        $news->view_main = isset($request->view_main) && ($request->view_main == 'on') ? 1 : 0;
        if ($news->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }

    public function getData(Request $request)
    {
        $news = News::query();
        return Datatables::of($news)
            ->filter(function ($query) use ($request) {
                if ($request->get('status') !== null) {
                    $query->where('status', '=', $request->get('status'));
                }
                if ($request->get('view_main') !== null) {
                    $query->where('view_main', '=', $request->get('view_main'));
                }
                if ($request->get('category_id') !== null) {
                    $query->where('category_id', '=', $request->get('category_id'));
                }
                if ($request->get('title')) {
                    $query->where('title', 'like', "%{$request->title}%");
                }
            })
            ->addIndexColumn()
            ->addColumn('status', function ($item) {
                return '
            <input class="activate-news" news-id="' . $item->id . '"
             type="checkbox" id="checkbox"
            ' . ($item->status ? 'checked' : '') . '>
            <label for="checkbox"><span class="checkbox-icon"></span> </label>';
            })
            ->addColumn('view_main', function ($item) {
                return '
            <input class="activatenewsMain" news-id="' . $item->id . '"
             type="checkbox" id="checkbox"
            ' . ($item->view_main ? 'checked' : '') . '>
            <label for="checkbox"><span class="checkbox-icon"></span> </label>';
            })
            ->addColumn('action', function ($que) {
                $data_attr = '';
                $data_attr .= 'data-id="' . @$que->id . '" ';
                $data_attr .= 'data-title="' . @$que->title . '" ';
                $data_attr .= 'data-slug="' . @$que->slug . '" ';
                $data_attr .= 'data-status="' . @$que->status . '" ';
                $data_attr .= 'data-content="' . @$que->content . '" ';
                $data_attr .= 'data-view_main="' . @$que->view_main . '" ';
                $data_attr .= 'data-category_id="' . @$que->category_id . '" ';
                $string = '';
                $string .= '<button class="edit_btn_news btn btn-sm btn-outline-primary btn_edit"
                     ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $que->id .
                    '">' . __('delete') . '  </button>';
                return $string;
            })
            ->rawColumns(['action', 'status', 'view_main'])
            ->make(true);
    }


    public function destroy($id)
    {
        $news = News::destroy($id);
        return $this->sendResponse(null, null);
    }
    public function activate($id)
    {
        $news_activate =  news::findOrFail($id);
        $news_activate->status = !$news_activate->status;
        if (isset($news_activate) && $news_activate->save()) {
            return $this->sendResponse(null, __('item_edited'));
        }
    }
    public function activate_main($id)
    {
        $news_activate_main =  news::findOrFail($id);
        $news_activate_main->view_main = !$news_activate_main->view_main;
        if (isset($news_activate_main) && $news_activate_main->save()) {
            return $this->sendResponse(null, __('item_edited'));
        }
    }


    function update(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['title'] = 'required|string|max:150';
        $rules['slug'] = 'required|string|max:45';
        $rules['content'] = 'required|string';
        $rules['category_id'] = 'required|numeric|exists:categories,id';
        $messages = [
            'title.required' => 'عنوان الخبر مطلوب',
            'title.string' => ' عنوان الخبر  يجب أن يكون نص',
            'title.max' => '  عنوان الخبر يجب أن لا يتجاوز 150 حرفًا',
            'slug.required' => 'حقل الاسم المستعار مطلوب',
            'image.required' => 'صورة الخبر مطلوبة',
            'video.required_if' => 'يجب تحميل الفيديو في حالة   تفعيله.',
            'albom.required_if' => 'يجب تحميل البوم الصور في حالة   تفعيله.',
        ];
        $this->validate($request, $rules, $messages);
        $news =  news::findOrFail($request->id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        $news->slug = arabicSlug($request->slug);
        $news->view_main = isset($request->view_main) && ($request->view_main == 'on') ? 1 : 0;
        if ($news->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }
}
