<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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






  </body>
</html>
