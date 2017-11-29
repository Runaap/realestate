<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projectstatus;

class ProjectStatusController extends Controller
{
    public function index(){
        return view('admin.projectstatus.create');
    }
    public function createProjectStatus(Request $request){
        $this->validate($request,[
            'projectstatus_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'publication_status'=>'required'
        ]);
        $projectStatus = new Projectstatus();
        $projectStatus->projectstatus_name = $request->projectstatus_name;
        $projectStatus->publication_status = $request->publication_status;
        $projectStatus->save();

        return redirect('/add-project-status')->with('message','Information Save successfully');

    }

    public function mamnageProjectStatus(){
        $getStatus = Projectstatus::all();
        return view('admin.projectstatus.manage',['getStatus'=>$getStatus]);
    }

    public function statusUnpublished($id){
        $changeStatusById = Projectstatus::find($id);
        $changeStatusById->publication_status = 0;
        $changeStatusById->save();
        return redirect('/manage-project-status')->with('message','Information Unpublished successfully');

    }

    public function statusPublished($id){
        $changeStatusById = Projectstatus::find($id);
        $changeStatusById->publication_status = 1;
        $changeStatusById->save();
        return redirect('/manage-project-status')->with('message','Information Published successfully');

    }

    public function editProjectStatus($id){
//       when id is unique then use find other wise where
        $proStatusById = Projectstatus::find($id);
        return view('admin.projectstatus.edit',['proStatusById'=>$proStatusById]);

    }

    public function updateProjectStatus(Request $request){
        $projectStatus = Projectstatus::find($request->project_status_id);
        $projectStatus->projectstatus_name = $request->projectstatus_name;
        $projectStatus->publication_status = $request->publication_status;
        $projectStatus->save();

        return redirect('/manage-project-status')->with('message','Information Update successfully');

    }

    public function deleteStatusInfo($id){
        $typeyById = Projectstatus::find($id);
        $typeyById->delete();
        return redirect('/manage-project-status')->with('message','Information Delete successfully');
    }
}
