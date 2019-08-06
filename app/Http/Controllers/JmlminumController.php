<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JmlminumController extends Controller
{
  public function index(Request $request)
  {
    $data_minum = \App\Jmlminum::all();
    return view('jjmlminum.index',['data_jjmlminum' => $data_jmlminum]);
   }
}
