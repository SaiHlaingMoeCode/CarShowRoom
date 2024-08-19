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
        $carlist=Product::get();
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

}
