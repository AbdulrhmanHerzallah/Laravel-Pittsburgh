<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trailer;
use Alaouy\Youtube\Facades\Youtube;
use App\Helpers\ArabicSlug;
//use Illuminate\Support\Facades\DB;


class TrailerController extends Controller
{
    public function create()
    {
        return view('dashboard.trailers.create');
    }



    public function store(Request $request)
    {


        Trailer::query()->update(['is_published' => 0]);

        $arabic_slug = ArabicSlug::SetTitle($request->title);

        if ($request->type == 'y')
        {
            $videoId = Youtube::parseVidFromURL($request->url_id);
        }

        $trailer = Trailer::create(array_merge($request->except(['url_id' , 'title_slug']) , ['is_published' => 1 , 'url_id' => $videoId , 'slug' => $arabic_slug]));

        return redirect()->route('dashboard.topic.create' , ['trailer_id' => $trailer->id]);

    }
}
