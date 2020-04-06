<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Company;

class Companies extends Controller
{
    function save(Request $req)
    {
        $company=new Company;
        $company->id=$req->id;
        $company->name=$req->name;
        $company->organisation=$req->organisation;
        $company->address=$req->address;
         echo $company->save();

        //print_r($req->input());
    }
}