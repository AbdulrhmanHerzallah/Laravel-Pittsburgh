<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class GuideController extends Controller
{
    public function create()
    {
        return view('dashboard.guide.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg|max:2000',
            'file' => 'required|mimes:pdf,doc',
            'title' => 'required',
            'download_word' => 'required',
            'desc' => 'required',
        ]);


        if ($request->has('img') && $request->has('file'))
        {
            $img_name = Carbon::now()->timestamp.'_'.$request->file('img')->getClientOriginalName();
            $file_name = Carbon::now()->timestamp.'_'.$request->file('file')->getClientOriginalName();

            $img = $request->file('img')->move(public_path('img') , $img_name);
            $file = $request->file('file')->move(public_path('file') , $file_name);
            Alert::success('تم اضافة المرفقات بنجاح');
            Guide::create(array_merge($request->except(['file' , 'img']) , ['img' => '/img/'.$img_name , 'file' => '/file/'.$file_name]) );
            return redirect()->back();
        }
    }







}
