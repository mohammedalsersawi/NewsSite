<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Admin\ResponseTrait;

class PostController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $category = Category::all();
        return view('admin.page.post.index', compact('category'));
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
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = arabicSlug($request->slug);
        $post->view_main = isset($request->view_main) && ($request->view_main == 'on') ? 1 : 0;
        if ($post->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }

    public function getData(Request $request)
    {
        $post = Post::query();

        return Datatables::of($post)
            // ->filter(function ($query) use ($request) {
            //     if ($request->get('status')) {
            //         $query->where('status', $request->status);
            //     }
            // })
            ->addIndexColumn()
            ->addColumn('status', function ($item) {
                return '
            <input class="activate-post" post-id="' . $item->id . '"
             type="checkbox" id="checkbox"
            ' . ($item->status ? 'checked' : '') . '>
            <label for="checkbox"><span class="checkbox-icon"></span> </label>';
            })
            ->addColumn('view_main', function ($item) {
                return '
            <input class="activatePostMain" post-id="' . $item->id . '"
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
                $string .= '<button class="edit_btn_post btn btn-sm btn-outline-primary btn_edit"
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
        $post = Post::destroy($id);
        return $this->sendResponse(null, null);
    }
    public function activate($id)
    {
        $post_activate =  Post::findOrFail($id);
        $post_activate->status = !$post_activate->status;
        if (isset($post_activate) && $post_activate->save()) {
            return $this->sendResponse(null, __('item_edited'));
        }
    }
    public function activate_main($id)
    {
        $post_activate_main =  Post::findOrFail($id);
        $post_activate_main->view_main = !$post_activate_main->view_main;
        if (isset($post_activate_main) && $post_activate_main->save()) {
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
        $post =  Post::findOrFail($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = arabicSlug($request->slug);
        $post->view_main = isset($request->view_main) && ($request->view_main == 'on') ? 1 : 0;
        if ($post->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }
}
