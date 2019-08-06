@extends('layouts.master')
		@section('content')
                        <div class="row">
                          <div class="col-lg-12">
                              <h1>Data Makan</h1>
                          </div>
                    <div class="modal-body">
                        <div>
                        <form action="/makan/{{$makan->id}}/update" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Makan</label>
                        <input name="nama_makan" type="text" placeholder="nama" value="{{$makan->nama_makan}}" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label" >Kode Makan</label>
                        <input name="kode_makan" disabled="disabled" type="text" value="{{$makan->kode_makan}}" class="form-control" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_beli</label>
                        <input name="harga_beli" type="text" class="form-control" value="{{$makan->harga_beli}}" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_jual</label>
                        <input name="harga_jual" type="text" class="form-control" value="{{$makan->harga_jual}}" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">jumlah</label>
                        <input name="jumlah" type="text" class="form-control" value="{{$makan->jumlah}}" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">sisa</label>
                        <input name="sisa" type="text" class="form-control" value="{{$makan->jumlah}}" id="recipient-name">
                      </div>
                  </div>
									<button type="submit" class="btn btn-warning">Simpan Data</button>
                      </form>
											 @endsection
