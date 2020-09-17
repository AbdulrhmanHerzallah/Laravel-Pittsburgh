<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LandingPageVolunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\GesteModel;
use App\Http\Requests\GesteRequest;
use Intervention\Image\Facades\Image;

class GuestController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.guests.create', ['trailer_id' => $trailer_id]);
    }

//GesteRequest
    public function store(GesteRequest $request)
    {

        foreach ($request->name as $index => $item) {
            if ($request->hasFile('file.' . $index)) {

                $timestamp = Carbon::now()->timestamp;
                $fileName = $request->file('file.'.$index)->getClientOriginalName();
                $path = '/guests/'.$timestamp.'_'.$fileName;
                Image::make($request->file('file.'.$index)->path())
                    ->resize(400, 400 , function ($constraint){
                        $constraint->aspectRatio();
                    })
                    ->save(public_path($path));

            }
            GesteModel::create
          ([
            'name' => $item,
            'twitter' => $request->twitter[$index],
            'facebook' => $request->facebook[$index],
            'instagram'=> $request->instagram[$index],
            'snapchat' => $request->snapchat[$index],
            'desc' => $request->desc[$index],
            'web' => $request->web[$index],
            'trailer_id' => $request->trailer_id,
            'main' => $request->main[$index] ?? 0,
            'img_url' => $path ?? null
          ]);

        }
        return redirect()->route('dashboard.trailerLinks.create' , ['trailer_id' => $request->trailer_id]);
    }
}
