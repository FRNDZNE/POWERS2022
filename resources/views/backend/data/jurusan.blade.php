@extends('layouts.backend.app')
@section('page','Jurusan')
@section('desc','Data Jurusan')
@section('content')
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createdata">
                      <i class="fa fa-plus"></i> <span> Tambah Jurusan </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Jurusan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('store.jurusan')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="jurusan">Nama Jurusan</label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control">
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $j)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td><a href="{{route('index.prodi', $j->id)}}">{{$j->nama_jurusan}}</a></td>
                                <td>
                                    {{-- Modal Edit Jurusan --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modelEdit-{{$j->id}}">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelEdit-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Jurusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update.jurusan')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$j->id}}">
                                                        <div class="form-group">
                                                            <label for="jurusan">Nama Jurusan</label>
                                                            <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{$j->nama_jurusan}}">
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
                                    {{-- End Modal Edit Jurusan --}}
                                    {{-- Delete Jurusan --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete-{{$j->id}}">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Jurusan</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus Jurusan {{$j->nama_jurusan}}</p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{route('destroy.jurusan', $j->id)}}" method="post">
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