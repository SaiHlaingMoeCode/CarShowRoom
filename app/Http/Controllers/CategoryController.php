<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{

    //category page
    public function brandCategory(){
        $categories=Category::orderBy('id','asc')->paginate(10);
        return view('admin.category.brandCategories',compact('categories'));
    }

    // car category page
    public function createBrandPage(){
       return view('admin.category.createBrand');
    }

    //create brand
    public function createBrand(Request $request){
        $this->brandValidationCheck($request);
       $data=$this->getBrandData($request);
       Category::create($data);
        return redirect()->route('admin#brandCategory')->with(['createSuccess'=>'Brand Name Created Successful']);
    }

    //edit brand page
    public function editBrandPage($id){
        $categories=Category::where('id',$id)->first();
        return view('admin.category.editBrand',compact('categories'));
    }

    //update brand
    public function updateBrand(Request $request){
        $this-> updateBrandValidation($request);
        $data=$this->getBrandData($request);
        Category::where('id',$request->categoryId)->update($data);
        return redirect()->route('admin#brandCategory')->with(['updateSuccess'=>'Brand Name Update Successful.']);
    }

    //delete brand
    public function deleteBrand($id){
        Category::where('id',$id)->delete();
        return redirect()->route('admin#brandCategory')->with(['deleteSuccess'=>'Brand Name Delete Successful.']);
    }

   //Brand validation check
    private function brandValidationCheck( $request){
         Validator::make($request->all(),[
            'categoryName'=>'required|unique:categories,name',
         ],[
            'categoryName.required'=>'You need to fill!!',
            'categoryName.unique'=>'Name has already been taken!!'
         ])->validate();
    }

    //update brand
    private function getBrandData( $request){
         return[
            'name'=>$request->categoryName
         ];
    }

    //update brand validation
    private function updateBrandValidation($request){
        Validator::make($request->all(),[
            'categoryName'=>'required|unique:categories,name,'.$request->categoryId,
         ],[
            'categoryName.required'=>'You need to fill!!',
            'categoryName.unique'=>'Name has already been taken!!'
         ])->validate();
    }

}
