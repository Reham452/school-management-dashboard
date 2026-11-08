<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
class ClassroomsController extends Controller
{
    //
    public function index(){
        $request=request();
        $query=Classroom::query();
        $name=$request->query('name');
        $capacity=$request->query('capacity');
        if($name){
            $query->where('name','like','%'.$name.'%');
        }
        if($capacity){
            $query->where('capacity','>=',$capacity);
        }
        $classrooms = $query->get();
        return view('dashboard.pages.classrooms.index',compact('classrooms'));
    }
    public function create(){
        $classroom=new Classroom();
        return view('dashboard.pages.classrooms.create',compact('classroom'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'capacity'=>'nullable|integer|min:1',
        ]);
        $request = $request->all();
        if(empty($request['capacity'])){
            $request['capacity']=30;
        }

        Classroom::create($request);
        return redirect()->route('dashboard.classrooms.index')
        ->with('success','تم إضافة الصف بنجاح');
    }
    public function edit($id){
        $classroom=Classroom::FindOrFail($id);
        return view('dashboard.pages.classrooms.edit',compact('classroom'));
    }
    public function update(Request $request,$id){
        $classroom=Classroom::FindOrFail($id);
        $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'capacity'=>'nullable|integer|min:1',
        ]);
        $request = $request->all();
        if(empty($request['capacity'])){
            $request['capacity']=30;
        }
        $classroom->update($request);
        return redirect()->route('dashboard.classrooms.index')
        ->with('success','تم تعديل الصف بنجاح');
    }
    public function show($id){
        $classroom=Classroom::with(['students','teachers'])->FindOrFail($id);
        return view('dashboard.pages.classrooms.show',compact('classroom'));
    }
    public function destroy($id){
        $classroom=Classroom::FindOrFail($id);
        $classroom->delete();
        return redirect()->route('dashboard.classrooms.index')
        ->with('success','تم حذف الصف بنجاح');
    }
}
