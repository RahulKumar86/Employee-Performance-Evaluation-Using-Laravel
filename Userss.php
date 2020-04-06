<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Users;

class Userss extends Controller{
    function index(Request $req)
    {
        $users=new Users;
        $users->id=$req->id;
        $users->name=$req->name;
        $users->email=$req->email;
        $users->address=$req->address;
        $users->Rating=$req->Rating;
         echo $users->save();
    }
}