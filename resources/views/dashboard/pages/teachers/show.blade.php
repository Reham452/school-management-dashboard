@extends('layouts.dashboard.index')
@section('parent_title','المعلمين')
@section('parent_route','dashboard.teachers.index')
@section('page_title','عرض معلومات المعلم')
@section('content')
  <div class="card card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-info-circle ml-2"></i>
           معلومات المعلم
      </h3>
      <div class="card-tools">
         <a href="{{route('dashboard.teachers.index')}}"
            class="btn btn-primary btn-sm">
            <i class="fas fa-arrow-left ml-1"></i> العودة للمعلمين
          </a>
        </div>
    </div>
    <div class="card-body">
       <table id="usersTable" class="table table-bordered table-striped table-hover table-brown" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>اسم المعلم</th>
            <th>التخصص</th>
            <th>الصف</th>
            <th>الإيميل</th>
            <th>رقم الهاتف</th>
          </tr>
        </thead>
                <tbody>
                  <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->specialization}}</td>
                    <td>{{$teacher->classroom ? $teacher->classroom->name : 'غير محدد'}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->phone}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
</div>
@endsection