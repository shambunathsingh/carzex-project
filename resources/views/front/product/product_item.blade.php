<div class="col-md-3 col-sm-4 col-6 mb-3">
    <div class="ctgpdbx border rounded shadow">
        <div class="card" aria-hidden="true">
            <div class="img-wrapper">
                <span class="badge rounded-pill text-bg-primary">-10%</span>
             @if ($item->images)
                  @php
                        // Split the string by '!' to separate the URL from the alt text
                        $imageParts = explode('!', $item->images);
                        // Take the first part and trim any extra whitespace
                        $imageUrl = trim($imageParts[0]);
                        // Further split by commas in case there are multiple URLs
                        $imageUrls = explode(',', $imageUrl);
                        // Get the first URL and trim any extra whitespace
                        $firstImageUrl = trim($imageUrls[0]);
                  @endphp
                  <img src="{{ $firstImageUrl }}" class="inner-img" alt="...">
            @else
                  <img src="{{ asset('./assets/img/s-product/no-image.png') }}" class="inner-img" alt="...">
            @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">
                                                            <a href="{{ route('single_product', ['slug' => $item->slug]) }}">
                        {{ implode(' ', array_slice(explode(' ', $item->name), 0, 3)) }}
                        @if (str_word_count($item->name) > 3)
                            ... <span style="color: blue;">Read More</span>
                        @endif
                    </a>
                </h5>
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
                    <p><span>MRP:</span> <span class="fdsm" style="text-decoration-line: line-through; color: gray;">&#8377;{{ $item->price }}</span></p>
                    <p><span>Price:</span> <span class="fdsm" style="color:#01a9f3;">&#8377;{{ $item->sale_price }}</span></p>
                </div>
                <div class="adtbynbtn">
                    <a href="{{ route('add_to_cart', ['slug' => $item->slug]) }}"><button>Add To Cart</button></a>
                    <a href="{{ route('add_to_cart', ['slug' => $item->slug]) }}"><button>Buy Now</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
