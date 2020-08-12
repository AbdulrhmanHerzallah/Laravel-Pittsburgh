<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Iframe;
use Alaouy\Youtube\Facades\Youtube;


class IframeController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.topics.topic-iframe.create' , ['trailer_id' => $trailer_id]);
    }


    public function store(Request $request)
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

        Iframe::create(array_merge($request->except(['url_id']) , ['url_id' => $videoId]));
        return redirect()->route('dashboard.gestes.create' , ['trailer_id' => $request->trailer_id]);
    }


}
