@extends('layouts.dashboard.index')
@section('parent_title', 'الصفوف الدراسية')
@section('parent_route','dashboard.classrooms.index')
@section('page_title', 'معلومات الصف')
@section('content')
<!-- معلومات الصف -->
  <div class="card card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-info-circle ml-2"></i>
           معلومات الصف
      </h3>
      <div class="card-tools">
         <a href="{{route('dashboard.classrooms.index')}}"
            class="btn btn-primary btn-sm">
            <i class="fas fa-arrow-left ml-1"></i> العودة للصفوف
          </a>
        </div>
    </div>
    <div class="card-body">
       <table id="usersTable" class="table table-bordered table-striped table-hover table-brown" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>اسم الصف</th>
            <th>الوصف</th>
            <th>السعة الاستعابية</th>
          </tr>
        </thead>
                <tbody>
                  <tr>
                    <td>{{$classroom->id}}</td>
                    <td>{{$classroom->name}}</td>
                    <td>{{$classroom->description}}</td>
                    <td>{{$classroom->capacity}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
</div>
<!-- قائمة الطلاب المسجلين في هذا الصف-->
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-users ml-2"></i>
          قائمة الطلاب المسجلين في هذا الصف</h3>
    </div>
    <div class="card-body">
        <table id="usersTable" class="table table-bordered table-striped table-hover table-brown" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم الطالب</th>
                    <th>البريد الإلكتروني</th>
                    <th>رقم الهاتف</th>
                </tr>
            </thead>
            <tbody>
                @forelse($classroom->students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone ?? 'لا يوجد' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-warning">لا يوجد طلاب مسجلين في هذا الصف حالياً.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<!--قائمة المعلمين لهذا الصف-->
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chalkboard-teacher ml-2"></i>
          قائمة المعلمين لهذا الصف</h3>
    </div>
    <div class="card-body">
        <table id="usersTable" class="table table-bordered table-striped table-hover table-brown" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم المعلم</th>
                    <th>التخصص</th>
                    <th>رقم الهاتف</th>
                </tr>
            </thead>
            <tbody>
                @forelse($classroom->teachers as $index => $teacher)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->specialization }}</td>
                        <td>{{ $teacher->phone}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-warning">لا يوجد معلمين لهذا الصف حالياً.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection