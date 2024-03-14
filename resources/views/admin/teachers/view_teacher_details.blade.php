<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')
<link rel="stylesheet" href="{{ url('assets/admin/css/ckeditor.css') }}">

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Teachers Details</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/teachers/view')}}">Teachers</a></li>
                                    <li class="breadcrumb-item active">Teachers Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-info">
                                    <h4>Profile <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h4>
                                </div>
                                <div class="student-profile-head">
                                    <div class="profile-bg-img">
                                        <img src="{{ url('assets/admin/img/teachers.jpeg') }}" alt="Profile">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="profile-user-box">
                                                <div class="profile-user-img">

                                                    @if ($teacher->getFirstMediaUrl('teacher_image', 'preview'))
                                                        <img src="{{ $teacher->getFirstMediaUrl('teacher_image', 'preview') }}"
                                                            alt="Profile">
                                                    @else
                                                        <img src="{{ Avatar::create($teacher->teacher_name)->toBase64() }}"
                                                        alt="Profile">
                                                    @endif
                                                   

                                                </div>
                                                <div class="names-profiles">
                                                    <h4>{{ $teacher->teacher_name }}</h4>
                                                    <h5>{{ $teacher->position }}</h5>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="student-personals-grp">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="heading-detail">
                                                <h4>Personal Details :</h4>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-user"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Name</h4>
                                                    <h5>{{ $teacher->teacher_name }}</h5>
                                                </div>
                                            </div>

                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-phone-call"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Mobile</h4>
                                                    <h5>{{ $teacher->mobile_no }}</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-mail"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Email</h4>
                                                    <h5>{{ $teacher->email }}</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-user"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Gender</h4>
                                                    <h5>{{ $teacher->gender }}</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-calendar"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Date of Birth</h4>
                                                    <h5>{{ $teacher->dob }}</h5>
                                                </div>
                                            </div>

                                            <div class="personal-activity mb-0">
                                                <div class="personal-icons">
                                                    <i class="feather-map-pin"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Address</h4>
                                                    <h5>{{ $teacher->address }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <div class="student-personals-grp">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="heading-detail">
                                                <h4>About</h4>
                                            </div>
                                            <div class="hello-park">
                                                <h5>Joined
                                                    {{ \Carbon\Carbon::parse($teacher->joining_date)->diffForHumans() }}
                                                </h5>

                                            </div>
                                            <div class="hello-park">
                                                <h5>Education</h5>
                                                <div class="educate-year">
                                                    <p class="text-dark">* {{ $teacher->education_qualification }}
                                                    </p>
                                                </div>

                                            </div>
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

    <script>
        FilePond.parse(document.body);
    </script>


</body>

</html>
