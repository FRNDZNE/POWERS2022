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
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mentor">
                      <i class="fa fa-plus"></i> <span> Tambah Mentor </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="mentor" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Mentor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.member.mentor.group',$data['group']->id) }}" method="post">
                                        @csrf
                                        {{-- Mentor Edu --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Divisi Edu</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentoredu'] as $mentor)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-{{ $mentor->id }}" value="{{ $mentor->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentor-{{ $mentor->id }}">{{ $mentor->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{-- End Mentor Edu --}}
                                        {{-- Mentor PR --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Divisi Pr</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentorpr'] as $mentor)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-{{ $mentor->id }}" value="{{ $mentor->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentor-{{ $mentor->id }}">{{ $mentor->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{-- End Mentor Pr --}}
                                        {{-- Mentor Eo --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Divisi Eo</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentoreo'] as $mentor)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-{{ $mentor->id }}" value="{{ $mentor->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentor-{{ $mentor->id }}">{{ $mentor->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{-- End Mentor Eo --}}
                                        {{-- Mentor MDD --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Divisi MDD</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentormdd'] as $mentor)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-{{ $mentor->id }}" value="{{ $mentor->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentor-{{ $mentor->id }}">{{ $mentor->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{-- End Mentor MDD --}}
                                        {{-- Mentor Ranger --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Ranger</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentorranger'] as $mentor)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentor-{{ $mentor->id }}" value="{{ $mentor->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentor-{{ $mentor->id }}">{{ $mentor->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{-- End MEntor Ranger --}}
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
                                <td>{{ $mentor->name }}</td>
                                <td>
                                    
                                    {{-- Delete Mentor--}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete-{{ $mentor->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modalDelete-{{ $mentor->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Mentor</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus {{ $mentor->name }} sebagai mentor</p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{ route('destroy.member.mentor.group',[$data['group']->id,$mentor->id]) }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    {{-- End Delete Mentor --}}
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
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mentee">
                      <i class="fa fa-plus"></i> <span> Tambah Mentee </span>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="mentee" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Tambah Mentee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.member.mentee.group',$data['group']->id) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Daftar Mentee</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($data['mentee'] as $mentee)
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mentee-{{ $mentee->id }}" value="{{ $mentee->id }}" name="id[]">
                                                    <label class="custom-control-label" for="mentee-{{ $mentee->id }}">{{ $mentee->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
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
                                <th>Mentee</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['group']->mentee as $mentee)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $mentee->name }}</td>
                                <td>
                                    
                                    {{-- Delete Jurusan --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelDelete-{{ $mentee->id }}">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="modelDelete-{{ $mentee->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-danger">
                                                      <h5 class="modal-title">Hapus Jurusan</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p>Ingin Menghapus {{ $mentee->name }} sebagai mentee</p>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{ route('destroy.member.mentee.group',[$data['group']->id,$mentee->id]) }}" method="post">
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
