@extends('layouts.master')
  @section('content')

  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
  @endif
<!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-6">
                <div class="dataTables_length" id="example1_length">
                <label>Tampilkan <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                  <option value="10">10</option><option value="25">25</option>
                  <option value="50">50</option><option value="100">100</option>
                </select> Entri</label>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Data Pelayan
                </button>
              </div>
            </div>

            <div class="">
              <div id="example1_filter" class="dataTables_filter">
                  <!-- Button trigger modal -->

                    <div>
                      <div>
                    <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Masukan Data Pelayan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                                <div>
                              <form action="/pelayan/create" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <label for="validationTooltip01" class="col-form-label">Nama Pelayan</label>
                                  <input name="nama_pelayan" type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                  <label for="validationTooltip01" class="col-form-label">Email</label>
                                  <input name="email" type="email" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                  <label for="validationTooltip02" class="col-form-label">Kode Pelayan</label>
                                  <input name="kode_pelayan" type="text" class="form-control" id="recipient-name">
                                </div>

                                <div class="form-grub">
                                  <label for="examplelControlSelect03"> Jenis Kelamin</label>
                                  <select name="jk" class="form-control" id="recipient-name">
                                    <option value="Laki-Laki"> Laki-Laki</option>
                                    <option  value="Perempuan"> Perempuan </option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="validationTooltip04" class="col-form-label">Umur</label>
                                  <input name="umur" type="text" class="form-control"id="recipient-name">
                                </div>
                                <div class="form-grub">
                                  <label for="examplelControlSelect"> Agama</label>
                                  <select name="agama" class="form-control" id="recipient-name">
                                    <option value="Islam"> Islam</option>
                                    <option  value="Kristem"> Kristem </option>
                                    <option  value="Budha"> Budha </option>
                                    <option  value="Hindu"> Hindu </option>
                                    <option  value="Katolik"> Katolik </option>
                                    <option  value="Kong Hu Cu">  Kong Hu Cu </option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="validationTooltip06" class="col-form-label">Alamat</label>
                                  <input name="alamat" type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                  <label for="validationTooltip07" class="col-form-label">Tlp</label>
                                  <input name="tlp" type="text" class="form-control" id="recipient-name">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </form>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 165px;">
                Nama Pelayan
                </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">
                    Kode Pelayan
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 70px;">
                    Jenis Kelamin
                  	</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 50px;">
                    Umur
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 90px;">
                  Agama
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">
                  Alamat
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">
                  Tlp
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">
                  Pilihan
                  </th>
                </thead>
              <tbody>
                @foreach($data_pelayan as $pelayan)

              <tr role="row" class="odd">
                <td class="sorting_1">{{$pelayan->nama_pelayan}}</td>
                <td> {{$pelayan->kode_pelayan}}</td>
                <td> {{$pelayan->jk}}</td>
                <td> {{$pelayan->umur}}</td>
                <td> {{$pelayan->agama}}</td>
                <td> {{$pelayan->alamat}}</td>
                <td> {{$pelayan->tlp}}</td>
                <td>
                  <a href="\pelayan\{{$pelayan->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                  <a href="\pelayan\{{$pelayan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus Lanjutkan')">Hapus</a>
                </td>
              </tr>
            @endforeach
            </tbody>

            </table>
          </div>
        </div>
        <div class="row"><div class="col-sm-5">
              <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Tampilkan 1 ke 10 of 57 entries</div>
            </div>
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination">
                <li class="paginate_button previous disabled" id="example1_previous">
                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
              </li>
              <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
              </li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
              </li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
              </li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
              </li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
              </li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
              </li><li class="paginate_button next" id="example1_next">
                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
              </li></ul></div></div>
            </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  @stop

@section('content2')
          @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
          @endif
            <div class="row">
              <div class="col-6">
                  <h1>Data Pelayan</h1>
              </div>
                <center>
                  <br>
              <div class="coll-6" >
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Data Pelayan
                  </button>
                    <div>
                      <div>
                            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Pelayan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                          <div>
                        <form action="/pelayan/create" method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="validationTooltip01" class="col-form-label">Nama Pelayan</label>
                            <input name="nama_pelayan" type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="validationTooltip02" class="col-form-label">Kode Pelayan</label>
                            <input name="kode_pelayan" type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-grub">
                            <label for="examplelControlSelect"> Jenis Kelamin</label>
                            <select name="jk" class="form-control" id="recipient-name">
                              <option value="Laki-Laki"> Laki-Laki</option>
                              <option  value="Perempuan"> Perempuan </option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="validationTooltip04" class="col-form-label">Umur</label>
                            <input name="umur" type="text" class="form-control"id="recipient-name">
                          </div>
                          <div class="form-grub">
    												<label for="examplelControlSelect"> Agama</label>
    												<select name="agama" class="form-control" id="recipient-name">
    													<option value="Islam"> Islam</option>
    													<option  value="Kristem"> Kristem </option>
    													<option  value="Budha"> Budha </option>
    													<option  value="Hindu"> Hindu </option>
    													<option  value="Katolik"> Katolik </option>
    													<option  value="Kong Hu Cu">  Kong Hu Cu </option>
    												</select>
    											</div>
                          <div class="form-group">
                            <label for="validationTooltip06" class="col-form-label">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="validationTooltip07" class="col-form-label">Tlp</label>
                            <input name="tlp" type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                          </form>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <table class="table table-bordered table-striped dataTable">
              <thead class="thead-dark">
              <div class="container">
              <div class="row">
              <tr>
                <th> Nama Pelayan</th>
                <th> Kode Pelayan</th>
                <th> Jenis Kelamin</th>
                <th> Umur</th>
                <th> Agama</th>
                <th> Alamat</th>
                <th> Tlp</th>
                <th> Pilihan</th>
              </tr>
            @foreach($data_pelayan as $pelayan)
              <tr>
                <td> {{$pelayan->nama_pelayan}}</td>
                <td> {{$pelayan->kode_pelayan}}</td>
                <td> {{$pelayan->jk}}</td>
                <td> {{$pelayan->umur}}</td>
                <td> {{$pelayan->agama}}</td>
                <td> {{$pelayan->alamat}}</td>
                <td> {{$pelayan->tlp}}</td>
                <td>
                  <a href="\pelayan\{{$pelayan->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                  <a href="\pelayan\{{$pelayan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus Lanjutkan')">Hapus</a>

                </td>
              </tr>
              </thead>
              @endforeach
            </table>
          </div>
          @endsection
