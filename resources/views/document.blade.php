@extends('layout.app2')

@section('title', 'BAK - Document')
    
    
@section('content')
    
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col" class="">File Document</th>
                    <th scope="col"  class="text-center">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($document as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td width="210px" class="text-center"><a href="{{ $item->description }}" target="_blank" type="button" class="btn btn-danger btn-sm">Kunjungi</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

    
@endsection