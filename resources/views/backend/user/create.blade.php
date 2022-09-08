@extends('layouts.backend.app')
@section('page','Create User')
@section('css')
<!-- Bootstrap fileupload css -->
<link href="{{asset('/')}}/template/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
<!-- Dropzone css -->
<link href="{{asset('/')}}/template/backend/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('desc','Create Universal User Account')
@section('content')
<form action="{{route('store.user')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        {{-- Form Isi --}}
        <div class="col-md-6">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                            {{-- NIM --}}
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="number" name="nim" id="nim" class="form-control" min="0" placeholder="Masukan NIM">
                            </div>
                            {{-- End NIM --}}
                            {{-- Nama --}}
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Masukan Nama">
                            </div>
                            {{-- End Nama --}}
                            {{-- Jenis Kelamin --}}
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="laki" value="l">
                                            <label class="form-check-label" for="laki">
                                                Laki - Laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="p">
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Jenis Kelamin --}}
                            {{-- Tempat dan Tanggal Lahir --}}
                            <div class="row">
                                {{-- Tempat lahir --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="place">Tempat Lahir</label>
                                            <input type="text" name="tmp_lahir" id="place" class="form-control" placeholder="Masukan Tempat Lahir">
                                        </div>
                                    </div>
                                {{-- End Tempat Lahir --}}
                                {{-- Tanggal Lahir --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="birth">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" id="birth" class="form-control">
                                        </div>
                                    </div>
                                {{-- End Tanggal Lahir --}}
                            </div>
                            {{-- End Tempat Tanggal Lahir --}}
                            {{-- Jurusan dan Prodi --}}
                            <div class="row">
                                {{-- Jurusan --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <select name="jurusan_id" id="jurusan" class="form-control">
                                            <option disabled selected value="-">Pilih Jurusan</option>
                                            @foreach ($data['jurusan'] as $j)
                                            <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- End Jurusan --}}
                                {{-- Prodi --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prodi">Prodi</label>
                                        <select name="prodi_id" id="prodi" class="form-control">
                                            {{-- <option value="-" disabled selected>Pilih Jurusan</option>
                                            @foreach ($data['prodi'] as $p)
                                            <option value="{{$p->id}}">{{$p->nama_prodi}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                {{-- End Prodi --}}
                            </div>
                            {{-- End Jurusan dan Prodi --}}
                            {{-- Angkatan dan Semester --}}
                            <div class="row">
                                {{-- Angkatan --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="angkatan">Angkatan</label>
                                        <input type="number" name="angkatan" id="angkatan" class="form-control" placeholder="example : 2020">
                                    </div>
                                </div>
                                {{-- End Angkatan --}}
                                {{-- Semester --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="smt">Semester</label>
                                        <input type="number" name="semester" id="smt" class="form-control" placeholder="example : 4">
                                    </div>
                                </div>
                            </div>
                            {{-- End Angkatan dan Semester --}}
                            {{-- Kontak --}}
                            <div class="form-group">
                                <label for="kontak">kontak</label>
                                <input type="number" name="kontak" id="kontak" min="0" class="form-control">
                            </div>
                            {{-- End Kontak --}}
                            {{-- Alamat --}}
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            {{-- End Alamat --}}
                            {{-- Reason --}}
                            <div class="form-group">
                                <label for="reason">Reason</label>
                                <textarea name="reason" id="reason" cols="30" rows="5" class="form-control"></textarea>

                            </div>
                            {{-- End Reason --}}
                            {{-- Email --}}
                            <div class="form-group">
                                <label for="email">Alamat E-Mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="budiman@powers.com">
                            </div>
                            {{-- End Email --}}
                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" id="password" class="form-control" placeholder="Masukan Password">
                            </div>
                            {{-- End Password --}}
                            {{-- Button --}}
                                <a href="{{route('index.user')}}" class="btn btn-secondary btn-md">Kembali</a>
                                <button type="submit" class="btn btn-primary btn-md">Buat Akun</button>    
                            {{-- End Button --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Form Isi --}}
        <div class="col-md-6">
            {{-- Foto --}}
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="foto">Foto</label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{asset('/')}}/background/showphoto.jpg" alt="image" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <button type="button" class="btn btn-custom btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="btn-light" name="foto" accept="image/*">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Foto --}}
            {{-- Role --}}
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="role">Role</label>
                                    <div class="row">
                                        @foreach ($data['role'] as $role)
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="role-{{$role->id}}" name="role[]" value="{{$role->name}}">
                                                    <label class="custom-control-label" for="role-{{$role->id}}">{{$role->name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- End Role --}}
            {{-- Permission --}}
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="permission">Aprroval</label>
                                    <div class="row">
                                        @foreach ($data['permission'] as $permission)
                                            <div class="col-md-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="permission-{{$permission->id}}" name="permission" value="{{$permission->name}}">
                                                    <label class="custom-control-label" for="permission-{{$permission->id}}">{{$permission->display_name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- End Permission --}}
        </div>
    </div>
</form>
@endsection
@section('jsmid')
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('/')}}/template/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <!-- Dropzone js -->
    <script src="{{asset('/')}}/template/backend/plugins/dropzone/dropzone.js"></script>
@endsection
@section('jsbot')
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
@endsection