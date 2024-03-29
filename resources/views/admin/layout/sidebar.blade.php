<div class="slide-panel">
    <div class="row">
        <div class="sidenav">
            <ul class="sidenav-item">
                <li class="mainlink active"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i><span
                            class="link-name">
                            dashboard</span></a></a>
                </li>
                <li class="mainlink "><a class="collapsed" href="{{ route('admin.page.pages') }}"><i
                            class="fa-solid fa-book"></i><span class="link-name">pages</span></a>

                </li>

                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse1"
                        aria-expanded="false"><i class="fa fa-edit"></i><span class="link-name">blogs</span><span
                            class="left-angle"><i class="fa-solid fa-angles-down"></i></span></a>


                <li class="mb-0">
                    <div class="collapse" id="orders-collapse1" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="{{ route('admin.blog.posts') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">posts</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.blog.categories.categories') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">categories</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.blog.tag.tags') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">tags</a>
                            </li>

                        </ul>
                    </div>
                </li>
                </li>




                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse2"
                        aria-expanded="false"><i class="far fa-question-circle"></i><span
                            class="link-name">faq</span><span class="left-angle"><i
                                class="fa-solid fa-angles-down"></i></span></a>


                <li class="mb-0">
                    <div class="collapse" id="orders-collapse2" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="{{ route('admin.faq.faqs') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">All</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.faq-categories.faqs_category') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Categories</a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>





                <li class="mainlink"><a href="#"><i class="far fa-newspaper"></i><span
                            class="link-name">newslatters</span></a>
                </li>





                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse3"
                        aria-expanded="false"><i class="fa fa-shopping-cart"></i><span
                            class="link-name">ecommerce</span><span class="left-angle"><i
                                class="fa-solid fa-angles-down"></i></span></a>





                <li class="mb-0">
                    <div class="collapse" id="orders-collapse3" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="far fa-chart-bar"></i></span>New1</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-bolt"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-shopping-bag"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-shopping-bag"></i></span>
                                    Returned</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-book"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-book"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_features') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-globe"></i></span>
                                    Product features</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-camera"></i></span>
                                    Products</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_option') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-database"></i></span>
                                    Product options</a>
                            </li>
                            {{-- <li class="sublink"><a href="#" --}}
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_categories') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-archive"></i></span>
                                    Product Categories</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_tags') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-tag"></i></span>
                                    Product Tags</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_attributes') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-glass-martini"></i></span>
                                    Product attributes</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.brands') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-registered"></i></span>
                                    Brands</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_collection') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-file-excel"></i></span>
                                    Product Collection</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.product_label') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-tags"></i></span>
                                    Product Labels</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-camera"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.discounts') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-gift"></i></span>
                                    Discounts</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-users"></i></span>
                                    Customers</a>
                            </li>
                            <li class="sublink"><a href="{{ route('admin.ecommerce.taxes') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-money-check-alt"></i></span>
                                    Taxes</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-tag"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-glass-martini"></i></span>
                                    Returned</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-registered"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-file-excel"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-tags"></i></span>
                                    Returned</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-comments"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-shipping-fast"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-people-carry"></i></span>
                                    Returned</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-gift"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa fa-users"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-money-check-alt"></i></span>
                                    Returned</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-cogs"></i></span>
                                    Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fas fa-plus"></i></span>
                                    Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded"><span><i
                                            class="fa-solid fa-chart-pie"></i></span>
                                    Shipped</a>
                            </li>

                        </ul>
                    </div>
                </li>
                </li>




                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse4" aria-expanded="false"><i
                            class="fas fa-project-diagram"></i><span class="link-name">marketplace</span><span
                            class="left-angle"><i class="fa-solid fa-angles-down"></i></span></a>


                <li class="mb-0">
                    <div class="collapse" id="orders-collapse4" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>




                <li class="mainlink"><a href="{{ route('admin.homepage') }}"><i class="far fa-image"></i><span
                            class="link-name">simple
                            sliders</span></a></li>






                <li class="mainlink"><a href="#"><i class="far fa-envelope"></i><span
                            class="link-name">contact</span></a>
                </li>





                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse5" aria-expanded="false"><i
                            class="fas fa-credit-card"></i><span class="link-name">payment</span><span
                            class="left-angle"><i class="fa-solid fa-angles-down"></i></span></a>

                <li class="mb-0">
                    <div class="collapse" id="orders-collapse5" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>

                </li>




                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse6" aria-expanded="false"><i class="fas fa-globe"></i><span
                            class="link-name">location</span><span class="left-angle"><i
                                class="fa-solid fa-angles-down"></i></span></a>
                <li class="mb-0">
                    <div class="collapse" id="orders-collapse6" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>



                </li>



                <li class="mainlink"><a href="{{ route('admin.media') }}"><i class="far fa-images"></i><span
                            class="link-name">media</span></a>
                </li>




                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse7" aria-expanded="false"><i class="fas fa-language"></i><span
                            class="link-name">translation</span><span class="left-angle"><i
                                class="fa-solid fa-angles-down"></i></span></a>


                <li class="mb-0">
                    <div class="collapse" id="orders-collapse7" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>


                <li class="mainlink"><a class="collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse8" aria-expanded="false"><i
                            class="fa fa-user-shield"></i><span class="link-name">plate
                            administration</span><span class="left-angle"><i
                                class="fa-solid fa-angles-down"></i></span></a>


                <li class="mb-0">
                    <div class="collapse" id="orders-collapse8" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li class="sublink"><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>
            </ul>
        </div>
    </div>
</div>