<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-links mb-4">
                            <li class="active"><a href="{{ url('admin/cms/blogs/active-blogs') }}">Active Blog</a></li>
                            <li><a href="{{ url('admin/cms/blogs/active-blogs') }}">Pending Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="{{ url('admin/cms/blogs/add-blog') }}" class="btn btn-primary btn-blog mb-3"><i
                                class="feather-plus-circle me-1"></i> Add New</a>
                    </div>
                </div>
                <div class="row">


                    @forelse ($blogs as $blog)
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid"
                                            src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                            alt="Post Image"></a>
                                    {{-- <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 132
                                    </div> --}}
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="#">
                                                    <img src="{{ Avatar::create($blog->published_by)->toBase64() }}"
                                                        alt="Post Author">
                                                    <span>
                                                        <span class="post-title">{{$blog->title}}</span>
                                                        <span class="post-date"><i class="far fa-clock"></i> {{$blog->created_at}}</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                   <p>{!! implode(' ', array_slice(str_word_count(strip_tags($blog->description), 1), 0, 20)) !!}...</p>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class="edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"><i
                                                    class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i>
                                                Delete</a>
                                        </div>
                                        <div class="text-end inactive-style">
                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteNotConfirmModal"><i
                                                    class="feather-eye-off me-1"></i>
                                                Inactive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <img src="{{ url('assets/school/img/Empty-rafiki.png') }}" class="img-fluid mx-auto d-block"
                            alt="Empty Data" style="max-width: 40%" />
                    @endforelse











                </div>




                <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content doctor-profile">
                            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="feather-x-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="delete-wrap text-center">
                                    <div class="del-icon"><i class="feather-x-circle"></i></div>
                                    <h2>Sure you want to delete</h2>
                                    <div class="submit-section">
                                        <a href="blog.html" class="btn btn-success me-2">Yes</a>
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
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
