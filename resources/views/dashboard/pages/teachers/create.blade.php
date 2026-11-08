@extends('layouts.dashboard.index')
@section('parent_title','المعلمين')
@section('parent_route','dashboard.teachers.index')
@section('page_title','إضافة معلم')
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
          <h3 class="card-title">إضافة معلم جديد</h3>
        </div>
        <div class="card-body">
          <form action="{{route('dashboard.teachers.store')}}" method="POST">
            @csrf
            @include('dashboard.pages.teachers._form')
            <button type="submit" class="btn btn-primary">إضافة معلم</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection