@extends('admin.layout.app')

@section('content')
    <div class="main-panel">
        <div class="pagesbodyarea">
            <div class="pageinfo">
                <ul class="d-flex">
                    <li><a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="fa-solid fa-house"> </i>
                            Dashboard
                            /</a>
                    </li>
                    <li><a href="{{ route('admin.ecommerce.product') }}" class="breadcrumb-item">Ecommerce
                            /</a>
                    </li>
                    <li><a class="breadcrumb-item">New Product</a>
                    </li>
                </ul>
            </div>


            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif



            <!-- todo edit main body ara -->




            <div id="main">
                <form action="{{ route('admin.ecommerce.save_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input name="" type="hidden" value=""> --}}

                    <div class="row">
                        <div class="col-md-9">
                            <div class="main-form">
                                <div class="form-body">
                                    <div class="form-group mb-3">
                                        <label for="name" class="text-title-field required"
                                            aria-required="true">Name</label>
                                        <input class="form-control " placeholder="Name" data-counter="150" name="name"
                                            type="text" id="name" aria-invalid="false"
                                            aria-describedby="name-error">
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="description">Description</label><br>
                                        <textarea name="description" id="description" cols="30" rows="50" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="content">Content</label><br>
                                        <textarea name="content" id="content" cols="30" rows="50" class="form-control"></textarea>
                                    </div>


                                    <div class="form-group mb-3"><label for="images[]" class="control-label">Images</label>
                                        <div class="gallery-images-wrapper list-images">
                                            <div class="images-wrapper">
                                                <div data-name="images[]"
                                                    class="text-center cursor-pointer js-btn-trigger-add-image default-placeholder-gallery-image  hidden ">
                                                    <img src="https://carzex.in/vendor/core/core/base/images/placeholder.png"
                                                        alt="Image" width="120">
                                                    <br>
                                                    <p style="color: rgb(195, 207, 216);">Using button
                                                        <strong>Select image</strong> to add more
                                                        images.
                                                    </p>
                                                </div>
                                                <input type="file" name="images" style="display: none">
                                                {{-- <ul data-name="images[]" data-allow-thumb="1"
                                                    class="list-unstyled list-gallery-media-images ui-sortable">
                                                    <li class="gallery-image-item-handler ui-sortable-handle">
                                                        <div class="list-photo-hover-overlay">
                                                            <ul class="photo-overlay-actions">
                                                                <li><a data-bs-toggle="tooltip" data-placement="bottom"
                                                                        data-bs-original-title="Change image"
                                                                        class="mr10 btn-trigger-edit-gallery-image"><i
                                                                            class="fa fa-edit"></i></a>
                                                                </li>
                                                                <li><a data-bs-toggle="tooltip" data-placement="bottom"
                                                                        data-bs-original-title="Delete image"
                                                                        class="mr10 btn-trigger-remove-gallery-image"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="custom-image-box image-box"><input type="hidden"
                                                                name="images[]" value="blogs/drill-camera-1.jpg"
                                                                class="image-data">
                                                            <div class="preview-image-wrapper "><img
                                                                    src="https://carzex.in/storage/blogs/drill-camera-1-150x150.jpg"
                                                                    alt="Preview image" class="preview_image"></div>
                                                        </div>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                            <a data-name="images[]" style="cursor: pointer;"
                                                class="add-new-gallery-image js-btn-trigger-add-image">Add
                                                image
                                            </a>
                                        </div>
                                    </div>


                                    <input class="form-control" name="product_type" type="hidden" value="physical">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div id="main-manage-product-type">
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span> Overview</span></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row price-group"><input type="hidden" value="0" name="sale_type"
                                                class="detect-schedule hidden">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3 "><label class="text-title-field">SKU</label>
                                                    <input id="sku" name="sku" type="text" class="next-input">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3"><label class="text-title-field">Price</label>
                                                    <div class="next-input--stylized"><span
                                                            class="next-input-add-on next-input__add-on--before">₹</span>
                                                        <input name="price" data-thousands-separator=","
                                                            data-decimal-separator="." step="any" value="0"
                                                            type="text"
                                                            class="next-input input-mask-number regular-price next-input--invisible"
                                                            im-insert="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3"><label class="text-title-field"><span>Price
                                                            sale</span>
                                                        <a href="javascript:;" class="turn-on-schedule ">Choose Discount
                                                            Period</a> <a href="javascript:;"
                                                            class="turn-off-schedule  hidden "></a></label>
                                                    <div class="next-input--stylized"><span
                                                            class="next-input-add-on next-input__add-on--before">₹</span>
                                                        <input name="sale_price" data-thousands-separator=","
                                                            data-decimal-separator="." type="text"
                                                            class="next-input input-mask-number sale-price next-input--invisible"
                                                            im-insert="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3"><label class="text-title-field">Cost per
                                                            item</label>
                                                        <div class="next-input--stylized"><span
                                                                class="next-input-add-on next-input__add-on--before">₹</span>
                                                            <input name="cost_per_item" step="any" value="0"
                                                                type="text" placeholder="Enter cost per item"
                                                                class="next-input input-mask-number regular-price next-input--invisible"
                                                                im-insert="true">
                                                        </div>
                                                        <div class="help-ts"><i class="fa fa-info-circle"></i>
                                                            <span>Customers won't see this price.</span>
                                                        </div>
                                                    </div>
                                                </div> <input type="hidden" value="1" name="product_id">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3"><label class="text-title-field">Barcode
                                                            (ISBN, UPC,
                                                            GTIN, etc.) </label>
                                                        <div class="next-input--stylized"><input name="barcode"
                                                                step="any" value="" type="text"
                                                                placeholder="Enter barcode"
                                                                class="next-input next-input--invisible">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 scheduled-time  hidden ">
                                                <div class="form-group mb-3"><label class="text-title-field">From
                                                        date</label>
                                                    <input name="start_date" value="" type="date"
                                                        class="next-input form-date-time">
                                                </div>
                                            </div>
                                            <div class="col-md-6 scheduled-time  hidden ">
                                                <div class="form-group mb-3"><label class="text-title-field">To
                                                        date</label> <input name="end_date" value="" type="date"
                                                        class="next-input form-date-time"></div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <div class="storehouse-management">
                                                <div class="mt5"><input type="hidden"
                                                        name="with_storehouse_management" value="0">
                                                    <label><input type="checkbox" value="1"
                                                            name="with_storehouse_management"
                                                            class="storehouse-management-status"> With
                                                        storehouse management</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="storehouse-info  hidden ">
                                            <div class="form-group mb-3"><label class="text-title-field">Quantity</label>
                                                <input type="text" value="0" name="quantity"
                                                    class="next-input input-mask-number input-medium" im-insert="true">
                                            </div>
                                            <div class="form-group mb-3"><label class="text-title-field"><input
                                                        type="hidden" name="allow_checkout_when_out_of_stock"
                                                        value="0"> <input type="checkbox"
                                                        name="allow_checkout_when_out_of_stock" value="1">
                                                    &nbsp;Allow customer checkout when this product out
                                                    of stock
                                                </label></div>
                                        </div>
                                        <div class="form-group stock-status-wrapper "><label
                                                class="text-title-field">Stock status</label>
                                            <div class="ui-select-wrapper form-group "><select name="stock_status"
                                                    class=" ui-select">
                                                    <option value="in_stock" selected="selected">In
                                                        stock</option>
                                                    <option value="out_of_stock">Out of stock</option>
                                                    <option value="on_backorder">On backorder</option>
                                                </select> <svg class="svg-next-icon svg-next-icon-size-16"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                        </path>
                                                    </svg></svg></div>
                                        </div>
                                        <hr>
                                        <div class="shipping-management "><label class="text-title-field">Shipping</label>
                                            <div class="row">
                                                <div class="col-md-3 col-md-6">
                                                    <div class="form-group mb-3"><label>Weight
                                                            (g)</label>
                                                        <div class="next-input--stylized"><span
                                                                class="next-input-add-on next-input__add-on--before">g</span>
                                                            <input type="text" name="weight" value="0"
                                                                class="next-input input-mask-number next-input--invisible"
                                                                im-insert="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-md-6">
                                                    <div class="form-group mb-3"><label>Length
                                                            (cm)</label>
                                                        <div class="next-input--stylized"><span
                                                                class="next-input-add-on next-input__add-on--before">cm</span>
                                                            <input type="text" name="length" value="0"
                                                                class="next-input input-mask-number next-input--invisible"
                                                                im-insert="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-md-6">
                                                    <div class="form-group mb-3"><label>Wide
                                                            (cm)</label>
                                                        <div class="next-input--stylized"><span
                                                                class="next-input-add-on next-input__add-on--before">cm</span>
                                                            <input type="text" name="wide" value="0"
                                                                class="next-input input-mask-number next-input--invisible"
                                                                im-insert="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-md-6">
                                                    <div class="form-group mb-3"><label>Height
                                                            (cm)</label>
                                                        <div class="next-input--stylized"><span
                                                                class="next-input-add-on next-input__add-on--before">cm</span>
                                                            <input type="text" name="height" value="0"
                                                                class="next-input input-mask-number next-input--invisible"
                                                                im-insert="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span> Attributes</span></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="add-new-product-attribute-wrap"><input type="hidden"
                                                name="is_added_attributes" id="is_added_attributes" value="0"> <a
                                                href="#" data-toggle-text="Cancel"
                                                class="btn-trigger-add-attribute">Add new attributes</a>
                                            <p>Adding new attributes helps the product to have many
                                                options, such as size or color.</p>
                                            <div class="list-product-attribute-values-wrap hidden">
                                                <div class="product-select-attribute-item-template">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><span> Product options</span></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="product-option-form-wrap">
                                        <div class="product-option-form-group">
                                            <div class="product-option-form-body mt-3 mb-3"><input type="hidden"
                                                    name="has_product_options" value="1">
                                                <div id="accordion-product-option" class="accordion">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6"><button type="button" id="add-new-option"
                                                        class="btn btn-info add-new-option">Add new
                                                        option</button></div>
                                                <div class="col-12 col-md-6 d-flex justify-content-end">
                                                    <div class="ui-select-wrapper d-inline-block" style="width: 200px;">
                                                        <select id="global-option" class="form-control ui-select is-valid"
                                                            aria-invalid="false">
                                                            <option value="-1">Select Global Option
                                                            </option>
                                                            <option value="1">Warranty</option>
                                                            <option value="2">RAM</option>
                                                            <option value="3">CPU</option>
                                                            <option value="4">HDD</option>
                                                        </select> <svg class="svg-next-icon svg-next-icon-size-16"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                                </path>
                                                            </svg></svg>
                                                    </div> <button type="button" role="button"
                                                        class="btn btn-info add-from-global-option ms-3">Add
                                                        Global Option</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div data-target="" class="wrap-relation-product" style="position: relative; zoom: 1;">
                                <div id="product-extras" class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span>Related products</span></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Related products</label>
                                            <input type="hidden" name="related_products" value="  ">
                                            <div class="box-search-advance product">
                                                <div>
                                                    <input type="text" class="next-input textbox-advancesearch"
                                                        placeholder="Search products" data-target="">
                                                </div>
                                                <div class="panel panel-default hidden">

                                                </div>
                                            </div>
                                            <div class="list-selected-products  hidden ">
                                                <div class="mt20"><label class="text-title-field">Selected
                                                        products:</label></div>
                                                <div class="table-wrapper p-none mt10 mb20 ps-relative">
                                                    <table class="table-normal">
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="control-label">Cross-selling products</label>
                                            <input type="hidden" name="cross_sale_products" value="  ">
                                            <div class="box-search-advance product">
                                                <div>
                                                    <input type="text" class="next-input textbox-advancesearch"
                                                        placeholder="Search products"
                                                        data-target="https://carzex.in/admin/ecommerce/products/get-list-product-for-search?product_id=1">
                                                </div>
                                                <div class="panel panel-default hidden">

                                                </div>
                                            </div>
                                            <div class="list-selected-products  hidden ">
                                                <div class="mt20"><label class="text-title-field">Selected
                                                        products:</label></div>
                                                <div class="table-wrapper p-none mt10 mb20 ps-relative">
                                                    <table class="table-normal">
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <script id="selected_product_list_template"
                                type="text/x-custom-template">
<tr>
<td class="width-60-px min-width-60-px">
<div class="wrap-img vertical-align-m-i">
<img class="thumb-image" src="__image__" alt="__name__" title="__name__">
</div>
</td>
<td class="pl5 p-r5 min-width-200-px">
<a class="hover-underline pre-line" href="__url__">__name__</a>
<p class="type-subdued">__attributes__</p>
</td>
<td class="pl5 p-r5 text-end width-20-px min-width-20-px">
<a href="#" class="btn-trigger-remove-selected-product" title="Delete" data-id="__id__">
<i class="fa fa-times"></i>
</a>
</td>
</tr>
</script>
                            </div>
                            <div id="advanced-sortables" class="meta-box-sortables">
                                <div id="faq_schema_config_wrapper" class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span>Product FAQs</span></h4>
                                    </div>
                                    <div class="widget-body"><a href="#" class="add-faq-schema-items ">Add item</a>
                                        <div class="faq-schema-items  hidden "><input type="hidden"
                                                name="faq_schema_config" value="[]">
                                            <div class="repeater-group">
                                                <div class="form-group mb-3">
                                                    <div>
                                                        <div class="repeater-item-group form-group mb-3">
                                                            <div class="form-group mb-3"><input
                                                                    name="faq_schema_config[0][0][key]" type="hidden"
                                                                    value="question"><label
                                                                    for="repeater_field_bed8c400241e1bbc7cbc3333e05a3c94"
                                                                    class="control-label required"
                                                                    aria-required="true">Question</label>
                                                                <textarea class="form-control" data-counter="1000" rows="1"
                                                                    id="repeater_field_bed8c400241e1bbc7cbc3333e05a3c94" name="faq_schema_config[0][0][value]" cols="50"></textarea>
                                                            </div>
                                                            <div class="form-group mb-3"><input
                                                                    name="faq_schema_config[0][1][key]" type="hidden"
                                                                    value="answer"><label
                                                                    for="repeater_field_f7272e7946d9d2e2c4ca096ef62ef547"
                                                                    class="control-label required"
                                                                    aria-required="true">Answer</label>
                                                                <textarea class="form-control" data-counter="1000" rows="1"
                                                                    id="repeater_field_f7272e7946d9d2e2c4ca096ef62ef547" name="faq_schema_config[0][1][value]" cols="50"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> <span type="button" class="remove-item-button"><i
                                                            class="fa fa-times"></i></span>
                                                </div> <button type="button" class="btn btn-info">
                                                    Add new
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="seo_wrap" class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span>Search Engine Optimize</span></h4>
                                    </div>
                                    <div class="widget-body"><a href="#" class="btn-trigger-show-seo-detail">Edit
                                            SEO meta</a>
                                        {{-- <div class="seo-preview">
                                            <p class="default-seo-description hidden">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Facilis, consequatur!
                                                &amp; degle</p>
                                            <div class="existed-seo-meta"><span class="page-title-seo">Lorem ipsum dolor
                                                    sit amet, consectetur adipisicing elit. Porro nisi corrupti
                                                    laborum.</span>
                                                <div class="page-url-seo ws-nm">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt?
                                                    </p>
                                                </div>
                                                <div class="ws-nm"><span style="color: #70757a;">Feb 01,
                                                        2024 - </span> <span class="page-description-seo"></span></div>
                                            </div>
                                        </div> --}}
                                        <div class="seo-edit-section hidden">
                                            <hr>
                                            <div class="form-group mb-3"><label for="seo_title" class="control-label">SEO
                                                    Title</label> <input class="form-control" id="seo_title"
                                                    placeholder="SEO Title" data-counter="120" name="seo_meta[seo_title]"
                                                    type="text"></div>
                                            <div class="form-group mb-3"><label for="seo_description"
                                                    class="control-label">SEO description</label>
                                                <textarea class="form-control" rows="3" id="seo_description" placeholder="SEO description" data-counter="160"
                                                    name="seo_meta[seo_description]" cols="50"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- todo right part start==================================================================================== -->

                        <div class="col-md-3 right-sidebar d-flex flex-column-reverse flex-md-column">
                            <div class="form-actions-wrapper">
                                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                                    <div class="widget-title">
                                        <h4><span>Publish</span></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="btn-set"><button type="submit" name="submit" value="save"
                                                class="btn btn-info"><i class="fa fa-save"></i> Save &amp; Exit
                                            </button>
                                            &nbsp;
                                            <button type="submit" name="submit" value="apply"
                                                class="btn btn-success"><i class="fa fa-check-circle"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="waypoint"></div>

                            </div>
                            <div class="form-side-meta-boxes">
                                <div id="top-sortables" class="meta-box-sortables">
                                    <div id="additional_product_fields" class="widget meta-boxes">
                                        <div class="widget-title">
                                            <h4><span>Addition Information</span></h4>
                                        </div>
                                        <div class="widget-body">
                                            <div class="form-group"><label for="layout"
                                                    class="control-label">Layout</label>
                                                <div class="ui-select-wrapper form-group "><select name="layout"
                                                        class="form-control ui-select">
                                                        <option value="inherit" selected="selected">Inherit
                                                        </option>
                                                        <option value="product-right-sidebar">Product
                                                            Right Sidebar</option>
                                                        <option value="product-left-sidebar">Product
                                                            Left Sidebar</option>
                                                        <option value="product-full-width">Product Full
                                                            Width</option>
                                                    </select> <svg class="svg-next-icon svg-next-icon-size-16"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                            </path>
                                                        </svg></svg></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        value="1" id="flexSwitchCheckChecked" name="is_popular">
                                                    <label class="form-check-label control-label"
                                                        for="flexSwitchCheckChecked">Is Popular? </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="status" class="control-label required"
                                                aria-required="true">Status</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="ui-select-wrapper form-group "><select class="form-control ui-select"
                                                id="status" name="status">
                                                <option value="published" selected="selected">Published
                                                </option>
                                                <option value="draft">Draft</option>
                                                <option value="pending">Pending</option>
                                            </select> <svg class="svg-next-icon svg-next-icon-size-16"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                    </path>
                                                </svg></svg></div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="store_id" class="control-label">Store</label>
                                        </h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="ui-select-wrapper form-group "><select class="form-control ui-select"
                                                id="store_id" name="store_id">
                                                <option value="0" selected="selected">Select a store...
                                                </option>
                                                <option value="1">GoPro</option>
                                                <option value="2">Global Office</option>
                                                <option value="3">Young Shop</option>
                                                <option value="4">Global Store</option>
                                                <option value="5">Robert’s Store</option>
                                                <option value="6">Stouffer</option>
                                                <option value="7">Asa</option>
                                                <option value="8">Dustin</option>
                                                <option value="9">UHzVjYoibdmFwT</option>
                                                <option value="10">CRzpPsvt</option>
                                            </select> <svg class="svg-next-icon svg-next-icon-size-16"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                    </path>
                                                </svg></svg></div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="is_featured" class="control-label">Is
                                                featured?</label></h4>
                                    </div>
                                    <div class="m-1 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" value="1"
                                            id="flexSwitchCheckChecked" name="is_featured">
                                        <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Is Popular? </label> -->
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="categories[]" class="control-label">Categories</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group form-group-no-margin ">
                                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1"
                                                style="padding: 0px;">
                                                <div id="mCSB_1"
                                                    class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                                                    style="max-height: 320px;" tabindex="0">
                                                    <div id="mCSB_1_container" class="mCSB_container"
                                                        style="position:relative; top:0; left:0;" dir="ltr">
                                                        <ul>
                                                            @foreach ($category as $cat)
                                                                <li value="{{ $cat->id }}">
                                                                    <label class="mb-2">
                                                                        <input type="checkbox" value="{{ $cat->id }}"
                                                                            name="categories">
                                                                        {{ $cat->name }}
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div id="mCSB_1_scrollbar_vertical"
                                                        class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical"
                                                        style="display: block;">
                                                        <div class="mCSB_draggerContainer">
                                                            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                style="position: absolute; min-height: 30px; display: block; height: 66px; max-height: 310px; top: 0px;">
                                                                <div class="mCSB_dragger_bar" style="line-height: 30px;">
                                                                </div>
                                                            </div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="brand_id" class="control-label">Brand</label>
                                        </h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="ui-select-wrapper form-group ">
                                            <select class="form-control ui-select" id="brand_id" name="brand_id">
                                                <option value="0"> No Brand </option>
                                                @foreach ($brands as $bitem)
                                                    <option value="{{ $bitem->id }}">
                                                        {{ $bitem->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                    </path>
                                                </svg>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="image" class="control-label">Featured image
                                                (optional)</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="image-box"><input type="hidden" name="featured_image"
                                                value="blogs/drill-camera-1.jpg" class="image-data">
                                            <div class="preview-image-wrapper ">
                                                {{-- <img
                                                    src="https://carzex.in/storage/blogs/drill-camera-1-150x150.jpg"
                                                    data-default="https://carzex.in/vendor/core/core/base/images/placeholder.png"
                                                    alt="Preview image" width="150" class="preview_image">  --}}
                                                <a title="Remove image" class="btn_remove_image"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                            <div class="image-box-actions"><a href="#" data-result="image"
                                                    data-action="select-image" data-allow-thumb="1"
                                                    class=" btn_gallery ">
                                                    Choose image
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="product_collections[]" class="control-label">Product
                                                collections</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group mb-3 form-group-no-margin ">
                                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_2"
                                                style="padding: 0px;">
                                                <div id="mCSB_2"
                                                    class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                                                    style="max-height: none;" tabindex="0">
                                                    <div id="mCSB_2_container"
                                                        class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                        style="position:relative; top:0; left:0;" dir="ltr">
                                                        <ul>
                                                            @foreach ($collections as $colitem)
                                                                <li>
                                                                    <input type="checkbox" name="product_collections"
                                                                        value="{{ $colitem->id }}"
                                                                        id="product_collections[]-{{ $colitem->id }}"
                                                                        class="styled">
                                                                    <label
                                                                        for="product_collections[]-{{ $colitem->id }}">
                                                                        {{ $colitem->name }}
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div id="mCSB_2_scrollbar_vertical"
                                                        class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark mCSB_scrollTools_vertical"
                                                        style="display: none;">
                                                        <div class="mCSB_draggerContainer">
                                                            <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                                style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                <div class="mCSB_dragger_bar" style="line-height: 30px;">
                                                                </div>
                                                            </div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="product_labels[]" class="control-label">Labels</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group mb-3 form-group-no-margin ">
                                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_3"
                                                style="padding: 0px;">
                                                <div id="mCSB_3"
                                                    class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                                                    style="max-height: none;" tabindex="0">
                                                    <div id="mCSB_3_container"
                                                        class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                        style="position:relative; top:0; left:0;" dir="ltr">
                                                        <ul>
                                                            @foreach ($labels as $labitem)
                                                                <li>
                                                                    <input type="checkbox" name="product_labels"
                                                                        value="{{ $labitem->id }}"
                                                                        id="product_labels[]-{{ $labitem->id }}"
                                                                        class="styled">
                                                                    <label for="product_labels[]-{{ $labitem->id }}">
                                                                        {{ $labitem->name }}
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div id="mCSB_3_scrollbar_vertical"
                                                        class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark mCSB_scrollTools_vertical"
                                                        style="display: none;">
                                                        <div class="mCSB_draggerContainer">
                                                            <div id="mCSB_3_dragger_vertical" class="mCSB_dragger"
                                                                style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                <div class="mCSB_dragger_bar" style="line-height: 30px;">
                                                                </div>
                                                            </div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="taxes[]" class="control-label">Taxes</label>
                                        </h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group mb-3 form-group-no-margin ">
                                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_4"
                                                style="padding: 0px;">
                                                <div id="mCSB_4"
                                                    class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                                                    style="max-height: none;" tabindex="0">
                                                    <div id="mCSB_4_container"
                                                        class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                        style="position:relative; top:0; left:0;" dir="ltr">

                                                        <ul>
                                                            @foreach ($taxes as $tax_item)
                                                                <li>
                                                                    <input type="checkbox" name="taxes"
                                                                        value="{{ $tax_item->id }}"
                                                                        id="taxes[]-item-{{ $tax_item->id }}"
                                                                        class="styled">
                                                                    <label for="taxes[]-item-1">{{ $tax_item->title }}
                                                                        ({{ $tax_item->percentage }}%)
                                                                    </label>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                    <div id="mCSB_4_scrollbar_vertical"
                                                        class="mCSB_scrollTools mCSB_4_scrollbar mCS-dark mCSB_scrollTools_vertical"
                                                        style="display: none;">
                                                        <div class="mCSB_draggerContainer">
                                                            <div id="mCSB_4_dragger_vertical" class="mCSB_dragger"
                                                                style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                <div class="mCSB_dragger_bar" style="line-height: 30px;">
                                                                </div>
                                                            </div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- todo main body part close -->


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addImageButton = document.querySelector('.js-btn-trigger-add-image');

            addImageButton.addEventListener('click', function() {
                const input = this.previousElementSibling;
                input.click();
            });

            document.querySelector('input[name="images[]"]').addEventListener('change', function() {
                const previewWrapper = document.querySelector('.preview-image-wrapper');
                const files = this.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    if (!file.type.startsWith('image/')) {
                        continue;
                    }

                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = 'Preview Image';
                        img.classList.add('preview_image');
                        previewWrapper.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.js-btn-trigger-add-image').forEach(function(element) {
                element.addEventListener('click', function() {
                    var input = this.parentElement.querySelector('input[type="file"]');
                    if (input) {
                        input.click();
                    }
                });
            });
        });
    </script>
@endsection
