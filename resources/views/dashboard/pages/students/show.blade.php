@extends('layouts.dashboard.index')
@section('parent_title','الطلاب')
@section('parent_route','dashboard.students.index')
@section('page_title','عرض معلومات الطالب')
@section('content')
<div class="card card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-info-circle ml-2"></i>
           معلومات الطالب
      </h3>
      <div class="card-tools">
         <a href="{{route('dashboard.students.index')}}"
            class="btn btn-primary btn-sm">
            <i class="fas fa-arrow-left ml-1"></i> العودة للطلاب
          </a>
        </div>
    </div>
    <div class="card-body">
       <table id="usersTable" class="table table-bordered table-striped table-hover table-brown" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>اسم اطالب</th>
            <th>الصف</th>
            <th>الإيميل</th>
            <th>رقم الهاتف</th>
            <th>تاريخ الميلاد</th>
          </tr>
        </thead>
                <tbody>
                  <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->classroom ? $student->classroom->name : 'غير محدد'}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->date_of_birth}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
</div>
@endsection