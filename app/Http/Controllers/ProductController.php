<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //view product
    public function ProductView()
    {
        return view('admin.products.index');
    }
    //add product
    public function AddProduct()
    {
        return view('admin.products.add_product');
    }

    public function StoreProduct(Request $request)
    {
        $products = new Product();
        $products->title = $request->title;
        $products->sku = $request->sku;
        $products->description = $request->description;
        $products->image = $request->image;
        $products->save();
        return view('admin.products.index');
    }
}
