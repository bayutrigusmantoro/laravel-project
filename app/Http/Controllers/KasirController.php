<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(Request $request)
    {
      if($request->has('q')){
        $data_kasir =\App\Kasir::where('nama_kasir','LIKE','%'.$request->q.'%')->get();
    }else{
      $data_kasir = \App\Kasir::all();
    }
    return view('kasir.index',['data_kasir' => $data_kasir]);
    }





    public function create(Request $request)
    {
      \App\Kasir::create($request->all());
      return redirect('/kasir')->with('sukses','Data Berhasil di Tambahkan');
   }
   public function edit($id)
   {
     $kasir = \App\kasir::find($id);
     return view('kasir/edit',['kasir' => $kasir]);
   }

     public function update(Request $request, $id)
     {
       $kasir = \App\Kasir::find($id);
       $kasir ->update($request->all());
       return redirect('/kasir')->with('sukses','Data Berhasil di Update');
     }

  public function delete($id)
  {
    $kasir =\App\Kasir::find($id);
    $kasir->delete($kasir);
    return redirect('/kasir')->with('sukses','Data Berhasil Di Hapus');
  }
}
