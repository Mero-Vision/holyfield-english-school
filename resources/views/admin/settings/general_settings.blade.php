<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('admin/settings/general-settings')}}">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/settings/localization-settings')}}">Localization</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/settings/social-links-settings')}}">Social Links</a>
                        </li>
                       
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Website Basic Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Website Name <span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Website Name">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Address Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Address Line 1 <span class="star-red">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Address Line 1">
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City <span class="star-red">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State/Province <span class="star-red">*</span></label>
                                                    <select class="select form-control">
                                                        <option selected="selected">Select</option>
                                                        <option>Koshi Pradesh</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
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
</body>

</html>
