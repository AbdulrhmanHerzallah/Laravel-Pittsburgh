<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Trailer;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function index()
    {
        $iframe = Trailer::where('type' , '=' , 'p')->paginate(4);
        return view('web.spotify.index' , ['iframe' => $iframe]);
    }
}
