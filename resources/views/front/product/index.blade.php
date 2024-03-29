@extends('front.layout.app')

@section('content')
    <main>



        <div class="productcategoryarea">
            <div class="container  bannertxt">
                <h1>CAR ANDROID TOUCH SCREEN</h1>
                <p><strong>Carzex</strong> provide High Quality Android Touchscreen for Car with built-in
                    multifunctional tasks. An entertainment unit used in cars to change the overlook of the dashboard
                    giving a premium feel to the car.</p>
            </div>
        </div>



        <div class="loca">
            <!-- <h6>HOME &gt; INTERIOR ACCESSORIES</h6> -->
            <h6>HOME > <SPAN>INTERIOR ACCESSORIES</SPAN></h6>
        </div>


        <div class="container-xxl mainproductarea">
            <div class="row productcatagpriycntn">
                <div class="col-md-3 col-sm-5 fortabhide">
                    <div class="productfilterarea border shadow rounded p-2 mb-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        PRICE
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="prcrange">
                                            <!-- <label for="customRange3" class="form-label">Example range</label> -->
                                            <input type="range" class="form-range" min="0" max="5"
                                                step="0.5" id="customRange3">

                                            <div class="d-flex justify-content-between mt-2">
                                                <p>Price: <span>₹250</span> — <span>₹270</span></p> <button
                                                    class="fbthl">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        CHOOSE YOUR BRAND
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="chbndcr">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>choose your car brand</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        CHOOSE YOUR CAR
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="chyurcr">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>choose your Car</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="feturedpdct">
                            <h5><strong>FEATURED</strong></h5>

                            <div class="fprdct">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="">
                                            <div class="imgfp border ">
                                                <img src="./assets/img/featured/featured1.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">

                                        <div class="fpbdy">
                                            <a href="#">
                                                Carzex Android 10 Universal...
                                            </a>
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="fprice">
                                            <p><span>MRP:</span> <span class="fdsm"
                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                            </p>
                                            <p><span>Price:</span> <span class="fdsm"
                                                    style="font-weight: 600!important; color:red; ">₹213</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="">
                                            <div class="imgfp border ">
                                                <img src="./assets/img/featured/featured3.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">

                                        <div class="fpbdy">
                                            <a href="#">
                                                Carzex Android 10 Universal...
                                            </a>
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="fprice">
                                            <p><span>MRP:</span> <span class="fdsm"
                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                            </p>
                                            <p><span>Price:</span> <span class="fdsm"
                                                    style="font-weight: 600!important; color:red; ">₹213</span> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <a href="">
                                            <div class="imgfp border ">
                                                <img src="./assets/img/featured/featured2.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">

                                        <div class="fpbdy">
                                            <a href="#">
                                                Carzex Android 10 Universal...
                                            </a>
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="fprice">
                                            <p><span>MRP:</span> <span class="fdsm"
                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                            </p>
                                            <p><span>Price:</span> <span class="fdsm"
                                                    style="font-weight: 600!important; color:red; ">₹213</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-7 formobilefullwidth">
                    <div class=" srtingfltr formobilehiden">
                        <p>Sort By:</p>
                        <div class="srtngader">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>default Sorting</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>



                    <div class="fordesktophide">

                        <div class="filterbxdfr">
                            <button class="btn btn-outline-info" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                                    class="fa-solid fa-filter"></i> Filter</button>

                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="mobilefilterarea">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        PRICE
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="prcrange">
                                                            <!-- <label for="customRange3" class="form-label">Example range</label> -->
                                                            <input type="range" class="form-range" min="0"
                                                                max="5" step="0.5" id="customRange3">

                                                            <div class="d-flex justify-content-between mt-2">
                                                                <p>Price: <span>₹250</span> — <span>₹270</span></p>
                                                                <button class="fbthl">Filter</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed show" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="true" aria-controls="collapseTwo">
                                                        CHOOSE YOUR BRAND
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="chbndcr">
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>choose your car brand</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="true" aria-controls="collapseThree">
                                                        CHOOSE YOUR CAR
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="chyurcr">
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>choose your Car</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feturedpdct">
                                            <h5><strong>FEATURED</strong></h5>

                                            <div class="fprdct">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="">
                                                            <div class="imgfp border ">
                                                                <img src="./assets/img/featured/featured1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col">

                                                        <div class="fpbdy">
                                                            <a href="#">
                                                                Carzex Android 10 Universal...
                                                            </a>
                                                            <div class="str">
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="fprice">
                                                            <p><span>MRP:</span> <span class="fdsm"
                                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                                            </p>
                                                            <p><span>Price:</span> <span class="fdsm"
                                                                    style="font-weight: 600!important; color:red; ">₹213</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="">
                                                            <div class="imgfp border ">
                                                                <img src="./assets/img/featured/featured3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col">

                                                        <div class="fpbdy">
                                                            <a href="#">
                                                                Carzex Android 10 Universal...
                                                            </a>
                                                            <div class="str">
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="fprice">
                                                            <p><span>MRP:</span> <span class="fdsm"
                                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                                            </p>
                                                            <p><span>Price:</span> <span class="fdsm"
                                                                    style="font-weight: 600!important; color:red; ">₹213</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="">
                                                            <div class="imgfp border ">
                                                                <img src="./assets/img/featured/featured2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col">

                                                        <div class="fpbdy">
                                                            <a href="#">
                                                                Carzex Android 10 Universal...
                                                            </a>
                                                            <div class="str">
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="fprice">
                                                            <p><span>MRP:</span> <span class="fdsm"
                                                                    style="text-decoration-line: line-through; color: aqua;">₹213</span>
                                                            </p>
                                                            <p><span>Price:</span> <span class="fdsm"
                                                                    style="font-weight: 600!important; color:red; ">₹213</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="srtbngdpdwn">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>default Sorting</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div>

                    <div class="ctgryarebox">
                        <div class="row flex flex-wrap">
                            <div class="col-md-3 col-sm-4 col-6 mb-3 ">
                                <div class="ctgpdbx border rounded shadow">
                                    <div class="card" aria-hidden="true">

                                        <div class="img-wrapper">
                                            <span class="badge rounded-pill text-bg-primary">-10%</span>
                                            <img src="./assets/img/s-product/product6.jpg" class="inner-img"
                                                alt="...">
                                        </div>


                                        <div class="card-body ">
                                            <h5 class="card-title"><a href="#">
                                                    Carzex Android 10 Universal 7 inch Screen Car Stereo with
                                                </a></h5>
                                            <p class="caxt">
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            </p>

                                            <div class="productprice">
                                                <p><span>MRP:</span> <span class="fdsm"
                                                        style="text-decoration-line: line-through; color: gray;">₹2135</span>
                                                </p>
                                                <p><span>Price:</span> <span class="fdsm"
                                                        style="color:#01a9f3;">₹2136</span> </p>
                                            </div>

                                            <div class="adtbynbtn">
                                                <button>Add To Cart</button>
                                                <button>Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-3">
                                <div class="ctgpdbx border rounded shadow">
                                    <div class="card" aria-hidden="true">

                                        <div class="img-wrapper">
                                            <span class="badge rounded-pill text-bg-primary">-10%</span>
                                            <img src="./assets/img/s-product/product6.jpg" class="inner-img"
                                                alt="...">
                                        </div>


                                        <div class="card-body ">
                                            <h5 class="card-title"><a href="#">
                                                    Carzex Android 10 Universal 7 inch Screen Car Stereo with
                                                </a></h5>
                                            <p class="caxt">
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            </p>

                                            <div class="productprice">
                                                <p><span>MRP:</span> <span class="fdsm"
                                                        style="text-decoration-line: line-through; color: gray;">₹2135</span>
                                                </p>
                                                <p><span>Price:</span> <span class="fdsm"
                                                        style="color:#01a9f3;">₹2136</span> </p>
                                            </div>

                                            <div class="adtbynbtn">
                                                <button>Add To Cart</button>
                                                <button>Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 mb-3">
                                <div class="ctgpdbx border rounded shadow">
                                    <div class="card" aria-hidden="true">

                                        <div class="img-wrapper">
                                            <span class="badge rounded-pill text-bg-primary">-10%</span>
                                            <img src="./assets/img/s-product/product6.jpg" class="inner-img"
                                                alt="...">
                                        </div>


                                        <div class="card-body ">
                                            <h5 class="card-title"><a href="#">
                                                    Carzex Android 10 Universal 7 inch Screen Car Stereo with
                                                </a></h5>
                                            <p class="caxt">
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            </p>

                                            <div class="productprice">
                                                <p><span>MRP:</span> <span class="fdsm"
                                                        style="text-decoration-line: line-through; color: gray;">₹2135</span>
                                                </p>
                                                <p><span>Price:</span> <span class="fdsm"
                                                        style="color:#01a9f3;">₹2136</span> </p>
                                            </div>

                                            <div class="adtbynbtn">
                                                <button>Add To Cart</button>
                                                <button>Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-3 col-sm-4 col-6 mb-3">
                                <div class="ctgpdbx border rounded shadow">
                                    <div class="card" aria-hidden="true">

                                        <div class="img-wrapper">
                                            <span class="badge rounded-pill text-bg-primary">-10%</span>
                                            <img src="./assets/img/s-product/product6.jpg" class="inner-img"
                                                alt="...">
                                        </div>


                                        <div class="card-body ">
                                            <h5 class="card-title"><a href="#">
                                                    Carzex Android 10 Universal 7 inch Screen Car Stereo with
                                                </a></h5>
                                            <p class="caxt">
                                            <div class="str">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            </p>

                                            <div class="productprice">
                                                <p><span>MRP:</span> <span class="fdsm"
                                                        style="text-decoration-line: line-through; color: gray;">₹2135</span>
                                                </p>
                                                <p><span>Price:</span> <span class="fdsm"
                                                        style="color:#01a9f3;">₹2136</span> </p>
                                            </div>

                                            <div class="adtbynbtn">
                                                <button>Add To Cart</button>
                                                <button>Buy Now</button>
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


    </main>
@endsection