<?php

namespace App\Http\Controllers;

use App\Area;
use App\Project;
use App\Projectstatus;
use App\Projecttype;
use Illuminate\Http\Request;
use App\District;
use DB;
use Image;

class ProjectController extends Controller
{
    public function index(){
        $projectType = Projecttype::where('publication_status', 1)->get();
        $projectStatus = Projectstatus::where('publication_status', 1)->get();
        $districts = District::where('publication_status', 1)->get();
        $areas = Area::where('publication_status', 1)->get();

        return view('admin.project.create',[
            'projectType'=>$projectType,
            'projectStatus'=>$projectStatus,
            'districts'=>$districts,
            'areas'=>$areas
        ]);
    }


//    public function myformAjax($id)
//    {
//        $areas = DB::table("areas")
//            ->where("district_id",$id)
//            ->lists("area_name","id");
//        return json_encode($areas);
//    }

    public function createProjectInfo(Request $request){
        $this->validate($request,[
            'project_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'type_id'=>'required',
            'project_status_id'=>'required',
            'district_id'=>'required',
            'area_id'=>'required',
            'project_description'=>'required',
            'squre_fit'=>'required',
            'floor'=>'required',
            'bed_no'=>'required',
            'bath_no'=>'required',
            'parking_no'=>'required',
            'image'=>'required',
            'publication_status'=>'required'
        ]);

        $projectImage = $request->file('image');
        $imageName = $projectImage->getClientOriginalName();
        $directory ='project-image/';
        $imgUrl = $directory.$imageName;
        Image::make($projectImage)->resize(640,360)->save($imgUrl);

        $project = new Project();
        $project->project_name = $request->project_name;
        $project->type_id = $request->type_id;
        $project->project_status_id = $request->project_status_id;
        $project->district_id = $request->district_id;
        $project->area_id = $request->area_id;
        $project->project_description = $request->project_description;
        $project->squre_fit = $request->squre_fit;
        $project->floor = $request->floor;
        $project->bed_no = $request->bed_no;
        $project->bath_no = $request->bath_no;
        $project->parking_no = $request->parking_no;
        $project->image = $imgUrl;
        $project->publication_status = $request->publication_status;
        $project->save();

        return redirect('/add-project')->with('message','Information Save successfully');

    }

    public function manageProjectInfo(){
        $getProjects = DB::table('projects')
            ->join('projecttypes','projects.type_id','=','projecttypes.id')
            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
            ->join('districts','projects.district_id','=','districts.id')
            ->join('areas','projects.area_id','=','areas.id')
            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
            ->get();

        return view('admin.project.manage',['getProjects'=>$getProjects]);
    }

    public function statusUnpublished($id){
        $changeStatusById = Project::find($id);
        $changeStatusById->publication_status = 0;
        $changeStatusById->save();
        return redirect('/manage-project')->with('message','Information Unpublished successfully');

    }

    public function statusPublished($id){
        $changeStatusById = Project::find($id);
        $changeStatusById->publication_status = 1;
        $changeStatusById->save();
        return redirect('/manage-project')->with('message','Information Published successfully');

    }

    public function viewProjectById($id){
        $getProject = DB::table('projects')
            ->join('projecttypes','projects.type_id','=','projecttypes.id')
            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
            ->join('districts','projects.district_id','=','districts.id')
            ->join('areas','projects.area_id','=','areas.id')
            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
            ->where('projects.id',$id)
            ->first();
        return view('admin.project.view',['getProject'=>$getProject]);

    }

    public function editProjectInfo($id){
        $projectById = Project::find($id);
        $projectType = Projecttype::where('publication_status', 1)->get();
        $projectStatus = Projectstatus::where('publication_status', 1)->get();
        $districts = District::where('publication_status', 1)->get();
        $areas = Area::where('publication_status', 1)->get();

        return view('admin.project.edit',[
            'projectById'=>$projectById,
            'projectType'=>$projectType,
            'projectStatus'=>$projectStatus,
            'districts'=>$districts,
            'areas'=>$areas
        ]);

    }

    public function updateProjectInfo(Request $request){
        $projectImage = $request->file('image');
        if($projectImage){
            $project = Project::find($request->project_id);
            unlink($project->image);

            $projectImage = $request->file('image');
            $imageName = $projectImage->getClientOriginalName();
            $directory ='project-image/';
            $imgUrl=$directory.$imageName;
            Image::make($projectImage)->resize(640,360)->save($imgUrl);

            $project->project_name = $request->project_name;
            $project->type_id = $request->type_id;
            $project->project_status_id = $request->project_status_id;
            $project->district_id = $request->district_id;
            $project->area_id = $request->area_id;
            $project->project_description = $request->project_description;
            $project->squre_fit = $request->squre_fit;
            $project->floor = $request->floor;
            $project->bed_no = $request->bed_no;
            $project->bath_no = $request->bath_no;
            $project->parking_no = $request->parking_no;
            $project->image = $imgUrl;
            $project->publication_status = $request->publication_status;
            $project->save();

        }else{
            $project = Project::find($request->project_id);
            $project->project_name = $request->project_name;
            $project->type_id = $request->type_id;
            $project->project_status_id = $request->project_status_id;
            $project->district_id = $request->district_id;
            $project->area_id = $request->area_id;
            $project->project_description = $request->project_description;
            $project->squre_fit = $request->squre_fit;
            $project->floor = $request->floor;
            $project->bed_no = $request->bed_no;
            $project->bath_no = $request->bath_no;
            $project->parking_no = $request->parking_no;
            $project->publication_status = $request->publication_status;
            $project->save();

        }
        return redirect('/manage-project')->with('message','Information Update successfully');

    }

    public function deleteProjectInfo($id){
        $project = Project::find($id);
        unlink($project->image);
        $project->delete();
        return redirect('/manage-project')->with('message','Information Delete successfully');
    }
}
