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
                                    <h6>HOME > <span>BLOGS</span> > CATEGORIES</h6>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-9">
                        @foreach ($relatedPosts as $item)
                        @php
                        // Assuming categories is a single category ID in the Post model
                        $cat_name = $postCategories->firstWhere('id', $item->categories)->name ?? 'Uncategorized';
                        @endphp
                        <div class="col-lg-12 col-12">
                              <div class="content">
                                    <div class="row">
                                          <div class="col-md-1">
                                                <div class="post-date text-center">
                                                      <span class="date">{{ $item->created_at->format('d') }}</span>
                                                      <span class="mounth">{{ substr($item->created_at->format('F'), 0,
                                                            3) }}</span>
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
                                                            <a
                                                                  href="{{ route('singleblog', ['slug' => $item->slug]) }}">
                                                                  {{ $item->name }}
                                                            </a>
                                                      </h2>
                                                      <div class="post-excerpt">
                                                            {!! $item->content !!}
                                                      </div>
                                                </div>
                                                <div
                                                      class="d-flex justify-content-between border-top py-3 border-bottom">
                                                      <div class="post-meta">
                                                            <span class="meta-author"><i class="far fa-user"></i> By <a
                                                                        href="https://www.carzex.com/author/admin/"
                                                                        title="Posts by Admin"
                                                                        rel="author">Admin</a></span>
                                                            <span class="meta-cats"><i class="far fa-folder"></i><a
                                                                        href="#" rel="category tag">{{ $cat_name
                                                                        }}</a></span>
                                                            <span class="meta-comments"><i
                                                                        class="far fa-comments"></i><span>Comments
                                                                        Off</span></span>
                                                      </div>
                                                      <a class="readmore"
                                                            href="{{ route('singleblog', ['slug' => $item->slug]) }}">Read
                                                            More</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        @endforeach
                  </div>
                  <div class="col-md-3 blgstiky">
                        <div class="col-12">
                              <div class="sidebar">
                                    <div class="blog-catagory">
                                          <h4>BLOG CATEGORIES</h4>
                                    </div>
                                    <div class="blog-inner">
                                          <ul>
                                                @foreach ($postCategories as $catitem)
                                                <li> <a href="{{ route('bologcategory', ['slug' => $catitem->slug]) }}">
                                                            {{ $catitem->name }}</a></li>
                                                @endforeach
                                          </ul>
                                    </div>
                                    <div class="recent-post">
                                          <h4>RECENT POSTS</h4>
                                    </div>
                                    @foreach ($latestPosts as $post)
                                    <div class="andrver">
                                          <p><a href="{{ route('singleblog', ['slug' => $post->slug]) }}">{{ $post->name
                                                      }}</a></p>
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