<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use Alaouy\Youtube\Facades\Youtube;
use Whoops\Exception\ErrorException;
use App\Models\Trailer;


class TopicController extends Controller
{
    public function create($trailer_id)
    {

      $trailer =  Trailer::find($trailer_id);

        return view('dashboard.topics.create' , ['trailer_id' => $trailer_id , 'title' => $trailer->title]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required'
        ]);

       Topic::create($request->all());
        return redirect()->route('dashboard.iframe.create' , ['trailer_id' => $request->trailer_id]);
    }


}
