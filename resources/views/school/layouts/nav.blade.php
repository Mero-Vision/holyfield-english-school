{{-- -------------- Mobile Nav ---------------- --}}
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle">
            <i class="fal fa-times"></i>
        </button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/school/img/logo.jpeg') }}" alt="Holy Field English School Logo"
                    style="max-width: 70px;">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>

                </li>
                <li>
                    <a href="{{ url('/') }}">Home</a>

                </li>

                <li>
                    <a href="#">Teachers</a>

                </li>
                <li>
                    <a href="#">Gallery</a>

                </li>
                <li>
                    <a href="#">Events</a>

                </li>


                <li>
                    <a href="#">Blog</a>

                </li>
                <li>
                    <a href="#">About Us</a>

                </li>
                <li>
                    <a href="{{ url('/') }}">Login</a>

                </li>
            </ul>
        </div>
    </div>
</div>
{{-- -------------- Mobile Nav ---------------- --}}

<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li>
                                <i class="far fa-phone"></i>
                                <a href="tel:+11156456825">+111 (564) 568 25</a>
                            </li>
                            <li class="d-none d-xl-inline-block">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:info@holyfield.com">info@holyfield.com</a>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                Sun - Fri: 9:00 AM - 4:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links header-right">
                        <ul>
                            <li>
                                <div class="header-social">
                                    <span class="social-title">Follow Us:</span>
                                    <a href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com/">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.youtube.com/">
                                        <i class="fab fa-youtube"></i>
                                    </a>

                                </div>
                            </li>
                            <li class="d-none d-lg-inline-block mx-3">
                                <i class="far fa-user"></i>
                                <a href="{{ url('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}" style="display: inline-block; text-decoration: none;">
                                <img src="{{ url('assets/school/img/logo.jpeg') }}" alt="Holy Field English School Logo"
                                    style="max-width: 70px;">
                                <h5 style="display: inline-block; vertical-align: middle; margin-left: 5px;"
                                    class="mt-3">Holy Field
                                    English School</h5>
                            </a>

                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>

                                        </li>

                                        <li>
                                            <a href="#">Teachers</a>

                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>

                                        </li>
                                        <li>
                                            <a href="#">Events</a>

                                        </li>


                                        <li>
                                            <a href="#">Blog</a>

                                        </li>
                                        <li>
                                            <a href="#">About Us</a>

                                        </li>

                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    <button type="button" class="icon-btn searchBoxToggler">
                                        <i class="far fa-search"></i>
                                    </button>

                                    <a href="{{url('contact')}}" class="th-btn ml-25">
                                        Contact Us <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
