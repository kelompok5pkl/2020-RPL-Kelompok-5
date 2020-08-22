@extends('layouts.admin-master')
@section('content')
<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
      <table id="default-datatable" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th class="text-right">Jumlah Tabungan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

        @foreach($saving as $data)
            <tr>
                <td>{{$data->name_student}}</td>
                <td class="text-right">Rp. {{number_format($data->total)}}</td>
                <td class="text-center"><a href="{{URL::to('/admin/list-saving/detail/student', $data->std_id)}}" class="btn btn-primary btn-sm">Detail</a> </td>
            </tr>
        @endforeach

    </table>

    </div>
    </div>
  </div>
</div>
</div><!-- End Row-->
@endsection