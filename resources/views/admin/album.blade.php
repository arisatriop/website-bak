@extends('layout.admin')

@section('title', 'BAK - Admin | Album')

@section('page-title','Album')
    
    
@section('content')

    @if (session('sukses'))
        <div class="alert alert-success mx-3" role="alert">
            {{session('sukses')}}
        </div>  
    @endif
    @if (session('sukses_delete'))
        <div class="alert alert-danger mx-3" role="alert">
            Anda telah menghapus album {{session('sukses_delete')}}
        </div>  
    @endif
    <div class="section mx-3">
        <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#createAlbum"><i class="fas fa-plus mr-2"></i>Create New Album</button>
        {{-- Modal Create Album --}}
        <form action="/admin-gallery-album/create" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="modal fade" id="createAlbum" tabindex="-1" role="dialog" aria-labelledby="createAlbum" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Album</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Album Name</label>
                                <input class="form-control" type="text" placeholder="album name" name="album_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Thumbnails</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumbnails">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0">Photo</label>
                                <div class="alert alert-info p-0" role="alert">Tips: Blog some image to upload more than one photo.</div>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]" multiple>
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

        <div class="d-flex flex-wrap justify-content-around">
        
            @foreach ($thumbnails as $thumb)
            {{-- Album Items --}}
            {{-- <a href="#" type="button" data-toggle="modal" data-target="preview"> --}}
            <div class="mb-3">
                <a href="#" data-toggle="modal" data-target="#album-preview-{{$thumb->id}}">
                    <div class="card shadow-lg" style="width: 15rem;">
                        <img src="{{asset('uploads/gallery/' . $thumb->thumbnails)}}" class="card-img-top" height="150px" alt="...">
                    </div>
                </a>
                <a href="#" class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#album-delete-{{$thumb->id}}" style="width: 15rem;">Delete</a>
            </div>
            {{-- End of Album Items --}}


            <!-- Modal Preview-->
            <div class="modal fade" id="album-preview-{{$thumb->id}}">
                <div class="modal-dialog modal-lg">
                    <div class="container d-flex flex-wrap justify-content-center">
                        
                        @foreach ($photo_album as $item)
                            @if (strcmp($thumb->album_name, $item->album_name)==0) 
                                <img src="{{asset('uploads/gallery/' . $item->image)}}" width="250" height="250">
                            @endif   
                        @endforeach
                    
                    </div>
                </div>
            </div>



            {{-- Album Delete Modal --}}
            <div class="modal fade" id="album-delete-{{$thumb->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/admin-gallery-album/delete/{{$thumb->id}}/{{$thumb->album_name}}">
                            @csrf
                            <div class="modal-body">
                                <div class="alert alert-danger" role="alert">
                                Anda akan menghapus album '{{$thumb->album_name}}?
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

@endsection