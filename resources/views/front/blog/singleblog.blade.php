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

    .author-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .author-info i {
        font-size: 24px;
        margin-right: 10px;
    }

    .author-info img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .related-posts h4 {
        margin-bottom: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 600;
    }

    .blgstiky {
        position: sticky !important;
        overflow: auto !important;
    }

    .blgstiky::-webkit-scrollbar {
        display: none;
    }
</style>
<section class="blog pt-3">
    <div class="containerblog">
        <div class="row flex">
            <div class="col-md-12 col-12">
                <div class="contact-detils ">
                    <div class="loca">
                        <h6 class="fs-6">HOME > <span> BLOG </span> > {{ $post->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-lg-12 col-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-date text-center ">
                                    <span class="date">{{ $post->created_at->format('d') }}</span>
                                    <span class="mounth">{{ substr($post->created_at->format('F'), 0, 3) }}</span>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="post-content">
                                    <h2 class="entry-title m-0">{{ $post->name }}</h2>
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="post-meta ">
                                            <span class="meta-author"><i class="far fa-user"></i>By <a
                                                    href="https://www.carzex.com/author/admin/"
                                                    title="Posts by {{ $post->author ?? 'Admin' }}" rel="author">{{
                                                    $post->author_name ?? 'Admin' }}</a></span>
                                            <span class="meta-cats"><i class="far fa-folder"></i><a
                                                    href="https://www.carzex.com/category/car-comfort-safety/"
                                                    rel="category tag">{{ $PostCategory->name }}</a></span>
                                            <span class="meta-comments"> <i class="far fa-comments"></i> <span>Comments
                                                    Off</span></span>
                                        </div>
                                    </div>
                                    <div class="post-excerpt">
                                        {!! $post->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="share d-flex align-items-center">
                                <div class="share-icon d-flex align-items-center">
                                    <i class="fa-solid fa-share"></i>
                                    <h3>Share on:</h3>
                                </div>
                                <div class="social">
                                    <ul class="d-flex">
                                        <li><a href="#" class="fb"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twt"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#" class="pint"><i class="fa-brands fa-pinterest"></i></a></li>
                                        <li><a href="#" class="enve"><i class="fa-regular fa-envelope"></i></a></li>
                                        <li><a href="https://www.linkedin.com" class="enve" aria-label="LinkedIn"
                                                style="background: #0077B5;"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="author-info">
                            <i class="fas fa-user"></i>
                            <img src="{{ $post->author_image_url ?? 'https://via.placeholder.com/50' }}" alt="Author">
                            <div>
                                <h4>{{ $post->author ?? 'Kumar Rajeev' }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="related-posts">
                    <h4>RELATED POSTS</h4>
                    <div class="post row pb-3">
                        @foreach ($relatedPosts as $related_post)
                        <div class="col-4">
                            <div class="datetimdi pb-4 d-flex">
                                <div class="post-date text-center px-3">
                                    <span class="date p-1">{{ $related_post->created_at->format('d') }}</span>
                                    <span class="mounth p-1">{{ substr($related_post->created_at->format('F'), 0, 3)
                                        }}</span>
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('singleblog', ['slug' => $related_post->slug]) }}">
                                        <h6 class="entry-title m-0">{{ $related_post->name }}</h6>
                                    </a>
                                    <p class="m-0 p-0">{{ Str::limit(strip_tags($related_post->content), 80) }}</p>
                                    <a href="{{ route('singleblog', ['slug' => $related_post->slug]) }}" class="m-0"
                                        style="color:#51c5d7;">read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-3 blgstiky">
                <div class="col-12">
                    <div class="sidebar">
                        <div class="blog-catagory">
                            <h4>BLOG CATEGORIES</h4>
                        </div>
                        <div class="blog-inner">
                            <ul>
                                @foreach ($postCategory as $catpost)
                                <li>
                                    <a href="{{ route('bologcategory', ['slug' => $catpost->slug]) }}">
                                        {{ $catpost->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>RECENT POSTS</h4>
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