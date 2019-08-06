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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Tambahkan Data Minum
                    </button>
                  </div>

                </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Isi Data Minum </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <form action="/minum/create" method="POST">
                      {{csrf_field()}}
                      <div class="form-row">
                          <div class="col-md-4 mb-30">
                            <label for="validationTooltip01">Nama Minuman</label>
                            <input name="nama_minum" type="text" class="form-control" id="recipient-name" placeholder="Nama Minuman" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Kode Minuman</label>
                            <input name="kode_minum" type="text" class="form-control" id="recipient-name" placeholder="kode otomatis" required>
                          </div>

                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">Harga Beli</label>
                            <input name="harga_beli"  type="text" class="form-control" id="recipient-name" placeholder=" Harga Beli" required>
                          </div>
                          <div class="col-md-4 mb-30">
                            <label for="validationTooltip01">Harga Jual</label>
                            <input name="harga_jual" type="text" class="form-control" id="recipient-name" placeholder="Harga Jual" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Jumlah Barang </label>
                            <input name="jumlah" type="text" class="form-control" id="recipient-name" placeholder="jumlah" required>
                          </div>

                          <div class="form-row">
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04">Sisa Barang</label>
                              <input name="sisa"  type="text" class="form-control" id="recipient-name" placeholder=" Sisa Barang" required>
                            </div>
                            <div>

                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>

                    </form>
                </div>
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
                  <th> Kode Minum</th>
                  <th> Harga Beli</th>
                  <th> Harga Jual</th>
                  <th> Jumlah</th>
                  <th> Sisa Barang</th>
                  <th> Pilihan</th>
                </tr>
              @foreach($data_minum as $minum)
                <tr>
                  <td> {{$minum->nama_minum}}</td>
                  <td> {{$minum->kode_minum}}</td>
                  <td> {{$minum->harga_beli}}</td>
                  <td> {{$minum->harga_jual}}</td>
                  <td> {{$minum->jumlah}}</td>
                  <td> {{$minum->sisa}}</td>
                  <td>
                    <a href="\minum\{{$minum->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                    <a href="\minum\{{$minum->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus Lanjutkan')">Hapus</a>
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

          @endsection
