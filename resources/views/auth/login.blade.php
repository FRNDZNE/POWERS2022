<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('/')}}/template/backend/vertical/assets/images/favicon.ico"> --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/background/logo.png')}}/">


        <!-- App css -->
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{asset('/')}}/template/backend/vertical/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{asset('/')}}/background/background.JPG');background-size: cover;"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-block">
                    <div class="account-box">
                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="{{url('/')}}" class="text-success">
                                    <span><img src="{{asset('/')}}/background/logo.svg" alt="LOGO"></span>
                                </a>
                            </h2>
                            <form class="" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress"  placeholder="Masukan Email" name="email" @error('name') is-invalid @enderror>
                                    </div>
                                </div>
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password"  id="password" placeholder="Masukan Password" name="password" @error('password') is-invalid @enderror>
                                    </div>
                                </div>
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="" name="remember">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">New Ranger ? <a href="{{route('register')}}" class="text-dark m-l-5"><b>Daftar</b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p class="account-copyright">2022 © POWERS - powerspolnep.com</p>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/popper.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/metisMenu.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/waves.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.core.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.app.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        @error('email')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('password')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
    </body>
</html>