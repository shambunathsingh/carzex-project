<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Product\Product;
use App\Models\Brand\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Carmodel\Carmodel;

class ProductController extends Controller
{
    public function allproducts()
    {

        $title = "Carzex - Product Categories";
        $category = Category::all();

        $allproduct = Product::all();

        $brands = brands::all();
        $featuredProducts = Product::where('is_featured', 1)->get();

        return view('front.product.index', ['title' => $title, 'products' => $allproduct, 'category' => $category, 'brands' => $brands, 'featuredProducts' => $featuredProducts]);
    }

    public function single_product($slug)
    {
        $title = "Carzex - Product";

        // Get the product detail
        $productDetail = Product::where('slug', $slug)->firstOrFail();

        // Add the current product to the recently viewed list
        $this->addToRecentlyViewed($productDetail->id);

        // Get related products by category
        $relatedProducts = Product::where('categories', $productDetail->categories)
            ->where('slug', '!=', $slug)
            ->get(['slug', 'name', 'price', 'images', 'sale_price']); // Adjust fields as needed

        // Get recently viewed products
        $recentlyViewedIds = session()->get('recently_viewed', []);
        $recentlyViewedProducts = Product::whereIn('id', $recentlyViewedIds)
            ->where('slug', '!=', $slug)
            ->get(['slug', 'name', 'price', 'images', 'sale_price']); // Adjust fields as needed

        return view('front.product.single', [
            'title' => $title,
            'product' => $productDetail,
            'relatedProducts' => $relatedProducts,
            'recentlyViewedProducts' => $recentlyViewedProducts
        ]);
    }

    private function addToRecentlyViewed($productId)
    {
        $recentlyViewed = session()->get('recently_viewed', []);

        if (!in_array($productId, $recentlyViewed)) {
            $recentlyViewed[] = $productId;
            if (count($recentlyViewed) > 5) {
                array_shift($recentlyViewed);
            }
            session()->put('recently_viewed', $recentlyViewed);
        }
    }

    public function show($categoryName)
    {
        $category = Category::where('slug', $categoryName)->firstOrFail();
        $products = $category->products;
        $parentCategory = null; // Set parentCategory to null by default
        $brands = brands::all();
        $featuredProducts = Product::where('is_featured', 1)->get();
        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $products,
            'brands' => $brands,
            'featuredProducts' => $featuredProducts,
        ]);
    }

    public function showWithParent($parentCategoryslug, $categoryNameslug)
    {
        $category = Category::where('slug', $categoryNameslug)->firstOrFail();
        $parentCategory = Category::where('slug', $parentCategoryslug)->firstOrFail();
        $featuredProducts = Product::where('is_featured', 1)->get();
        $brands = brands::all();
        $firstBrand = $brands->first();

        if ($firstBrand) {
            $carModel = Carmodel::where('brand_id', $firstBrand->id)->firstOrFail();
        } else {
            // Handle the case where there are no brands
            $carModel = null;
        }
        // Fetch products related to the category
        $products = $category->products;

        return view('front.product.index', [
            'category' => $category,
            'parentCategory' => $parentCategory,
            'products' => $products,
            'brands' => $brands,
            'featuredProducts' => $featuredProducts,
            'carModel' => $carModel,
        ]);
    }

    public function search(Request $req)
    {
        $brands = Brands::all();
        $featuredProducts = Product::where('is_featured', 1)->get();
        $searched = $req->input('searched');

        // Search for products
        $data = Product::where('name', 'like', '%' . $searched . '%')->get();

        // Retrieve categories for the found products
        $categoryIds = $data->pluck('category_id')->unique(); // assuming 'category_id' is the foreign key
        $categories = Category::whereIn('id', $categoryIds)->get();

        // Retrieve parent categories based on the found categories
        $parentCategoryIds = $categories->pluck('parent_id')->unique();

        // Check if parent category IDs contain null or 0
        if ($parentCategoryIds->contains(null) || $parentCategoryIds->contains(0)) {
            $parentCategories = null;
        } else {
            // Retrieve parent categories if no null or 0 values found
            $parentCategories = Category::whereIn('id', $parentCategoryIds)->get();
        }

        // Return the view with the found products
        return view('front.product.index', [
            'categories' => $categories,
            'parentCategories' => $parentCategories,
            'products' => $data,
            'brands' => $brands,
            'featuredProducts' => $featuredProducts,
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

    public function index()
    {
        $brands = Brands::all();

        // Assuming you want to get the first brand to find its car models
        $firstBrand = $brands->first();

        if ($firstBrand) {
            $carModel = Carmodel::where('brand_id', $firstBrand->id)->firstOrFail();
        } else {
            // Handle the case where there are no brands
            $carModel = null;
        }

        return view('products.index', compact('brands', 'carModel'));
    }


    // public function filter(Request $request)
    // {
    //     $brandId = $request->get('brand_id');
    //     $products = Product::when($brandId, function ($query, $brandId) {
    //         return $query->where('brand_id', $brandId);
    //     })->get();

    //     return response()->json($products);
    // }
    public function filterSort(Request $request)
    {
        $sort = $request->input('sort');
        $brandId = $request->input('brand_id');
        $perPage = 25; // Initial number of products per page
        $perPageOnScroll = 50; // Number of products to load on scroll

        // Start the query on the Product model
        $query = Product::query();

        // If a brand ID is provided, filter by brand
        if ($brandId) {
            $query->where('brand_id', $brandId);
        }

        // Apply sorting based on the sort parameter
        if ($sort) {
            switch ($sort) {
                case 'popularity':
                    $query->orderBy('popularity', 'desc');
                    break;
                case 'rating':
                    $query->orderBy('average_rating', 'desc');
                    break;
                case 'latest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'price_low_high':
                    $query->orderBy('sale_price', 'asc');
                    break;
                case 'price_high_low':
                    $query->orderBy('sale_price', 'desc');
                    break;
                default:
                    $query->orderBy('id', 'asc');
                    break;
            }
        } else {
            // Default sorting if no sort parameter is provided
            $query->orderBy('id', 'asc');
        }

        // Get the filtered and sorted products with initial pagination
        $products = $query->paginate($perPage);

        // If no products are found based on the filter, fall back to all products
        if ($brandId && $products->isEmpty()) {
            $products = Product::paginate($perPage);
        } elseif (!$brandId) {
            $products = Product::paginate($perPage);
        }

        // Return the products as a JSON response
        return response()->json($products);
    }
}