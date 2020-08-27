<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LandingPageContent;
use Illuminate\Support\Facades\File;
use App\Models\Title;

class PageContentController extends Controller
{
    public function create()
    {

        $data = LandingPageContent::first();
        $title = Title::first();
        return view('dashboard.page-content.create' , ['data' => $data , 'title' => $title]);
    }



    public function store(Request $request)
    {

        if($request->hasFile('img_parallax'))
        {
            if(File::exists(public_path(LandingPageContent::first()->img_parallax ?? null))) {
                File::delete(public_path(LandingPageContent::first()->img_parallax ?? null));
                $timestamp = Carbon::now()->timestamp;
                $file_name = $request->file('img_parallax')->getClientOriginalName();
                $request->file('img_parallax')->move(public_path('img_parallax_bg') , $timestamp.'_'.$file_name);
                $file_path = '/img_parallax_bg/'.$timestamp.'_'.$file_name;
            }

        }
        else {
            $file_path = LandingPageContent::first()->img_parallax;
        }

        LandingPageContent::updateOrCreate([
            'id' => LandingPageContent::first()->id ?? 1
        ]
        ,
            array_merge($request->all() , ['img_parallax' => $file_path])
        );
    }




}
