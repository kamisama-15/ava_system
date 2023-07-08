@extends('layouts.themes.main')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Grade 5 Student Profile</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{action('ElementaryController@gradeFive')}}">Students</a></li>
                <li class="breadcrumb-item ">
                  Grade5 <span class="badge badge-danger rounded-circle text-center"></span>
                  
                </li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{asset('grade_one/default.png')}}" alt="Student profile picture">
                    <p class="text-muted">(Upload a Photo)</p>
                  </div>
  
                  <h3 class="profile-username text-center"> {{$grade_five_students->first_name.' '.$grade_five_students->last_name}} </h3>
  
                  <p class="text-muted text-center">Grade 1- {{$grade_five_students->gr_five_section_id}} </p>
  
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>School Year</b> <a class="float-right">2021</a>
                    </li>
                    <li class="list-group-item">
                      <b>End of School Year</b> <a class="float-right">2022</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Contact Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Email</strong>
  
                  <p class="text-muted">
                    {{$grade_five_students->gr_five_email}}
                  </p>
                  
                  <hr>
                  <strong><i class="fas fa-phfive mr-1"></i> Mobile Number</strong>
  
                  <p class="text-muted">
                    {{$grade_five_students->gr_five_mobile_num}}
                  </p>
                  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
  
                  <p class="text-muted">{{$grade_five_students->gr_five_address}}</p>
  
                  <hr>
  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Hobbies</strong>
  
                  <p class="text-muted">
                    {{$grade_five_students->gr_five_hobbies ?: 'No Hobbies Displayed'}}
                  </p>
  
                  <hr>
  
                  <strong><i class="far fa-file-alt mr-1"></i> Motto in Life</strong>
  
                  <p class="text-muted">
                    {{$grade_five_students->gr_five_motto ?: 'No Motto Displayed'}}
                  </p>
                  <hr>
                  <a href="#" class="btn btn-info col-12"><i class="fas fa-print"></i> Print Document</a>
                </div>

                
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Personal Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#family" data-toggle="tab">Family Background</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Others</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <form class="form-horizontal" method="POST" action="{{action('ElementaryController@viewUpdateGradefive')}}">
                          @csrf
                            <div class="form-group row">
                              <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="last_name" name="last_name" placeholder="Name" disabled value="{{$grade_five_students->last_name}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="first_name" name="first_name" placeholder="Name" disabled value="{{$grade_five_students->first_name}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="middle_name" name="middle_name" placeholder="Name" disabled value="{{$grade_five_students->middle_name}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="gr_five_email" name="gr_five_email" placeholder="Email" value="{{$grade_five_students->gr_five_email}}"@if($grade_five_students->gr_five_email) readonly @endif>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_address" class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="gr_five_address" name="gr_five_address" placeholder="Address" value="{{$grade_five_students->gr_five_address}}" @if ($grade_five_students->gr_five_address) readonly @endif>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                              <div class="col-sm-4">
                                <input type="date" class="form-control" id="gr_five_birthdate" name="gr_five_birthdate" placeholder="Birthdate"  value="{{$grade_five_students->gr_five_birthdate}}">
                              </div>
                              <label for="gr_five_birth_place" class="col-sm-2 col-form-label">Place Of Birth</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="gr_five_birth_place" name="gr_five_birth_place" placeholder="" value="{{$grade_five_students->gr_five_birth_place}}" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_sex" class="col-sm-2 col-form-label">Sex</label>
                              <div class="col-sm-4">
                                  <select class="form-control" name="gr_five_sex" id="gr_five_sex">
                                    <option value="">Select</option>
                                    <option value="M"@if($grade_five_students->gr_five_sex == 'M') selected @endif>Male</option>
                                    <option value="F"@if($grade_five_students->gr_five_sex == 'F') selected @endif>Female</option>
                                  </select>
                              </div>
                              
                              <label for="civil_statuses" class="col-sm-2 col-form-label">Status</label>
                              <div class="col-sm-4">
                                <select class="form-control" name="civil_statuses" id="civil_statuses" >
                                  <option value="">Select</option>
                                  @foreach ($civil_statuses as $civil_statuse)
                                      <option value="{{$civil_statuse->sta_id}}" @if ($civil_statuse->sta_id==$grade_five_students->civil_statuses)
                                        selected
                                      @endif > {{$civil_statuse->sta_value}} </option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_height" class="col-sm-2 col-form-label">Height</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="gr_five_height" name="gr_five_height" placeholder="Height in cm." value="{{$grade_five_students->gr_five_height}}" >
                              </div>
                              
                              <label for="gr_five_weight" class="col-sm-2 col-form-label">Weight</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="gr_five_weight" name="gr_five_weight" placeholder="Weight in Kg." value="{{$grade_five_students->gr_five_weight}}" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="citizenship_id" class="col-sm-2 col-form-label">Citizenship</label>
                              <div class="col-sm-4">
                                  <select class="form-control"  name="citizenship_id" id="citizenship_id" >
                                      <option value="">Select</option>
                                      @foreach ($citizenships as $citizenship)
                                          <option value="{{$citizenship->citizenship_id}}" @if ($citizenship->citizenship_id==$grade_five_students->citizenship_id)
                                              selected 
                                          @endif>{{$citizenship->citizenship_value}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <label for="bld_id" class="col-sm-2 col-form-label">Blood Type</label>
                              <div class="col-sm-4">
                                <select class="form-control" name="bld_id" id="bld_id">
                                    <option value="">Select</option>
                                    @foreach ($blood_types as $blood_type)
                                        <option  value="{{$blood_type->bld_id}}" @if ($blood_type->bld_id==$grade_five_students->bld_id)
                                            selected
                                        @endif>{{$blood_type->bld_value}}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_dual_citizenship" class="col-sm-5 col-form-label"> Pls. Indicate Country (Dual Citizenship)</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="gr_five_dual_citizenship" name="gr_five_dual_citizenship" value="{{$grade_five_students->gr_five_dual_citizenship}}" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_mobile_num" class="col-sm-2 col-form-label">Phfive #</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="gr_five_mobile_num" name="gr_five_mobile_num" placeholder="ex. 09989898" value="{{$grade_five_students->gr_five_mobile_num}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_hobbies" class="col-sm-2 col-form-label">Hobbies</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="gr_five_hobbies" name="gr_five_hobbies" placeholder="Hobbies">{{$grade_five_students->gr_five_hobbies}}</textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gr_five_motto" class="col-sm-2 col-form-label">Motto</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="gr_five_motto" name="gr_five_motto" placeholder="Motto">{{$grade_five_students->gr_five_motto}}</textarea>
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="offset-sm-1 col-sm-10">
                                <input type="hidden" name="gr_five_student_id" value="{{$grade_five_students->gr_five_student_id}}">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                              </div>
                            </div>
                          </form>
                    </div>
                  
                    <div class="tab-pane" id="family">
                      <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                          data-target="#familyAdd"><span class="fa fa-plus-circle"></span> Add
                          Record</button>
                      <table class="table table-responsive table-hover table-condensed">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Relationship</th>
                                  <th>Occupation</th>
                                  <th>Employer</th>
                                  <th>Address</th>
                                  <th>Tel. No</th>
                                  <th width="80px" class="text-center"><i class="fa fa-cog"></i></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($gr_five_family as $row)
                                  @if ($row->gr_five_student_id)
                                  <tr>
                                    <td>{{$row->gr_five_first_name.' '.$row->gr_five_middle_name. ' ' .$row->gr_five_last_name}}</td>
                                    <td>   
                                      @foreach ($family_types as $family_type)
                                        @if ($family_type->ftyp_id == $row->ftyp_id)
                                            {{ $family_type->ftyp_name }}
                                      @endif
                                      @endforeach
                                    </td>
                                      <td>{{$row->gr_five_birth_date}}</td>
                                      <td>{{$row->gr_five_occupation}}</td>
                                      <td>{{$row->gr_five_address}}</td>
                                      <td>{{$row->gr_five_mobile_num}}</td>
                                  </tr>
                                  @endif
                                  
                              @endforeach
                          </tbody>
                      </table>
                    </div>
                   
  
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <input type="hidden" name="gr_five_student_id" value="{{$grade_five_students->gr_five_student_id}}">
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                   
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

      {{-- modal --}}
      <div id="familyAdd" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Family Member</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" action="{{action('ElementaryController@gradeFiveAddFamily')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label for="ftyp_id">Relationship</label>
                            <select class="form-control" name="ftyp_id">
                              @foreach ($family_types as $family_type)
                              <option value="{{ $family_type->ftyp_id }}">{{ $family_type->ftyp_name }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="gr_five_first_name">First Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="gr_five_first_name" id="gr_five_first_name"
                                placeholder="First Name" required />
                        </div>

                        <div class="col-md-12">
                            <label for="gr_five_last_name">Last Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="gr_five_last_name" id="gr_five_last_name"
                                placeholder="Last Name" required />
                        </div>

                        <div class="col-md-12">
                            <label for="gr_five_middle_name">Middle Name</label>
                            <input type="text" class="form-control" name="gr_five_middle_name" id="gr_five_middle_name"
                                placeholder="Middle Name" />
                        </div>

                        <div class="col-md-12">
                            <label for="gr_five_ext_name">Extension Name</label>
                            <input type="text" class="form-control" name="gr_five_ext_name" id="gr_five_ext_name"
                                placeholder="Extension Name" />
                        </div>


                        <div class="col-md-12">
                            <label for="gr_five_birth_date"> Birthdate</label>
                            <input type="date" class="form-control" name="gr_five_birth_date"
                                id="gr_five_birth_date" />
                        </div>
                        <div class="col-md-12">
                            <label for="gr_five_occupation">Occupation </label>
                            {{-- <span style="color:red;">*</span> --}}
                            <input type="text" class="form-control" name="gr_five_occupation" id="gr_five_occupation"
                                placeholder="Current Occupation" />
                        </div>
                        <div class="col-md-12">
                            <label for="gr_five_address"> Address</label>
                            {{-- <span style="color:red;">*</span> --}}
                            <input type="text" class="form-control" name="gr_five_address"
                                id="gr_five_address" placeholder="Bangkal, Davao City" />
                        </div>
                        <div class="col-md-12">
                          <label for="gr_five_mobile_num"> Mobile Number</label>
                          {{-- <span style="color:red;">*</span> --}}
                          <input type="number" class="form-control" name="gr_five_mobile_num"
                              id="gr_five_mobile_num" placeholder="ex. 09xxxxx" />
                      </div>

                    </div>
                    <div class="modal-footer">
                      <input type="hidden" name="gr_five_student_id" value="{{$grade_five_students->gr_five_student_id}}">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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