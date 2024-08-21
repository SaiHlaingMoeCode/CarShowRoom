<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //product create page
    public function createProductPage(){
        $brandName= Category::select('id', 'name')->get();
        return view('admin.product.createProduct',compact('brandName'));
    }

    //product create
    public function createProduct(Request $request){
        $this->validationCheck($request);
        $images = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($request->file('image' . $i)) {
                $file = $request->file('image' . $i);
                $filename = uniqid().$file->getClientOriginalName();
                $file->storeAs('public/productsImg', $filename);
                $images['image' . $i] = $filename;
            }
        }
         $products = new Product();
         $products->brand_id = $request->carName;
         $products->model = $request->model;
         $products->price = $request->price;
         $products->description = $request->description;
         $products->fuel_type = $request->fuelType;
         $products->engine_type = $request->engineType;
         $products->transmission = $request->transmission;
         $products->seating_capacity = $request->seatingCapacity;
         $products->image1 = $images['image1'];
         $products->image2 = $images['image2'];
         $products->image3 = $images['image3'];
         $products->image4 = $images['image4'];
         $products->save();

         return redirect()->route('admin#carProduct');
    }

    //car product list
    public function carProduct(){
        $carlist=Product::select('products.*','categories.name as brand_name')
        ->leftJoin('categories','products.brand_id','categories.id')
        ->get();
        return view('admin.product.carProduct',compact('carlist'));
    }

    private function validationCheck(Request $request)
    {
        $data = [
            'carName' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'nullable',
            'fuelType' => 'required',
            'engineType' => 'required',
            'transmission' => 'required',
            'seatingCapacity' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required'

        ];

        Validator::make($request->all(),$data)->validate();
    }

    //car detail product
    public function detailProduct($id){
        $detail=Product::select('products.*','categories.name as brand_name')
        ->leftJoin('categories','products.id','categories.id')
        ->where('products.id',$id)
        ->first();
        return view('admin.product.detailProduct',compact('detail'));
    }

    //car product edit
    public function editProduct($id){
        $brandName= Category::select('id', 'name')->get();
        $detail=Product::where('id',$id)->first();
        return view('admin.product.editProduct',compact('detail','brandName'));
    }

    //car product update
    public function updateProduct(Request $request){
        $this->validationUpdateCheck($request);
        $data=$this->updateData($request);
        Product::where('id',$request->carId)->update($data);
        return redirect()->route('admin#detailProduct',$request->carId)->with(['updateSuccess'=>'Updated Successfully!']);
    }

     //car product delete
     public function deleteProduct($id){
        Product::where('id',$id)->delete();
        return redirect()->route('admin#carProduct')->with(['deleteSuccess'=>'Deleted Successfully!']);
    }

    //validation update check
    private function validationUpdateCheck(Request $request)
    {
        $data = [
            'price' => 'required',
            'description' => 'required',
            'fuelType' => 'required',
            'engineType' => 'required',
            'transmission' => 'required',
            'seatingCapacity' => 'required',

        ];

        Validator::make($request->all(),$data)->validate();
    }

    //car update data
    private function updateData(Request $request){
        return[
           'id'=>$request->carId,
            'price'=>$request->price,
            'description'=>$request->description,
            'fuel_type'=>$request->fuelType,
            'engine_type'=>$request->engineType,
            'transmission'=>$request->transmission,
            'seating_capacity'=>$request->seatingCapacity,
        ];
    }



}
