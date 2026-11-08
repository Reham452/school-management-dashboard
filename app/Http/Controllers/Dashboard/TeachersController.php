<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        $request = request();
        $query = Teacher::query();
        $name = $request->query('name');
        $specialization = $request->query('specialization');
        if($name){
            $query->where('name','like','%'.$name.'%');
        }
        if($specialization){
            $query->where('specialization','like','%'.$specialization.'%');
        }
        $teachers =$query->get();
        return view('dashboard.pages.teachers.index', compact('teachers'));
    }
    public function create(){
        $teacher = new Teacher();
        $classrooms = Classroom::pluck('name','id');
        return view('dashboard.pages.teachers.create',compact('teacher','classrooms'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'specialization'=>'string|max:100|nullable',
            'classroom_id'=>'nullable|exists:classrooms,id',
            'email'=>'required|email|max:150|unique:teachers,email',
            'phone'=>'string|max:20|nullable'
        ]);
        Teacher::create($request->all());
        return redirect()->route('dashboard.teachers.index')
        ->with('success','تم إضافة المعلم بنجاح');
    }
    public function edit($id){
        $teacher=Teacher::FindOrFail($id);
        $classrooms=Classroom::pluck('name','id');
        return view('dashboard.pages.teachers.edit',compact('teacher','classrooms'));
    }
    public function update(Request $request,$id){
        $teacher=Teacher::FindOrFail($id);
        $request->validate([
            'name'=>'required|string|max:255',
            'specialization'=>'string|max:100|nullable',
            'classroom_id'=>'nullable|exists:classrooms,id',
            'email'=>'required|email|max:150|unique:teachers,email,'.$id,
            'phone'=>'string|max:20|nullable'
        ]);
        $teacher->update($request->all());
        return redirect()->route('dashboard.teachers.index')
        ->with('success','تم تعديل معلومات الأستاذ بنجاح');
    }
    public function show($id){
        $teacher=Teacher::FindOrFail($id);
        return view('dashboard.pages.teachers.show',compact('teacher'));
    }
    public function destroy($id){
        $teacher=Teacher::FindOrFail($id);
        $teacher->delete();
        return redirect()->route('dashboard.teachers.index')
        ->with('success','تم حذف المعلم بنجاح');
    }
}   