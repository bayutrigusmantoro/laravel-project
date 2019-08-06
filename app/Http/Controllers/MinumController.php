<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinumController extends Controller
{
    public function index(Request $request)
    {
      $data_minum = \App\Minum::all();
      return view('minum.index',['data_minum' => $data_minum]);
     }

 public function create(Request $request)
     {
         \App\Minum::create($request->all());
       return redirect('\minum')->with('sukses','Data Berhasil di Tambahkan');
     }

     public function edit($id)
     {
       $minum = \App\Minum::find($id);
       return view('minum/edit',['minum' => $minum]);
     }

       public function update(Request $request, $id)
       {
         $minum = \App\Minum::find($id);
         $minum ->update($request->all());
         return redirect('/minum')->with('sukses','Data Berhasil di Update');
       }
       public function delete($id)
       {

           $minum = \App\Minum::find($id);
           $minum ->delete($minum);
         return redirect('/minum')->with('sukses','Data Berhasil di Hapus');
       }
}
