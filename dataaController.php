<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class dataController extends Controller
{
    public function checkDB(){
    	
    	 $user = DB::select('select * from student');
    	 
    	 $user = DB::table('student')->count();
    	
    	

        


        
         $user = DB::table('employee')->join('student_details','student_details.employee_id','=','employee.id')
             ->select('employee.emp_name','employee.emp_dept','employee.salary','student_details.age','student_details.class')->get();
             echo "<pre>";
            print_r($user);


        
}
