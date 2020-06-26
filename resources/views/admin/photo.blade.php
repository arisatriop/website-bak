@extends('layout.admin')

@section('title', 'BAK - Admin | Photo')

@section('page-title','Photo')
    
    
@section('content')

    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
        @endif
        @if (session('sukses_delete'))
            <div class="alert alert-danger" role="alert">
                {{session('sukses_delete')}}
            </div>    
        @endif
        <div class="section mb-5">
            <div class="d-flex justify-content-around flex-wrap">
                {{-- Add Photo --}}
                <div class="d-flex flex-wrap ">
                    <a href="" type="button" class="mt-1 text-decoration-none" data-toggle="modal" data-target="#add-photo">
                        <div class="card shadow-lg" style="width: 15rem;">
                            <div class="card-body text-center pt-5" style="color: rgb(139, 0, 0)">
                                <i class="fas fa-plus-circle fa-4x"></i>
                                <h5 class="mt-3">Add Photo</h5>                       
                            </div>
                        </div>
                    </a>      
                </div>  
                {{-- End of Add Photo --}}


                @foreach ($photo as $p)
                    
                {{-- Photo Items --}}
                <div class="items d-flex flex-column">
                    <div class="card shadow-lg" style="width: 15rem;">
                        <img src="{{asset('uploads/gallery/' . $p->image)}}" class="card-img-top" height="150px" alt="...">
                    </div>
                    <a href="#" class="btn btn-danger mb-2" type="button" data-toggle="modal" data-target="#photo">Delete</a>
                    {{-- <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete-event-{{$e->id}}">Delete</a> --}}
                </div>
                {{-- End of Photo Items --}}

                
                {{-- Photo Delete Modal --}}
                <div class="modal fade" id="photo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="/admin-gallery-photo/delete/{{$p->id}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="alert alert-danger" role="alert">
                                    Anda akan menghapus gambar?
                                    </div>
                                </div>
                                <div class="modal-footer mt-n4">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                  
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>


        {{-- Add Photo Modal --}}
        <form action="/admin-gallery-photo/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="add-photo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Photo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Caption</label>
                                <input type="text" class="form-control" id="exampleFormControlFile1" name="caption" required>
                            </div>
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