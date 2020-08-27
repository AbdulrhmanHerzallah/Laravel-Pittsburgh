<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Title;
use App\Http\Requests\TitleRequest;
use RealRashid\SweetAlert\Facades\Alert;

class TitleController extends Controller
{
    public function create()
    {
        $title = Title::all()->first();
        return view('dashboard.title.create' ,  ['title' => $title]);
    }


    public function store(TitleRequest $request)
    {

        Title::updateOrCreate([
                'id' => Title::first()->id ?? 1
            ]
            ,
            array_merge($request->all())
        );
        Alert::success(__('تم انشاء العنوين الجديدة بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');

        return redirect()->back();

    }
}
