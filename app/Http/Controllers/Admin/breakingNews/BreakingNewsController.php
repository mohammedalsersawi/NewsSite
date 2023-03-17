<?php

namespace App\Http\Controllers\Admin\breakingNews;

use App\Models\BreakingNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ResponseTrait;
use Yajra\DataTables\Facades\DataTables;

class BreakingNewsController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $status =  BreakingNews::STATUS;
        return view('admin.page.breakingNews.index' ,compact('status'));
    }


    public function store(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['title'] = 'required|string|max:200';
        $messages = [
            'title.required' => 'عنوان الخبر مطلوب',
            'title.string' => ' عنوان الخبر  يجب أن يكون نص',
            'title.max' => '  عنوان الخبر يجب أن لا يتجاوز 200 حرفًا',
        ];
        $this->validate($request, $rules, $messages);
        $breaking_news = new BreakingNews();
        $breaking_news->title = $request->title;
        $breaking_news->status = isset($request->status) && ($request->status == 'on') ? 1 : 0;
        if ($breaking_news->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }

    public function getData(Request $request)
    {
        $breaking_news = BreakingNews::query();
        return Datatables::of($breaking_news)
            ->filter(function ($query) use ($request) {
                if ($request->get('status') !== null) {
                    $query->where('status', '=', $request->get('status'));
                }
            })
            ->addIndexColumn()
            ->addColumn('status', function ($item) {
                return '
            <input class="activate-breaking activate-category" id="' . $item->id . '"
             type="checkbox" id="checkbox"
            ' . ($item->status ? 'checked' : '') . '>
            <label for="checkbox"><span class="checkbox-icon"></span> </label>';
            })
            ->addColumn('title', function ($item) {
            return $item->title;
            })
            ->addColumn('action', function ($que) {
                $data_attr = '';
                $data_attr .= 'data-id="' . @$que->id . '" ';
                $data_attr .= 'data-status="' . @$que->status . '" ';
                $string = '';
                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-toggle="modal"
                    data-target="#edit_modal" ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $que->id .
                    '">' . __('delete') . '  </button>';
                return $string;
            })
            ->rawColumns(['action', 'status' , 'title'])
            ->make(true);
    }

    function update(Request $request)
    {
        $rules = [];
        $messages = [];
        $rules['title'] = 'required|string|max:200';
        $messages = [
            'title.required' => 'عنوان الخبر مطلوب',
            'title.string' => ' عنوان الخبر  يجب أن يكون نص',
            'title.max' => '  عنوان الخبر يجب أن لا يتجاوز 200 حرفًا',
        ];
        $this->validate($request, $rules, $messages);
        $breaking_news =  BreakingNews::findOrFail($request->id);
        $breaking_news->title = $request->title;
        $breaking_news->status = isset($request->status) && ($request->status == 'on') ? 1 : 0;
        if ($breaking_news->save()) {
            return $this->sendResponse(null, __('item_added'));
        }
    }

    public function destroy($id)
    {
        $breaking_news = BreakingNews::destroy($id);
        return $this->sendResponse(null, null);
    }
    public function edit(Request $request)
    {
        $breaking_news =  BreakingNews::findOrFail($request->id);
        return $this->sendResponse($breaking_news, null );

    }
    public function activate($id)
    {
        $breaking_news =  BreakingNews::findOrFail($id);
        $breaking_news->status = !$breaking_news->status;
        if (isset($breaking_news) && $breaking_news->save()) {
            return $this->sendResponse(null, __('item_edited'));
        }
    }
}
