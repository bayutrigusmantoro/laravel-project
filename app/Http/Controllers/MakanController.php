<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakanController extends Controller
{
    public function index(Request $request)
    {
        $data_makan = \App\Makan::all();
      return view('makan.index',['data_makan' => $data_makan]);
     }

      public function create(Request $request)
     {
         \App\Makan::create($request->all());
       return redirect('\makan')->with('sukses','Data Berhasil di Tambahkan');
     }

     public function edit($id)
     {
       $makan = \App\Makan::find($id);
       return view('makan/edit',['makan' => $makan]);
     }

       public function update(Request $request, $id)
       {
         $makan = \App\Makan::find($id);
         $makan ->update($request->all());
         return redirect('/makan')->with('sukses','Data Berhasil di Update');
       }
       public function delete($id)
       {
         $makan = \App\Makan::find($id);
         $makan ->delete($makan);
         return redirect('/makan')->with('sukses','Data Berhasil di Hapus');
       }
}
