@extends('layouts.dashboard.index')
@section('parent_title','الطلاب')
@section('parent_route','dashboard.students.index')
@section('page_title','تعديل الطالب')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="row mb-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">تعديل طالب</h3>
        </div>
        <div class="card-body">
          <form action="{{route('dashboard.students.update',$student->id)}}" method="POST">
            @method('PUT')
            @csrf
            @include('dashboard.pages.students._form')
            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection