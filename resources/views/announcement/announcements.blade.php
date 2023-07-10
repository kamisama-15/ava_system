@extends('layouts.themes.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="header">
                    <h1 style="font-size: 40px" >Announcements</h1>
                    {{-- <button data-toggle="modal" class="btn btn-info mt-3" data-target="#postModal">Create Post</button> --}}
                    @if (in_array('Admin', $roles))
                        <button data-toggle="modal" class="btn btn-info mt-3" data-target="#postModal">Create Post</button>
                    @endif

                



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
                <div class="timeline">
                  <div class="time-label">
                    <span class="bg-danger"><i class="fa fa-bullhorn" aria-hidden="true"></i> News and Announcements</span>
                  </div>
          
                  @foreach($subsetPosts as $post)
                  <div class="mb-5">
                    <i class="fas fa-newspaper bg-blue" aria-hidden="true"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock" aria-hidden="true"></i>{{$post->created_at}} </span>
                      <h3 class="timeline-header">Announcement</h3>
                      <div class="timeline-body">
                        <div class="thumbnail">
                          <div>
                            <div class="timeline-item"> 
                              <div class="timeline-body">
                                <div class="thumbnail">
                                  <div class="caption">
                                    <h4 class="container">
                                      "{{ $post->title }}"
                                    </h4>
                                    <img class="col-12" style="height: 80vh" src="{{ asset('storage/post/' . $post->file) }}" alt="">
                                    <p class="container mt-3">
                                      &nbsp; &nbsp; &nbsp; &nbsp; {{ $post->description }}
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="timeline-footer">    
                                <a style="color: #dc3545;" href="javascript:void(0)" data-toggle="modal" data-target="#removeNews-{{ $post->post_id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="modal fade" id="removeNews-{{ $post->post_id }}">
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
                                    {{-- <a class="btn btn-danger btn-sm" href="http://hris2.test/news/delete/{{ $post->id }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a> --}}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
          
                  <!-- Pagination links -->
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                      @if($currentPage > 1)
                      <li class="page-item">
                        <a class="page-link" href="?page={{ $currentPage - 1 }}" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      @endif
          
                      @for($i = 1; $i <= $totalPages; $i++)
                      <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                        <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                      </li>
                      @endfor
          
                      @if($currentPage < $totalPages)
                      <li class="page-item">
                        <a class="page-link" href="?page={{ $currentPage + 1 }}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                      @endif
                    </ul>
                  </nav>
          
                </div>
              </div>
            </div>
          </div>
          
       
      </section>
      <div id="postModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <div class="modal-header">
                <h4>Create a Post</h4>
            </div>
            <div class="modal-body">
                <form action="{{ action('PostController@post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="custom-file-input-file" name="file" id="file">
                    </div>
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Post</button>
                </form>
                
            </div>
           </div>
        </div>
      </div>
     
  

@endsection