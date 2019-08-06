<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jmlmakan@controller extends Controller
{
  public function index(Request $request)
  {
    $data_minum = \App\Jmlmakan::all();
    return view('jmlmakan.index',['data_jmlmakan' => $data_jmlmakan]);
   }
}
