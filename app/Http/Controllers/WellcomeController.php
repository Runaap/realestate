<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Gallery;
use App\LandOwner;
use App\Project;
use App\Slider;
use Illuminate\Http\Request;
use DB;
use App\Projecttype;
use App\Projectstatus;
use App\District;
use App\Area;

class WellcomeController extends Controller
{
    public function index(){
        $projectType = Projecttype::where('publication_status', 1)->get();
        $projectStatus = Projectstatus::where('publication_status', 1)->get();
        $districts = District::where('publication_status', 1)->get();
        $areas = Area::where('publication_status', 1)->get();
        $projects = Project::where('publication_status',1)->orderBy('id','desc')->take(3)->get();
        $sliders = Slider::all();
        return view('front.home.home-content',[
            'projectType'=>$projectType,
            'projectStatus'=>$projectStatus,
            'districts'=>$districts,
            'areas'=>$areas,
            'sliders'=>$sliders,
            'projects'=>$projects
        ]);
    }
    public function about(){
        return view('front.about.abouts');
    }
    public function photoGallery(){
        $galleries = Gallery::all();
        return view('front.media.photo-gallery',['galleries'=>$galleries]);
    }
    public function contactInfo(){
        return view('front.contact.contact');
    }
    public function projectInfo(){
        return view('front.project.projects');
    }
//    public function residentailProjectInfo(){
//        $getProjects = DB::table('projects')
//            ->join('projecttypes','projects.type_id','=','projecttypes.id')
//            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
//            ->join('districts','projects.district_id','=','districts.id')
//            ->join('areas','projects.area_id','=','areas.id')
//            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
//            ->where('projects.publication_status',1)
//            ->where('projects.type_id',1)
//            ->orderBy('id','desc')
//            ->get();
//        return view('front.project.residential',['getProjects'=>$getProjects]);
//    }
    public function residentailProjectInfo(){
        $getProjects = DB::table('projects')
            ->join('projecttypes','projects.type_id','=','projecttypes.id')
            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
            ->join('districts','projects.district_id','=','districts.id')
            ->join('areas','projects.area_id','=','areas.id')
            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
            ->where('projects.publication_status',1)
            ->where('projects.type_id',1)
            ->orderBy('id','desc')
            ->get();
        return view('front.project.residential',['getProjects'=>$getProjects]);
    }

    public function commercialProjectInfo(){
        $getProjects = DB::table('projects')
            ->join('projecttypes','projects.type_id','=','projecttypes.id')
            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
            ->join('districts','projects.district_id','=','districts.id')
            ->join('areas','projects.area_id','=','areas.id')
            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
            ->where('projects.publication_status',1)
            ->where('projects.type_id',2)
            ->orderBy('id','desc')
            ->get();
        return view('front.project.commercial',['getProjects'=>$getProjects]);
    }

    public function details($id){
        $projects = Project::where('publication_status',1)->orderBy('id','desc')->take(3)->get();
        $getProject = DB::table('projects')
            ->join('projecttypes','projects.type_id','=','projecttypes.id')
            ->join('projectstatuses','projects.project_status_id','=','projectstatuses.id')
            ->join('districts','projects.district_id','=','districts.id')
            ->join('areas','projects.area_id','=','areas.id')
            ->select('projects.*','projecttypes.type_name','projectstatuses.projectstatus_name','districts.district_name','areas.area_name')
            ->where('projects.id',$id)
            ->first();
        return view('front.project.details-project',[
            'getProject'=>$getProject,
            'projects'=>$projects
            ]);
    }

    public function landOwnerInfo(){
        return view('front.contact.land-owner');
    }

//For land Owner
    public function savelandOwnerInfo(Request $request){
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:contacts,email',
            'number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'owner_address'=>'required',
            'land_area'=>'required',
            'land_size'=>'required',
            'land_address'=>'required',
        ]);
        $landOwner = new LandOwner();
        $landOwner->name = $request->name;
        $landOwner->email = $request->email;
        $landOwner->number = $request->number;
        $landOwner->owner_address = $request->owner_address;
        $landOwner->land_area = $request->land_area;
        $landOwner->land_size = $request->land_size;
        $landOwner->land_address = $request->land_address;
        $landOwner->save();

        return redirect('/land-owner')->with('message','Information Save successfully');

    }

    public function managelandOwnerInfo(){
        $landOwners = LandOwner::all();
        return view('admin.contact.land-owner-manage',['landOwners'=>$landOwners]);
    }

    public function deletelandOwnerInfoo($id){
        $landOwner = LandOwner::find($id);
        $landOwner->delete();
        return redirect('/manage-land-owner')->with('message','Information Delete successfully');
    }

    public function saveContactInfo(Request $request){
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:contacts,email',
            'number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'message'=>'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact-us')->with('message','Information Save successfully');

    }

    public function manageContactInfo(){
        $contacts = Contact::all();
        return view('admin.contact.manage',['contacts'=>$contacts]);
    }

    public function deleteContactInfo($id){
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect('/manage-contact')->with('message','Information Delete successfully');
    }

}
