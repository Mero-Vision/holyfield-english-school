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
                            <h3 class="page-title">Add Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                                <li class="breadcrumb-item active">Add Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Basic Details</span></h5>
                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select class="form-control select2">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms ">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control" type="date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mobile <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Joining Date <span class="login-danger">*</span></label>
                                                <input class="form-control" type="date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 local-forms">
                                            <div class="form-group">
                                                <label>Education Qualification <span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Education Qualification">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Address <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Enter Address">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Position <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Enter Position">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="input-images">
                                                <label class="active">Profile Image</label>
                                                <input type="file" class="filepond">
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
