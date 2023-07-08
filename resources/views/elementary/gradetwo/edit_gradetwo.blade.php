@extends('layouts.themes.main')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Grade 2 Students</h1>
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
                <div class="card-header bg-primary">
                    <h3 class="card-title">Edit Grade 2 Student</h3>
                </div>
                <!-- /.card-header -->
                <div class="contaier col-12">
                    <form action="{{action('ElementaryController@updateGradeTwoStudent')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="last_name" id="last_name" value="{{$grade_two_students->last_name}}" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="first_name" id="first_name" value="{{$grade_two_students->first_name}}" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle_name" class="col-sm-3 col-form-label">Middle Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control"  name="middle_name" id="middle_name" value="{{$grade_two_students->middle_name}}" placeholder="Middle Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="gr_two_section_id" class="col-sm-3 col-form-label">Section</label>
                                        <div class="col-sm-9">
                                          <select class="form-control" name="gr_two_section_id" id="gr_two_section_id">
                                            <option value="">Select</option>
                                            @foreach ($gr_two_sections as $gr_two_section)
                                                <option value="{{ $gr_two_section->gr_two_section_id }}" @if ($gr_two_section->gr_two_section_id == $grade_two_students->gr_two_section_id) selected @endif>
                                                    {{ $gr_two_section->gr_two_section_name }}
                                                </option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tc_id" class="col-sm-3 col-form-label">Teacher</label>
                                        <div class="col-sm-9">
                                          <select class="form-control" name="tc_id" id="tc_id"> 
                                            <option value="">Select</option>
                                            @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher->tc_id }}" @if ($teacher->tc_id == $grade_two_students->tc_id) selected @endif>
                                                    {{ $teacher->tc_name }}
                                                </option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
    
    
    
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="hidden" name="gr_two_student_id" value="{{$grade_two_students->gr_two_student_id}}">
                            <button type="submit" class="btn btn-info" ><i class="fas fa-save mr-2"></i>Save Changes</button>
                            <a class="btn btn-danger" href="{{action('ElementaryController@gradeTwo')}}">Back</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                
              
            </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

@endsection