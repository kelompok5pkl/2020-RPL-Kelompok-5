@extends('layouts.admin-master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <button class="btn btn-primary m-1" data-toggle="modal" data-target="#AddStudent">Tambah Siswa</button>
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Data Kelas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th class="text-center" style="width: 180px;">Aksi</th>
              </tr>
            </thead>
            @foreach($student as $data)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$data->nisn}}</td>
              <td>{{$data->name_student}}</td>
              <td>{{$data->class_name}}</td>
              <!-- <td>{{$data->class_id}}</td> -->
              <td>{{$data->majors_name}}</td>
              <td class="text-center">

                <form action="{{URL::to('/admin/delete/student')}}" method="post">
                @csrf
                <button type="button" class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#edit{{$data->id_student}}">Edit</button>
                <input type="hidden" name="id" value="{{$data->id_student}}">
                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                </form>
              </td>
            </tr>
            <div class="modal fade" id="edit{{$data->id_student}}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-star"></i> Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="{{URL::to('/admin/update/student')}}">
                  @csrf
                  <div class="modal-body">
                        <div class="form-group row">
                        <input type="hidden" value="{{$data->id_student}}" name="id">
                          <label for="input-1" class="col-sm-2 col-form-label">NISN</label>
                          <div class="col-sm-8">
                            <input type="number" value="{{$data->nisn}}" readonly class="form-control" name="nisn" id="input-1" required="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-1" class="col-sm-2 col-form-label">Nama Siswa</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{$data->name_student}}" class="form-control" name="name_student" id="input-1" required="">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-1" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                              <select class="form-control" name="class_id" required="">
                                <option value="">Pilih Kelas</option>
                                @foreach($class as $data)
                                <option value="{{ $data->class_id }}">{{ $data->class_name}}</option>
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
 <div class="modal fade" id="addStudent">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      @csrf
      <div class="modal-body">
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="nisn" id="input-1" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name_student" id="input-1" required="">
              </div>
            </div>

            <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-8">
                  <select class="form-control" name="class_id" required="">
                    <option value="">Pilih Kelas</option>
                    @foreach($class as $data)
                    <option value="{{ $data->class_id }}">{{ $data->class_name }}</option>
                    @endforeach
                  </select>
                    </div>
                </div>                
            </div>

           

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
      </div>
      </form>
    </div>
  </div>
</div>





