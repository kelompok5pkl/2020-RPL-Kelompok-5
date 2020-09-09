@extends('layouts.walikelas-master')
@section('content')
<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header"><i class="fa fa-table"></i> Data Tabungan</div>
    <div class="card-body">
      <div class="table-responsive">
      <table id="default-datatable" class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px;">No</th>
                <th>Nama Siswa</th>
                <th class="text-right">Nominal</th>
            </tr>
        </thead>
        <tbody>

        @foreach($saving as $key => $data)
            <tr>
                <td class="text-center" style="width: 10px;">{{$key+1}}</td>
                <td>{{$data->name_student}}</td>
                <td class="text-right">Rp. {{number_format($data->nominal)}}</td>
            </tr>
        @endforeach

    </table>

    </div>
    </div>
  </div>
</div>
</div><!-- End Row-->
@endsection