<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('/')}}/template/backend/vertical/assets/images/favicon.ico"> --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/background/logo.png')}}/">

        @yield('css')
        <!-- App css -->
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{asset('/')}}/template/backend/vertical/assets/js/modernizr.min.js"></script>

        
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.backend.sidebar')
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('/')}}/template/backend/vertical/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">{{Auth::user()->name}}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{route('logout')}}" class="dropdown-item notify-item"
                                        onclick="event.preventDefault();document.getElementById('logout').submit()">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                    <form id="logout" action="{{route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">@yield('page')</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">@yield('desc')</li>
                                    </ol>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Top Bar End -->
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- container -->
                </div> <!-- content -->
                <footer class="footer text-right">
                    2022 © powerspolnep.com
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @yield('jstop')
        
        <!-- jQuery  -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/popper.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/metisMenu.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/waves.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="{{asset('/')}}template/backend/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{asset('/')}}template/backend/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/jszip.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="{{asset('/')}}template/backend/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{asset('/')}}template/backend/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{asset('/')}}template/backend/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="{{asset('/')}}template/backend/plugins/datatables/dataTables.select.min.js"></script>
        @yield('jsmid')

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
        <!-- App js -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.core.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.app.js"></script>
        @yield('jsbot')
        {{-- Alert --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    @if (Session::has('success'))
    <script>
        Swal.fire({
        title: 'Success',
        text: '{{Session::get('success')}}',
        icon: 'success',
        confirmButtonText: 'OK'
        })
    </script>
    @elseif(Session::has('error'))
    <script>
        Swal.fire({
        title: 'Error',
        text: '{{Session::get('error')}}',
        icon: 'error',
        confirmButtonText: 'OK'
        })
    </script>
    @endif
    </body>
</html>
