@extends('layouts.themes.main')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Grade 6 Students</h1>
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
                        <div class="card-tools row justify-content-end ">
                            <button type="button" class="btn btn-tool btn-lg" data-card-widget="maximize" ><i class="fas fa-expand" aria-hidden="true"></i></button>
                        </div>
                        <span class="float-left">
                            <a class="btn btn-success" href="{{action('ElementaryController@addGradeSix')}}">Add Student</a>
                        </span>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body  overflow-auto">
                    <table id="example" class="table table-striped  table-hover">
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
                            @foreach ($grade_six_students as $grade_six_student)
                            <tr>
                                <td>{{$grade_six_student->gr_six_student_id}}</td>
                                <td>{{$grade_six_student->last_name}}</td>
                                <td>{{$grade_six_student->first_name}}</td>
                                <td>{{$grade_six_student->middle_name}}</td>
                                <td>
                                    @foreach ($gr_six_sections as $gr_six_section)
                                    @if ($gr_six_section->gr_six_section_id == $grade_six_student->gr_six_section_id)
                                        {{ $gr_six_section->gr_six_section_name }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($teachers as $teacher)
                                    @if ($teacher->tc_id == $grade_six_student->tc_id)
                                        {{ $teacher->tc_name }}
                                    @endif
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-danger btn-sm mb-2" href="{{action('ElementaryController@deleteGradeSix',[$grade_six_student->gr_six_student_id])}}"><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-outline-warning btn-sm mb-2" href="{{action('ElementaryController@editGradeSix',[$grade_six_student->gr_six_student_id])}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-outline-success btn-sm mb-2" href="{{action('ElementaryController@viewGradeSix',[$grade_six_student->gr_six_student_id])}}"><i class="fas fa-eye"></i></a>
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
        <div class="row">
            <div class="col-12">
                <div class="card overflow-auto">
                    <div class="card-header">
                      <div class="card-tools row justify-content-end">
                        <button type="button" class="btn btn-tool btn-lg" data-card-widget="maximize">
                          <i class="fas fa-expand" aria-hidden="true"></i>
                        </button>
                      </div>
                      <span class="float-left">
                        @foreach ($gr_six_sections as $section)
                          <a class="btn btn-success section-button" href="#" onclick="event.preventDefault()" data-section="{{ $section->gr_six_section_id }}">{{ $section->gr_six_section_name }}</a>
                        @endforeach
                        {{-- <a class="btn btn-secondary" href="#" onclick="clearTable('{{ $section->gr_six_section_id }}')">Clear Table</a> --}}
                      </span>
                    </div>
                    <div class="card-body overflow-auto">
                      @foreach ($gr_six_sections as $section)
                        <div class="section-{{ $section->gr_six_section_id }}" style="display: none;">
                            <table id="example-{{ $section->gr_six_section_id }}" class="table table-striped table-hover">
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
                                <tbody id="table-body-{{ $section->gr_six_section_id }}">
                                  @foreach ($grade_six_students as $grade_six_student)
                                    @if ($grade_six_student->gr_six_section_id == $section->gr_six_section_id)
                                      <tr>
                                        <td>{{ $grade_six_student->gr_six_student_id }}</td>
                                        <td>{{ $grade_six_student->last_name }}</td>
                                        <td>{{ $grade_six_student->first_name }}</td>
                                        <td>{{ $grade_six_student->middle_name }}</td>
                                        <td>{{ $section->gr_six_section_name }}</td>
                                        <td>
                                          @foreach ($teachers as $teacher)
                                            @if ($teacher->tc_id == $grade_six_student->tc_id)
                                              {{ $teacher->tc_name }}
                                            @endif
                                          @endforeach
                                        </td>
                                        <td class="text-center">
                                          <a class="btn btn-outline-danger btn-sm mb-2" href="{{ action('ElementaryController@deleteGradeSix', [$grade_six_student->gr_six_student_id]) }}"><i class="fas fa-trash"></i></a>
                                          <a class="btn btn-outline-warning btn-sm mb-2" href="{{ action('ElementaryController@editGradeSix', [$grade_six_student->gr_six_student_id]) }}"><i class="fas fa-edit"></i></a>
                                          <a class="btn btn-outline-success btn-sm mb-2" href="{{ action('ElementaryController@viewGradeSix', [$grade_six_student->gr_six_student_id]) }}"><i class="fas fa-eye"></i></a>
                                        </td>
                                      </tr>
                                    @endif
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                      @endforeach
                    </div>
                  </div>                
        </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    

    <script>
        $(document).ready(function() {
          $(".section-button").click(function() {
            var sectionId = $(this).data("section");
            $(".section-" + sectionId).show();
            $(".section-" + sectionId).siblings("div").hide();
          });
        });
      </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
    $(document).ready(function() {
      @foreach ($gr_six_sections as $section)
        $('#example-{{ $section->gr_six_section_id }}').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
        });
      @endforeach
    });
    </script>
    <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "buttons": [
          "copy",
          "csv",
          "excel",
          "pdf",
          "print",
          "colvis"
        ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": [
          "copy",
          "csv",
          "excel",
          "pdf",
          "print",
          "colvis"
        ]
      }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
    </script>

@endsection