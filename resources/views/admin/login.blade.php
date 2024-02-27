<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Holy Field English School - Login</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    {{-- <style type="text/css">@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/400/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/500/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/700/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/900/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/900/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/900/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/greek/900/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/900/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/900/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:normal;font-weight:900;src:url(/cf-fonts/s/roboto/5.0.11/latin/900/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/400/italic.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/latin/400/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/greek/400/italic.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/400/italic.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/400/italic.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/400/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:400;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/400/italic.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/500/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/500/italic.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/500/italic.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/greek/500/italic.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/latin/500/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/500/italic.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:500;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/500/italic.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/vietnamese/700/italic.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/latin/700/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/greek-ext/700/italic.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/latin-ext/700/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic/700/italic.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/cyrillic-ext/700/italic.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Roboto;font-style:italic;font-weight:700;src:url(/cf-fonts/s/roboto/5.0.11/greek/700/italic.woff2);unicode-range:U+0370-03FF;font-display:swap;}</style> --}}

    <link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/feather.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/flags.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{url('assets/admin/img/login.png')}}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Holy Field School</h1>
                            <h2 class="mt-3">Sign in</h2>

                            <form action="{{url('login')}}" method="POST">
                                @csrf
                                <div class="form-group mb-0">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="email">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                   
                                </div>
                                 @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                <div class="form-group mt-4 mb-0">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="text" name="password">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                    
                                </div>
                                 @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                <div class="forgotpass mt-2">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                            <input type="checkbox" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ url('assets/admin/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/feather.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/script.js') }}"></script>


</body>

</html>
