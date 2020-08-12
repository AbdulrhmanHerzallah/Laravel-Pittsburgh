<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LandingPageVolunteer;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class VolunteerController extends Controller
{
    public function create()
    {
        return view('dashboard.volunteer.create');
    }


    public function store(Request $request)
    {


        if ($request->hasFile('img')){

            $timestamp = Carbon::now()->timestamp;
            $fileName =  $request->file('img')->getClientOriginalName();
            $path = '/volunteers/'.$timestamp.'_'.$fileName;
            Image::make($request->file('img')->path())
                ->resize(320, 320)
                ->save(public_path($path));

            LandingPageVolunteer::create(array_merge($request->except('img') , ['img_url' => $path]));

        }
    }

}
