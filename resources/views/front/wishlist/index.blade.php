@extends('front.layout.app')

@section('content')
    <main>

        <section class="sign-up-in">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="contact-detils">
                            <div class="loca">
                                <h6>HOME > <span>WISHLIST</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="main-content col-lg-12">


                        <div id="content" role="main">

                            <article class="post-2171 page type-page status-publish hentry">

                                <h2 class="entry-title">My Wishlit</h2><span class="vcard" style="display: none;"><span
                                        class="fn"><a href="#" title="Posts by Kumar Rajeev" rel="author">Kumar
                                            Rajeev</a></span></span><span class="updated"
                                    style="display:none">2022-12-13T10:57:49+05:30</span>
                                <div class="page-content">
                                    <div class="woocommerce">
                                        <div class="col-lg-10 mx-auto mb-4">
                                            <div class="align-left ">
                                                <div class="box-content">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    {{-- Display user information if logged in --}}
                                                    @if (Auth::guard('customer')->check())
                                                        <table
                                                            class="shop_table cart wishlist_table wishlist_view traditional responsive mobile">


                                                            <thead class="">
                                                                <tr>


                                                                    <th class="product-thumbnail"></th>

                                                                    <th class="product-name">
                                                                        <span class="nobr">
                                                                            Product </span>
                                                                    </th>

                                                                    <th class="product-price">
                                                                        <span class="nobr">
                                                                            Price </span>
                                                                    </th>


                                                                    <th class="product-stock-status">
                                                                        <span class="nobr">
                                                                            Stock status </span>
                                                                    </th>

                                                                    <th class="product-add-to-cart">
                                                                        <span class="nobr">
                                                                            Actions </span>
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody class="wishlist-items-wrapper">
                                                                @foreach ($wishlistItems as $item)
                                                                    <tr>
                                                                        <td>
                                                                            <img class="img-fluid img-responsive"
                                                                                src="{{ asset($item->images) }}"
                                                                                alt="{{ $item->name }}" width="250"
                                                                                height="250">
                                                                            {{ $item->name }}
                                                                        </td>
                                                                        <td>
                                                                            MRP: <span style="color: skyblue;">&#8377;
                                                                                {{ $item->price }}</span><br>
                                                                            <span style="color: red;">&#8377;
                                                                                {{ $item->sale_price }}</span>
                                                                        </td>
                                                                        <td>
                                                                            {{ $item->stock_status }}
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-default">Quick
                                                                                View</button>
                                                                            <button class="btn btn-info">Add to
                                                                                Cart</button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                {{-- <tr id="yith-wcwl-row-5893" data-row-id="5893">


                                                                    <td class="product-thumbnail">
                                                                        <div class="position-relative">
                                                                            <a
                                                                                href="https://carzex.com/product/airpro-luxury-mic-man-black-dashboard-car-air-freshener/">
                                                                                <img fetchpriority="high" decoding="async"
                                                                                    width="300" height="300"
                                                                                    src="https://carzex.com/wp-content/uploads/2021/12/CZ-MIC-MAN-BLACK-300x300.jpg"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="Dashboard Car Air Freshener"> </a>
                                                                            <a href="/wishlist/view/9PN16UULYHHJ/?remove_from_wishlist=5893"
                                                                                class="remove remove_from_wishlist"
                                                                                title="Remove this product"></a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="product-name">

                                                                        <a
                                                                            href="https://carzex.com/product/airpro-luxury-mic-man-black-dashboard-car-air-freshener/">Airpro
                                                                            Luxury Mic Man Black - Dashboard Car Air
                                                                            Freshener</a>


                                                                    </td>

                                                                    <td class="product-price">

                                                                        MRP: <del aria-hidden="true"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">₹</span>499.00</bdi></span></del>
                                                                        <span class="screen-reader-text">Original price was:
                                                                            ₹499.00.</span><ins aria-hidden="true"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">₹</span>399.00</bdi></span></ins><span
                                                                            class="screen-reader-text">Current price is:
                                                                            ₹399.00.</span>
                                                                    </td>


                                                                    <td class="product-stock-status">

                                                                        <span class="wishlist-in-stock text-v-dark">In
                                                                            Stock</span>
                                                                    </td>

                                                                    <td class="product-add-to-cart">

                                                                        <!-- Date added -->


                                                                        <!-- Add to cart button -->
                                                                        <div class="add-links-wrap">
                                                                            <div class="add-links clearfix">
                                                                                <a href="?add-to-cart=5893&amp;remove_from_wishlist_after_add_to_cart=5893&amp;wishlist_id=8179&amp;wishlist_token=9PN16UULYHHJ"
                                                                                    data-quantity="1"
                                                                                    class="viewcart-style-2 product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart alt button"
                                                                                    data-product_id="5893"
                                                                                    data-product_sku="CZ-MICMAN-PERFUME-BLACK"
                                                                                    aria-label="Add to cart: “Airpro Luxury Mic Man Black - Dashboard Car Air Freshener”"
                                                                                    aria-describedby="" rel="nofollow">Add
                                                                                    to cart</a>
                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5893 exists wishlist-fragment on-first-load"
                                                                                    data-fragment-ref="5893"
                                                                                    data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5893,&quot;parent_product_id&quot;:5893,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                    <!-- ADD TO WISHLIST -->

                                                                                    <!-- BROWSE WISHLIST MESSAGE -->
                                                                                    <div class="yith-wcwl-wishlistexistsbrowse"
                                                                                        data-product-id="5893"
                                                                                        data-original-product-id="5893">
                                                                                        <span class="feedback">
                                                                                            <i
                                                                                                class="yith-wcwl-icon fa fa-heart"></i>
                                                                                            The product is already in your
                                                                                            wishlist! </span>
                                                                                        <a href="https://carzex.com/wishlist/"
                                                                                            rel="nofollow"
                                                                                            data-title="Browse wishlist">
                                                                                            Browse wishlist </a>
                                                                                    </div>

                                                                                    <!-- COUNT TEXT -->

                                                                                </div>
                                                                                <div class="quickview" data-id="5893"
                                                                                    title="Quick View">Quick View</div>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Change wishlist -->

                                                                        <!-- Remove from wishlist -->

                                                                    </td>

                                                                </tr> --}}
                                                            </tbody>

                                                        </table>
                                                    @else
                                                        <div class="u-columns col2-set" id="customer_login">

                                                            <div class="row">
                                                                <div class=" col-md-6 col-12">

                                                                    <form action="{{ route('login_newUser') }}"
                                                                        method="post"
                                                                        class="woocommerce-form woocommerce-form-login login pr-lg-4 pe-0"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('post')
                                                                        <h3
                                                                            class="account-sub-title mb-2 font-weight-bold text-capitalize text-v-dark">
                                                                            Login</h3>
                                                                        <p
                                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                                            <label class="mb-1 font-weight-medium"
                                                                                for="username">Email
                                                                                address&nbsp;<span
                                                                                    class="required">*</span></label>
                                                                            <input type="text"
                                                                                class="woocommerce-Input woocommerce-Input--text input-text line-height-xl"
                                                                                name="email" id="username"
                                                                                autocomplete="" value="" required>
                                                                        </p>
                                                                        <p
                                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-2">
                                                                            <label class="mb-1 font-weight-medium"
                                                                                for="password">Password&nbsp;<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <span class="password-input">
                                                                                <input
                                                                                    class="woocommerce-Input woocommerce-Input--text input-text line-height-xl"
                                                                                    type="password" name="password"
                                                                                    id="password" autocomplete="" required>
                                                                                <span class="show-password-input"></span>
                                                                            </span>

                                                                        <div class="twy_signup_otp_mobile_form">
                                                                            <label class="twy_label twy_mobile_label"
                                                                                for="twy_mobile">Mobile <span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <div class="twy_mobile_field_container">
                                                                                <input type="text" name="twy_mobile"
                                                                                    class="twy_mobile_field twy_mobile"
                                                                                    required="" required>
                                                                            </div>
                                                                            <div class="twy_otp_message"></div>
                                                                        </div>
                                                                        </p>


                                                                        <p class="status" style="display: none;"></p>

                                                                        <div
                                                                            class="woocommerce-LostPassword lost_password d-flex flex-column flex-sm-row justify-content-between mb-4">
                                                                            <div class="porto-checkbox my-2 my-sm-0">
                                                                                <input type="checkbox" name="rememberme"
                                                                                    id="rememberme" value=""
                                                                                    class="porto-control-input woocommerce-form__input woocommerce-form__input-checkbox">
                                                                                <label class="porto-control-label no-radius"
                                                                                    for="rememberme">Remember me</label>
                                                                            </div>
                                                                            <a href="#"
                                                                                class="text-v-dark font-weight-semibold">Forgot
                                                                                Password?</a>
                                                                        </div>
                                                                        <p class="form-row mb-3 mb-lg-0 pb-1 pb-lg-0">
                                                                            <button type="submit"
                                                                                class="woocommerce-Button button login-btn btn-v-dark py-3 text-md w-100"
                                                                                name="login"
                                                                                value="Login">Login</button>
                                                                        </p>


                                                                    </form>
                                                                    <p class="form-row mb-3 mb-lg-0 pb-1 pb-lg-0">

                                                                        <button type="submit"
                                                                            class="woocommerce-Button button login-btn-otp btn-v-dark py-3 text-md w-100"
                                                                            name="login" value="">Login with
                                                                            Phone</button>
                                                                    </p>

                                                                </div>
                                                                <div class=" col-md-6 col-12">

                                                                    <form action="{{ route('register_newUser') }}"
                                                                        method="post" enctype="multipart/form-data"
                                                                        class="woocommerce-form woocommerce-form-register register pl-lg-4 pe-0">
                                                                        @csrf
                                                                        @method('post')
                                                                        <h3
                                                                            class="account-sub-title mb-2 font-weight-bold">
                                                                            Register
                                                                        </h3>

                                                                        <div class="clear"></div>


                                                                        <p
                                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                                            <label class="font-weight-medium mb-1"
                                                                                for="reg_username">Name&nbsp;<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <input type="text"
                                                                                class="woocommerce-Input woocommerce-Input--text line-height-xl input-text"
                                                                                name="name" id="reg_username"
                                                                                autocomplete="" value="">
                                                                        </p>


                                                                        <p
                                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                                            <label class="font-weight-medium mb-1"
                                                                                for="reg_email">Email address&nbsp;<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <input type="email"
                                                                                class="woocommerce-Input woocommerce-Input--text line-height-xl input-text"
                                                                                name="email" id="reg_email"
                                                                                autocomplete="" value="">
                                                                        <div class="twy_signup_otp_mobile_form">
                                                                            <label class="twy_label twy_mobile_label"
                                                                                for="twy_mobile">Mobile <span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <div class="twy_mobile_field_container">
                                                                                <input type="text" name="phone"
                                                                                    class="twy_mobile_field twy_mobile"
                                                                                    required="">

                                                                            </div>
                                                                            <div class="twy_otp_message"></div>
                                                                        </div>
                                                                        <div class="twy_signup_otp_mobile_form">
                                                                            <label class="twy_label twy_mobile_label"
                                                                                for="twy_mobile">Password <span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <div class="twy_mobile_field_container">
                                                                                <input type="password" name="password"
                                                                                    class="twy_mobile_field twy_mobile"
                                                                                    required="">

                                                                            </div>
                                                                            <div class="twy_otp_message"></div>
                                                                        </div>
                                                                        </p>


                                                                        <p class="emil-last">A password will be sent to
                                                                            your
                                                                            email
                                                                            address.</p>


                                                                        <div class="woocommerce-privacy-policy-text">
                                                                            <p>Your personal data will be used to support
                                                                                your
                                                                                experience throughout this website, to
                                                                                manage
                                                                                access
                                                                                to your account, and for other purposes
                                                                                described in
                                                                                our <a href="#"
                                                                                    target="_blank">privacy
                                                                                    policy</a>.</p>
                                                                        </div>
                                                                        <p class="status" style="display: none;"></p>

                                                                        <p class="woocommerce-form-row form-row mb-0">

                                                                            <button type="submit"
                                                                                class="woocommerce-Button button register-btn btn-v-dark text-md py-3 w-100"
                                                                                name=""
                                                                                value="">Register</button>
                                                                        </p>


                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>


                        <script nitro-exclude="">
                            document.cookie = 'nitroCachedPage=' + (!window.NITROPACK_STATE ? '0' : '1') + '; path=/; SameSite=Lax';
                        </script>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
