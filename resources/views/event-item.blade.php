@extends('layout.app2')

@section('title')
    {{ $event->title }}
@endsection

@section('page-title','Dashboard')
    
    
@section('content')
    
    <div class="container-fluid m-py-100" style="background-color: #FBFBFB">
		<div class="row justify-content-center">
			<div class="m-art-cl bg-white">
				<div class="m-art-head">
					<p class="text-muted">BAK <span class="mx-1">/</span> Artikel dan Konten</p>
					<div class="d-flex">
						<p class="text-muted mx-1 m-lb">Follow us on:</p>
						<a href="https://www.instagram.com/bak.uii/" target="_blank"><img class="mx-1" src="{{ asset('assets/img/ig.png') }}" width="45" height="45"></a>
						<a href="https://www.instagram.com/bak.uii/" target="_blank"><img class="mx-1" src="{{ asset('assets/img/line.png') }}" width="45" height="45"></a>
					</div>
				</div>
				<h3 class="mt-5 font-weight-bold" style="color: rgb(139,0,0);">{{ $event->title }}</h3>
				<p class="text-muted"> {{ $event->column6 }} </p>
				<img src="{{ asset('/uploads/article_event/' . $event->image) }}" class="img-fluid mt-3" alt="Responsive image">
				<p class="text-muted font-italic">{{ $event->column7 }}</p>
				<p class="mt-5"><span class="font-weight-bold">BAK UII - </span> {{ $event->description }} </p>
			</div>
			<div class="m-art-cr">
				<img src="{{ asset('assets/img/update.jpg') }}" class="img-fluid mt-3" alt="Responsive image">

				<!-- List Article -->
				<h6 class="m-box-label">ARTIKEL TERBARU</h6>
					@foreach ($article_data as $item)
					<a href="/article-item/{{$item->id}}" class="text-decoration-none" style="color: black">
						<div class="row py-0 mb-2">
							<div class="col-4">
								<img src="{{ asset('uploads/article_event/'. $item->image) }}" class="img-fluid rounded" alt="Responsive image">
							</div>
							<div class="col-7 p-0 my-0">
								<p class="my-0 py-0 m-list-d">{{ substr($item->title, 0, 65) }}...</p>
								<p class="my-0 py-0 m-list-m">{{ substr($item->title, 0, 50) }}...</p>
								<p class="my-0 py-0"><small class="text-muted">Last updated <span>{{ $item->date }}</span></small></p>
							</div>
						</div>
					</a>
					@endforeach
				<!-- End of List Article -->

				<h6 class="m-box-label">ACARA TERBARU</h6>
				@foreach ($event_data as $item)
				<ul class="list-group">  
					<a href="/event-item/{{$item->id}}" class="text-decoration-none"><li class="list-group-item" style="background-color: rgb(139,0,0); color: white">{{ substr($item->title, 0, 50) }}</li></a>
				</ul>
				@endforeach
			</div>
		</div>
    </div>

    
@endsection