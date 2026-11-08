@extends('layouts.dashboard.index')
@section('parent_title','الطلاب')
@section('parent_route','dashboard.students.index')
@section('page_title','إضافة طالب')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
@endif
<div class="row mb-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">إضافة طالب جديد</h3>
        </div>
        <div class="card-body">
          <form action="{{route('dashboard.students.store')}}" method="POST">
            @csrf
            @include('dashboard.pages.students._form')
            <button type="submit" class="btn btn-primary">إضافة طالب</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection