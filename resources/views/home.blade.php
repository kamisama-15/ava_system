@extends('layouts.themes.main')

@section('content')
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Timeline</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="card">
          <div class="card-header">
              <h3 class="card-title"><i class="fa fa-bullhorn" aria-hidden="true"></i> Welcome</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize" ><i class="fas fa-expand" aria-hidden="true"></i></button>
              </div>
          </div>
          <div class="card-body overflow-auto">
              <div class="timeline" >
                  <div class="time-label">
                      <span class="bg-warning"><i class="fa fa-sun" aria-hidden="true"></i> Magandang AVA </span>
                  </div>
                      <div>
                          <i class="fas fa-newspaper bg-blue" aria-hidden="true"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fas fa-clock" aria-hidden="true"></i> 8 months ago</span>
                              <h3 class="timeline-header">Welcome to Allah Valley Academy Learning Management System</h3>
                              <div class="timeline-body ">
                                        <div class="thumbnail">
                                          <a class="row justify-content-center mb-5 pb-5 " style="width:100%; height:70vh" href="http://hris2.test/images/news/1.jpg">
                                              <img src="{{asset('image/ava1.jpg')}}" class="img-fluid mt-4"  style="max-width: 60%; height: 90%;"  >
                                          </a>
                                          <div class="caption mt-5">
                                              <p>
                                                <span class="text-bold">Alah Valley Academy</span> is an educational institution located in Surallah, a municipality in the province of South Cotabato, Philippines. The academy is known for providing quality education and nurturing the intellectual, social, and emotional development of its students.
                                              </p>
                                              <p>
                                                <span class="text-bold">Facilities:</span>
                                                Alah Valley Academy boasts modern facilities that support various learning activities. The campus includes spacious classrooms equipped with audiovisual aids to enhance the teaching and learning process. There are also well-equipped science laboratories for conducting practical experiments and demonstrations. Additionally, the academy has a library stocked with a wide range of books, references, and digital resources to support research and self-study.
                                              </p>
                                              <p>
                                                <span class="text-bold">Academic Programs:</span>
                                                The academy offers a comprehensive academic program from preschool to secondary education. It follows the Philippine curriculum and provides a balanced approach to education, focusing on both academic excellence and character formation. The curriculum is designed to develop critical thinking, problem-solving skills, and a strong foundation in core subjects such as English, Mathematics, Science, and Social Studies.
                                              </p>
                                              <p>
                                                <span class="text-bold">Co-curricular Activities:</span>
                                                Alah Valley Academy encourages students to engage in co-curricular activities to explore their interests and develop their talents. The academy offers a variety of clubs and organizations, including sports, music, arts, and academic clubs. These activities provide opportunities for students to enhance their leadership skills, teamwork, and creativity outside of the classroom.
                                              </p>
                                              <p>
                                                <span class="text-bold">Faculty and Staff:</span>
                                                The academy takes pride in its dedicated and competent faculty and staff members. They are highly qualified professionals who are passionate about education and committed to providing a supportive and nurturing learning environment for the students. The teachers employ innovative teaching methods and strategies to ensure that students receive a quality education and are well-prepared for their future endeavors.
                                              </p>
                                          </div>
                                      </div>
                                </div>
                              <div class="timeline-footer">
                               
                              </div>
                          </div>
                          <div class="modal fade" id="removeNews-1">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title">Confirm Deletion</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                          <p>Are you sure you want to delete this news/announcement?</p>
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <a class="btn btn-danger btn-sm" href="http://hris2.test/news/delete/1"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div> 
            </div>
        </div>
      </div>
     

    </section>
    <!-- /.content -->
  </div>
@endsection
