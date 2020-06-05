@extends('layout.admin')

@section('title', 'BAK - Admin | Event')

@section('page-title','Event')
    
    
@section('content')

    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
        @endif
        <div class="section mb-5">
            
            <div class="row col-12 justify-content-center mb-4 pt-2">
                <h2 style="color: rgb(139, 0, 0)" class="font-weight-bold">Event</h2>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
                {{-- Add Event --}}
                <div class="d-flex flex-wrap ">
                    <a href="" type="button" class="mt-1 text-decoration-none" data-toggle="modal" data-target="#add-event">
                        <div class="card shadow-lg" style="width: 15rem; height:15rem">
                            <div class="card-body text-center pt-5" style="color: rgb(139, 0, 0)">
                                <i class="fas fa-plus-circle fa-4x"></i>
                                <h5 class="mt-3">Add Event</h5>                       
                            </div>
                        </div>
                    </a>      
                </div>  
                {{-- End of Add Event --}}


                @foreach ($event as $e)
                    
                {{-- Event Items --}}
                <a href="" type="button" class="mb-5 text-decoration-none" data-toggle="modal" data-target="#item-{{$e->id}}">
                    <div class="d-flex flex-wrap">
                        <div class="card shadow-lg" style="width: 15rem; height:15rem">
                            <img src="{{asset('uploads/home_images/' . $e->image)}}" class="card-img-top" height="150px" alt="...">
                            <div class="card-body text-center mb-2">
                                <h6 class="card-title text-gray-700">{{$e->title}}</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Post:  {{$e->date}}</small>
                            </div>
                        </div>
                    </div> 
                </a>
                {{-- End of Event Items --}}

                
                {{-- Event Items Modal --}}
                {{-- <form action="/admin-event/update/{{$e->id}}" method="POST" enctype="multipart/form-data">
                <form action="/admin-event/delete/{{$e->id}}"> --}}
                @csrf
                <div class="modal fade" id="item-{{$e->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Event</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul event" name="title" value="{{$e->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Event</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description">{{$e->description}}</textarea>
                                </div>
                                <div class="form-group">                
                                    <label for="exampleFormControlFile1">Choose file for edit image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="delete" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href=></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </form>
                </form> --}}

                @endforeach

                

                
            </div>
        </div>


        {{-- Add Event Modal --}}
        <form action="/admin-event/add-event" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="add-event" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul event" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Event</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>  
        
    </div>
    

    
    

@endsection