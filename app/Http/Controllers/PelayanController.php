<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelayanController extends Controller
{
    public function index(Request $request)
    {
      if($request->has('q')){
      $data_pelayan =\App\Pelayan::where('nama_pelayan','LIKE','%'.$request->q.'%')->get();
    }else{
      $data_pelayan = \App\Pelayan::all();
    }
    return view('pelayan.index',['data_pelayan' => $data_pelayan]);
    }


    public function create(Request $request)
    {
      //tabel user
      $user = new \App\User;
      $user->role = 'pelayan';
      $user->name = $request->nama_pelayan;
      $user->email = $request->email;
      $user->password = bcrypt('pelayan');
      $user->remember_token = str_random(60);
      $user->save();

      $request->request->add(['user_id' -> $user-id ]);
      $pelayan = \App\Pelayan::create($request->all());
      return redirect('/pelayan')->with('sukses','Data Berhasil di Tambahkan');
    }

    public function edit($id)
      {
      $pelayan = \App\pelayan::find($id);
      return view('pelayan/edit',['pelayan' => $pelayan]);
    }

    public function update(Request $request, $id)
    {
      $pelayan = \App\pelayan::find($id);
      $pelayan ->update($request->all());
      return redirect('/pelayan')->with('sukses','Data Berhasil di Update');
    }

    public function delete($id)
    {
      $pelayan =\App\Pelayan::find($id);
      $pelayan->delete($pelayan);
      return redirect('/pelayan')->with('sukses','Data Berhasil Di Hapus');
  }
}
