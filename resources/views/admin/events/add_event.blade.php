<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')
<link rel="stylesheet" href="{{ url('assets/admin/css/fullcalendar.min.css') }}">

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Event</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/cms/events/view')}}">Events</a></li>
                                <li class="breadcrumb-item active">Add Event</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{url('admin/cms/events/add')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Event Information</span></h5>
                                        </div>
                                       
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Event Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="event_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Event Date <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" name="event_date"
                                                    placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12">
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
    <script src="{{ url('assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/fullcalendar.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.fullcalendar.js') }}"></script>
</body>

</html>
