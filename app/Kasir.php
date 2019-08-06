<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
  protected $table = 'kasir';
  protected $primaryKey="id";
  protected $fillable = ['nama_kasir','kode_kasir','jk','umur','agama','alamat','tlp'];
}
