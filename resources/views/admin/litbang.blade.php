@extends('layout.admin')

@section('title', 'BAK - Admin | Litbang')

@section('page-title','Divisi Penelitian dan Pengembangan')
    
    
@section('content') 

    @if (session('sukses'))
        <div class="alert alert-success mt-3 text-center mx-5" role="alert">
            {{session('sukses')}}
        </div>    
    @endif
    @if (session('sukses_delete'))
        <div class="alert alert-danger mt-3 text-center mx-5" role="alert">
            '{{session('sukses_delete')}}' telah dihapus dari daftar staff.
        </div>    
    @endif
    @if (session('sukses_update_photo'))
        <div class="alert alert-success mt-3 text-center mx-5" role="alert">
            {{session('sukses_update_photo')}}
        </div>    
    @endif

    <div class="jumbotron m-5 bg-white shadow-lg">

        <div class="row mt-n5 d-flex justify-content-between">
            <div class="">
                <h3>Department Image</h3>
            </div>
            <div>
                <button class="btn btn-primary" style="width: 100px" data-toggle="modal" data-target="#modalEdit">Edit</button>
            </div>
            <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/admin-litbang/update-photo/4" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Photo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($department_images as $img)
        <div class="card mt-3">
                <img src="{{ asset('uploads/department_images/' . $img->image)}}" class="card-img" alt="...">
        </div>
        @endforeach

        <div class="row mt-5">
            <h3>About</h3>
        </div>
        <div class="row text-justify">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eum corporis doloribus inventore sapiente beatae magnam eaque reiciendis veritatis unde adipisci veniam officia ipsa est eligendi dolor perspiciatis, dicta omnis, quas alias nesciunt, ipsum pariatur? Quasi voluptatibus deserunt consectetur accusamus laudantium id nobis harum doloremque expedita soluta fugiat aperiam in tempore fugit, nisi dolores optio autem. Autem eum a eaque provident, maxime iste totam, deserunt dignissimos quis nihil voluptates pariatur saepe minima eligendi animi in voluptas excepturi! Accusamus totam, atque rerum suscipit harum dolor minus veritatis, doloribus distinctio, saepe architecto laborum vel blanditiis cum incidunt voluptatibus exercitationem sapiente aut illo!</p>
        </div>
        <div class="row mt-4">
            <h3>Job Description</h3>
        </div>
        <div class="row text-justify">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ipsum quam ex tempora quia nemo, porro officiis ratione veniam unde possimus pariatur. Pariatur praesentium autem velit esse adipisci dolor earum tempora ipsa error ab id quas labore sapiente ratione sequi, itaque sit distinctio iste suscipit nulla. Beatae, corporis deleniti vitae quisquam fugit accusantium facilis laborum placeat! Eum voluptatem mollitia provident voluptas fuga blanditiis beatae, pariatur ea nihil dignissimos maxime debitis doloribus fugiat tenetur asperiores temporibus.</p>
        </div>

        <div class="row mt-5 justify-content-center">
            <h1 class="mt-2">STAFF</h1>
        </div>
        <ul class="nav justify-content-center mt-3">
            @foreach ($person as $p)
            <li class="nav-item mx-1 mb-3">
                <div class="card" style="width: 14rem;">
                    <div class="mt-2 text-center">
                    <img src="{{asset('/uploads/staff_images/'. $p->image)}}" class="rounded-circle" width="90" height="90" alt="...">
                    </div>
                    <div class="card-body text-center">
                    <h5 class="card-title">{{$p->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$p->faculty}}</h6>
                        <hr class="divider" width="70%">
                        <p class="card-text text-justify mt-3">{{$p->quote}}</p>
                    </div>
                    <div class="mb-2 text-center">
                        <!-- Button trigger modal -->
                    <a class="btn btn-secondary btn-sm" style="width: 40%" href="#" role="button" data-toggle="modal" data-target="#edit-person-{{$p->id}}">Edit</a>                    
                        <a class="btn btn-secondary btn-sm" style="width: 40%" href="#" role="button" data-toggle="modal" data-target="#delete-person-{{$p->id}}">Delete</a>
                    </div>

                    <!-- Modal Update-->
                    <form action="/admin-litbang/update/{{$p->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="edit-person-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Person</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" name="name" value="{{$p->name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Posisi</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan posisi" name="position" value="{{$p->position}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Fakultas dan Jurusan</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="contoh: Fakultas Teknologi Industri" name="faculty" value="{{$p->faculty}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Quote</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="quote" required>{{$p->quote}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Avatar</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Modal Delete-->
                    <form action="/admin-litbang/delete/{{$p->id}}">
                        <div class="modal fade" id="delete-person-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Person</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">
                                        Anda akan menghapus '{{$p->name}}' dari daftar staff ?
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
            </li>   
            @endforeach
        </ul>
        <!-- Button trigger modal -->
        <div class="text-center mt-3">  
            <button type="button" class="btn btn-primary" style="min-width: 250px" data-toggle="modal" data-target="#add-person"> <i class="fas fa-plus fa-sm mr-2"></i>  Add Person</button> 
        </div>  

        <!-- Modal Add Person-->
        <form action="/admin-litbang/add-person" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal fade" id="add-person" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Posisi</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan posisi" name="position" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Fakultas</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="contoh: Fakultas Teknologi Industri" name="faculty" required>
                                </div>
                                <div class="form-group">
                                <label for="disabledSelect">Divisi</label>
                                    <select id="disabledSelect" class="form-control" disabled>
                                        <option>Divisi Penelitian dan Pengembangan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Quote</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="quote" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Avatar</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
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