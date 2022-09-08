@extends('layouts.backend.app')
@section('page','New Ranger')
@section('desc','Data Anggota New Rangers')
@section('content')
    <div class="card-box">
            <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <a href="" type="button" class="btn btn-primary btn-sm ml-3 mr-3 float-right" data-toggle="modal" data-target="#exampleModal">
                        Create Data
                    </a>
                    <!-- Modal -->
                    <table id="datatable-buttons" class="tabel table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
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
                                <td>{{$u->gender}}</td>
                                <td>{{$u->jurusan->nama_jurusan}}</td>
                                <td>{{$u->prodi->nama_prodi}}</td>
                                <td>
                                    
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