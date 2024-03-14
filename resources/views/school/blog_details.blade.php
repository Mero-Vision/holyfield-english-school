<!doctype html>
<html class="no-js" lang="zxx">
<x-meta title="{{ $blog->title }}" description="{!! implode(' ', array_slice(str_word_count(strip_tags($blog->description), 1), 0, 30)) !!}"
    image="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}" />
@livewireStyles
@include('school.layouts.header')



<body>
    <div class="preloader">

        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose">
            <i class="fal fa-times"></i>
        </button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit">
                <i class="fal fa-search"></i>
            </button>
        </form>
    </div>
    @include('school.layouts.nav')




    <div class="breadcumb-wrapper" data-bg-src="{{ url('assets/school/img/contact_us.jpeg') }}" data-overlay="title"
        data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{ url('assets/school/img/breadcumb_shape_1_1.png') }}"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="{{ url('assets/school/img/breadcumb_shape_1_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="{{ url('assets/school/img/breadcumb_shape_1_3.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Blog Details</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{ url('blogs') }}">Blog</a>
                    </li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author">
                                    <i class="far fa-user"></i>
                                    by {{ $blog->published_by }}
                                </a>
                                <a>
                                    <i class="fa-light fa-calendar-days"></i>
                                    {{ $blog->created_at->format('M j, Y') }}
                                </a>

                            </div>
                            <h2 class="blog-title">{{ $blog->title }}</h2>
                            <p>{!! $blog->description !!}</p>


                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">

                                <div class="col-md-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li>

                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                                target="_blank"> <i class="fab fa-facebook-f"></i></a>

                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&media={{ urlencode($blog->image_url) }}"
                                                target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form action="{{ url('blogs') }}" class="search-form">
                                <input type="text" placeholder="Search Product..." name="search_keyword">
                                <button type="submit">
                                    <i class="far fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @forelse ($recentBlogs as $recentBlog)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ url('blogs') }}/{{ $recentBlog->slug }}">
                                                <img src="{{ $recentBlog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="text-inherit"
                                                    href="{{ url('blogs') }}/{{ $recentBlog->slug }}">{{ $recentBlog->title }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="{{ url('blogs') }}/{{ $recentBlog->slug }}">
                                                    <i class="fal fa-calendar"></i>
                                                    {{ $recentBlog->created_at->format('M j, Y') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h5 class="text-center">No Recent Post</h5>
                                @endforelse


                            </div>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </section>




    @include('school.layouts.footer')
    @livewireScripts
</body>

</html>
