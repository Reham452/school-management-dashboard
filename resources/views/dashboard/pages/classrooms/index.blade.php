@extends('layouts.dashboard.index')
@section('page_title', 'الصفوف الدراسية')
@section('content')
<x-flash-message />
<!-- الجدول -->
  <form action="{{ URL::current()}}" method="GET" class="row m-2 g-3 align-items-end mt-3">
    <div class="col-md-4 ">
      <label class="form-label">اسم الصف</label>
      <input type="text" name="name" class="form-control" value="{{request()->query('name')}}" placeholder="أول,ثاني,ثالث....">
    </div>
    <div class="col-md-3">
      <label class="form-label">الحد الأدنى للسعة</label>
      <input type="number" min="0" name="capacity" class="form-control" value="{{request()->query('capacity')}}" placeholder="مثلاّ 10,12,...">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">بحث</button>
      <button type="reset" class="btn btn-danger" id="resetBtn">إعادة تعيين</button>
    </div>
  </form>
  <div class="card table-card card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-list-alt ml-2"></i>
          قائمة الصفوف
      </h3>
      <div class="card-tools">
        <a href="{{route('dashboard.classrooms.create')}}"
          class="btn btn-primary btn-sm">
          <i class="fas fa-plus ml-1"></i> إضافة صف
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
            <th>تاريخ التسجيل</th>
            <th>الإجراءات</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($classrooms as $classroom)
            <tr>
              <td>{{$classroom->id}}</td>
              <td>{{$classroom->name}}</td>
              <td>{{$classroom->description}}</td>
              <td>{{$classroom->capacity}}</td>
              <td>{{$classroom->created_at}}</td>
              <td>
                <div class="d-flex align-items-center">
                   <a href="{{route('dashboard.classrooms.edit',$classroom->id)}}"
                       class="btn btn-warning btn-action" title="تعديل">
                      <i class="fas fa-edit"></i>
                   </a>
                    <form action="{{route('dashboard.classrooms.destroy',$classroom->id)}}" method="POST" class="m-0 mx-2">
                       @csrf
                       @method('delete')
                       <button class="btn btn-danger btn-action" title="حذف الصف" type="submit">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{route('dashboard.classrooms.show',$classroom->id)}}"
                      class="btn btn-primary btn-action" title="عرض معلومات الصف">
                      <i class="fas fa-info-circle"></i>
                    </a>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
@push('styles')
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@push('scripts')
  <script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script>
    $(function () {
      $('#usersTable').DataTable({
        responsive: true,
        lengthChange: true,
        autoWidth: false,
        order: [[0, 'asc']],
        language: {
          search: 'بحث:',
          lengthMenu: 'عرض _MENU_ سجل',
          info: 'عرض _START_ إلى _END_ من _TOTAL_ سجل',
          infoEmpty: 'لا توجد سجلات',
          infoFiltered: '(تمت التصفية من _MAX_ سجل)',
          zeroRecords: 'لم يتم العثور على نتائج',
          paginate: {
            first: 'الأول',
            last: 'الأخير',
            next: 'التالي',
            previous: 'السابق'
          }
        }
      });
    });
  </script>
   <script>
        document.getElementById('resetBtn').addEventListener('click', function () {
            window.location.href = '{{ route('dashboard.classrooms.index') }}';
        });
    </script>
@endpush