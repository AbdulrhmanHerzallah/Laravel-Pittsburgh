<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\SliderRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\LandingPageSlider;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class SliderController extends Controller
{
    public function create()
    {

       $slider = LandingPageSlider::all();
       return view('dashboard.slider.create' , ['slider' => $slider]);
    }



    public function store(SliderRequest $request)
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
            Alert::success(__('dashboard_layout.insert_img_successful'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();
        }
    }





    public function delete(Request $request)
    {

       $file  = LandingPageSlider::findOrFail($request->id);

        if(File::exists(public_path($file->img_url))) {
            File::delete(public_path($file->img_url));
        }
        LandingPageSlider::findOrFail($request->id)->delete();
        Alert::success(__('dashboard_layout.deletion_successful'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }



    public function update(Request $request)
    {
      $slide =  LandingPageSlider::find($request->id);
      $slide->title = $request->title;
      $slide->desc = $request->desc;
      $slide->save();
        Alert::success(__('تم التحديث بنجاح'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();

    }


}
