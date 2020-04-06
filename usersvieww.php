<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\usersviewww;

class usersvieww extends Controller
{
    function update(Request $req)
    {
       //print_r($req->input());
      echo usersviewww::where('id',$req->id)->update(['Rating'=>$req->Rating]);
    }
}