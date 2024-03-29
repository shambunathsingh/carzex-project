@extends('front.layout.app')

@section('content')
    <main>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="contact-detils">
                            <div class="loca">
                                <h6>HOME > <span> CONTACT</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="adress">
                            <h4>Address</h4>
                            <p>NW—1111, Vishnu Garden <br>
                                New Delhi-110018
                            </p>
                        </div>
                        <div class="email">
                            <h4>Email</h4>
                            <p>care@carzex.com</p>
                        </div>
                        <div class="phone">
                            <h4>Phone</h4>
                            <p>+91 97113 93973</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-head">
                            <h4>Contact us</h4>
                        </div>
                        <div class="contactfrom py-3">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Enter your full name</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="">
                                <label for="floatingPassword">Enter your email</label>
                            </div>
                            <div class="form-floating">
                                <label for="Order notes (optional)" class="form-label"></label>
                                <textarea name="" id="" cols="30" rows="4" placeholder="Write your message"></textarea>
                            </div>
                            <button class="submit mt-3">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="maparea py-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116649.83507956663!2d90.3074402408073!3d23.984921631555192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dafdd8aa72a1%3A0xe3a23793cb030fdb!2sGazipur%2C%20Bangladesh!5e0!3m2!1sen!2sin!4v1697108010125!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
