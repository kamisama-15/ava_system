@extends('layouts.themes.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="header">
                    <h1 style="font-size: 40px" >Announcements</h1>
                </div>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Announcements</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-bullhorn" aria-hidden="true"></i> News and Announcements</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" ><i class="fas fa-expand" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="card-body overflow-auto">
                    <div class="timeline" >
                        <div class="time-label">
                            <span class="bg-danger"><i class="fa fa-bullhorn" aria-hidden="true"></i> News and Announcements</span>
                        </div>
                            <div class="mb-5">
                                <i class="fas fa-newspaper bg-blue" aria-hidden="true"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock" aria-hidden="true"></i> 8 months ago</span>
                                    <h3 class="timeline-header">Announcement</h3>
                                    <div class="timeline-body ">
                                            <div class="thumbnail">
                                                <div>
                                                    <div class="timeline-item"> 
                                                        <div class="timeline-body">
                                                            <div class="thumbnail">
                                                                <div class="caption">
                                                                    <h4 class="container">
                                                                        "AVA's Explosive Rhythms Conquer the Drum Corps Competition in Surallah, South Cotabato!"
                                                                    </h4>
                                                                    <img class="col-12 " style="height: 50vh" src="{{asset('image/drumcorp.jpg')}}" alt="">
                                                                    <p class="container mt-3">
                                                                        &nbsp; &nbsp; &nbsp; &nbsp; <strong> Allah Valley Academy</strong>, located in Surallah, South Cotabato, emerged victorious in a thrilling drum corps competition, showcasing their exceptional talent and dedication. With their mesmerizing performance, Allah Valley Academy demonstrated their musical prowess, precise choreography, and synchronized drumming, captivating the audience and leaving a lasting impression. Their well-deserved victory in the competition highlights their hard work, passion, and commitment to excellence. Congratulations to Allah Valley Academy on their remarkable achievement!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer">    
                                                            <a style="color:#dc3545;" href="javascript:void(0)" data-toggle="modal" data-target="#removeNews-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="removeNews-2">
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
                                                                    {{-- <a class="btn btn-danger btn-sm" href="http://hris2.test/news/delete/2"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                    </div>
                                </div>
                                
                            </div>


                            


                            <div>
                                <i class="fas fa-newspaper bg-blue" aria-hidden="true"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock" aria-hidden="true"></i> 8 months ago</span>
                                    <h3 class="timeline-header">Announcement</h3>
                                    <div class="timeline-body ">
                                            <div class="thumbnail">
                                                <div>
                                                    <div class="timeline-item"> 
                                                        <div class="timeline-body">
                                                            <div class="thumbnail">
                                                                <div class="caption">
                                                                    <h4 class="container">
                                                                        "Allan Michael Appelido of AVA Shines Bright with Artistic Talent, Securing Victory in SRAA Poster Making Contest!"
                                                                    </h4>
                                                                    <img class="col-12 " style="height: 80vh" src="{{asset('image/postermaking.jpg')}}" alt="">
                                                                    {{-- <iframe src="https://drive.google.com/file/d/1IdnGchBnopZrOHp9Mj9Bwqam5kkyJ5k6/preview" width="640" height="480" allow="autoplay"></iframe> --}}
                                                                        
                                                                    <p class="container mt-3">
                                                                        &nbsp; &nbsp; &nbsp; &nbsp;  AVA student Allan Michael emerges as the victor in the SRAA (Schools Regional Athletic Association) Poster Making Contest, showcasing his exceptional artistic prowess. Allan Michael's creativity and skillful execution captivated the judges, earning him well-deserved recognition and commendation. His winning entry not only embodies his talent but also represents the dedication and passion within AVA's art program. This remarkable achievement highlights Allan Michael's commitment to excellence and serves as an inspiration to fellow students, encouraging them to explore and showcase their artistic abilities.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer">    
                                                            <a style="color:#dc3545;" href="javascript:void(0)" data-toggle="modal" data-target="#removeNews-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="removeNews-2">
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
                                                                    {{-- <a class="btn btn-danger btn-sm" href="http://hris2.test/news/delete/2"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a> --}}
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
              </div>
            </div>
        </div>
       
  
      </section>
  

@endsection