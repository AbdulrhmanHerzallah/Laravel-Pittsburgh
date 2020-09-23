<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Success;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\VolunteerRequest;

class SuccessController extends Controller
{
    public function create()
    {
        return view('dashboard.success.create' , ['success' => Success::orderBy('updated_at', 'DESC')->get()]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('img_url')){

            $timestamp = Carbon::now()->timestamp;
            $fileName =  $request->file('img_url')->getClientOriginalName();
            $path = '/volunteers/'.$timestamp.'_'.$fileName;
            Image::make($request->file('img_url')->path())
                ->resize(320, 320)
                ->save(public_path($path));

            Success::create(array_merge($request->except('img_url') , ['img_url' => $path]));
            Alert::success(__('تم اضافة الشريك بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();

        }
        else{
            Alert::error(__('لم تقم برفع صورة!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();

        }
    }


    public function destroy($id)
    {
        Success::find($id)->delete();
        Alert::success(__('تم حذف الشريك بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }


    public function update($id , Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        Success::find($id)->update($request->except(['__token']));
        Alert::success(__('تم تحديث الشريك بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }

    public function sort($id)
    {
        $vol = Success::find($id);
        $vol->touch();
        Alert::success(__('تم وضع الشريك في المقدمة!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }

}
