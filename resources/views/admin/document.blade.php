@extends('layout.admin')

@section('title', 'BAK - Admin | Document')

@section('page-title','Document')
    
    
@section('content')

    <div class="jumbotron m-5 bg-white shadow-lg">
        <div class="row mt-n5">
            <div class="col-md-9">
                <h3>Document</h3>
            </div>
            <div class="m-auto pl-5">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-person"> <i class="fas fa-plus fa-sm mr-2"></i>  Add New Document</button>
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
                <tr>
                    <td>SAK KM</td>
                    <td class="flex-grow-1 text-center">STANDAR AKUNTANSI KEUANGAN KM UII</td>
                    <td class="text-center" width="210px">
                        <button type="button" class="btn btn-info btn-sm">Preview</button>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>SAK KM</td>
                    <td class="flex-grow-1 text-center">STANDAR AKUNTANSI KEUANGAN KM UII</td>
                    <td class="text-center" width="210px">
                        <button type="button" class="btn btn-info btn-sm">Preview</button>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>SAK KM</td>
                    <td class="flex-grow-1 text-center">STANDAR AKUNTANSI KEUANGAN KM UII</td>
                    <td class="text-center" width="210px">
                        <button type="button" class="btn btn-info btn-sm">Preview</button>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>SAK KM</td>
                    <td class="flex-grow-1 text-center">STANDAR AKUNTANSI KEUANGAN KM UII</td>
                    <td class="text-center" width="210px">
                        <button type="button" class="btn btn-info btn-sm">Preview</button>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection