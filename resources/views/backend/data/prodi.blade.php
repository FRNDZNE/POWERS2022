@extends('layouts.backend.app')
@section('page','Jurusan '.$data['jurusan']->nama_jurusan)
@section('desc','Data Prodi Dari Jurusan ' .$data['jurusan']->nama_jurusan)
@section('content')
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <a href="{{route('index.jurusan')}}" class="btn btn-secondary btn-sm">Kembali</a>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createdata">
                      <i class="fa fa-plus"></i> <span> Tambah Prodi </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Prodi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('store.prodi', $data['jurusan'])}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="prodi">Nama Prodi</label>
                                            <input type="text" name="prodi" id="prodi" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <hr>
                    <table class="table table-striped table-bordered" id="datatable-buttons">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['prodi'] as $p)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$p->nama_prodi}}</td>
                                <td>
                                    {{-- Modal Edit Prodi --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modelEdit-{{$p->id}}">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelEdit-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Prodi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update.prodi',$data['jurusan'])}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$p->id}}">
                                                        <div class="form-group">
                                                            <label for="prodi">Nama Prodi</label>
                                                            <input type="text" name="prodi" id="prodi" class="form-control" value="{{$p->nama_prodi}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-warning">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Modal Edit Prodi --}}
                                    {{-- Delete Prodi --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete-">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete-" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Prodi</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus Prodi {{$p->nama_prodi}}</p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{route('destroy.prodi', [$data['jurusan'] ,$p->id])}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    {{-- End Delete Jurusan --}}
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