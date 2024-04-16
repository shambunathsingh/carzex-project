<header class="header_area header_padding">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="top_inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="follow_us">
                            <label><span><a href="#" style="color:#51c5d7;font-weight: bold; cursor: pointer;">Order
                                        Tracking</a></span></label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="fa-solid fa-phone"></i> 9711393973</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> care@carzex.com</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-end">
                            <ul>

                                <li class="language"><a href="#"><img src="/assets/img/logo/languagee.png"
                                            alt="" width="16px">Language<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="/assets/img/logo/india.png" alt=""
                                                    width="17px">
                                                Indian English</a></li>
                                        <li><a href="#"><img src="/assets/img/logo/language.png" alt="">
                                                English</a>
                                        </li>
                                        <li><a href="#"><img src="/assets/img/logo/language2.png" alt="">
                                                Germany</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img class="mlogo" src="/assets/img/logo/logo.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="middel_right">
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="{{ route('myaccount') }}" class="profile-trigger"><span
                                        class="ion-android-person"></span></a>
                                {{-- <ul class="profilemenu">
                                    <li><a href="#"><i class="fa-regular fa-user"></i>Profile</a></li>
                                    <li><a href="http://localhost:8000/logout"><i class="fa-solid fa-key"></i>Logout</a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="header_wishlist">
                                <a href="javascript:void(0)"><span class="lnr lnr-heart"></span></a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><span class="lnr lnr-cart"></span></a>
                                <span class="cart_quantity">2</span>
                            </div>
                            @if (Auth::guard('customer')->check())
                                <div class="mini_cart_wrapper">
                                    <a href="{{ route('myaccount_logout') }}">
                                        <i class="fa-solid fa-right-from-bracket fa-2x"></i>
                                    </a>
                                </div>
                            @endif

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_close">
            <div class="cart_text">
                <h3>cart</h3>
            </div>
            <div class="mini_cart_close">
                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="cart_item">
            <div class="cart_img">
                <a href="#"><img src="/assets/img/s-product/product.jpg" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">JBL Flip 3 Splasroof Portable Bluetooth 2</a>

                <span class="quantity">Qty: 1</span>
                <span class="price_cart">$60.00</span>

            </div>
            <div class="cart_remove">
                <a href="#"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="cart_item">
            <div class="cart_img">
                <a href="#"><img src="/assets/img/s-product/product2.jpg" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">Koss Porta Pro On Ear Headphones </a>
                <span class="quantity">Qty: 1</span>
                <span class="price_cart">$69.00</span>
            </div>
            <div class="cart_remove">
                <a href="#"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_total">
                <span>Sub total:</span>
                <span class="price">$138.00</span>
            </div>
            <div class="cart_total mt-10">
                <span>total:</span>
                <span class="price">$138.00</span>
            </div>
        </div>

        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="cart.html">View cart</a>
            </div>
            <div class="cart_button">
                <a class="active" href="checkout.html">Checkout</a>
            </div>

        </div>

    </div>
    <!--mini cart end-->

    <!--header bottom satrt-->
    <div class="header_bottom bottom_four sticky-header text-bg-dark">
        <div class="container-xxl">
            <div class="row align-items-center justify-content-around m-auto">
                <div class="col-12">
                    <div class="main_menu header_position">
                        <nav>


                            <ul>
                                <!-- <li><a href="index.html">Home</a></li> -->

                                <li><a href="#"><span><img src=".//assets/img/icon/INTERIOR.png"
                                                alt=""></span>
                                        INTERIOR ACCESSORIES <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">CAR ANDROID TOUCH SCREENS</a></li>
                                        <li><a href="#">CAR FOOTMATS</a></li>
                                        <li><a href="#">CAR PERFUMES</a></li>
                                        <li><a href="#">CAR UTILITIES</a></li>
                                    </ul>
                                </li>

                                <li><a href=""><span><img src=".//assets/img/icon/EXTERIOR.png"
                                                alt=""></span>
                                        EXTERIOR ACCESSORIES<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">CAR BUMPER PROTECTORS</a></li>
                                        <li><a href="#">CHROME BEADING ROLLS</a></li>
                                        <li><a href="#">CAR EXHAUST & TIPS</a></li>
                                        <li><a href="#">CAR FANCY EXHAUSTS</a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><span><img src=".//assets/img/icon/CAR-COMFORT-SAFETY.png"
                                                alt=""></span> CAR COMFORT & SAFETY<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">

                                        <li class="dropend">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                CAR BODY COVERS
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">2×2 HEAVY CAR BODY COVERS</a></li>
                                                <li><a href="#">RED & BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">SIMPLE BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">METALLIC SILVER CAR BODY COVERS</a></li>
                                                <li><a href="#">NAVY BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">JUNGLE PRINT CAR BODY COVERS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="compare.html">CAR REAR VIEW CAMERA & SCREENS</a></li>
                                        <li><a href="privacy-policy.html">CAR REVERSE PARKING SENSORS</a></li>

                                    </ul>
                                </li>
                                <li><a href="#"><span><img src=".//assets/img/icon/CAR-LIGHTS.png"
                                                alt=""></span> CAR
                                        LIGHTINGS <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">CAR BAR LIGHTS</a></li>
                                        <li><a href="#">CAR EXTERIOR DECORATION LIGHTS</a></li>
                                        <li><a href="#">CAR FOOT STEP SILL PLATES</a></li>
                                        <li><a href="#">CAR INTERIOR DECORATION LIGHTS</a></li>
                                        <li><a href="#">CAR LED HEADLIGHT BULBS</a></li>

                                    </ul>
                                </li>

                                <li><a href="#"><span><img src=".//assets/img/icon/BIKE-ACCESSORIES.png"
                                                alt=""></span> BIKE ACCESSORIES<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">BIKE & SCOOTY BODY COVERS</a></li>
                                        <li><a href="#">BIKE LED LIGHTS
                                            </a></li>

                                    </ul>
                                </li>

                                <li><a href="#">SPECIAL OFFER</a>
                                </li>

                                <li class="crthlo" id="crthloid"><a href="{{ route('allproducts') }}"><span
                                            onclick="changeColor()" class="lnr lnr-cart"
                                            style="font-size: 18px; font-weight: bold;"></span></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
    <!-- todo Offcanvas mobile menu area menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="mblecrtgihgty">
        <div class="d-flex">
            {{-- @if (Auth::guard('customer')->check())
                <div class="header_wishlist mblehdrr">
                    <a href="{{ route('myaccount_logout') }}"><span class="ion-android-logout"></span></a>

                </div>
            @else
                <div class="header_wishlist mblehdrr">
                    <a href="{{ route('myaccount_logout') }}"><span class="ion-android-person"></span></a>

                </div>
            @endif --}}
            <div class="header_wishlist mblehdrr">
                <a href="{{ route('myaccount') }}"><span class="ion-android-person"></span></a>

            </div>
            <div class="header_wishlist mblehdrr">
                <a href="#"><span class="lnr lnr-heart"></span></a>
                <span class="wishlist_quantity">3</span>
            </div>
            <div class="mini_cart_wrapper mblehdrr">
                <a href="javascript:void(0)"><span class="lnr lnr-cart"></span></a>
                <span class="cart_quantity">2</span>
            </div>
            @if (Auth::guard('customer')->check())
                <div class="mini_cart_wrapper mblehdrr">
                    <a href="{{ route('myaccount_logout') }}">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </div>
            @endif
        </div>

        <div class="top_right text-end">
            <ul>
                <li class="language"><a href="#"><img src="/assets/img/logo/languagee.png" alt=""
                            width="16px">Language<i class="ion-ios-arrow-down"></i></a>
                    <ul class="dropdown_language">
                        <li><a href="#"><img src="/assets/img/logo/india.png" alt="" width="17px">
                                Indian English</a></li>
                        <li><a href="#"><img src="/assets/img/logo/language.png" alt=""> English</a>
                        </li>
                        <li><a href="#"><img src="/assets/img/logo/language2.png" alt="">
                                Germany</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="Offcanvas_menu">
        <div class="container-fluid" style="padding: 0px 0px!important;">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span> <a href="#"><img src="/assets/img/logo/logo.png" alt=""
                                    width="60px"></a></span>

                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                        <div class="top_right text-end">
                            <ul>
                                <!-- <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="checkout.html">Checkout </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li> -->
                                <!-- <li class="language"><a href="#"><img src="/assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="/assets/img/logo/language.png" alt=""> English</a></li>
                                    <li><a href="#"><img src="/assets/img/logo/language2.png" alt=""> Germany</a></li>
                                </ul>
                            </li> -->



                            </ul>
                        </div>
                        <div class="Offcanvas_follow">
                            <!-- <label>Join Us:</label> -->
                            <ul class="follow_link">
                                <li><a href="#"><i class="fa-solid fa-phone"></i> 9711393973</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> care@carzex.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">




                                <li class="menu-item-has-children">
                                    <a href="#">INTERIOR ACCESSORIES</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">CAR ANDROID TOUCH SCREENS</a></li>
                                        <li><a href="#">CAR FOOTMATS</a></li>
                                        <li><a href="#">CAR PERFUMES</a></li>
                                        <li><a href="#">CAR UTILITIES</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">EXTERIOR ACCESSORIES </a>
                                    <ul class="sub-menu">
                                        <li><a href="#">CAR BUMPER PROTECTORS</a></li>
                                        <li><a href="#">CHROME BEADING ROLLS</a></li>
                                        <li><a href="#">CAR EXHAUST & TIPS</a></li>
                                        <li><a href="#">CAR FANCY EXHAUSTS</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">CAR COMFORT & SAFETY</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">CAR BODY COVERS</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">2×2 HEAVY CAR BODY COVERS</a></li>
                                                <li><a href="#">RED & BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">SIMPLE BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">METALLIC SILVER CAR BODY COVERS</a></li>
                                                <li><a href="#">NAVY BLUE CAR BODY COVERS</a></li>
                                                <li><a href="#">JUNGLE PRINT CAR BODY COVERS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="compare.html">CAR REAR VIEW CAMERA & SCREENS</a></li>
                                        <li><a href="privacy-policy.html">CAR REVERSE PARKING SENSORS</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">CAR LIGHTINGS </a>
                                    <ul class="sub-menu">
                                        <li><a href="#">CAR BAR LIGHTS</a></li>
                                        <li><a href="#">CAR EXTERIOR DECORATION LIGHTS</a></li>
                                        <li><a href="#">CAR FOOT STEP SILL PLATES</a></li>
                                        <li><a href="#">CAR INTERIOR DECORATION LIGHTS</a></li>
                                        <li><a href="#">CAR LED HEADLIGHT BULBS</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">BIKE ACCESSORIES </a>
                                    <ul class="sub-menu">
                                        <li><a href="#">BIKE & SCOOTY BODY COVERS</a></li>
                                        <li><a href="#">BIKE LED LIGHTS</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">SPECIAL OFFER</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Offcanvas menu area end-->
</header>
