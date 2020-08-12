<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Trailer;
use Illuminate\Http\Request;
use App\Helpers\ArabicSlug;


class TopicController extends Controller
{
    public function index($slug)
    {
        $trailer = Trailer::where('title_slug' , '=' , $slug)->first();
        $topic   = $trailer->topic;


        if ($topic == null)
        {
            return view('errors.empty_topic');
        }




        return view('web.topics.index' , ['trailer' => $trailer , 'topic' => $topic]);
    }
}
