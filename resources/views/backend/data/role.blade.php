@extends('layouts.backend.app')
@section('page','Role')
@section('desc','Data Role')
@section('content')
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createdata">
                      <i class="fa fa-plus"></i> <span> Tambah Role </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Role</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('store.role')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Role">Nama Role</label>
                                            <input type="text" name="name" id="Role" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Role">Display Name</label>
                                            <input type="text" name="display_name" id="Role" class="form-control">
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
                                <th>Role</th>
                                <th>Display Name</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role as $r)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{$r->display_name}}</td>
                                <td>
                                    {{-- Modal Edit Role --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modelEdit-{{$r->id}}">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelEdit-{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Role</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update.role')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$r->id}}">
                                                        <div class="form-group">
                                                            <label for="name">Nama Role</label>
                                                            <input type="text" name="name" id="name" class="form-control" value="{{$r->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="display_name">Display Name</label>
                                                            <input type="text" name="display_name" id="display_name" class="form-control" value="{{$r->display_name}}">
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
                                    {{-- End Modal Edit Role --}}
                                    {{-- Delete Role --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete-{{$r->id}}">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete-{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Role</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus Role {{$r->nama_Role}}</p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{route('destroy.role', $r->id)}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    {{-- End Delete Role --}}
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