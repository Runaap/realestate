<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Image;
class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.create');
    }

    public function createGalleryInfo(Request $request) {
        $galleryImage = $request->file('image');
        $imageName = $galleryImage->getClientOriginalName();
        $directory ='gallery-image/';
        $imgUrl=$directory.$imageName;
        Image::make($galleryImage)->resize(550,630)->save($imgUrl);

        $galleryInfo = new Gallery();
        $galleryInfo->caption = $request->caption;
        $galleryInfo->image = $imgUrl;
        $galleryInfo->save();
        return redirect('/add-gallery')->with('message','Information save successfully');
    }

    public function manageGalleryInfo()
    {
        $getGalleries = Gallery::all();
        return view('admin.gallery.manage',['getGalleries'=>$getGalleries]);
    }

    public function deleteGalleryInfo($id){
        $sliderById = Gallery::find($id);
        unlink($sliderById->image);
        $sliderById->delete();
        return redirect('/manage-gallery')->with('message','Information Delete successfully');
    }
}
