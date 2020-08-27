@extends('layout.app2')

@section('title', 'BAK - About')
    
    
@section('content')
    
	<div class="mt-5 pt-5">
		<div class="container-fluid text-center">
			<img src="{{ asset('assets/img/lgbak.png') }}" class="img-fluid" alt="Responsive image">
		</div>

		<div class="container mt-5">
			@foreach ($sejarah as $item)
			<p class="text-sejarah">{{ $item->info1 }}</p>
			@endforeach

			<h4 class="text-center mt-5">VISI</h4>
			@foreach ($visi as $vs)
			<div class="d-flex justify-content-center">
				<div class="visi">
					<p class="text-center">{{ $vs->visi }}</p>
				</div>
			</div>
			@endforeach

			<h4 class="text-center mt-5">MISI</h4>
			<table class="table table-borderless">
				<tbody>
					@foreach ($misi as $item)
					<tr>
						<th scope="row"> {{ $loop->iteration }} </th>
						<td class="text-justify m-misi">{{ $item->misi }}</td>
					</tr>	
					@endforeach			
				</tbody>
			</table>
		</div>
	</div>

    
@endsection