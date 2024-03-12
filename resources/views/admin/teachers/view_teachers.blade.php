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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="student-group-form">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Email ...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Phone ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">





                    <div class="card card-table table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Profile Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Mobile No</th>
                                    <th>Address</th>

                                </tr>

                            </thead>
                            <tbody>

                                @forelse ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->id }}</td>
                                        <td>

                                            @if ($teacher->getFirstMediaUrl('teacher_image', 'preview'))
                                                <img src="{{ $teacher->getFirstMediaUrl('teacher_image', 'preview') }}"
                                                    alt="Teacher" style="max-width: 60px;">
                                            @else
                                                <img src="{{ url('assets/school/img/avater.png') }}" alt="Another Image"
                                                    style="max-width: 60px;">
                                            @endif
                                        </td>


                                        <td>{{ $teacher->teacher_name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->dob }}</td>
                                        <td>{{ $teacher->mobile_no }}</td>


                                        <td>{{ $teacher->address }}</td>

                                    </tr>
                                @empty
                                <td colspan="7">
                                    <img src="{{ url('assets/school/img/Empty-rafiki.png') }}"
                                        class="img-fluid mx-auto d-block" alt="Empty Data" style="max-width: 40%" />
                                </td>
                                @endforelse

                            </tbody>

                        </table>
                        {{ $teachers->links('pagination::bootstrap-5') }}












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
