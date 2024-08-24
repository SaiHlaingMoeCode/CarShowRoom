<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    //upload photo page
    public function uploadImage(){
        return view('admin.gallery.uploadImage');
    }

    //create image
    public function createImage(Request $request)
    {
        $this->uploadImageValidation($request);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            Gallery::create([
                'title' => $request->title,
                'image' => $imagePath,
            ]);
        }
        return redirect()->route('admin#imageList')->with('updateSuccess', 'Car image uploaded successfully!');
    }

    //photo lists
    public function imageList(){
        $carBrand=Category::all();
        $imgList=Gallery::orderBy('id','asc')->get();
        return view('admin.gallery.imageList',compact('imgList','carBrand'));
    }

    //upload image validation
    private function uploadImageValidation($request){
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp',
        ])->validate();
    }

    //delete image
    public function deleteImage($id){
        Gallery::where('id',$id)->delete();
        return redirect()->route('admin#imageList')->with('deleteSuccess','Car image deleted successfully!');
    }

    // edit image
    public function editImage($id){
        $imgList=Gallery::where('id',$id)->first();
        return view('admin.gallery.editImage',compact('imgList'));
    }

    //update image
    public function updateImage(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp',
        ]);

        $car = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $car->image = $imagePath;
        }

        $car->title = $request->title;
        $car->save();

        return redirect()->route('admin#imageList')->with('updateDetailSuccess', 'Car details updated successfully!');
    }
}
