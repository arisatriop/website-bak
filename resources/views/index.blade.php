@extends('layout.app')
@section('title', 'Badan Audit Kemahasiswaan UII')

@section('header')
    @foreach ($web_titles as $data)
    <div class="header d-flex justify-content-end">
        <div class="scroll-left" style="width: 100%">
            <marquee behavior="" direction="">{{$data->run_text}}</marquee>
        </div>
        <div class="list-icon">
            <div class="list-one">
                <i class="fas fa-bullhorn fa-flip-horizontal"></i>
            </div>
            <div class="list-two">
                <a href="https://youtube.com" class="my-link"><i class="fab fa-instagram icon-edit"></i></a>
                <a href="https://youtube.com" class="my-link"><i class="fab fa-line icon-edit"></i></a>
                <a href="https://youtube.com" class="my-link"><i class="fas fa-envelope icon-edit"></i></a>
                <a href="https://youtube.com" class="my-link"><i class="fas fa-phone-alt fa-flip-horizontal"></i></a>
            </div>
        </div>
    </div>
    @endforeach
@endsection    

@section('content')

    <div class="m-main-content">
        <!-- Carousel -->
        <div class="carousel-img">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($home_images as $data)
                        <div @if ($loop->first)
                            class="carousel-item active"
                        @else
                            class="carousel-item"
                        @endif >
                            <img src="{{asset('uploads/home_images/' . $data->image)}}" class="image-size" alt="...">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- END Carousel -->

        <!-- Jumbotron Title -->
        @foreach ($web_titles as $data)
        <section>
            <div class="jumbotron text-center">
                <div class="bak-name">
                    <h1>{{$data->bak_name}}</h1>
                </div>
                <h3>{{$data->uii_name}}</h3>
                <p class="desc">{{$data->description}}</p>
            </div>
        </section>
        @endforeach
        <!-- END Title -->

        <!-- Second Section -->
        <section>
            <div class="my-container container-fluid">
                <div class="row">
                    <div class="col-satu">
                        <h1>Kenali lebih dekat</h2>
                            @foreach ($about_bak as $data)
                            <p class="desc">{{ substr($data->info1, 0, 300)}} . . .</p>
                            @endforeach
                            <a href="/about">
                                <p>Baca selengkapnya</p>
                            </a>
                    </div>
                    <div class="col-dua">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('/assets/img/6-min.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block my-capt">
                                        <h5>Pengurus Harian</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/img/4.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block my-capt">
                                        <h5>Divisi Audit</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/img/5-min.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block my-capt">
                                        <h5>Divisi Pengembangan Sumber Daya Mahasiswa</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/img/9-min.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block my-capt">
                                        <h5>Divisi Penelitian dan Pengembangan</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Second Section -->

        <!-- Section Artikel dan Event -->
        <div class="container-fluid container-three">
            <div class="card-left">
                <h3>Article</h3>
                <div class="card-deck">
                    
                    @foreach ($article as $ar)
                        <div class="card">
                            <a href="/article-item/{{$ar->id}}"><img src="{{asset('/uploads/article_event/' . $ar->image)}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="/article-item/{{$ar->id}}" class="text-decoration-none" style="color: black"><h5 class="card-title">{{ $ar->title }}</h5></a>
                                <p class="card-text text-justify">{{ substr($ar->content, 0, 125) }} . . . </p> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created at {{ $ar->date }}</small>
                            </div>
                        </div>  
                    @endforeach
                    
                </div>
                <a href="/article">
                    <p>Lihat lainnya</p>
                </a>
            </div>
            <div class="card-right">
                <h3>Event</h3>
                <div class="card-deck">
                    @foreach ($event_satu as $event)
                    <div class="card">
                        <a href="/event-item/{{$event->id}}"><img src="{{asset('/uploads/article_event/' . $event->image)}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="/event-item/{{$event->id}}" class="text-decoration-none" style="color: black"><h5 class="card-title">{{ $event->title }}</h5></a>
                            <p class="card-text">{{ substr($event->description, 0, 125)}}</p>
                            <p><small class="text-muted">Created at {{ $event->date }}</small></p>
                        </div>
                    </div>
                    <a href="/event-item/{{$event->id}}">
                        <p>Lihat lainnya</p>
                    </a>
                    @endforeach
                    @foreach ($event_dua as $event)
                    <div class="card card-two">
                        <a href="/event-item/{{$event->id}}"><img src="{{asset('/uploads/article_event/' . $event->image)}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="/event-item/{{$event->id}}" class="text-decoration-none" style="color: black"><h5 class="card-title">{{ $event->title }}</h5></a>
                            <p class="card-text">{{ substr($event->description, 0, 125)}}</p>
                            <p><small class="text-muted">Created at {{ $event->date }}</small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END Artikel dan Event -->

        <!-- Testimony Head -->
        <div class="container-fluid">
            <div class="testimonial">
                <div>
                    <p>TESTIMONIES</p>
                </div>
                <div  class="icon-quote"><i class="fas fa-quote-right fa-2x"></i></div>
            </div>
        </div>
        <!-- END Testimony Head -->

        <!-- Testimony -->
        <section class="ftco-section testimony-section mb-5">
            <div class="container-fluid px-md-5">
                <div class="row ftco-animate justify-content-center">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            @foreach ($person as $person)
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img" style="background-image: url({{ asset('/uploads/home_images/' . $person->avatar) }})">
                                    </div>
                                    <div class="text pl-4">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-left fa-2x quote-red"></i>
                                        </span>
                                        <p class="desc">{{ $person->quote }}</p>
                                        <p class="name">{{ $person->name }}</p>
                                        <span class="position">{{ $person->position }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @foreach ($persons as $persons)
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img" style="background-image: url({{ asset('/uploads/home_images/' . $persons->avatar) }})">
                                    </div>
                                    <div class="text pl-4">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-left fa-2x quote-red"></i>
                                        </span>
                                        <p class="desc">{{ $persons->quote }}</p>
                                        <p class="name">{{ $persons->name }}</p>
                                        <span class="position">{{ $persons->position }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Testimony -->
    </div>

    

@endsection

