<!doctype html>
<html class="no-js" lang="zxx">
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




    <div class="breadcumb-wrapper" data-bg-src="{{ url('assets/school/img/about-us.jpeg') }}" data-overlay="title"
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
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="sec-title text-center m-5">About Us</h2>

        <p class="text-center mx-auto d-block" style="max-width:80%">Welcome to Holyfield English School, a beacon of
            academic excellence set within a supportive and nurturing community. Our institution is founded upon a
            steadfast dedication to fostering not only academic achievement but also the holistic development of each
            student.</p>

        <p class="text-center mx-auto d-block" style="max-width:80%">At Holyfield, we believe in instilling values of
            integrity, resilience, and compassion alongside a rigorous academic curriculum. Our educators are committed
            to nurturing the individual talents and strengths of every student, empowering them to reach their fullest
            potential. With a focus on character development, critical thinking, and creativity, we strive to prepare
            our students to thrive in an ever-changing world. Through a blend of innovative teaching methods,
            extracurricular activities, and personalized attention, we cultivate a learning environment that inspires
            curiosity and fosters growth.</p>

        <p class="text-center mx-auto d-block mb-5" style="max-width:80%">Whether it's through our engaging classroom
            experiences, enriching extracurricular programs, or supportive community ethos, Holyfield English School is
            dedicated to providing a well-rounded education that equips students with the skills and values they need to
            succeed in life.

            For more information, contact us at 9840393746 or email info.holyfield.dipen@gmail.com. We're located in
            Kachankawal-07, and we look forward to welcoming you to our school community.</p>

    </div>





    @include('school.layouts.footer')
</body>

</html>
