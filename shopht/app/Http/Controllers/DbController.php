<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Employee;

class DbController extends Controller
{
    //
    public function index(){
    	// $all=DB::table('employees')->get();
    	// $all=DB::table('employees')->select('name','age','city')->get();
    	// $all=DB::table('employees')->pluck('email','city');
    	// dd($all);
    	// // 
    	// $single=DB::table('employees')->first();
    	// dd($single);
    	// //
    	// $orderBy=DB::table('employees')->orderBy('id','DESC')->get();
    	// dd($orderBy);
    	// // 
    	// $limit=DB::table('employees')->orderBy('id','DESC')->limit(2)->get();
    	// dd($limit);
    	// // 
    	// $count=DB::table('employees')->count();
    	// dd($count);
    	// // 
    	// $offset=DB::table('employees')->orderBy('salary','DESC')->offset(0)->limit(1)->get();
    	// dd($offset);
    	// // 
    	$min=DB::table('employees')->min('salary');
    	dd($min);
    }

    public function joining(){
        $result=DB::table('order')
        ->join('user','user.id','=','order.user_id')
        ->select('user.name','order.amount')
        ->where('status',0)
        ->get();
        dd($result);
    }

    public function model(){
        $result=Employee::all();
        dd($result);
    }
}
