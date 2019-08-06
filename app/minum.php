<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class minum extends Model
{
      protected $table = 'minum';
      protected $primaryKey="id";
      protected $fillable = ['nama_minum','kode_minum','harga_beli','harga_jual','jumlah','sisa'];

}
