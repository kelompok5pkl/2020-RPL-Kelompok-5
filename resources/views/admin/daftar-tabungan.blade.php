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
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th class="text-right">Total Tabungan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

        @foreach($saving as $data)
            <tr>
                <td>{{$data->class_name}}</td>
                <td>{{$data->name}}</td>
                <td class="text-right">Rp. {{number_format($data->total)}}</td>
                <td class="text-center"><a href="{{URL::to('/admin/list-saving/detail', $data->home_class_id)}}" class="btn btn-primary btn-sm">Detail</a> </td>
            </tr>
        @endforeach

    </table>

    </div>
    </div>
  </div>
</div>
</div><!-- End Row-->
@endsection