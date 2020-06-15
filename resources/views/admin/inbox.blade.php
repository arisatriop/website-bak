@extends('layout.admin')

@section('title', 'BAK - Admin | Inbox')

@section('page-title','Inbox')
    
    
@section('content')

    <div class="jumbotron m-5 bg-white shadow-lg">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inbox as $i)
                <tr>
                    <th scope="row">{{$i->id}}</th>
                    <td>{{$i->name}}</td>
                    <td>{{$i->phone}}</td>
                    <td>{{$i->subject}}</td>
                    <td>{{$i->message}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection