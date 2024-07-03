@extends('front.layout.app')

@section('content')
<style>
    .post-date.text-center {
        box-shadow: none !important;
    }

    .sidebar {
        box-shadow: none !important;
        padding: 25px 30px;
        border: 1px solid whitesmoke;
    }

    .containerblog {
        max-width: 100%;
        padding-left: 4vw;
        padding-right: 4vw;
    }

    .post-content .post-excerpt {
        color: black !important;
        word-spacing: 1px;
    }

    .blgstiky {
        position: sticky !important;
        overflow: auto !important;
    }

    .blgstiky::-webkit-scrollbar {
        display: none;
    }
</style>
<section class="blog">
    <div class="containerblog">
        <div class="row flex">
            <div class="col-md-12 col-12">
                <div class="contact-detils">
                    <div class="loca">
                        <h6>HOME > <span>BLOG</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                {{-- <div class="col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">21</span>
                                    <span class="mounth">Sep</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car Rear View Screens</h2>
                                    <p class="post-excerpt"> The car rearview screen is as important as the car
                                        reverse-view
                                        camera. Without this, the reverse view camera becomes non-functional. The
                                        rearview
                                        screen shows you everything the rearview camera captures. It helps you see
                                        the
                                        broad
                                        view of your car's backside and helps you park it safely. That's why a car's
                                        rearview
                                        screen is essential for the safety of your car. However, it is important to
                                        buy
                                        a
                                        good
                                        quality reverse view screen. There are many brands available these...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @foreach ($posts as $item)
                @php
                foreach ($postCategory as $cat) {
                if ($item->categories == $cat->id) {
                $cat_name = $cat->name;
                }
                }
                @endphp
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">{{ $item->created_at->format('d') }}</span>
                                    <span class="mounth">{{ substr($item->created_at->format('F'), 0, 3) }}</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <style>
                                    .post-content .entry-title {
                                        font-size: 1.5em;
                                        line-height: 1.3;
                                        font-weight: 600;
                                        margin-bottom: 1rem;
                                        word-break: break-word;
                                    }
                                </style>
                                <div class="post-content">
                                    <h2 class="entry-title">
                                        <a href="{{ route('singleblog', ['slug' => $item->slug]) }}">
                                            {{ $item->name }}
                                        </a>
                                    </h2>
                                    <div class="post-excerpt">
                                        {!! $item->content !!}
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top py-3 border-bottom">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Admin</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">{{ $cat_name }}</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    {{-- <button class="readmore">readmore...</button> --}}
                                    <a class="readmore" href="{{ route('singleblog', ['slug' => $item->slug]) }}">Read
                                        More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">28</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car Jump Starter</h2>
                                    <p class="post-excerpt"> A car jump starter is a portable battery that helps the
                                        vehicle in jump-starting. It does not require an extra car to supply power
                                        to
                                        charge the battery vehicle. It helps in boosting a weak power supply to
                                        reach a
                                        high point quickly. It is a small device but a very important one. You need
                                        the
                                        jump starter to be in working condition otherwise it will be difficult to
                                        start
                                        the car. You may have to push it or...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">28</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car Bumper Protector </h2>
                                    <p class="post-excerpt">Car is not only a medium to travel, but it is also an
                                        important asset. You don't want any dent on any part of the car. A car
                                        bumper is
                                        always exposed to scratches and dent that damages your car's look. It can
                                        collide with another car or some other object that might result in a big
                                        dent in
                                        the bumper of your car. Indian roads are always crowded with vehicles, and
                                        when
                                        you are driving at peak hours,...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">28</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car Parking Sensor</h2>
                                    <p class="post-excerpt">A car parking sensor helps you in identifying if there
                                        is
                                        any vehicle or any other item near the car when you are trying to park your
                                        car.
                                        It assists the driver to ensure the safety of the vehicle at the time of
                                        parking. This device is usually placed at the back of the car. It can sense
                                        if
                                        there is an object nearby and alert the driver. Car parking places in India
                                        are
                                        very congested, and the chances...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">28</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car Rear View Reverse Camera</h2>
                                    <p class="post-excerpt">Just like brakes and electronic stability control, a
                                        parking
                                        camera is another essential element of your car's safety. It helps you view
                                        everything behind your car, so you can avoid any accidents during parking
                                        the
                                        car or driving it away from parking. You must be aware that in India,
                                        parking
                                        spots are always very crowded, and you need to be careful while parking the
                                        car.
                                        A good quality rearview camera helps you park your car easily, and you
                                        don't...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">27</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">Car footstep sill plate</h2>
                                    <p class="post-excerpt">Car footstep sill plate protects your car door sill from
                                        scratches, normal wear, and tear. Sill plates are made of steel or aluminum,
                                        and
                                        they protect your car's door sill. You have to install this accessory where
                                        the
                                        door and frame meet. Apart from protecting your car's sill, a sill plate
                                        also
                                        adds to the beauty of the car. Some car footstep sill plates come with LED
                                        lights for a better view. Carzex footstep sill plates are durable and
                                        last...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">27</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">LED Headlight Bulb (Y8 H4 LED)</h2>
                                    <p class="post-excerpt">H4 LED bulbs come with two filaments, so you can choose
                                        them
                                        for either high or low-beam lights. These bulbs were initially used in
                                        European
                                        racing cars, which require very bright lights. You can choose the bulb to
                                        give
                                        white, blue, violet, or yellow light. These bulbs provide brighter
                                        visibility in
                                        all conditions. The H4 LED bulbs consume less power but provide brighter
                                        lights
                                        than halogens. The Carzex Y8 H4 LED is crafted to provide the brightest
                                        light
                                        without any...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">27</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">LED Headlight Bulb (Max 5 Cree)</h2>
                                    <p class="post-excerpt">Max Headlights are about five times brighter than their
                                        halogen counterparts. These lights provide a better performance, but they
                                        are
                                        more energy-efficient. However, despite being brighter, these LED lights
                                        provide
                                        low-glare output. These lights use two twin CREE lights that give an output
                                        of
                                        up to 250 lumens. LED headlight bulbs also last for years, and they are
                                        reliable.Carzex Max 5 LED lights are the best-performing LED lights
                                        available in
                                        the market these days. With these LED lights, Visibility...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                            <div class="blog-img">
                                <img src="Images/blog.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center">
                                    <span class="date">20</span>
                                    <span class="mounth">jul</span>
                                    <!-- <time datetime="2022-09-21">21/09/2022</time> -->
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title">LED Headlight Bulb (Fighter)</h2>
                                    <p class="post-excerpt">Car Headlights are one of the most important accessories
                                        for
                                        a car. It helps you drive the car safely at night. LED Headlights are more
                                        energy-efficient as compared to other types of headlights. It helps you save
                                        fuel thus saving your money. However, you need to ensure you are using a
                                        top-quality LED light as it is very important for your safety. A
                                        poor-quality
                                        LED light will affect your vision while driving the car at night. It is
                                        not...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="post-meta ">
                                        <span class="meta-author"><i class="far fa-user"></i>By <a
                                                href="https://www.carzex.com/author/admin/"
                                                title="Posts by Kumar Rajeev" rel="author">Kumar Rajeev</a></span>
                                        <span class="meta-cats"><i class="far fa-folder"></i><a
                                                href="https://www.carzex.com/category/car-comfort-safety/"
                                                rel="category tag">CAR COMFORT &amp; SAFETY</a></span>
                                        <span class="meta-comments"><i class="far fa-comments"></i><span>Comments
                                                Off</span></span>
                                    </div>
                                    <button class="readmore">readmore...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
            <div class="col-md-3 blgstiky">
                <div class="col-12">
                    <div class="sidebar">
                        <div class="blog-catagory">
                            <h4>BLOG CATEGORIES</h4>
                        </div>
                        <div class="blog-inner">
                            <ul>
                                @foreach ($postCategory as $catitem)
                                <li style="text-transform:uppercase;">
                                    <a href="{{ route('bologcategory', ['slug' => $catitem->slug]) }}">
                                        {{ $catitem->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>RECENT POSTS</h4>
                            {{-- <p>Car Rear View Screens</p>
                            <p class="date">21/09/2022</p> --}}
                        </div>
                        @foreach ($latest_posts as $post)
                        <div class="andrver">
                            <p>{{ $post->name }}</p>
                            <p class="date">{{ $post->created_at->format('d-m-Y') }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection