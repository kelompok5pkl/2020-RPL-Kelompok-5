@extends('layouts.admin-master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <button class="btn btn-primary m-1" data-toggle="modal" data-target="#AddTeacher">Tambah Guru</button>
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Data Kelas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama Guru</th>
                <th class="text-center" style="width: 180px;">Action</th>
              </tr>
            </thead>
            @foreach($teacher as $data)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td class="text-center">
                <form action="{{URL::to('/admin/delete/teacher')}}" method="post">
                  @csrf
                  <button type="button" class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#editTeacher{{$data->id}}">Edit</button>
                  <button type="button" class="btn btn-success m-1 btn-sm" data-toggle="modal" data-target="#setWaliKelas{{$data->id}}">Set Wali Kelas</button>
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>

              </td>
            </tr>
            <div class="modal fade" id="editTeacher{{$data->id}}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="{{URL::to('/admin/update/teacher')}}">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <div class="modal-body">
                     <div class="form-group row">
                      <label for="input-1" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" readonly value="{{$data->email}}"  id="input-1" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-1" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" value="{{$data->name}}" id="input-1" required="">
                      </div>
                    </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- set wali kelas -->
          <div class="modal fade" id="setWaliKelas{{$data->id}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="{{URL::to('/admin/set/homeroom-teacher')}}">
                  @csrf
                  <input type="hidden" value="{{$data->id}}" name="id_teacher">
                  <div class="modal-body">
                    <div class="form-group row">
                      <label for="input-1" class="col-sm-2 col-form-label">Set Kelas</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="id_class" required="">
                          <option value="">Pilih Kelas</option>
                          @foreach($class as $data)
                          <option value="{{ $data->id }}">{{ $data->class_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Set Wali Kelas</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end set wali kelas -->
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Default Size Modal -->

<!-- Modal -->



@endsection
<div class="modal fade" id="addTeacher">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name" id="input-1" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email" id="input-1" required="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

