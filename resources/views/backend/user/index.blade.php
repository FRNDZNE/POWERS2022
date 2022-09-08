@extends('layouts.backend.app')
@section('page','User')
@section('desc','Data User')
@section('content')
    <div class="card-box">
            <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <a href="{{route('create.user')}}" type="button" class="btn btn-primary btn-sm ml-3 mr-3 float-right">
                        <i class="fa fa-plus"></i> Tambah User
                    </a>
                    <!-- Modal -->
                    <table id="datatable-buttons" class="tabel table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Kontak</th>
                                <th>Jurusan</th>
                                <th>Status</th>
                                <th>Approval</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $u)    
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->nim}}</td>
                                <td>{{$u->name}}</td>
                                <td>
                                    @if ($u->gender == 'l')
                                        Laki - Laki
                                    @elseif($u->gender == 'p')
                                        Perempuan
                                    @endif
                                </td>
                                <td><a href="https://wa.me/{{$u->kontak}}" target="_blank">{{$u->kontak}}</a></td>
                                <td>{{$u->jurusan->nama_jurusan}}</td>
                                <td>
                                    @foreach ($u->role as $role)
                                        {{$role->display_name}}
                                    @endforeach
                                </td>
                                <td>
                                    <span class="badge @if($u->permission['0']->name == 'yes') badge-success @else badge-danger @endif">{{$u->permission['0']->display_name}}</span>
                                </td>
                                <td>
                                    {{-- button action --}}
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toogle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('detail.user',$u->id)}}" class="dropdown-item">Lihat Data</a>
                                            <a href="" class="dropdown-item">Edit Data</a>
                                            <a href="" class="dropdown-item">Hapus Data</a>
                                            <a href="" class="dropdown-item">Aktifkan Akun</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection