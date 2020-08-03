<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Youtube;
use Spotify;


class TestController extends Controller
{
    public function index()
    {


        dd(Spotify::artistAlbums('7KlNEuybtcs1QsRVT3Fi59')->country('US')->get());

//        ;  strstr
      dd(Youtube::getVideoInfo('tgVTDIKaiEk'));



    }
}
