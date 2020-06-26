@extends('layout.app2')

@section('title', 'BAK - Gallery')
    
    
@section('content')
    
	<div class="mt-5 pt-5">
		<div class="container-fluid mb-5">

			<div class="m-container-album">
				<!-- Image Albums -->
				<p class="m-gal-label">ALBUM</p>
				<div class="list-album d-flex">

					@foreach ($thumbnails as $thumb)
					<div>
						<a href="" data-toggle="modal" data-target="#exampleModal-{{$thumb->id}}" class="text-decoration-none">
							{{-- <img src="{{ asset('uploads/gallery/'. $thumb->thumbnails) }}" alt="..." class="rounded mx-auto d-block thumb-size"> --}}
							<div class="card border-0 m-thumb-size d-flex m-jt-img" style="background-image: url( {{ asset('uploads/gallery/'. $thumb->thumbnails) }} )">
								<div class="card-body d-flex justify-content-center align-items-center">
									<p class="m-album-name text-center">{{ $thumb->album_name }}</p>
								</div>
							</div>
						</a>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal-{{$thumb->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl m-auto p-3">
							<div class="modal-content m-gallery m-modal-content py-2">
								@foreach ($photo_album as $p_album)
									@if (strcmp($thumb->album_name, $p_album->album_name)==0)
										<a href="{{ asset('uploads/gallery/' . $p_album->image) }}" data-lightbox="list-album-photo" data-title="Album: {{ $p_album->album_name }}">
											<div class="item">
												<img src="{{ asset('uploads/gallery/' . $p_album->image) }}" alt="..." class="rounded mx-auto d-block" >
											</div>				
										</a>
									@endif
								@endforeach	
							</div>					
						</div>
					</div>

					
					@endforeach
					<!-- End of Modal Album -->
					
				</div>
				<!-- End of Image Album -->
			</div>
			


			<p class="m-gal-label mt-5 m-lb2">GALLERY</p>
			<!-- Image Gallery -->
			<div class="container m-gallery">
				@foreach ($photo as $photo)
				<a href="{{ asset('uploads/gallery/'. $photo->image) }}" data-lightbox="mygallery" data-title="{{ $photo->caption }}">
					<div class="item">
						<img src="{{ asset('uploads/gallery/'. $photo->image) }}" alt="..." class="rounded mx-auto d-block">
					</div>
				</a>
				@endforeach
			</div>
			<!-- End of Image Gallery -->
		</div>
	</div>

    
@endsection