<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class ImgeController extends Controller
{
    public function create($trailer_id)
    {
      return view('dashboard.img.create' , ['trailer_id' => $trailer_id]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'img.*' => 'required|image'
        ]);

        try {
            foreach ($request->file('img') as $i)
            {
                $fileName = Carbon::now()->timestamp.'_'.$i->getClientOriginalName();
                $i->move(public_path('img') , $fileName);
                Image::create(['img' => '/img/'.$fileName , 'trailer_id' => $request->trailer_id]);
            }
        }catch (\ErrorException $exception)
        {
            Alert::warning('لم تقم بارفاق صور!');
            return redirect()->back();
        }

        Alert::success('تم ارفاق الصور بنجاح !');
        return redirect('/admin');
    }
}
