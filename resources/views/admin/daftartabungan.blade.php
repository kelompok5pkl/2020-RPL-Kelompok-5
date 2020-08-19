@extends('layouts.admin-master')
@section('content')

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Kelas</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID CLASS</th>
                        <th>CLASS NAME</th>
                        <th>ID MAJORS</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Elsa Susilawati</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Rismawati</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>

                    <tr>
                        <td>Muhammad Al-Fajri</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Bowie Sambora</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Indra Agus N</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
<!-- Default Size Modal -->
              <button class="btn btn-primary m-1" data-toggle="modal" data-target="#defaultsizemodal">Tambah Tabungan</button>
              <!-- Modal -->
                <div class="modal fade" id="defaultsizemodal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Tabungan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                      <form method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="input-1" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Jumlah Nominal</label>
                                 <div class="col-sm-8">
                                <input type="text" class="form-control" id="input-1" required="">
                                </div>
                          </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            

@endsection