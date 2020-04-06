<?php
	namespace App\Http\Controllers;
	Use Illuminate\Http\Request;
	class testcontroller extends Controller{
		public function test(Request $request){
		$request-> validate([
			"name"=>"required",
			"password"=>"min:5|max:10"
		]);
		return $request->input();

	}
}
?>