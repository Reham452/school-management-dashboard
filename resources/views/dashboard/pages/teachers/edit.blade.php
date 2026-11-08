@extends('layouts.dashboard.index')
@section('parent_title','المعلمين')
@section('parent_route','dashboard.teachers.index')
@section('page_title','تعديل معلم')
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
          <h3 class="card-title">تعديل معلم</h3>
        </div>
        <div class="card-body">
          <form action="{{route('dashboard.teachers.update',$teacher->id)}}" method="POST">
            @method('PUT')
            @csrf
            @include('dashboard.pages.teachers._form')
            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection