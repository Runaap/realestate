<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;
use App\Area;
use DB;

class AreaController extends Controller
{
    public function index(){
        $districts = District::where('publication_status', 1)->get();
        return view('admin.area.create',[
            'districts'=>$districts
        ]);
    }
    public function saveArea(Request $request){
        $this->validate($request,[
            'district_id'=>'required',
            'area_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'publication_status'=>'required'
        ]);
        $area = new Area();
        $area->district_id = $request->district_id;
        $area->area_name = $request->area_name;
        $area->publication_status = $request->publication_status;
        $area->save();

        return redirect('/add-area')->with('message','Information Save successfully');

    }

    public function manageArea(){
        $getAreas = DB::table('areas')
            ->join('districts','areas.district_id','=','districts.id')
            ->select('areas.*','districts.district_name')
            ->get();
        return view('admin.area.manage',['getAreas'=>$getAreas]);
    }

    public function statusUnpublished($id){
        $changeStatusById = Area::find($id);
        $changeStatusById->publication_status = 0;
        $changeStatusById->save();
        return redirect('/manage-area')->with('message','Information Unpublished successfully');

    }

    public function statusPublished($id){
        $changeStatusById = Area::find($id);
        $changeStatusById->publication_status = 1;
        $changeStatusById->save();
        return redirect('/manage-area')->with('message','Information Published successfully');

    }

    public function editArea($id){
        $getAreaById = Area::find($id);
        $districts = District::where('publication_status', 1)->get();

        return view('admin.area.edit',[
            'getAreaById'=>$getAreaById,
            'districts'=>$districts
        ]);

    }

    public function updateArea(Request $request){
        $area = Area::find($request->area_id);
        $area->district_id = $request->district_id;
        $area->area_name = $request->area_name;
        $area->publication_status = $request->publication_status;
        $area->save();
        return redirect('/manage-area')->with('message','Information Update successfully');

    }

    public function deleteArea($id){
        $getAreaById = Area::find($id);
        $getAreaById->delete();
        return redirect('/manage-area')->with('message','Information Delete successfully');
    }
}
