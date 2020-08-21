<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Iframe;
use Alaouy\Youtube\Facades\Youtube;
use RealRashid\SweetAlert\Facades\Alert;



class IframeController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.topics.topic-iframe.create' , ['trailer_id' => $trailer_id]);
    }


    public function store(Request $request)
    {

        if ($request->re_submit == 're')
        {
            if ($request->type == 'y')
            {
                try
                {
                    $videoId = Youtube::parseVidFromURL($request->url_id);
                }
                catch (\ErrorException $exception)
                {
                    return redirect()->back();
                }
            }
            Iframe::create(array_merge($request->except(['url_id' , 're_submit']) , ['url_id' => $videoId ?? null]));
            return redirect()->back();
        }

      if ($request->type == 'y')
        {
       try
        {
         $videoId = Youtube::parseVidFromURL($request->url_id);
        }
        catch (\ErrorException $exception)
         {
                return redirect()->back();
         }
        }

        Iframe::create(array_merge($request->except(['url_id' , 're_submit']) , ['url_id' => $videoId ?? null]));
        return redirect()->route('dashboard.gestes.create' , ['trailer_id' => $request->trailer_id]);
    }


}
