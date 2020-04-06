<?php
		namespace App\Http\Controller;

		use Illuminate\Http\Request;

		class bladeController extends Controller{
			public function index(){
				$data['name'=>'an','email'=>'a@gmail.com','head'=>'<h1>Btech class</h1>'];
				return view('user',['data'=>$data]);
			}
		}
?>