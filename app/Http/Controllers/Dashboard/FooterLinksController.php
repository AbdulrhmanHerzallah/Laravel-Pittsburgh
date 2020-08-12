<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FooterSocialLinks;
use RealRashid\SweetAlert\Facades\Alert;


class FooterLinksController extends Controller
{
    public function create()
    {
       $footerLinks = FooterSocialLinks::all();
       return view('dashboard.footer.create'  , compact('footerLinks'));
    }



    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'type' => 'required',
            'icon' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);

      $check = FooterSocialLinks::where('type' , '=' , $request->type)->first();
      if (!$check)
      {
        FooterSocialLinks::create($request->all());
        alert()->success('تم إضافة الرابط بنجاح');
        return redirect()->back();
      }
      else
     {
       FooterSocialLinks::whereId($check->id)->update($request->except('_token'));
       alert()->success('تم التحديث بنجاح');
       return redirect()->back();
     }

    }

    public function delete($id)
    {
        FooterSocialLinks::findOrFail($id)->delete();
        alert()->success('تم الحذف بنجاح');
        return redirect()->back();
    }

}
