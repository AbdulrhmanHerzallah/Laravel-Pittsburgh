<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\LandingPageSlider;

class SliderController extends Controller
{
    public function create()
    {
        return view('dashboard.slider.create');
    }



    public function store(Request $request)
    {
        if ($request->hasFile('img'))
        {

            $timestamp = Carbon::now()->timestamp;
            $file_name = $request->file('img')->getClientOriginalName();

            $request->file('img')->move(public_path('img_slider') , $timestamp.'_'.$file_name);

            $slider = new LandingPageSlider();
            $slider->title = $request->title;
            $slider->desc = $request->desc;
            $slider->img_url = '/img_slider/'.$timestamp.'_'.$file_name;
            $slider->save();

        }
    }


}
