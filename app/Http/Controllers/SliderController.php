<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.create');
    }

    public function createSliderInfo(Request $request) {
        $sliderImage = $request->file('image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory ='slider-image/';
        $imgUrl=$directory.$imageName;
        Image::make($sliderImage)->resize(1680,700)->save($imgUrl);

        $sliderInfo = new Slider();
        $sliderInfo->caption = $request->caption;
        $sliderInfo->image = $imgUrl;
        $sliderInfo->save();
        return redirect('/add-slider')->with('message','Information save successfully');
    }

    public function manageSliderInfo()
    {
        $getSliders = Slider::all();
        return view('admin.slider.manage',['getSliders'=>$getSliders]);
    }

    public function deleteSliderInfo($id){
        $sliderById = Slider::find($id);
        unlink($sliderById->image);
        $sliderById->delete();
        return redirect('/manage-slider')->with('message','Information Delete successfully');
    }
}
