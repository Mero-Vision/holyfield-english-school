<!doctype html>
<html class="no-js" lang="zxx">
@include('school.layouts.header')
<x-meta title="Holyfield English School"
           description="Welcome to Holyfield English School, where excellence in education meets a nurturing community environment. Established with a commitment to academic rigor, character development, and holistic growth."
           image="{{url('assets/school/img/logo.jpeg')}}" />
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
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="map-sec">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.053258031518!2d88.0195066!3d26.446279200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5a93ebf327915%3A0xf321f08977742cd2!2sHOLYFIELD%20ENGLISH%20SCHOOL!5e1!3m2!1sen!2snp!4v1710079015786!5m2!1sen!2snp"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="me-xxl-5 mt-60">
                        <div class="title-area mb-25">
                            <h2 class="border-title h3">Have Any Questions?</h2>
                        </div>
                        <p class="mt-n2 mb-25">
                            Have a inquiry or some feedback for us? Fill out the form<br>below to contact our team.
                        </p>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Our Address</p>
                                <a href="https://www.google.com/maps" class="contact-feature_link">
                                    Kachankawal-07
                                </a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Phone Number</p>
                                <a href="tel:+011456586986" class="contact-feature_link">
                                    Mobile:<span>(+977) - 9840393746</span>
                                </a>
                                <a href="tel:+011456586986" class="contact-feature_link">
                                    Phone: <span>(+00) - 12543 - 4165</span>
                                </a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Hours of Operation</p>
                                <span class="contact-feature_link">Sunday - Friday: 09:00 AM - 4:00 PM</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-wrap" data-bg-src="{{ url('assets/school/img/contact_bg_1.png') }}">
                        <span class="sub-title">Contact With Us!</span>
                        <h2 class="border-title">Get in Touch</h2>
                        <p class="mt-n1 mb-30 sec-text">Whether you have questions about our curriculum, admissions
                            process, extracurricular activities, or anything else, we're here to help.</p>
                        


                            @livewire('contact-us-livewire')
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('school.layouts.footer')
    @livewireScripts
</body>

</html>
