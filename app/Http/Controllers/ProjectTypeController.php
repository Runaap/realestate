<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projecttype;

class ProjectTypeController extends Controller
{
    public function index(){
        return view('admin.projecttype.create');
    }
    public function createProjectType(Request $request){
        $this->validate($request,[
            'type_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'publication_status'=>'required'
        ]);
        $projectType = new Projecttype();
        $projectType->type_name = $request->type_name;
        $projectType->publication_status = $request->publication_status;
        $projectType->save();

        return redirect('/add-project-type')->with('message','Information Save successfully');

    }

    public function manageProjectType(){
        $getTypes = Projecttype::all();
        return view('admin.projecttype.manage',['getTypes'=>$getTypes]);
    }

    public function statusUnpublished($id){
        $changeStatusById = Projecttype::find($id);
        $changeStatusById->publication_status = 0;
        $changeStatusById->save();
        return redirect('/manage-project-type')->with('message','Information Unpublished successfully');

    }

    public function statusPublished($id){
        $changeStatusById = Projecttype::find($id);
        $changeStatusById->publication_status = 1;
        $changeStatusById->save();
        return redirect('/manage-project-type')->with('message','Information Published successfully');

    }

    public function editProjectType($id){
//       when id is unique then use find other wise where
        $typeyById = Projecttype::find($id);
        return view('admin.projecttype.edit',['typeyById'=>$typeyById]);

    }

    public function updateProjectType(Request $request){
        $projectType = Projecttype::find($request->type_id);
        $projectType->type_name = $request->type_name;
        $projectType->publication_status = $request->publication_status;
        $projectType->save();
        return redirect('/manage-project-type')->with('message','Information Update successfully');

    }

    public function deleteTypeInfo($id){
        $typeyById = Projecttype::find($id);
        $typeyById->delete();
        return redirect('/manage-project-type')->with('message','Information Delete successfully');
    }
}
