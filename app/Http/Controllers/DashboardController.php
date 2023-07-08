<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    //
    public function main(){

        $total_grade_one = DB::table('grade_one')
        ->where('grade_one_active','1')
        ->count();
        $total_grade_two = DB::table('grade_two')
        ->where('grade_two_active','1')
        ->count();
        $total_grade_three = DB::table('grade_three')
        ->where('grade_three_active','1')
        ->count();
        $total_grade_four = DB::table('grade_four')
        ->where('grade_four_active','1')
        ->count();
        $total_grade_five = DB::table('grade_five')
        ->where('grade_five_active','1')
        ->count();
        $total_grade_six = DB::table('grade_six')
        ->where('grade_six_active','1')
        ->count();
        return view('dashboard.dashboard',compact('total_grade_one','total_grade_two','total_grade_three','total_grade_four','total_grade_five','total_grade_six'));
    }
    
}
