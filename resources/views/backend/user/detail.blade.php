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
        <div class="profile-user-box card-box bg-custom">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left mr-3"><img src="{{asset(Auth::user()->foto)}}" alt="" class="thumb-lg rounded-circle"></span>
                    <div class="media-body text-white">
                        <h4 class="mt-1 mb-1 font-18">{{$user->name}}</h4>
                        <p class="font-13 text-light"> User Experience Specialist</p>
                        <p class="text-light mb-0">California, United States</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        <button type="button" class="btn btn-light waves-effect">
                            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ meta -->
    </div>
</div>
{{-- End Card Box Biru --}}
<div class="row">
    {{-- Form Isi --}}
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box table-responsive">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Form Isi --}}
</div>
@endsection
@section('jsmid')
    <!-- Counter Up  -->
    <script src="{{asset('/')}}template/backend/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{asset('/')}}template/backend/plugins/counterup/jquery.counterup.min.js"></script>
@endsection
