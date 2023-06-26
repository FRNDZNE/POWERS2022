<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Register New Ranger</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('/')}}/template/backend/vertical/assets/images/favicon.ico"> --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/background/logo.png')}}/">


        <!-- Bootstrap fileupload css -->
        <link href="{{asset('/')}}/template/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- Dropzone css -->
        <link href="{{asset('/')}}/template/backend/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}/template/backend/vertical/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{asset('/')}}/template/backend/vertical/assets/js/modernizr.min.js"></script>
    </head>
    <body class="account-pages">
        <!-- Begin page -->
        {{-- <div class="accountbg" style="background: url('{{asset('/')}}/template/backend/vertical/assets/images/bg-2.jpg');background-size: cover;"></div> --}}
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
                            <form class="form-horizontal" action="{{route('register')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                {{-- NIM --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="nim">NIM</label>
                                        <input class="form-control" type="number" min="0" id="nim" placeholder="Masukan NIM" name="nim" @error('nim') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- END NIM --}}
                                {{-- NAME --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Nama Lengkap</label>
                                        <input class="form-control" type="text" id="username" placeholder="Masukan Nama" name="name" @error('name') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- END NAME --}}
                                {{-- Gender --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="gender">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="laki" value="l" @error('gender') is-invalid @enderror>
                                            <label class="form-check-label" for="laki">
                                                Laki - Laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="p" @error('gender') is-invalid @enderror>
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Gender --}}
                                {{-- Tempat Tanggal Lahir --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-6">
                                        <label for="place">Tempat Lahir</label>
                                        <input type="text" name="tmp_lahir" id="place" class="form-control" placeholder="Masukan Tempat Lahir" @error('tmp_lahir') is-invalid @enderror>
                                    </div>
                                    <div class="col-6">
                                        <label for="birth">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="birth" class="form-control" @error('tgl_lahir') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- End Tempat Tanggal Lahir --}}
                                {{-- Jurusan dan Prodi --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-6">
                                        <label for="jurusan">Jurusan</label>
                                        <select name="jurusan_id" id="jurusan" class="form-control" @error('jurusan_id') is-invalid @enderror>
                                            <option selected disabled>Pilih Jurusan</option>
                                            @foreach ($data['jurusan'] as $jurusan)
                                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="prodi">Prodi</label>
                                        <select name="prodi_id" id="prodi" class="form-control" @error('prodi_id') is-invalid @enderror>
                                            {{-- <option selected disabled>Pilih Prodi</option>
                                            @foreach ($data['prodi'] as $prodi)
                                            <option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                {{-- End Jurusan dan Prodi --}}
                                {{-- Angkatan dan Semester --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-6">
                                        <label for="angkatan">Angkatan</label>
                                        <input type="number" name="angkatan" min="0" id="angkatan" class="form-control" placeholder="example : 2022" @error('angkatan') is-invalid @enderror>
                                    </div>
                                    <div class="col-6">
                                        <label for="semester">Semester</label>
                                        <input type="number" name="semester" min="0" id="semester" class="form-control" placeholder="example : 3" @error('semester') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- End Angkatan dan Semester --}}
                                {{-- Email --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control" type="email" id="emailaddress" placeholder="Masukan email" name="email" @error('email') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- End Email --}}
                                {{-- Password and confirm password --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" placeholder="Masukan Password" name="password" @error('password') is-invalid @enderror>
                                    </div>
                                </div>
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" type="password" id="password" placeholder="Masukan Password Kembali" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                {{-- End Password --}}
                                {{-- Kontak --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="kontak">Kontak</label>
                                        <input type="number" name="kontak" id="kontak" placeholder="example : 6285753495541" class="form-control" @error('kontak') is-invalid @enderror>
                                    </div>
                                </div>
                                {{-- End Kontak --}}
                                {{-- Alamat --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat" @error('alamat') is-invalid @enderror></textarea>
                                    </div>
                                </div>
                                {{-- End Alamat --}}
                                {{-- Alasan --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="reason">Alasan Ikut UKM POWERS</label>
                                        <textarea name="reason" id="reason" cols="30" rows="5" class="form-control" placeholder="Saya ingin mengikuti UKM POWERS karena ....." @error('reason') is-invalid @enderror></textarea>
                                    </div>
                                </div>
                                {{-- End Alasan --}}
                                {{-- Foto --}}
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="foto">Upload Foto</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{asset('/')}}/background/showphoto.jpg" alt="image" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <button type="button" class="btn btn-custom btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" class="btn-light" name="foto" accept="image/*" @error('foto') is-invalid @enderror>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Foto --}}
                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Daftar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Sudah Daftar ?  <a href="{{route('login')}}" class="text-dark m-l-5"><b>Login</b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/popper.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/metisMenu.min.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/waves.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.slimscroll.js"></script>

        <!-- Bootstrap fileupload js -->
        <script src="{{asset('/')}}/template/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <!-- Dropzone js -->
        <script src="{{asset('/')}}/template/backend/plugins/dropzone/dropzone.js"></script>

        <!-- App js -->
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.core.js"></script>
        <script src="{{asset('/')}}/template/backend/vertical/assets/js/jquery.app.js"></script>
        <script>
            // cari prodi di jurusan yang di pilih
            $( "#jurusan" ).change(function() {
                var jurusan = $(this).val();
                $('#prodi').find('option').remove();
                $("#prodi" ).append( '<option disabled selected> Pilih Prodi </option>' );
                $.get("{{url('jurusan')}}/" + jurusan, function(data, status){
                    $.each(data , function( index, value ) {
                        $( "#prodi" ).append( '<option value="'+value.id+'"> '+value.nama_prodi+' </option>');
                    });
                });
            });
        </script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        @error('nim')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('name')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('gender')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('tmp_lahir')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('tgl_lahir')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('jurusan_id')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('prodi_id')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('angkatan')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('semester')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
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
        @error('kontak')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('alamat')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        @error('reason')
        <script>
            Swal.fire({
            title: 'Error',
            text: '{{$message}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script>
        @enderror
        {{-- <script>
            Swal.fire({
            title: 'Error',
            text: '{{Session::get('error')}}',
            icon: 'error',
            confirmButtonText: 'OK'
            })
        </script> --}}
    </body>
</html>