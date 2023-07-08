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
                <div class="card-header bg-primary">
                    <h3 class="card-title">Edit Grade 5 Student</h3>
                </div>
                <!-- /.card-header -->
                <div class="contaier col-12">
                    <form action="{{action('ElementaryController@updateGradeFiveStudent')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="last_name" id="last_name" value="{{$grade_five_students->last_name}}" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="first_name" id="first_name" value="{{$grade_five_students->first_name}}" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle_name" class="col-sm-3 col-form-label">Middle Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control"  name="middle_name" id="middle_name" value="{{$grade_five_students->middle_name}}" placeholder="Middle Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group row">
                                      <label for="gr_five_section_id" class="col-sm-3 col-form-label">Section</label>
                                      <div class="col-sm-9">
                                        <select class="form-control" name="gr_five_section_id" id="gr_five_section_id">
                                          <option value="">Select</option>
                                          @foreach ($gr_five_sections as $gr_five_section)
                                              <option value="{{ $gr_five_section->gr_five_section_id }}" @if ($gr_five_section->gr_five_section_id == $grade_five_students->gr_five_section_id) selected @endif>
                                                  {{ $gr_five_section->gr_five_section_name }}
                                              </option>
                                          @endforeach
                                      </select>
                                      
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="tc_id" class="col-sm-3 col-form-label">Teacher</label>
                                      <div class="col-sm-9">
                          
                                        <select class="form-control" name="tc_id" id=""> 
                                          <option value="">Select</option>
                                          @foreach ($teachers as $teacher)
                                              <option value="{{ $teacher->tc_id }}" @if ($teacher->tc_id == $grade_five_students->tc_id) selected @endif>
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
                            <input type="hidden" name="gr_five_student_id" value="{{$grade_five_students->gr_five_student_id}}">
                            <button type="submit" class="btn btn-info" ><i class="fas fa-save mr-2"></i>Save Changes</button>
                            <a class="btn btn-danger" href="{{action('ElementaryController@gradeFive')}}">Back</a>
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