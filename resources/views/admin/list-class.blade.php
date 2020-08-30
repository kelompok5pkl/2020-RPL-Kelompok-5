@extends('layouts.admin-master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <button class="btn btn-primary m-1" data-toggle="modal" data-target="#defaultsizemodal">Tambah Kelas</button>
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Data Kelas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th class="text-center" style="width: 180px;">Aksi</th>
              </tr>
            </thead>
            @foreach($class as $data)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$data->class_name}}</td>
              <td>{{$data->majors_name}}</td>
              <td class="text-center">
                <form action="{{URL::to('/admin/delete')}}" method="post">
                @csrf
                <button type="button" class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#edit{{$data->class_id}}">Edit</button>
                <input type="hidden" name="id" value="{{$data->class_id}}">
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
              </td>
            </tr>

             <div class="modal fade" id="edit{{$data->class_id}}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="{{URL::to('/admin/update/class')}}">
                  @csrf
                  <input type="hidden" value="{{$data->class_id}}" name="id">
                  <div class="modal-body">
                        <div class="form-group row">
                          <label for="input-1" class="col-sm-2 col-form-label">Nama Kelas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="class_name" value="{{$data->class_name}}" id="input-1" required="">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-1" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                              <select class="form-control" name="id_majors" required="">
                                <option value="">Pilih Kelas</option>
                                @foreach($majors as $data)
                                <option value="{{ $data->id_majors }}">{{ $data->majors_name }}</option>
                                @endforeach
                              </select>
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
 <div class="modal fade" id="defaultsizemodal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      @csrf
      <div class="modal-body">
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Nama Kelas</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="class_name" id="input-1" required="">
              </div>
            </div>
            <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-8">
                  <select class="form-control" name="id_majors" required="">
                    <option value="">Pilih Kelas</option>
                    @foreach($majors as $data)
                    <option value="{{ $data->id_majors }}">{{ $data->majors_name }}</option>
                    @endforeach
                  </select>
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

 