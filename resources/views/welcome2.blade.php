<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POWERS POLNEP</title>

    <!-- Scripts -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/background/logo.png')}}/">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center text-capitalize">WELCOME</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <h6 class="text-capitalize text-center">POWERS POLNEP</h6>
                                    </div>
                                </div>
                                @guest
                                <div class="row mb-5">
                                    <div class="col-md-6 text-center">
                                        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <a href="{{route('register')}}" class="btn btn-secondary">Register</a>
                                    </div>
                                </div>
                                @endguest
                                @auth
                                <div class="row mb-5">
                                    <div class="col-md-12 text-center">
                                        <a href="{{url('/home')}}" class="btn btn-info">Home</a>
                                    </div>
                                </div>
                                @endauth
                            </div>
                            <div class="card-footer">
                                <h6 class="text-center text-capitalize">Copyright &copy; POWERS POLNEP 2022<span class="text-uppercase"></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
