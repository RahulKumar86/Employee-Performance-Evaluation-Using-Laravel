<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cmp;

class usersdel extends Controller
{
    //
    function delete(Request $req)
    {
        //print_r($req->input());
        $cmp=Cmp::find($req->id);
        echo $cmp->delete();
    }
}
