<?php

namespace App\Http\Controllers\API;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // get category name
    public function getCategory()
    {
        $categoryData = Category::get();

        if (!$categoryData) {
            return response()->json(['status' => false, 'message' => 'No Categories Found.']);
        }
        return response()->json($categoryData, 200);
    }

    //get product
    public function getProduct()
    {
        $product = Product::get();

        if (!$product) {

            return response()->json(['status' => false, 'message' => 'No Products Found.'], 404);
        }

        return response()->json($product, 200);
    }

    //get photo
    public function getPhoto()
    {
        $photos = Gallery::get();

        if (!$photos) {
            return response()->json(['status' => false, 'message' => 'No Photo Found.'], 404);
        }

        return response()->json($photos, 200);
    }
}
