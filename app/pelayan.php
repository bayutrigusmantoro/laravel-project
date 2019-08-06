<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelayan extends Model
{
  protected $table='pelayan';
  protected $primaryKey="id";
  protected $fillable =['nama_pelayan','kode_pelayan','jk','umur','agama','alamat','tlp','user_id'];

}
