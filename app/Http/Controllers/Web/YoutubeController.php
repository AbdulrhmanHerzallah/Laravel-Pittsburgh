<?php

namespace App\Http\Controllers\Web;

use Youtube;
use App\Http\Controllers\Controller;
use App\Models\Trailer;
use App\Models\Iframe;
use Illuminate\Http\Request;



class YoutubeController extends Controller
{
    public function index()
    {
        $iframe = Trailer::where('type' , '=' , 'y')->paginate(4);
        return view('web.youtube.index' , ['iframe' => $iframe]);
    }
}
