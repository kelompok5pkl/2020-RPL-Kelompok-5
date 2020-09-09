@extends('layouts.walikelas-master')
@section('content')

  <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Select Inputs</div>
            <div class="card-body">
              <form action="" method="post">
              	@csrf
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <select class="form-control single-select" name="id_student">
                      <option>Pilih Siswa</option>
                      @foreach($student as $data)
                      <option value="{{$data->id_student}}">{{$data->name_student}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
    				  <label for="input-1">Nominal</label>
    				  <input type="number" class="form-control" id="input-1" placeholder="Nominal" name="nominal">
    				</div>
    				<div class="form-group">
    				  <input type="submit" class="btn btn-primary" value="Simpan">
    				</div>



                   
              </form>
            </div>
          </div>
        </div>
}
}
     



@endsection