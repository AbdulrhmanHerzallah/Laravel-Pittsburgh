<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Trailer;

class TwitterController extends Controller
{
    public function index()
    {
        $iframe = Trailer::where('type' , '=' , 't')->orderBy('id' , 'DESC')->paginate(4);
        return view('web.spotify.index' , ['iframe' => $iframe]);
    }
}
