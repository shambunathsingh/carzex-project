<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allproducts()
    {

        $title = "Carzex - Product Categories";

        return view('front.product.index', ['title' => $title]);
    }

    public function single_product($id)
    {

        $title = "Carzex - Product";

        $productDetail = Product::findOrFail($id);

        return view('front.product.single', ['title' => $title, 'product' => $productDetail]);
    }
}
