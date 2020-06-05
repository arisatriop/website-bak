@extends('layout.admin')

@section('title', 'BAK - Admin | Article')

@section('page-title','Article')
    
    
@section('content')

    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
        @endif
        <div class="section mb-5">
            
            <div class="row col-12 justify-content-center mb-4 pt-2">
                <h2 style="color: rgb(139, 0, 0)" class="font-weight-bold">Article</h2>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
                {{-- Add Article --}}
                <div class="d-flex flex-wrap ">
                    <a href="" type="button" class="mt-1 text-decoration-none" data-toggle="modal" data-target="#add-article">
                        <div class="card shadow-lg" style="width: 15rem; height:15rem">
                            <div class="card-body text-center pt-5" style="color: rgb(139, 0, 0)">
                                <i class="fas fa-plus-circle fa-4x"></i>
                                <h5 class="mt-3">Add Article</h5>                       
                            </div>
                        </div>
                    </a>      
                </div>  
                {{-- End of Add Article --}}


                @foreach ($article as $a)
                    
                {{-- Article Items --}}
                <a href="" type="button" class="mb-5 text-decoration-none" data-toggle="modal" data-target="#item-{{$a->id}}">
                    <div class="d-flex flex-wrap">
                        <div class="card shadow-lg" style="width: 15rem; height:15rem">
                            <img src="{{asset('uploads/home_images/' . $a->image)}}" class="card-img-top" height="150px" alt="...">
                            <div class="card-body text-center mb-2">
                                <h6 class="card-title text-gray-700">{{$a->title}}</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Post:  {{$a->date}}</small>
                            </div>
                        </div>
                    </div> 
                </a>
                {{-- End of Article Items --}}
                
                {{-- Article Items Modal --}}
                <div class="modal fade" id="item-{{$a->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Article</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Title</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul artikel" name="title" value="{{$a->title}}">
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-group col-6 ml-n2">
                                            <label for="exampleFormControlInput1">Author</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="penulis" name="author" value="{{$a->author}}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlFile1">Choose file for edit image</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Article</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content">{{$a->content}}</textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="delete" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

        {{-- Article Modal --}}
        <form action="/admin-article/add-article" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="add-article" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Article</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul artikel" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Author</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="penulis" name="author" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Article</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content"></textarea>
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