@extends('layout.admin')

@section('title', 'BAK - Admin | Home')

@section('page-title','Home')
    
    
@section('content') 
    <div class="container">

        {{-- Top Imagge --}}
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
        @if (session('sukses_text'))
            <div class="alert alert-success" role="alert">
                {{session('sukses_text')}}
            </div>    
        @endif
        
        <div class="section mb-5">
            <div class="row mb-4 d-flex justify-content-between mx-2">
                <h4>Run Text</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#editText">Edit</button>
            </div>
            @foreach ($web_titles as $data)
            <form action="/admin-home/edit-text/{{$data->id}}" method="POST">
                @csrf
                {{-- Modal Edit Text --}}
                <div class="modal fade" id="editText">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Text</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="run_text">{{$data->run_text}}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <div class="form-group">
                <input type="text" class="form-control" value="{{$data->run_text}}" disabled>
            </div>
            @endforeach
        </div>

        <div class="section mb-5">
            <h4 class="mb-4">Top Image Carousel</h4>
            <div class="top-img">
                <nav class="nav">

                    @foreach ($home_images as $gbr)
                    {{-- Image Items --}}
                    <div class="col-md-3 mb-4"> 
                        <div class="card">
                            <img src="{{asset('uploads/home_images/' . $gbr->image)}}" class="card mb-n1 p-1" style="height: 150px"> 
                            <div class="m-1">
                                <a href="/admin-home/delete/{{$gbr->id}}" class="btn btn-danger btn-sm col-md-12" onclick="return confirm('Anda menghapus data: {{$gbr->judul}} ?')">Delete</a>
                                <div class="accordion" id="accordionExample">
                                <button class="btn btn-primary btn-sm mt-1 col-md-12" type="button" data-toggle="collapse" data-target="#collapseOne-{{$gbr->id}}" aria-expanded="true" aria-controls="collapseOne">Edit</button>
                                    <div id="collapseOne-{{$gbr->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <form class="" action="/admin-home/update/{{$gbr->id}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mt-4 text-center">
                                                <label for="exampleFormControlInput1" class="pl-1">Image Title</label>
                                                <input type="text" class="form-control mt-n2 col-12 m-auto" value="{{$gbr->judul}}" name="judul">
                                            </div>
                                            <div class="form-group ml-2">
                                                <input type="file" id="customFile" name="image">
                                                <label for="customFile"></label>
                                            </div>
                                            <div class="form-group text-center">
                                                <button class="btn btn-success btn-sm col-md-6"> Save </button>
                                            </div>
                                        </form>                
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    {{-- End of Image Items --}}        
                    @endforeach
                    
                    {{-- Add New Items --}}
                    <div class="col-3 px-5" type="button" data-toggle="modal" data-target="#exampleModal">
                        {{-- Trigger Modal --}}
                        <div class="text-center border rounded-circle py-4 mt-3 bg-gray-200">
                            <i class="fas fa-plus fa-3x"></i>  
                            <p class="">Add Image</p>
                        </div>    
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="/admin-home/create" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="pl-1">Image Title</label>
                                            <input class="form-control mt-n2 col-12 m-auto" name="judul" type="text" placeholder="masukkan judul image" required>
                                        </div>
                                        <div class="form-group mt-4">
                                            <input name="image" type="file" class="" id="customFile" required>
                                            <label class="" for="customFile"></label>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>                  

                </nav>
            </div>
        </div>
        {{-- End of Top Image --}}

        
        {{-- Web Title --}}
        @foreach($web_titles as $web_title)@endforeach
        @if (session('sukses2'))
            <div class="alert alert-success" role="alert">
                {{session('sukses2')}}
            </div>    
        @endif     
        <div class="section mb-5">
            <div class="row mb-4">
                <div class="col-md-11">
                    <h4>Web Title</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#exampleModalTitle">EDIT</button>
                </div>
            </div> 
            <div class="text-center mb-4">
                <h1 class="satu">{{$web_title->bak_name}}</h1>
                <h3 class="dua">{{$web_title->uii_name}}</h3>
            </div>
            <div class="text-center mb-5">
                <p class="dua">"{{$web_title->description}}"</p>
            </div>

            <!-- Modal Web Title-->
            <div class="modal fade" id="exampleModalTitle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Title Website</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="/admin-home/update2/{{$web_title->id}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="pl-1">BAK</label>
                                <input class="form-control mt-n2 col-12 m-auto disabled" name="bak_name" type="text" value="{{$web_title->bak_name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="pl-1">UII</label>
                                    <input class="form-control mt-n2 col-12 m-auto disabled" name="uii_name" type="text" value="{{$web_title->uii_name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="pl-1">Description</label>
                                    <textarea class="form-control mt-n2 col-12 m-auto" name="description" type="text" required>{{$web_title->description}}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>    
                        </form>

                    </div>
                </div>
            </div> 
        </div>
        {{-- End of Web Title --}}


        {{-- Testimonials --}}
        @if (session('sukses3'))
            <div class="alert alert-success" role="alert">
                {{session('sukses3')}}
            </div>    
        @endif 
        @if (session('sukses_delete2'))
            <div class="alert alert-danger" role="alert">
                {{session('sukses_delete2')}}
            </div>    
        @endif

        <div class="section mb-5">
            <div class="row mb-4">
                <div class="col-md-11">
                    <h4>Testimonies</h4>
                </div>
            </div>

            <div class="items d-flex flex-wrap">

                @foreach($testimonials as $testy)
                <div class="mb-4 col-3">
                    <div class="media border-bottom-primary border-left-danger border p-1">
                        <img src="{{ asset('uploads/home_images/' . $testy->avatar)}}" class="mr-2 mt-1 rounded-circle" alt="..." width="60" height="60">
                        <div class="media-body">
                            <div class="form-group"  style="min-height: 150px">
                                <p class="d-flex mt-0 text-justify" style="font-size: 12px">{{$testy->quote}}</p>
                            </div>
                            <div class="form-group m-0">
                                <h5 class="testimoni" style="font-size: 14px">{{$testy->name}}</h5>
                                <h5 class="testimoni mt-n2" style="font-size: 12px">{{$testy->position}}</h5>
                            </div>
                        </div>
                    </div> 
                    <div class="row mt-1 px-1 d-flex justify-content-center">
                        <a href="/admin-home/testimony/delete/{{$testy->id}}" onclick="return confirm('Anda menghapus data: {{$testy->name}}')" class="btn btn-danger btn-sm mr-1" style="width: 45%">Delete</a>
                        <button class="btn btn-primary btn-sm ml-1" style="width: 45%" data-toggle="modal" data-target="#exampleModalTestimoniesEdit-{{$testy->id}}">Edit</button>
                        {{-- Modal Testimony Edit --}}
                        <div class="modal fade" id="exampleModalTestimoniesEdit-{{$testy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Testimonies</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/admin-home/testimony/update/{{$testy->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="pl-1">Name</label>
                                            <input class="form-control mt-n2 col-12 m-auto disabled" name="name" type="text" value="{{$testy->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="pl-1">Position</label>
                                                <input class="form-control mt-n2 col-12 m-auto disabled" name="position" type="text" value="{{$testy->position}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="pl-1">Quote</label>
                                                <textarea class="form-control mt-n2 col-12 m-auto" name="quote" type="text" required>{{$testy->quote}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="pl-1">Avatar</label>
                                                <input class="mt-n2 col-12 m-auto" name="avatar" type="file">   
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                @endforeach
                
                {{-- Modal Trigger Testimony Add--}}
                <div class="col-3 px-5 mt-3" type="button" data-toggle="modal" data-target="#exampleModalTestimoniesAdd">
                    <div class="text-center border rounded-circle px-5 py-5 bg-gray-200">
                        <i class="fas fa-plus fa-2x"></i>
                        <p>Add Item</p>
                    </div>
                </div>
                {{-- Modal Testimony Add--}}
                <div class="modal fade" id="exampleModalTestimoniesAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Testimonies</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="/admin-hoome-testimony/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="pl-1">Name</label>
                                    <input class="form-control mt-n2 col-12 m-auto disabled" name="name" type="text" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="pl-1">Position</label>
                                        <input class="form-control mt-n2 col-12 m-auto disabled" name="position" type="text" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="pl-1">Quote</label>
                                        <textarea class="form-control mt-n2 col-12 m-auto" name="quote" type="text" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="pl-1">Avatar</label>
                                        <input class="mt-n2 col-12 m-auto" name="avatar" type="file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>    
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Testimonies --}}


        
    </div>
@endsection