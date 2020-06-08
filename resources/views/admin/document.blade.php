@extends('layout.admin')

@section('title', 'BAK - Admin | Document')

@section('page-title','Document')
    
    
@section('content')
    @if (session('sukses'))
        <div class="alert alert-success mt-3 mx-5" role="alert">
            {{session('sukses')}}
        </div>    
    @endif
    @if (session('sukses_delete'))
        <div class="alert alert-success mt-3 mx-5" role="alert">
            Dokumen '{{session('sukses_delete')}}' telah di hapus.
        </div>    
    @endif
    <div class="jumbotron m-5 bg-white shadow-lg">
        <div class="row mt-n5">
            <div class="col-md-9">
                <h3>Document</h3>
            </div>
            <div class="m-auto pl-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-dokumen"> <i class="fas fa-plus fa-sm mr-2"></i>  Add New Document</button>
            </div>
        </div>
        <table class="table mt-4">
            <thead>
                <tr class="text-center">
                    <th scope="col">FIle Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($document as $doc)
                <tr>
                    <td>{{$doc->title}}</td>
                    <td class="flex-grow-1 text-center">{{$doc->description}}</td>
                    <td class="text-center" width="210px">
                        <button type="button" class="btn btn-info btn-sm" disabled>Preview</button>
                        <button type="button" class="btn btn-primary btn-sm" disabled>Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#document-delete{{$doc->id}}">Delete</button>
                    </td>
                    {{-- Modal Delete Document --}}
                    <div class="modal fade" id="document-delete{{$doc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/admin-document/delete/{{$doc->id}}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">Anda akan menghapus dokumen '{{$doc->title}}' ?</div>
                                    </div>
                                    <div class="modal-footer mt-n4">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- Modal Add Document --}}
    <div class="modal fade" id="add-dokumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/admin-document/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Document</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" class="form-control" placeholder="document title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Description</label>
                            <input type="text" class="form-control" placeholder="document description" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Document FIle</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="document" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection