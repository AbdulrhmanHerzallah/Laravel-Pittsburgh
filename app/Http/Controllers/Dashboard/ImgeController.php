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

        foreach ($request->file('img') as $i)
        {
            $fileName = Carbon::now()->timestamp.'_'.$i->getClientOriginalName();
            $i->move(public_path('img') , $fileName);
            Image::create(['img' => '/img/'.$fileName , 'trailer_id' => $request->trailer_id]);
        }
        return redirect('/admin');
    }
}
