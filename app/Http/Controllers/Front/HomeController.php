<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart\Cart;
use App\Models\Category\Category;
use App\Models\Page\Page;
use App\Models\Page\PageInfo;
use App\Models\Post\Post;
use App\Models\PostCategory\PostCategory;
use App\Models\ProductFeature\ProductFeatures;
use App\Models\Video\Video;
use App\Models\WishList\WishList;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $cartService;

    public function __construct(Cart $cartService)
    {
        $this->cartService = $cartService;
    }


    public function index()
    {
        $title = "Carzex - Car Depot";

        $pages = Page::all();
        $page_info = PageInfo::all();
        $video_info = Video::all();
        $features_info = ProductFeatures::all();

        // Fetch cart details
        $cartService = new Cart(); // Create an instance of CartService
        $cartDetails = $cartService->getCartDetails();
        session(['cartItems' => $cartDetails['items']]);
        session(['totalAmount' => $cartDetails['totalAmount']]);

        $sessionCartItems = session('cartItems', []);
        $totalAmount = session('totalAmount', 0);

        // dd($sessionCartItems);
        // exit;

        $category_list = Category::all();
        $featured_categories = [];

        if (Auth::guard('customer')->check() && Auth::guard('customer')->id()) {
            $customerId = Auth::guard('customer')->id();

            $count = Cart::where('customer_id', $customerId)->count();
            $wishlistCount = WishList::where('customer_id', $customerId)->count(); // Count wishlist items

            // Store the counts in session
            session(['cartCount' => $count]);
            session(['wishListCount' => $wishlistCount]);
        } else {
            // If no customer ID is present, set counts to 0
            $count = 0;
            $wishlistCount = 0;

            // Store the counts in session
            session(['cartCount' => $count]);
            session(['wishListCount' => $wishlistCount]);
        }


        // dd($count, $cart);

        foreach ($category_list as $category) {
            if ($category->is_featured == "on") {
                $featured_categories[] = $category;
            }
        }

        // exit;
        return view('front.homepage.index', [
            'title' => $title,
            'pages' => $pages,
            'video' => $video_info,
            'feature' => $features_info,
            'category' => $featured_categories,
            // 'cart' => $count,
            // 'cartItems' => $cartDetails['items'],
            // 'products' => $cartDetails['products'],
            // 'totalAmount' => $cartDetails['totalAmount']
        ]);
    }


    public function showPage($id)
    {
        $allpages = Page::all();

        $page = Page::find($id);
        if (!$page) {
            abort(404); // Or handle the case when the page is not found
        }

        // dd($page->name);
        // exit;
        $pageInfo = PageInfo::where('page_id', $id)->first(); // Assuming you have a foreign key 'page_id' in PageInfo table

        $title = $page->name;

        if ($title == 'Return & Warranty') {
            return view(
                'front.return_warranty.index',
                compact('page', 'pageInfo'),
                ['pages' => $allpages]
            );
        } elseif ($title == 'Privacy Policy') {
            return view(
                'front.privacy.index',
                compact('page', 'pageInfo'),
                ['pages' => $allpages]
            );
        } elseif ($title == 'Terms & Conditions') {
            return view(
                'front.terms_condition.index',
                compact('page', 'pageInfo'),
                ['pages' => $allpages]
            );
        } elseif ($title == 'Shipping Policy') {
            return view(
                'front.shipping_policy.index',
                compact('page', 'pageInfo'),
                ['pages' => $allpages]
            );
        }

        // return view('page', compact('page', 'pageInfo'));
    }

    public function return_warranty()
    {
        $page = Page::where('name', 'Return & Warranty')->first();

        if (!$page) {
            abort(404);
        }

        $title = "Carzex - " . $page->name;

        $page_info = PageInfo::where('page_id', $page->id)->first();

        // dd($title, $page_info);
        // exit;

        return view('front.return_warranty.index', ['title' => $title, 'pages' => $page, 'page_info' => $page_info]);
    }


    public function privacy()
    {

        $page = Page::where('name', 'Privacy Policy')->first();

        if (!$page) {
            abort(404);
        }

        $title = "Carzex - " . $page->name;

        $page_info = PageInfo::where('page_id', $page->id)->first();

        // dd($title, $page_info);
        // exit;

        // $title = "Carzex - Privacy Policy";

        return view('front.privacy.index', ['title' => $title, 'pages' => $page, 'page_info' => $page_info]);
    }
    public function blog()
    {
        $title = "Carzex - Blogs";

        $allpages = Page::all();
        $post_list = Post::all();
        $cat_list = PostCategory::all();
        $latest_posts = Post::latest()->take(2)->get();
        $categories = PostCategory::with('children')->get();
        return view('front.blog.index', [
            'title' => $title,
            'pages' => $allpages,
            'posts' => $post_list,
            'postCategory' => $cat_list,
            'latest_posts' => $latest_posts,
            'categories' => $categories,
        ]);
    }
    public function singleblog($slug)
    {
        $allpages = Page::all();

        $cat_list = PostCategory::all();
        $post = Post::where('slug', $slug)->firstOrFail(); // Retrieve the post by slug

        $postCategory = PostCategory::findOrFail($post->categories);

        $relatedPosts = Post::where('categories', $post->categories)
            ->where('slug', '!=', $slug) // Exclude the current post
            ->get();

        // Retrieve the latest two posts
        $latest_posts = Post::latest()->take(2)->get();

        $title = "Carzex - Blogs";

        return view('front.blog.singleblog', [
            'title' => $title,
            'pages' => $allpages,
            'post' => $post, // Pass the specific post to the view
            'postCategory' => $cat_list,
            'latest_posts' => $latest_posts,
            'PostCategory' => $postCategory,
            'relatedPosts' => $relatedPosts,
        ]);
    }
    public function bologcategory($slug)
    {
        // Retrieve all pages
        $allpages = Page::all();

        // Retrieve the post category by slug
        $postCategory = PostCategory::where('slug', $slug)->firstOrFail();
        // dd($postCategory);
        // Retrieve all post categories for the sidebar
        $postCategories = PostCategory::all();

        // Retrieve posts associated with the category
        $posts = Post::where('categories', $postCategory->id)->get();
        // dd($posts);
        // Retrieve the first post if available
        $firstPost = $posts->first();

        // Retrieve related posts excluding the current post
        $relatedPosts = Post::where('categories', $postCategory->id)
            ->where('slug', '!=', $slug) // Exclude the current post
            ->get();
        // dd($relatedPosts);
        // Retrieve the latest two posts
        $latestPosts = Post::latest()->take(2)->get();

        // Set the page title
        $title = "Carzex - Blogs";

        // Return the view with all the necessary data
        return view('front.blog.bologcategory', [
            'title' => $title,
            'pages' => $allpages,
            'postCategory' => $postCategory,
            'firstPost' => $firstPost,
            'latestPosts' => $latestPosts,
            'relatedPosts' => $relatedPosts,
            'postCategories' => $postCategories, // Pass post categories to the view
        ]);
    }


    public function terms_condition()
    {

        $page = Page::where('name', 'Terms & Conditions')->first();

        if (!$page) {
            abort(404);
        }

        $title = "Carzex - " . $page->name;

        $page_info = PageInfo::where('page_id', $page->id)->first();

        // dd($title, $page_info);
        // exit;

        // $title = "Carzex - Terms & Conditions";

        return view('front.terms_condition.index', ['title' => $title, 'pages' => $page, 'page_info' => $page_info]);
    }

    public function contact()
    {

        $allpages = Page::all();

        $title = "Carzex - Contact";

        return view('front.contact.index', ['title' => $title, 'pages' => $allpages]);
    }

    public function team()
    {

        $allpages = Page::all();

        $title = "Carzex - Teams";

        return view('front.team.index', ['title' => $title, 'pages' => $allpages]);
    }

    public function shipping_policy()
    {

        $page = Page::where('name', 'Shipping Policy')->first();

        if (!$page) {
            abort(404);
        }

        $title = "Carzex - " . $page->name;

        $page_info = PageInfo::where('page_id', $page->id)->first();

        // dd($title, $page_info);
        // exit;

        // $title = "Carzex - Shipping Policy";

        return view('front.shipping_policy.index', ['title' => $title, 'pages' => $page, 'page_info' => $page_info]);
    }
}