@extends('layouts.backend.app')
@section('page','Detail User')
@section('css')
<!-- Bootstrap fileupload css -->
<link href="{{asset('/')}}/template/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
<!-- Dropzone css -->
<link href="{{asset('/')}}/template/backend/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('desc','About User')
@section('content')
{{-- Card Box Biru --}}
<div class="row">
    <div class="col-sm-12">
        <!-- meta card profile-->
        <div class="form-group">
            @role('admin')
                <a href="{{route('index.user')}}" class="btn btn-secondary btn-md">Kembali</a>
            @endrole
            @role(['core','commitee'])
                <a href="{{url()->previous()}}" class="btn btn-secondary btn-md">Kembali</a>
            @endrole
            @role(['ranger','new'])
                <a href="{{url()->previous()}}" class="btn btn-secondary btn-md">Kembali</a>
            @endrole
        </div>
        <div class="profile-user-box card-box bg-custom">
            <div class="row">
                <div class="col-sm-6">
                    @if ($user->foto != null)
                        <span class="pull-left mr-3"><img src="{{asset($user->foto)}}" alt="Foto Rusak" class="thumb-lg rounded-circle"></span>
                    @else
                        <span class="pull-left mr-3"><img src="{{asset('/')}}/static/avatar.jpg" alt="Foto Rusak" class="thumb-lg rounded-circle"></span>
                    @endif
                    <div class="media-body text-white">
                        <h4 class="mt-1 mb-1 font-18">{{$user->name}}</h4>
                        <p class="text-light mb-0">
                            @foreach ($user->role as $role)
                                {{$role->display_name}}
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        @role('admin')
                            <a href="{{route('edit.user',$user->id)}}" class="btn btn-light waves-effect">
                                <i class="mdi mdi-account-settings-variant mr-1"></i> Ubah Profile
                            </a>
                        @endrole
                        @role(['core','commitee'])
                            <a href="{{route('edit.user.commitee',$user->id)}}" class="btn btn-light waves-effect">
                                <i class="mdi mdi-account-settings-variant mr-1"></i> Ubah Profile
                            </a>
                        @endrole
                        @role(['ranger','new'])
                            <a href="{{route('edit.user.ranger',$user->id)}}" class="btn btn-light waves-effect">
                                <i class="mdi mdi-account-settings-variant mr-1"></i> Ubah Profile
                            </a>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
        <!--/ meta -->
    </div>
</div>
{{-- End Card Box Biru --}}
<div class="row">
    <div class="col-md-6">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Personal Information</h4>
            <div class="panel-body">
                <hr/>

                <div class="text-left">
                    <p class="text-muted font-13"><strong>NIM :</strong> <span class="m-l-15">{{$user->nim}}</span></p>
                    <p class="text-muted font-13"><strong>Nama :</strong> <span class="m-l-15">{{$user->name}}</span></p>

                    <p class="text-muted font-13"><strong>Jenis Kelamin :</strong>
                        <span class="m-l-15">
                            @if ($user->gender == 'l')
                                Laki - Laki
                            @else
                                Perempuan
                            @endif
                        </span>
                    </p>
                    <p class="text-muted font-13"><strong>Tempat / Tanggal Lahir :</strong> <span class="m-l-15">{{$user->tmp_lahir}}, {{$user->tgl_lahir}}</span></p>
                    <p class="text-muted font-13"><strong>Semester :</strong> <span class="m-l-15">{{$user->semester}}</span></p>
                    <p class="text-muted font-13"><strong>Angkatan :</strong> <span class="m-l-15">{{$user->angkatan}}</span></p>
                    <p class="text-muted font-13"><strong>Kontak :</strong> <span class="m-l-15">{{$user->kontak}}</span></p>
                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        <div class="row">

            <div class="col-sm-6">
                <div class="card-box tilebox-one">
                    {{-- <i class="icon-layers float-right text-muted"></i> --}}
                    <h6 class="text-muted text-uppercase mt-0">Jurusan</h6>
                    {{-- <h2 class="m-b-20" data-plugin="counterup">{{$user->jurusan->}}</h2> --}}
                    <h2 class="m-b-20">{{$user->jurusan->nama_jurusan}}</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-sm-6">
                <div class="card-box tilebox-one">
                    {{-- <i class="icon-paypal float-right text-muted"></i> --}}
                    <h6 class="text-muted text-uppercase mt-0">Prodi</h6>
                    <h2 class="m-b-20"><span>{{$user->prodi->nama_prodi}}</span></h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


        <div class="card-box">
            <h4 class="header-title mt-0 mb-3">More Information</h4>
            <div class="">
                <div class="">
                    <h5 class="text-custom m-b-5">Alamat Rumah</h5>
                    <p class="text-muted font-13 m-b-0">
                        {{$user->alamat}}
                    </p>
                </div>

                <hr>

                <div class="">
                    <h5 class="text-custom m-b-5">Alasan Mengikuti Powers</h5>
                    <p class="text-muted font-13">
                        {{$user->reason}}
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection
@section('jsmid')
    <!-- Counter Up  -->
    <script src="{{asset('/')}}template/backend/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{asset('/')}}template/backend/plugins/counterup/jquery.counterup.min.js"></script>
@endsection
