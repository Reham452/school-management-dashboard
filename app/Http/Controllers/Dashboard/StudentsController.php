<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        $request = request();
        $query = Student::query();
        $name = $request->query('name');
        $classroom_id = $request->query('classroom_id');
        if($name){
            $query->where('name','like','%'.$name.'%');
        }
        if($classroom_id){
            $query->where('classroom_id','=',$classroom_id);
        }
        $students= $query->get();
        $classrooms = Classroom::pluck('name','id');
        return view('dashboard.pages.students.index',compact('students','classrooms'));
    }
    public function create(){
        $student = new Student();
        $classrooms = Classroom::pluck('name','id');
        return view('dashboard.pages.students.create',compact('student','classrooms'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255|string',
            'email'=>'required|email|max:150|unique:students,email',
            'birth_date'=>'nullable|date',
            'phone'=>'nullable|string|max:20',
            'classroom_id'=>'nullable|exists:classrooms,id'
        ]);
        if ($request->classroom_id) {
            $classroom = Classroom::withCount('students')->findOrFail($request->classroom_id);
            if ($classroom->students_count >= $classroom->capacity) {
                return redirect()->back()
                ->withInput() 
                ->withErrors(['classroom_id' => 'عذراً، هذا الصف الدراسي ممتلئ تماماً وسعته الإستعابية لا تسمح بالمزيد!']);
            };
        }
        Student::create($request->all());
        return redirect()->route('dashboard.students.index')
        ->with('success','تم إضافة الطالب بنجاح');
    }
    public function edit($id){
        $student = Student::FindOrFail($id);
        $classrooms = Classroom::pluck('name','id');
        return view('dashboard.pages.students.edit',compact('student','classrooms'));
    }
    public function update(Request $request,$id){
        $student = Student::FindOrFail($id);
        $request->validate([
            'name'=>'required|max:255|string',
            'email'=>'required|email|max:150|unique:students,email,'.$id,
            'birth_date'=>'nullable|date',
            'phone'=>'nullable|string|max:20',
            'classroom_id'=>'nullable|exists:classrooms,id'
        ]);
        if ($request->classroom_id) {
            $classroom = Classroom::withCount('students')->findOrFail($request->classroom_id);
            if ($classroom->students_count >= $classroom->capacity) {
                return redirect()->back()
                ->withInput() 
                ->withErrors(['classroom_id' => 'عذراً، هذا الصف الدراسي ممتلئ تماماً وسعته الإستعابية لا تسمح بالمزيد!']);
            };
        }
        $student->update($request->all());
        return redirect()->route('dashboard.students.index')
        ->with('success','تم تعديل معلومات الطالب بنجاح');
    }
    public function show($id){
        $student = Student::FindOrFail($id);
        return view('dashboard.pages.students.show',compact('student'));
    }
    public function destroy($id){
        $student = Student::FindOrFail($id);
        $student->delete();
        return redirect()->route('dashboard.students.index')
        ->with('success','تم حذف الطالب بنجاح');
    }
}
