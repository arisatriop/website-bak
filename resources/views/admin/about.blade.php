@extends('layout.admin')

@section('title', 'BAK - Admin | About')

@section('page-title','About')
    
    
@section('content')

    @foreach ($info as $inf)        
    @endforeach
    @if (session('sukses'))
        <div class="alert alert-success mt-3 text-center mx-5" role="alert">
            {{session('sukses')}}
        </div>    
    @endif
    @if (session('sukses_delete_visi'))
        <div class="alert alert-danger mt-3 text-center mx-5" role="alert">
            {{session('sukses_delete_visi')}}
        </div>    
    @endif
    @if (session('sukses_delete_misi'))
        <div class="alert alert-danger mt-3 text-center mx-5" role="alert">
            {{session('sukses_delete_misi')}}
        </div>    
    @endif

    {{-- Info --}}
    <div class="jumbotron m-5 bg-white shadow-lg">
        <div class="row mt-n5"> 
            <div class="col-md-10">          
                <h3>Sejarah</h3>
            </div>
            <div class="m-auto pl-5">
                {{-- Button Trigger Modal --}}
                <button type="button" class="btn btn-primary btn-sm" style="width: 100px" data-toggle="modal" data-target="#info-satu">EDIT</button>
                {{-- Modal Info Satu --}}
                <form action="/admin-about/update-info/{{$inf->id}}" method="POST">
                    @csrf
                    <div class="modal fade" id="info-satu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sejarah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="info1">{{$inf->info1}}</textarea>
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
            </div>
        </div>
        <div class="row mx-1 mt-3 text-justify">
            <p>{{$inf->info1}}</p>
        </div>
    </div>
    {{-- End of Info --}}



    <div class="jumbotron m-5 bg-white shadow-lg">
        {{-- Visi --}}
        <div>
            <div class="row mt-n5"> 
                <div class="col-1">          
                    <h3>Visi</h3>
                </div>
                <div class="m-auto col-11">
                    {{-- Button Trigger Modal Add Visi--}}
                    <button type="button" class="btn btn-info btn-sm mt-n3" data-toggle="modal" data-target="#add-visi"><i class="fas fa-plus mr-2"></i>  Add New</button>
                    {{-- Modal Add Visi--}}
                    <form action="/admin-about/add-visi" method="POST">
                        @csrf
                        <div class="modal fade" id="add-visi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Visi </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="visi"></textarea>
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
            </div>

            <div class="row mx-1 mt-n4 text-justify">
                <table class="table mt-4">
                    @foreach ($visi as $v)
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td class="flex-grow-1">{{$v->visi}}</td>
                            <td class="text-center" width="200px">
                                {{-- Button Trigger Modal Edit & Delete Visi--}}
                                <button type="button" class="btn btn-primary btn-sm" style="width: 75px" data-toggle="modal" data-target="#edit-visi-{{$v->id}}">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" style="width: 75px" data-toggle="modal" data-target="#delete-visi-{{$v->id}}">Delete</button>
                            </td>
                        </tr>
                    </tbody>

                    {{-- Modal Edit Visi--}}
                    <form action="/admin-about/update-visi/{{$v->id}}" method="POST">
                        @csrf
                        <div class="modal fade" id="edit-visi-{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Visi </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="visi">{{$v->visi}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Modal Delete Visi--}}
                    <form action="/admin-about/delete-visi/{{$v->id}}">
                        <div class="modal fade" id="delete-visi-{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Visi </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">
                                            Anda akan menghapus item visi?
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
                    @endforeach
                </table>
            </div>
        </div>
        {{-- End of Visi --}}        


        {{-- Misi --}}
        <div>
            <div class="row mt-5"> 
                <div class="col-1">          
                    <h3>Misi</h3>
                </div>
                <div class="m-auto col-11">
                    {{-- Button Trigger Modal Add Misi--}}
                    <button type="button" class="btn btn-info btn-sm mt-n3" data-toggle="modal" data-target="#add-misi"><i class="fas fa-plus mr-2"></i>Add New</button>
                    <form action="/admin-about/add-misi" method="POST">
                        @csrf
                        {{-- Modal Add Misi--}}
                        <div class="modal fade" id="add-misi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Misi </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="misi"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-1 mt-n4 text-justify">
                <table class="table mt-4">
                    <tbody>
                        @foreach ($misi as $m)
                        <tr>
                            <td>1.</td>
                            <td class="flex-grow-1">{{$m->misi}}</td>
                            <td class="text-center" width="200px">
                                {{-- Button Trigger Modal Edit & Delete Misi--}}
                                <button type="button" class="btn btn-primary btn-sm" style="width: 75px" data-toggle="modal" data-target="#edit-misi-{{$m->id}}">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" style="width: 75px" data-toggle="modal" data-target="#delete-misi-{{$m->id}}">Delete</button>
                            </td>
                        </tr>
                    </tbody>

                    {{-- Modal Edit Misi--}}
                    <form action="/admin-about/update-misi/{{$m->id}}"  method="POST">
                        @csrf
                        <div class="modal fade" id="edit-misi-{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Misi </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="misi">{{$m->misi}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Modal Delete Misi--}}
                    <form action="/admin-about/delete-misi/{{$m->id}}">
                        <div class="modal fade" id="delete-misi-{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Misi </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger" role="alert">
                                        Anda akan menghapus item visi?
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
                    @endforeach
                </table>
            </div>
        </div>
        {{-- End of Misi --}}
    </div>

@endsection