<!doctype html>
<html class="no-js" lang="zxx">
@include('school.layouts.header')
@livewireStyles

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
                <h1 class="breadcumb-title">Blog Post</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">

                <div class="col-xxl-8 col-lg-7">

                    @forelse ($blogs as $blog)
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                        alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="">
                                        <i class="fa-light fa-user"></i>
                                        by {{ $blog->published_by }}
                                    </a>
                                    <a href="">
                                        <i class="fa-light fa-clock"></i>
                                        {{ $blog->created_at->format('M j, Y') }}
                                    </a>

                                </div>
                                <h2 class="blog-title">
                                    <a href="blog-details.html">{{ $blog->title }}</a>
                                </h2>
                                <p class="blog-text">{!! implode(' ', array_slice(str_word_count(strip_tags($blog->description), 1), 0, 30)) !!}...</p>
                                <a href="blog-details.html" class="link-btn">
                                    Read More Details<i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <img src="{{ url('assets/school/img/no-event.png') }}" class="mx-auto d-block"
                            style="max-width:20%" />
                        <h5 class="text-center">No Blogs</h5>
                    @endforelse




                    <div class="th-pagination">
                        <ul>
                            {{ $blogs->links('pagination::bootstrap-5') }}
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form action="{{url('blogs')}}" class="search-form">
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
                                            <a href="blog-details.html">
                                                <img src="{{ $recentBlog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="text-inherit"
                                                    href="blog-details.html">{{ $recentBlog->title }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html">
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
