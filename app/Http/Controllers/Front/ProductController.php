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
        $category = Category::where('slug', $categoryName)->firstOrFail();
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
        $category = Category::where('slug', $categoryName)->firstOrFail();
        $parentCategory = Category::where('slug', $parentCategory)->firstOrFail();

        // Fetch products related to the category
        $products = $category->products;

        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $products,
        ]);
    }

    public function search(Request $req)
    {
        $searched = $req->input('searched');

        // Search for products
        $data = Product::where('name', 'like', '%' . $searched . '%')->get();

        // Retrieve categories for the found products
        $categoryIds = $data->pluck('categories')->unique();
        $category = Category::whereIn('id', $categoryIds)->get();

        // Retrieve parent categories based on the found categories
        $parentCategoryIds = $category->pluck('parent_id')->unique();

        // Check if parent category IDs contain null or 0
        if ($parentCategoryIds->contains(null) || $parentCategoryIds->contains(0)) {
            $parentCategory = null;
        } else {
            // Retrieve parent categories if no null or 0 values found
            $parentCategory = Category::whereIn('id', $parentCategoryIds)->get();
        }

        // Debugging
        // dd($data, $category, $parentCategory);
        // exit;

        // Return the view with the found products
        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $data
        ]);
    }


    public function searchSuggestions(Request $request)
    {
        $query = $request->input('query');
        $suggestions = Product::where('name', 'like', '%' . $query . '%')->limit(5)->get();
        return view('front.search_suggestions.index', ['suggestions' => $suggestions]);
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
