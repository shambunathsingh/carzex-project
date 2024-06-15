@extends('front.layout.app')

@section('content')
    <main>

        <!--todo slider area start-->
        <section class="slider_section slider_two mb-50">
            <div class="slider_area owl-carousel">
                <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/carzex-banner-updated.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    <h2 style="Color:white;">Hight Quality</h2>
                                    <h1 style="Color:white;"> The Parts Of Shock Absorbers Assembly</h1>
                                    <a class="button" href="shop.html">shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider11.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    <h2>Special Offer</h2>
                                    <h1>Get &250 In Total Discount On A New Set Of Tries</h1>
                                    <a class="button" href="shop.html">shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider12.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    <h2>HP Racer Skutex</h2>
                                    <h1>Feel The Greatest Oil Power With Best One Oil</h1>
                                    <a class="button" href="shop.html">shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- todo slider area end-->


        <section class="Facilities">
            <div class="container">
                <div class="row textligenter">
                    @foreach ($feature as $feature_item)
                        <div class="col-md-3 col-12">
                            <div class="faci-inner d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('storage/product_features/' . $feature_item->image) }}"
                                        alt="">
                                </div>
                                <div class="iconinner">
                                    <h6>{{ $feature_item->name }}</h6>
                                    <p>{{ $feature_item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-3 col-12">
                        <div class="faci-inner d-flex align-items-center">
                            <div class="icon">
                                <img src="assets/img/distribution-1.png" alt="">
                            </div>
                            <div class="iconinner">
                                <h6>Easy Returns</h6>
                                <p>15 days Return Policy</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3 col-12">
                        <div class="faci-inner d-flex align-items-center">
                            <div class="icon">
                                <img src="assets/img/on-time.png" alt="">
                            </div>
                            <div class="iconinner">
                                <h6>On Time Delivery</h6>
                                <p>Time on delivery date</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3 col-12">
                        <div class="faci-inner d-flex align-items-center">
                            <div class="icon">
                                <img src="assets/img/security.png" alt="">
                            </div>
                            <div class="iconinner">
                                <h6>Genuine Products</h6>
                                <p>100% Guaranteed</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="Popular_Categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h1>Popular Categories</h1>
                        </div>
                    </div>
                    @foreach ($category as $cat_item)
                        <div class="col-md-3 col-12">
                            <div class="cateinner">
                                @php
                                    // Check if the category has a parent category
                                    $parentCategory = $cat_item->parent_id
                                        ? App\Models\Category\Category::find($cat_item->parent_id)
                                        : null;

                                    // Construct the URL based on whether the category has a parent
                                    $url = $parentCategory
                                        ? "product-category/{$parentCategory->slug}/{$cat_item->slug}"
                                        : "product-category/{$cat_item->slug}";
                                @endphp



                                <a href="{{ url($url) }}">
                                    <div class="cateImg">
                                        <img src="{{ asset('uploads/' . $cat_item->image) }}" alt="">
                                    </div>
                                    <div class="cateName text-center">
                                        <h6>{{ $cat_item->name }}</h6>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        {{-- <section class="tutorial">
            <div class="container">
                <div class="row">
                    @php
                        $headings = ['How to Order Products', 'Carzex Intro'];
                        $headingIndex = 0;
                    @endphp

                    @foreach ($video as $videoItem)
                        <div class="col-md-6 col-12">
                            <div class="tuto_heading text-center">
                                <h4>{{ $headings[$headingIndex] }}</h4>
                            </div>
                            <div class="video_content">
                                <div class="elementor-video-wrapper">
                                    <iframe src="https://www.youtube.com/embed/{{ $videoItem->embed_url }}" frameborder="0"
                                        allowfullscreen class="elementor-video"></iframe>
                                </div>
                            </div>
                        </div>
                        @php
                            $headingIndex++;
                            // Reset headingIndex if it exceeds the number of headings in the array
                            if ($headingIndex >= count($headings)) {
                                $headingIndex = 0;
                            }
                        @endphp
                    @endforeach

                </div>
            </div>
        </section> --}}




        <!--  todo modal area start-->
        <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product1.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product2.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal_tab_button">
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li>
                                                    <a class="nav-link active" data-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false"><img
                                                            src="assets/img/product/product1.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                        aria-controls="tab2" aria-selected="false"><img
                                                            src="assets/img/product/product2.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                        role="tab" aria-controls="tab3" aria-selected="false"><img
                                                            src="assets/img/product/product3.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                        aria-controls="tab4" aria-selected="false"><img
                                                            src="assets/img/product/product5.jpg" alt=""></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>Handbag feugiat</h2>
                                        </div>
                                        <div class="modal_price mb-10">
                                            <span class="new_price">$64.99</span>
                                            <span class="old_price">$78.99</span>
                                        </div>
                                        <div class="modal_description mb-15">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                                laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti
                                                nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam,
                                                rerum vel recusandae </p>
                                        </div>
                                        <div class="variants_selects">
                                            <div class="variants_size">
                                                <h2>size</h2>
                                                <select class="select_option">
                                                    <option selected value="1">s</option>
                                                    <option value="1">m</option>
                                                    <option value="1">l</option>
                                                    <option value="1">xl</option>
                                                    <option value="1">xxl</option>
                                                </select>
                                            </div>
                                            <div class="variants_color">
                                                <h2>color</h2>
                                                <select class="select_option">
                                                    <option selected value="1">purple</option>
                                                    <option value="1">violet</option>
                                                    <option value="1">black</option>
                                                    <option value="1">pink</option>
                                                    <option value="1">orange</option>
                                                </select>
                                            </div>
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="1" max="100" step="2" value="1"
                                                        type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal_social">
                                            <h2>Share this product</h2>
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="pinterest"><a href="#"><i
                                                            class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li class="google-plus"><a href="#"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  todo modal area end-->

    </main>
@endsection
