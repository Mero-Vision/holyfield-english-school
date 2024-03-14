<!doctype html>
<html class="no-js" lang="zxx">
@include('school.layouts.header')
<x-meta title="Holyfield English School"
           description="Welcome to Holyfield English School, where excellence in education meets a nurturing community environment. Established with a commitment to academic rigor, character development, and holistic growth."
           image="{{url('assets/school/img/logo.jpeg')}}" />

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




    <div class="breadcumb-wrapper" data-bg-src="{{ url('assets/school/img/teachers.jpeg') }}" data-overlay="title"
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
                <h1 class="breadcumb-title">Our Teachers</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Teachers</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="team-area overflow-hidden space">
        <div class="container">
            <div class="row align-items-center gy-4">

                @forelse ($teachers as $teacher)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="team-card style3">
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    @if ($teacher->getFirstMediaUrl('teacher_image', 'preview'))
                                        <img src="{{ $teacher->getFirstMediaUrl('teacher_image', 'preview') }}"
                                            alt="Teacher">
                                    @else
                                        <img src="{{ url('assets/school/img/avater.png') }}" alt="Another Image" style="width: 327px; height:250px;">
                                    @endif
                                </div>
                            </div>
                            <div class="team-hover-wrap">

                                <div class="team-content">
                                    <h3 class="team-title">
                                        <a href="">{{ $teacher->teacher_name }}</a>
                                    </h3>
                                    <span class="team-desig">{{ $teacher->position }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <img src="{{ url('assets/school/img/no-event.png') }}" class="mx-auto d-block"
                        style="max-width:20%" />
                    <h5 class="text-center">No Teacher Data</h5>
                @endforelse







            </div>
        </div>
    </div>









    @include('school.layouts.footer')
</body>

</html>
