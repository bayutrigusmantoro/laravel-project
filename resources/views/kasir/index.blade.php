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

                    <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                    <label>Tampilkan <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                      <option value="10">10</option><option value="25">25</option>
                      <option value="50">50</option><option value="100">100</option>
                    </select> Entri</label>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Tambahkan Data Kasir
                    </button>
                  </div>
            <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Isi Data Karyawan Kasir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/kasir/create" method="POST">
                      {{csrf_field()}}
                      <div class="form-row">
                          <div class="col-md-4 mb-30">
                            <label for="validationTooltip01">Nama</label>
                            <input name="nama_kasir" type="text" class="form-control" id="recipient-name" placeholder="Nama Lengkap" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Kode Karyawan</label>
                            <input name="kode_kasir" type="text" class="form-control" id="recipient-name" placeholder="kode otomatis" required>
                          </div>

                          <div class="form-grub">
                            <label for="examplelControlSelect"> Jenis Kelamin</label>
                            <select name="jk" class="form-control" id="recipient-name">
                              <option value="Laki-Laki"> Laki-Laki</option>
                              <option  value="Perempuan"> Perempuan </option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4 mb-30">
                          <label for="validationTooltip01">Umur</label>
                          <input name="umur" type="text" class="form-control" id="recipient-name" placeholder="Umur" required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip02">Alamat</label>
                          <input name="alamat" type="text" class="form-control" id="recipient-name" placeholder="Alamat" required>
                        </div>

                        <div class="form-grub">
                          <label for="examplelControlSelect"> Pilih Agama</label>
                          <select name="agama" class="form-control" id="recipient-name">
                            <option value="Islam"> Islam</option>
                            <option  value="Kristem"> Kristem </option>
                            <option  value="Hindu"> Hindu </option>
                            <option  value="Katolik"> Katolik </option>
                            <option  value="Kong Hu Cu">  Kong Hu Cu </option>

                          </select>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip02">Tlp</label>
                          <input name="tlp" type="text" class="form-control" id="recipient-name" placeholder="+628xxxx" required>
                        </div>
                        <br>
                          <right>
                          <p>.  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button class="btn btn-primary" type="submit">Simpan</button></p>
                        </right></form>

                </div></div></div></div>
              <div class="modal-footer">
                </div>
                  </div>
                    </div>
                  </div>
                </div>
              <br>
            <table class="table table-bordered table-striped dataTable">
                    <thead class="thead-dark">
                    <div class="container">
                    <div class="row">
              <tr>
                <th> Nama</th>
                  <th> Kode Kasir</th>
                    <th> Jenis Kelamin</th>
                      <th> Umur</th>
                      <th> Agama</th>
                    <th> Alamat</th>
                      <th> Telp</th>
              <th> Pilihan</th>
            </tr>
            @foreach($data_kasir as $kasir)
            <tr>
              <td> {{$kasir->nama_kasir}}</td>
                <td> {{$kasir->kode_kasir}}</td>
                  <td> {{$kasir->jk}}</td>
                    <td> {{$kasir->umur}}</td>
                    <td> {{$kasir->agama}}</td>
                  <td> {{$kasir->alamat}}</td>
                <td> {{$kasir->tlp}}</td>
              <td>
                <a href="\kasir\{{$kasir->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                <a href="\kasir\{{$kasir->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus Lanjutkan')">Hapus</a>
              </td>
            </tr>
            </thead>
            @endforeach
          </table>
          <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Tampilkan 1 ke 10 of 57 entries</div>
              </div>
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

          @endsection
