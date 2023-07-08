@extends('layouts.themes.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="header">
                    <h1 style="font-size: 40px" >Dashboard</h1>
                </div>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    <div class="container p-3 ">
        <div class="card">
            <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-primary">
                    <img src="{{asset('image/ava-rbg.png')}}" style="width:15%;" alt="Ribbon Image">
                   
                </div>
            </div>
            <div class="card-body p-5">
                
                <div class="row justify-content-center bg-dark mb-5 py-3 px-2">
                   
                    <div class="header col-12 text-center" >
                        <h1 class="py-3">Elementary Students</h1>
                    </div>
                    <div class="col-lg-3 col-6">
                      
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_one}}</h3>
                
                            <p class="text-bold">Grade 1 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-6">
                     
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_two}} </h3>
                
                            <p class="text-bold">Grade 2 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-6">
                    
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_three}}</h3>
                
                            <p class="text-bold">Grade 3 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-6">
                   
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_four}}</h3>
                
                            <p class="text-bold">Grade 4 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
        
                    <div class="col-lg-3 col-6">
                   
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_five}}</h3>
                
                            <p class="text-bold">Grade 5 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                   
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$total_grade_six}}</h3>
                
                            <p class="text-bold">Grade 6 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                </div>


                <div class="row justify-content-center bg-dark mb-5 py-3 px-2">
                    <div class="header col-12 text-center" >
                        <h1 class="py-3">High School Students</h1>
                    </div>
                    <div class="col-lg-3 col-6">
                      
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>{{$total_grade_one}}</h3>
                
                            <p class="text-bold">Grade 7 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-6">
                     
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>{{$total_grade_two}} </h3>
                
                            <p class="text-bold">Grade 8 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-6">
                    
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>{{$total_grade_three}}</h3>
                
                            <p class="text-bold">Grade 9 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-6">
                   
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>{{$total_grade_four}}</h3>
                
                            <p class="text-bold">Grade 10 Students</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                   
                </div>

                <div class="row justify-content-center bg-dark mb-5 py-3 px-2">
                    <div class="header col-12 text-center" >
                        <h1 class="py-3">Senior School Students</h1>
                    </div>
                    <div class="row mb-4">
                        <div class="row col-12 ">
                            <div class="header col-12 text-center">
                              <h3 >Grade 11 Students</h3>
                            </div>
                         </div>
                         <div class="col-lg-3 col-6">
                           
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_one}}</h3>
                     
                                 <p class="text-bold">STEM Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                       
                         <div class="col-lg-3 col-6">
                          
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_two}} </h3>
                     
                                 <p class="text-bold">ABM Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                        
                         <div class="col-lg-3 col-6">
                         
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_three}}</h3>
                     
                                 <p class="text-bold">HUMMS Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                        
                         <div class="col-lg-3 col-6">
                        
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_four}}</h3>
                     
                                 <p class="text-bold">TVL Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="row col-12 ">
                            <div class="header col-12 text-center">
                              <h3 >Grade 12 Students</h3>
                            </div>
                         </div>
                         <div class="col-lg-3 col-6">
                           
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_one}}</h3>
                     
                                 <p class="text-bold">STEM Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                       
                         <div class="col-lg-3 col-6">
                          
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_two}} </h3>
                     
                                 <p class="text-bold">ABM Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                        
                         <div class="col-lg-3 col-6">
                         
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_three}}</h3>
                     
                                 <p class="text-bold">HUMMS Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                        
                         <div class="col-lg-3 col-6">
                        
                             <div class="small-box bg-success">
                                 <div class="inner">
                                 <h3>{{$total_grade_four}}</h3>
                     
                                 <p class="text-bold">TVL Students</p>
                                 </div>
                                 <div class="icon">
                                 <i class="fas fa-users"></i>
                                 </div>
                                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
       
        
    </div>
  

@endsection