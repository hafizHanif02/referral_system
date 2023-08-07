<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle "
                                    src="{{ asset('assets/images/faces-clipart/pic-1.png') }}" alt="">

                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">{{ $admin->username }}</h5>

                            </div>
                        </div>

                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/dashboard">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/sales-head">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Sales Head</span>
                    </a>

                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/sales-person">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Sales Person</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/customer">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-multiple"></i>
                        </span>
                        <span class="menu-title">Customer</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/setting">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings"></i>
                        </span>
                        <span class="menu-title">Setting</span>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                                href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event
                                            today </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle"
                                        src="{{ asset('assets/images/faces-clipart/pic-1.png') }}" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ $admin->username }}</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>

                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">




                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        style="
                    display: flex;
                    justify-content: space-between;
                ">
                                        <h4 class="card-title">Sales Person</h4>
                                        <!-- <a href="/admin/sales-head/new" class="nav-link btn btn-success create-new-button">+ Add new</a> -->

                                    </div>





                                    <div class="card mt-4 p-3">

                                        <form action="">



                                            <div class="row">
                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="text-white">ID</label>
                                                        <input type="text" name="s_id"
                                                            value="{{ $salesPerson['id'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Name</label>
                                                        <input type="text" value="{{ $salesPerson['name'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-white">Status</label>
                                                        @if ($salesPerson['isActive'])
                                                            <input type="text" value="Active"
                                                                class="form-control text-dark" readonly>
                                                        @else
                                                            <input type="text" value="Deactive"
                                                                class="form-control text-dark" readonly>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-white">Points</label>
                                                        <input type="text" value="{{ $salesPerson['points'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>

                                                </div>

                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="text-white">Email</label>
                                                        <input type="text" name="s_name"
                                                            value="{{ $salesPerson['email'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Phone</label>
                                                        <input type="text" value="{{ $salesPerson['phone'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Referral Code</label>
                                                        <input type="text" value="{{ $salesPerson['refCode'] }}"
                                                            class="form-control text-dark" readonly>
                                                    </div>



                                                </div>
                                            </div>



                                        </form>

                                    </div>


                                    <div class=" d-flex justify-content-between">

                                        <h4>Customers</h4>


                                    </div>






                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>


                                                    <th> ID </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Phone </th>
                                                    <th> Status </th>
                                                    <th> Referral Code </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            {{-- {{ $customers }} --}}
                                            @foreach ($customers as $person)
                                                <tbody>


                                                    <tr>
                                                        <td>
                                                            {{ $person->id }}
                                                        </td>
                                                        <td>
                                                            {{ $person->name }}
                                                        </td>

                                                        <td>
                                                            {{ $person->email }}
                                                        </td>

                                                        <td>
                                                            {{ $person->phone }}
                                                        </td>

                                                        <td>

                                                            @if ($person->isActive)
                                                                <div class="badge badge-outline-success">Active</div>
                                                            @else
                                                                <div class="badge badge-outline-danger">Deactive</div>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            {{ $person->refCode }}
                                                        </td>


                                                        {{-- <td><a class="btn btn-outline-primary"
                                                                href="/admin/sales-head/{{ $person->id }}/sales-person">details</a>
                                                        </td> --}}

                                                    </tr>

                                                    <tr>
                                                        <td>


                                                        </td>

                                                    </tr>

                                                </tbody>
                                            @endforeach

                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js') }}/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js') }}/progressbar.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
