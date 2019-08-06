<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makan extends Model
{
    protected $table = 'makan';
    protected $primaryKey="id";
    protected $fillable = ['nama_makan','kode_makan','harga_beli','harga_jual','jumlah','sisa'];

}
