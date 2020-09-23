<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Topic;
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
            try {
                $videoId = Youtube::parseVidFromURL($request->url_id);
            }catch (\Exception $exception)
            {
                Alert::warning('لا يبود انك قمت بارفاق رابط يوتيوب!');
                return redirect()->back()->withErrors($y);
            }

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


    public function active($id)
    {
        Trailer::query()->update(['is_published' => 0]);
        $trailer = Trailer::find($id);
        $trailer->is_published = 1;
        $trailer->save();
        Alert::success(__('تم التفعيل بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }


    public function getAllTrailers()
    {
        return view('dashboard.trailers.delete-trailer.index' , ['trailer' => Trailer::orderBy('id', 'DESC')->get()]);
    }

    public function search(Request $request)
    {
      $trailer =  Trailer::where('title' , 'LIKE' , '%'.$request->title.'%' )->get();
      if ($trailer->isEmpty())
      {
          Alert::warning('نأسف' ,'لا يوجد نتيجة شكراََ لك')->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
          return redirect()->back();
      }
        return view('web.search.index' , ['trailer' => $trailer]);
    }



    public function updateTrailerTitle(Request $request)
    {
            $request->validate([
                'title' => 'required'
            ]);

          $trailer = Trailer::find($request->id);
          $trailer->title = $request->title;
          $arabic_slug = ArabicSlug::SetTitle($request->title);

        if ($request->url_id) {
            try
            {
                $videoId = Youtube::parseVidFromURL($request->url_id);
                $trailer->url_id = $videoId;
                $trailer->type = 'y';
                $trailer->iframe = null;
            } catch (\Exception $exception)
            {
                Alert::warning('لا يبود انك قمت بارفاق رابط يوتيوب!');
                return redirect()->back();
            }

        }elseif ($request->podcast)
        {
            $trailer->iframe = $request->podcast;
            $trailer->url_id = null;
            $trailer->type = 'p';
        }
        elseif ($request->twitter)
        {
            $trailer->iframe = $request->twitter;
            $trailer->url_id = null;
            $trailer->type = 't';
        }
          $trailer->slug = $arabic_slug;

          $trailer->save();
        Alert::success(__('تم تحديث البينات بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');

        return redirect()->back();

    }

        public function updateTrailer(Request $request)
        {
            $request->validate([
                'desc' => 'required'
            ]);

            $trailer = Trailer::find($request->id);
            $trailer->desc = $request->desc;
            $trailer->save();
            Alert::success(__('تم تحديث الوصف بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();
        }

    public function updateTopic(Request $request)
    {
            $request->validate([
                'desc' => 'required'
            ]);

        try {
            $topic = Topic::where('trailer_id' , '=' , $request->id)->first();
            $topic->desc = $request->desc;
            $topic->save();
            Alert::success(__('تم تحديث الموضوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();
        }
        catch (\ErrorException $exception)
        {
            Topic::create(['desc' => $request->desc , 'trailer_id' => $request->id]);
            Alert::success(__('تم تحديث الموضوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();
        }

    }
}
