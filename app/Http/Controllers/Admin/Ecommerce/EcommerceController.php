<?php

namespace App\Http\Controllers\Admin\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Brand\Brands;
use App\Models\Category\Category;
use App\Models\Product\Product;
use App\Models\ProductAttribute\ProductAttribute;
use App\Models\ProductCollection\ProductCollection;
use App\Models\ProductDiscount\ProductDiscount;
use App\Models\ProductFeature\ProductFeatures;
use App\Models\ProductLabel\ProductLabel;
use App\Models\ProductOption\ProductOption;
use App\Models\ProductTags\ProductTags;
use App\Models\Taxes\Taxes;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Label;

class EcommerceController extends Controller
{
    public function product_categories()
    {
        $title = "Carzex - Categories";

        // Fetch all categories
        $categories_list = Category::all();

        // Return the view with the categories data
        return view('admin.ecommerce.product_category', ['title' => $title, 'categories' => $categories_list]);
    }

    public function product_attributes()
    {
        $title = "Carzex - Product Attributes";

        $pattribute_list = ProductAttribute::all();

        return view('admin.ecommerce.product_attribute', ['title' => $title, 'pattribute' => $pattribute_list]);
    }

    public function product_option()
    {
        $title = "Carzex - Product Options";

        $poption_list = ProductOption::all();

        return view('admin.ecommerce.product_option', ['title' => $title], ['product_options' => $poption_list]);
    }

    public function create_product_option()
    {
        $title = "Carzex - New Options";



        return view('admin.ecommerce.add_product_option', ['title' => $title]);
    }

    public function edit_product_option($id)
    {
        $poption = ProductOption::findOrFail($id);

        $title = "Carzex - Edit Options " . $poption->name;

        return view('admin.ecommerce.edit_product_option', ['title' => $title], ['option' => $poption]);
    }

    public function product()
    {
        $title = "Carzex - Products";
        $product_list = Product::all();

        return view('admin.ecommerce.product', ['title' => $title], ['products' => $product_list]);
    }

    public function create_product()
    {
        $title = "Carzex - Create Product";

        $cat_list = Category::all();
        $brand_list = Brands::all();
        $pcollection_list = ProductCollection::all();
        $label_list = ProductLabel::all();
        $tag_list = ProductTags::all();
        $tax_list = Taxes::all();

        return view('admin.product.add', [
            'title' => $title,
            'category' => $cat_list,
            'brands' => $brand_list,
            'collections' => $pcollection_list,
            'labels' => $label_list,
            'tags' => $tag_list,
            'taxes' => $tax_list,
        ]);
    }

    public function edit_product($id)
    {
        $title = "Carzex - Edit Product";

        $product = Product::find($id);

        $cat_list = Category::all();
        $brand_list = Brands::all();
        $pcollection_list = ProductCollection::all();
        $label_list = ProductLabel::all();
        $tag_list = ProductTags::all();
        $tax_list = Taxes::all();

        return view(
            'admin.product.edit',
            compact('product'),
            [
                'title' => $title,
                'category' => $cat_list,
                'brands' => $brand_list,
                'collections' => $pcollection_list,
                'labels' => $label_list,
                'tags' => $tag_list,
                'taxes' => $tax_list,
            ]
        );
    }




    // product tag section
    public function product_tags()
    {
        $title = "Carzex - Product Tags";

        $tags_list = ProductTags::all();

        return view('admin.ecommerce.product_tags', ['title' => $title, 'tags' => $tags_list]);
    }

    public function create_product_tags()
    {
        $title = "Carzex - New Product Tag";


        return view('admin.ecommerce.add_product_tags', ['title' => $title]);
    }

    public function edit_product_tags($id)
    {
        $title = "Carzex - Edit Product Tag";

        $tag = ProductTags::find($id);

        return view('admin.ecommerce.edit_product_tags', compact('tag'), ['title' => $title]);
    }







    // product brands
    public function brands()
    {
        $title = "Carzex - Brands";

        $brands_list = Brands::all();

        return view('admin.ecommerce.brands', ['title' => $title, 'brand' => $brands_list]);
    }


    public function create_product_brands()
    {
        $title = "Carzex - New Brand";


        return view('admin.ecommerce.add_brands', ['title' => $title]);
    }

    public function edit_product_brands($id)
    {
        $title = "Carzex - Edit Brand";

        $brand = Brands::find($id);

        return view('admin.ecommerce.edit_brands', compact('brand'), ['title' => $title]);
    }






    // product discounts
    public function discounts()
    {
        $title = "Carzex - Discounts";

        $pdiscounts_list = ProductDiscount::all();

        return view('admin.ecommerce.discount', ['title' => $title, 'pdiscount' => $pdiscounts_list]);
    }


    public function create_product_discounts()
    {
        $title = "Carzex - Create Discount";


        return view('admin.ecommerce.add_discounts', ['title' => $title]);
    }

    public function edit_product_discounts($id)
    {
        $title = "Carzex - Edit Brand";

        $brand = Brands::find($id);

        return view('admin.ecommerce.edit_brands', compact('brand'), ['title' => $title]);
    }




    // product taxes
    public function taxes()
    {
        $title = "Carzex - Taxes";

        $tax_list = Taxes::all();

        return view('admin.ecommerce.taxes', ['title' => $title, 'taxes' => $tax_list]);
    }


    public function create_taxes()
    {
        $title = "Carzex - Create a Tax";


        return view('admin.ecommerce.add_tax', ['title' => $title]);
    }

    public function edit_taxes($id)
    {
        $tax = Taxes::find($id);
        $title = "Carzex - Edit tax " . $tax->title;


        return view('admin.ecommerce.edit_tax', compact('tax'), ['title' => $title]);
    }




    // product collection
    public function product_collection()
    {
        $title = "Carzex - Product Collection";

        $ProductCollection_list = ProductCollection::all();

        return view('admin.ecommerce.product_collection', ['title' => $title, 'pcollection' => $ProductCollection_list]);
    }


    public function create_product_collection()
    {
        $title = "Carzex - New Product Collection";


        return view('admin.ecommerce.add_product_collection', ['title' => $title]);
    }

    public function edit_product_collection($id)
    {
        $title = "Carzex - Edit Product Collection";

        $pcollect = ProductCollection::find($id);

        return view('admin.ecommerce.edit_product_collection', compact('pcollect'), ['title' => $title]);
    }





    // product label
    public function product_label()
    {
        $title = "Carzex - Product Labels";

        $ProductLabel_list = ProductLabel::all();

        return view('admin.ecommerce.product_label', ['title' => $title, 'plabel' => $ProductLabel_list]);
    }



    public function create_product_label()
    {
        $title = "Carzex - New Product Labels";


        return view('admin.ecommerce.add_product_label', ['title' => $title]);
    }

    public function edit_product_label($id)
    {
        $title = "Carzex - Edit Product Labels";

        $plabel = ProductLabel::find($id);

        return view('admin.ecommerce.edit_product_label', compact('plabel'), ['title' => $title]);
    }




    // product label
    public function product_features()
    {
        $title = "Carzex - Product Features";

        $ProductFeature_list = ProductFeatures::all();

        return view('admin.ecommerce.product_feature', ['title' => $title, 'pfeature' => $ProductFeature_list]);
    }



    public function create_product_features()
    {
        $title = "Carzex - New Product Feature";


        return view('admin.ecommerce.add_product_feature', ['title' => $title]);
    }

    public function edit_product_features($id)
    {
        $title = "Carzex - Edit Product Feature";

        $pfeature = ProductFeatures::find($id);

        return view('admin.ecommerce.edit_product_feature', compact('pfeature'), ['title' => $title]);
    }
}
