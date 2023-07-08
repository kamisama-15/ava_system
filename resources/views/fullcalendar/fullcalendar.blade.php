@extends('layouts.themes.main')

@section('content')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Events Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#}">Home</a></li>
                        <li class="breadcrumb-item">Events Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card pb-3">
            <div class="card-header bg-info">
                <h3 class="card-title "><i class="fa fa-calendar"></i> <span class="text-bold">Events Calendar</span></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                </div>
            </div>
            
            <div class="card-body overflow-auto">
                <div class="container">
                    <div class="response"></div>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
        
    </section>
    
    
</div>

 
 

  
@endsection
