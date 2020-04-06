<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Hellocontroller extends Controller{
	public function index($max,$min=0){
		//echo "Max = ".$max." Min = ".$min;
		return view('hello');
	}
}
?>