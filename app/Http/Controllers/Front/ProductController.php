<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function allproducts()
    {

        $title = "Carzex - Product Categories";

        $allproduct = Product::all();


        return view('front.product.index', ['title' => $title, 'products' => $allproduct]);
    }

    public function single_product($id)
    {

        $title = "Carzex - Product";

        $productDetail = Product::findOrFail($id);

        return view('front.product.single', ['title' => $title, 'product' => $productDetail]);
    }

    public function show($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $products = $category->products;
        $parentCategory = null; // Set parentCategory to null by default

        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $products,
        ]);
    }


    public function showWithParent($parentCategory, $categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $parentCategory = Category::where('name', $parentCategory)->firstOrFail();

        // Fetch products related to the category
        $products = $category->products;

        // Debug: Print the generated SQL query
        // $query = $category->products()->toSql();
        // $bindings = $category->products()->getBindings();
        // dd($query, $bindings);

        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $products,
        ]);
    }


    public function priceFilter(Request $request)
    {
        $minPrice = $request->input('priceRange');

        // Extracting min and max prices from the string
        $priceArray = explode('-', $minPrice);
        // $minPrice = $priceArray[0];
        // $maxPrice = $priceArray[1];

        // Use $minPrice and $maxPrice as needed
        // dd($minPrice, $maxPrice);
        $filteredProducts = Product::whereBetween('sale_price', [0, $priceArray])->get();

        // Store the filtered products in the session
        Session::flash('filteredProducts', $filteredProducts);

        // Redirect back to the previous page with the filtered products
        return redirect()->back();
    }
}
