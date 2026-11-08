@extends('layouts.dashboard.index')
@section('parent_title', 'الصفوف الدراسية')
@section('parent_route','dashboard.classrooms.index')
@section('page_title', 'إضافة صف')
@section('content')
@if ($errors ->any())
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
          <h3 class="card-title">إضافة صف جديد</h3>
        </div>
        <div class="card-body">
          <form action="{{route('dashboard.classrooms.store')}}" method="POST">
            @csrf
            @include('dashboard.pages.classrooms._form')
            <button type="submit" class="btn btn-primary">إضافة صف</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

