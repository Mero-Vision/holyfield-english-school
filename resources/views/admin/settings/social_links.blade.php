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
                                <li class="breadcrumb-item active">Social Links</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="settings-menu-links">
                            <ul class="nav nav-tabs menu-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('admin/settings/general-settings')}}">General Settings</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('admin/settings/localization-settings')}}">Localization</a>
                                </li>
                                
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('admin/settings/social-links-settings')}}">Social Links</a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Social Link Settings</h5>
                                    </div>
                                    <div class="card-body pt-0">
                                        <form>
                                            <div class="settings-form">
                                                <div class="links-info">
                                                    <div class="row form-row links-cont">
                                                        <div class="form-group form-placeholder d-flex">
                                                            <button class="btn social-icon">
                                                                <i class="feather-facebook"></i>
                                                            </button>
                                                            <input type="text" class="form-control"
                                                                placeholder="https://www.facebook.com">
                                                            <div>
                                                                <a href="#" class="btn trash">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="links-info">
                                                    <div class="row form-row links-cont">
                                                        <div class="form-group form-placeholder d-flex">
                                                            <button class="btn social-icon">
                                                                <i class="feather-twitter"></i>
                                                            </button>
                                                            <input type="text" class="form-control"
                                                                placeholder="https://www.twitter.com">
                                                            <div>
                                                                <a href="#" class="btn trash">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="links-info">
                                                    <div class="row form-row links-cont">
                                                        <div class="form-group form-placeholder d-flex">
                                                            <button class="btn social-icon">
                                                                <i class="feather-youtube"></i>
                                                            </button>
                                                            <input type="text" class="form-control"
                                                                placeholder="https://www.youtube.com">
                                                            <div>
                                                                <a href="#" class="btn trash">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="links-info">
                                                    <div class="row form-row links-cont">
                                                        <div class="form-group form-placeholder d-flex">
                                                            <button class="btn social-icon">
                                                                <i class="feather-linkedin"></i>
                                                            </button>
                                                            <input type="text" class="form-control"
                                                                placeholder="https://www.linkedin.com">
                                                            <div>
                                                                <a href="#" class="btn trash">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="javascript:void(0);" class="btn add-links">
                                                    <i class="fas fa-plus me-1"></i> Add More
                                                </a>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="settings-btns">
                                                    <button type="submit" class="btn btn-orange">Submit</button>
                                                    <button type="submit" class="btn btn-grey">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
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
</body>

</html>
