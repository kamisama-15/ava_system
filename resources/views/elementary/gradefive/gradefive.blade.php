@extends('layouts.themes.main')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Grade 1 Students</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Elementary</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Grade 5</h3>
                    <span class="float-right">
                        <a class="btn btn-success" href="{{action('ElementaryController@addGradeFive')}}">Add Student</a>
                    </span>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Section</th>
                            <th>Teacher</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grade_five_students as $grade_five_student)
                          <tr>
                            <td>{{$grade_five_student->gr_five_student_id}}</td>
                            <td>{{$grade_five_student->last_name}}</td>
                            <td>{{$grade_five_student->first_name}}</td>
                            <td>{{$grade_five_student->middle_name}}</td>
                            <td>
                                @foreach ($gr_five_sections as $gr_five_section)
                                @if ($gr_five_section->gr_five_section_id == $grade_five_student->gr_five_section_id)
                                    {{ $gr_five_section->gr_five_section_name }}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($teachers as $teacher)
                                @if ($teacher->tc_id == $grade_five_student->tc_id)
                                    {{ $teacher->tc_name }}
                                @endif
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a class="btn btn-outline-danger btn-sm" href="{{action('ElementaryController@deleteGradeFive',[$grade_five_student->gr_five_student_id])}}"><i class="fas fa-trash"></i></a>
                                <a class="btn btn-outline-warning btn-sm" href="{{action('ElementaryController@editGradeFive',[$grade_five_student->gr_five_student_id])}}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-outline-success btn-sm" href="{{action('ElementaryController@viewGradeFive',[$grade_five_student->gr_five_student_id])}}"><i class="fas fa-eye"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>

                </table>
                </div>
                <!-- /.card-body -->
            </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    

  {{-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
      });
  </script> --}}

@endsection