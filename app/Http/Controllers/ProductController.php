<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product create page
    public function createProductPage(){
        $brandName= Category::get();
        return view('admin.product.createProduct',compact('brandName'));
    }

    //product create
    public function createProduct(Request $request){
        $data=$this->createCarProduct($request);
        Product::create($data);
        return redirect()->route('admin#carProduct');

    }

    //car product list
    public function carProduct(){
        $carlist=Product::get();
        return view('admin.product.carProduct',compact('carlist'));
    }

    //create car product
    private function createCarProduct($request){
        return[
            'car_name'=>$request->carName,
            'price'=>$request->price,
            'description'=>$request->description,
            'engine_type'=>$request->engineType,
            'fuel_type'=>$request->fuelType,
            'transmission'=>$request->transmission,
            'seating_capacity'=>$request->seatingCapacity
        ];
    }
}
