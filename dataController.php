<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class dataController extends Controller
{
    public function checkDB(){
    	// echo "We are here";
    	// $user = DB::select('select * from student');
    	// $user = DB::table('student')->where('name','abc')->get();
    	// $user = DB::table('student')->count();
    	//$user = DB::table('student')->find(1);
    	//$user = DB::table('student')->where('name','abc')->delete();
    	//$user = DB::table('student')->insert(['id'=>'15','name'=>'hello11','email'=>'h11@gmail.com','address'=>'dfs11']);
    	//$user = DB::table('student')->where('name','xyz')->update(['email'=>'hello123@gmail.com']);
    	//$user = DB::table('student')->avg('id');
        // $user  =DB::table('employee')->pluck('salary');
        // foreach($user as $salary){
        //     echo $salary;
        // }

        // $user = DB::table('employee')->pluck('emp_name','emp_dept');
        // foreach ($user as  $emp_name=>$salary) {
        //     echo $salary;
        // }

       // $user = DB::table('employee')->find('3');
    	// print_r($user);


        //joining two tables
        // $user = DB::table('employee')->join('student_details','student_details.employee_id','=','employee.id')
        //     ->select('employee.emp_name','employee.emp_dept','employee.salary','student_details.age','student_details.class')->get();
        //     echo "<pre>";
        //     print_r($user);


        //joining three tables
        $user = DB::table('employee')->join('student_details','student_details.employee_id','=','employee.id')
        ->join('order','order.employee_id','=','student_details.employee_id')
        ->select('employee.emp_name','employee.emp_dept','employee.salary','student_details.age','order.order_no','order.item_name')->get();
        echo "<pre>";
        print_r($user);
    }
}
