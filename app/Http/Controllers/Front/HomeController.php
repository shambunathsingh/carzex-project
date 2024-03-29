<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Page\Page;
use App\Models\Page\PageInfo;
use App\Models\ProductFeature\ProductFeatures;
use App\Models\Video\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Carzex - Car Depot";

        $pages = Page::all();
        $page_info = PageInfo::all();
        $video_info = Video::all();
        $features_info = ProductFeatures::all();

        $category_list = Category::all();
        $featured_categories = [];

        foreach ($category_list as $category) {
            if ($category->is_featured == "on") {
                $featured_categories[] = $category;
            }
        }

        return view('front.homepage.index', [
            'title' => $title,
            'pages' => $pages,
            'video' => $video_info,
            'feature' => $features_info,
            'category' => $featured_categories,
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

        $allpages = Page::all();

        $title = "Carzex - Blogs";

        return view('front.blog.index', ['title' => $title, 'pages' => $allpages]);
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
