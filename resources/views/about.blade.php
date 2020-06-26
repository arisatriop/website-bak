@extends('layout.app2')

@section('title', 'BAK - About')
    
    
@section('content')
    
    <div class="mt-5 pt-5">
    	<div class="container-fluid text-center">
    		<img src="{{ asset('assets/img/lgbak.png') }}" class="img-fluid" alt="Responsive image">
    	</div>

    	<div class="container mt-5">
    		<hr class="mb-5">
    		<div class="text-center mb-5">
    			<h3>Selamat Datang di <br>Badan Audit Kemahasiswaan <br> Universitas Islam Indonesia</h3>
    		</div>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>
    </div>

    
@endsection