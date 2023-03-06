<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Admin\ResponseTrait;

class CategoryController extends Controller
{
    use ResponseTrait;
    public function index()
    {

        return view('admin.page.category.index');
    }


    function store(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['name'] = 'required|string|max:45';
        $rules['slug'] = 'required|string|max:45';
        $messages = [
            'name.required' => 'اسم التصنيف مطلوب',
            'name.string' => ' اسم التصنيف يجب أن يكون نص',
            'name.max' => ' اسم التصنيف يجب أن لا يتجاوز 45 حرفًا',
            'slug.required' => 'حقل الاسم المستعار مطلوب',
            'slug.string' => 'حقل الاسم المستعار يجب أن يكون نص',
            'slug.max' => 'حقل الاسم المستعار يجب أن لا يتجاوز 45 حرفًا',
        ];
        $this->validate($request, $rules, $messages);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = arabicSlug($request->slug);
        $category->status = isset($request->status) && ($request->status == 'on') ? 1 : 0;
        if ($category->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }
    function update(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['name'] = 'required|string|max:45';
        $rules['slug'] = 'required|string|max:45';
        $messages = [
            'name.required' => 'اسم التصنيف مطلوب',
            'name.string' => ' اسم التصنيف يجب أن يكون نص',
            'name.max' => ' اسم التصنيف يجب أن لا يتجاوز 45 حرفًا',
            'slug.required' => 'حقل الاسم المستعار مطلوب',
            'slug.string' => 'حقل الاسم المستعار يجب أن يكون نص',
            'slug.max' => 'حقل الاسم المستعار يجب أن لا يتجاوز 45 حرفًا',
        ];
        $this->validate($request, $rules, $messages);
        $category =  Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->slug = arabicSlug($request->slug);
        $category->status = isset($request->status) && ($request->status == 'on') ? 1 : 0;
        if ($category->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }


    public function getData(Request $request)
    {
        $category = Category::query();

        return Datatables::of($category)
            // ->filter(function ($query) use ($request) {
            //     if ($request->get('status')) {
            //         $query->where('status', $request->status);
            //     }
            // })
            ->addIndexColumn()
            ->addColumn('status', function ($item) {
                return '
            <input class="activate-staticPage activate-category" category_id="'.$item->id.'"
             type="checkbox" id="checkbox"
            ' . ($item->status ? 'checked' : '') . '>
            <label for="checkbox"><span class="checkbox-icon"></span> </label>';
            })
            ->addColumn('action', function ($que) {
                $data_attr = '';
                $data_attr .= 'data-id="' . @$que->id . '" ';
                $data_attr .= 'data-name="' . @$que->name . '" ';
                $data_attr .= 'data-slug="' . @$que->slug . '" ';
                $data_attr .= 'data-status="' . @$que->status . '" ';
                $string = '';
                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-toggle="modal"
                    data-target="#edit_modal" ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $que->id .
                    '">' . __('delete') . '  </button>';
                return $string;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }


    public function destroy($id)
    {
        $category = Category::destroy($id);
        return $this->sendResponse(null, null);
    }
    public function activate($id)
    {
        $category_activate =  Category::findOrFail($id);
        $category_activate->status = !$category_activate->status;
        if (isset($category_activate) && $category_activate->save()){
            return $this->sendResponse(null, __('item_edited'));

        }
    }
}
