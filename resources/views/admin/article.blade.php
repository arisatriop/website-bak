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
        @if (session('sukses_update'))
            <div class="alert alert-success" role="alert">
                {{session('sukses_update')}}
            </div>    
        @endif
        @if (session('sukses_delete'))
            <div class="alert alert-danger" role="alert">
                Artikel '{{session('sukses_delete')}}' telah dihapus.
            </div>    
        @endif
        <div class="section mb-5">
            
            <div class="row col-12 justify-content-center mb-4 pt-2">
                <h2 style="color: rgb(139, 0, 0)" class="font-weight-bold">Article</h2>
            </div>
            <div class="d-flex justify-content-around flex-wrap">
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
                    <div class="d-flex justify-content-center flex-wrap">
                        <div class="card shadow-lg" style="width: 15rem; height:15rem">
                            <img src="{{asset('uploads/article_event/' . $a->image)}}" class="card-img-top" height="150px" alt="...">
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
                            <form action="/admin-article/update/{{$a->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Title</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul artikel" name="title" value="{{$a->title}}" required>
                                        </div>
                                        <div class="form-group d-flex">
                                            <div class="form-group col-6 ml-n2">
                                                <label for="exampleFormControlInput1">Author</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="penulis" name="author" value="{{$a->author}}" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleFormControlFile1">Choose file for edit image</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group d-flex">
                                            <div class="form-group col-6 ml-n2">
                                                <label for="exampleFormControlInput1">Hari, Tanggal</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="" name="tanggal" value="{{$a->tanggal}}" required>
                                            </div>
                                            <div class="form-group col-6 ml-n2">
                                                <label for="exampleFormControlInput1">Image Caption</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="" name="image_caption" value="{{$a->image_caption}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Paragraf 1</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content" required>{{$a->content}}</textarea>
                                        </div>

                                        @for ($i = 2; $i < 25; $i++)
                                            @php ($subjudul = "subjudul$i")
                                            @php ($content = "content$i")
 
                                            <div class="form-group mt-5">
                                                <label for="exampleFormControlInput1">Sub Judul <span class="ml-1>{{$i}}"></span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="" name="subjudul{{$i}}" value="{{ $a->$subjudul }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Paragraf <span class="ml-1">{{$i}}</span></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content{{$i}}">{{$a->$content }}</textarea>
                                            </div>
                                        @endfor
                                        
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete-article-{{$a->id}}">Delete</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- Modal Delete Article --}}
                    <form action="/admin-article/delete/{{$a->id}}">
                        <div class="modal fade" id="delete-article-{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">
                                        Anda akan menghapus '{{$a->title}}' dari daftar artikel?
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul artikel" name="title" value="" required>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="form-group col-6 ml-n2">
                                        <label for="exampleFormControlInput1">Author</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="penulis" name="author" value="" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="form-group col-6 ml-n2">
                                        <label for="exampleFormControlInput1">Hari, Tanggal</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="ex: Senin, 1 Januari 2020 - 20.00 WIB" name="tanggal" value="" required>
                                    </div>
                                    <div class="form-group col-6 ml-n2">
                                        <label for="exampleFormControlInput1">Image Caption</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="caption" name="image_caption" value="" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Paragraf 1</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content" required></textarea>
                                </div>

                                @for ($i = 2; $i < 25; $i++)
                                    <div class="form-group mt-5">
                                        <label for="exampleFormControlInput1">Sub Judul <span class="ml-1">{{$i}}</span></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="" name="subjudul{{$i}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Paragraf <span class="ml-1">{{$i}}</span></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content{{$i}}"></textarea>
                                    </div>
                                @endfor
    
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