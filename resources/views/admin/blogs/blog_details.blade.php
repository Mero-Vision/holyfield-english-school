<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">

                        <div class="blog-view">
                            <div class="blog-single-post">
                                <a href="{{url('admin/cms/blogs/active-blogs')}}" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
                                <div class="blog-image">
                                    <a href="javascript:void(0);"><img alt src="{{ $blog->getFirstMediaUrl('blog_image') }}"
                                            class="img-fluid"></a>
                                </div>
                                <h3 class="blog-title">{{$blog->title}}
                                </h3>
                                <div class="blog-info">
                                    <div class="post-list">
                                        <ul>
                                            <li>
                                                <div class="post-author">
                                                    <a href="profile.html"><img src="{{ Avatar::create($blog->published_by)->toBase64() }}"
                                                            alt="Post Author"> <span>by {{$blog->published_by}} </span></a>
                                                </div>
                                            </li>
                                            <li><i class="feather-clock"></i>{{$blog->created_at->format('M j, Y')}}</li>
                                            
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>{!!$blog->description!!}</p>
                                    
                                </div>
                            </div>

                            <div class="card author-widget clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">About Author</h4>
                                </div>
                                <div class="card-body">
                                    <div class="about-author">
                                        <div class="about-author-img">
                                            <div class="author-img-wrap">
                                                <a href="profile.html"><img class="img-fluid" alt
                                                        src="{{ Avatar::create($blog->published_by)->toBase64() }}"></a>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <a href="" class="blog-author-name">{{$blog->published_by}}
                                               </a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


                            


                            

                           
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @include('admin.admin_layouts.footer2')

    </div>


    @include('admin.admin_layouts.footer')
</body>

</html>
