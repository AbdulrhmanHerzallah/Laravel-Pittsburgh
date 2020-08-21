<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trailer;
use Alaouy\Youtube\Facades\Youtube;
use App\Helpers\ArabicSlug;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;



class TrailerController extends Controller
{
    public function create()
    {
        return view('dashboard.trailers.create');
    }



    public function store(Request $request)
    {

        if ($request->type == 'y')
        {
            $y = $request->validate([
                'title' => 'required|max:255|unique:trailers,title',
                'url_id' => 'required|max:100|url',
                'desc' => 'required',
            ]);
        }
        elseif($request->type == 'p' || $request->type == 't')
        {
            $iframe = $request->validate([
                'title' => 'required|max:255|unique:trailers,title',
                'iframe' => 'required',
                'desc' => 'required',
            ]);
        }



        Trailer::query()->update(['is_published' => 0]);

        $arabic_slug = ArabicSlug::SetTitle($request->title);

        if ($request->type == 'y')
        {
            $videoId = Youtube::parseVidFromURL($request->url_id);
        }

        $trailer = Trailer::create(array_merge($request->except(['url_id' , 'title_slug']) , ['is_published' => 1 , 'url_id' => $videoId ?? null , 'slug' => $arabic_slug]));

        return redirect()->route('dashboard.topic.create' , ['trailer_id' => $trailer->id]);

    }


    public function delete($id)
    {
        Trailer::find($id)->delete();
        Alert::success(__('الحذف بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }


    public function getAllTrailers()
    {
        return view('dashboard.trailers.delete-trailer.index' , ['trailer' => Trailer::all()]);
    }

    public function search(Request $request)
    {
      $trailer =  Trailer::where('title' , 'LIKE' , '%'.$request->title.'%' )->get();
      if ($trailer->isEmpty())
      {
          return redirect()->back();
      }
        return view('web.search.index' , ['trailer' => $trailer]);
    }



}
