@extends('layouts.backend.app')
@section('page','Group')
@section('desc','Data Group New Ranger')
@section('content')
    <div class="card-box">
        {{-- table mentor --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createdata">
                      <i class="fa fa-plus"></i> <span> Tambah Mentor </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Mentor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.member.group',$data['group']->id) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-" value="">
                                                    <label class="custom-control-label" for="mentor-"></label>
                                                </div>
                                            </div>
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
                                <th>Mentor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['group']->mentor as $mentor)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td></td>
                                <td>
                                    {{-- Modal Edit Jurusan --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modelEdit">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelEdit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Jurusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group">
                                                            <label for="jurusan">Nama Jurusan</label>
                                                            <input type="text" name="jurusan" id="jurusan" class="form-control" value="">
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
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Jurusan</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus Jurusan </p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="" method="post">
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
        {{-- End Table Mentor --}}
        {{-- Table Mentee --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createdata">
                      <i class="fa fa-plus"></i> <span> Tambah Mentee </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Mentee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        @csrf
                                        
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
                                <th>Mentor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['group']->mentee as $mentee)
                            <tr>
                                <td scope="row"></td>
                                <td>{{ $mentee->name }}</td>
                                <td>
                                    {{-- Modal Edit Jurusan --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modelEdit">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelEdit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Jurusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group">
                                                            <label for="jurusan">Nama Jurusan</label>
                                                            <input type="text" name="jurusan" id="jurusan" class="form-control" value="">
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
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Jurusan</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus Jurusan </p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="" method="post">
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
        {{-- End Table Mentee --}}
    </div>
@endsection
