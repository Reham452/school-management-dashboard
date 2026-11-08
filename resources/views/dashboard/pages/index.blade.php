@extends('layouts.dashboard.index')
@section('page_title', 'الصفحة الرئيسية')
@section('content')
<!--قسم ترحيبي-->
<div class="profile-cover">
  <div class="profile-cover-overlay"></div>
  <div class="profile-cover-content">
    <div class="profile-avatar-wrap">
      <img src="{{asset('dashboard/dist/img/'. (auth()->user()->image ?? 'avatar.png' ))}}" alt="صورة شخصية" class="profile-avatar">
      <span class="profile-status online" title="متصل"></span>
    </div>
    <div class="profile-info">
      <h2 class="profile-name">{{ Auth::user()->name }}</h2>
      <p class="profile-title">
       مرحباً بك في لوحة التحكم، يمكنك إدارة شؤون الطلاب، المعلمين والصفوف من القائمة الجانبية.
      </p>  
    </div>
  </div>
</div>
<!-- إحصائيات سريعة -->
<div class="row mb-4 mt-4">
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="stat-box">
                <div class="stat-icon">
                  <i class="fas fa-school"></i>
                </div>
                <div class="stat-content">
                  <div class="stat-number">{{$classrooms_count}}</div>
                  <div class="stat-label">إجمالي الصفوف</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="stat-box">
                <div class="stat-icon">
                  <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="stat-content">
                  <div class="stat-number">{{$teachers_count}}</div>
                  <div class="stat-label">إجمالي المعلمين</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="stat-box">
                <div class="stat-icon">
                  <i class="fas fa-user-graduate"></i>
                </div>
                <div class="stat-content">
                  <div class="stat-number">{{$students_count}}</div>
                  <div class="stat-label">إجمالي الطلاب</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="stat-box">
                <div class="stat-icon">
                  <i class="fas fa-chair"></i>
                </div>
                <div class="stat-content">
                  <div class="stat-number">{{$total_capacity}}</div>
                  <div class="stat-label">السعة الإستعابية</div>
                </div>
              </div>
            </div>
</div>
<!-- قسم أزرار التحكم السريع  -->
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-bolt"></i> إجراءات سريعة
        </h3>
    </div>
    <div class="card-body">
        <div class="row text-center justify-content-center g-3">
            <!-- زر إضافة صف جديد -->
            <div class="col-md-4 mb-3 mb-md-0">
              <a href="{{route('dashboard.classrooms.create')}}"
                class="btn btn-primary btn-sm btn-block p-3">
                <i class="fas fa-plus ml-1"></i> إضافة صف
              </a>
            </div>
            <!-- زر إضافة معلم جديد -->
            <div class="col-md-4 mb-3 mb-md-0">
              <a href="{{route('dashboard.teachers.create')}}"
                class="btn btn-primary btn-sm btn-block p-3">
                <i class="fas fa-plus ml-1"></i> إضافة معلم
              </a>
            </div>
            <!-- زر إضافة طالب جديد -->
            <div class="col-md-4 mb-3 mb-md-0">
              <a href="{{route('dashboard.students.create')}}"
                class="btn btn-primary btn-sm btn-block p-3">
                <i class="fas fa-plus ml-1"></i> إضافة طالب
              </a>
            </div>
        </div>
    </div>
</div>

@endsection