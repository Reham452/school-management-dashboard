<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
        $classrooms_count = Classroom::count();
        $students_count = Student::count();
        $teachers_count = Teacher::count();
        $total_capacity = Classroom::sum('capacity');
        return view('dashboard.pages.index',compact('classrooms_count','students_count','teachers_count','total_capacity'));
    }
}
