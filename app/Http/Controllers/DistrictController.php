<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;


class DistrictController extends Controller
{
    public function index(){
        return view('admin.district.create');
    }
    public function createDistrict(Request $request){
        $this->validate($request,[
            'district_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'publication_status'=>'required'
        ]);
        $district = new District();
        $district->district_name = $request->district_name;
        $district->publication_status = $request->publication_status;
        $district->save();

        return redirect('/add-district')->with('message','Information Save successfully');

    }

    public function manageDistrict(){
        $getDistricts = District::all();
        return view('admin.district.manage',['getDistricts'=>$getDistricts]);
    }

    public function statusUnpublished($id){
        $changeStatusById = District::find($id);
        $changeStatusById->publication_status = 0;
        $changeStatusById->save();
        return redirect('/manage-district')->with('message','Information Unpublished successfully');

    }

    public function statusPublished($id){
        $changeStatusById = District::find($id);
        $changeStatusById->publication_status = 1;
        $changeStatusById->save();
        return redirect('/manage-district')->with('message','Information Published successfully');

    }

    public function editDistrict($id){
//       when id is unique then use find other wise where
        $getDistrictById = District::find($id);
        return view('admin.district.edit',['getDistrictById'=>$getDistrictById]);

    }

    public function updateDistrict(Request $request){
        $district = District::find($request->district_id);
        $district->district_name = $request->district_name;
        $district->publication_status = $request->publication_status;
        $district->save();
        return redirect('/manage-district')->with('message','Information Update successfully');

    }

    public function deleteDistrict($id){
        $getDistrictById = District::find($id);
        $getDistrictById->delete();
        return redirect('/manage-district')->with('message','Information Delete successfully');
    }
}
