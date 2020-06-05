@extends('layout.app')
@section('title', 'Badan Audit Kemahasiswaan UII')

@section('header')
    <div class="header">
        <div class="scroll-left">
            <marquee behavior="" direction="">
                Test Scrolling Text...<a href="https://youtube.com" target="_blank"> KLIK DISINI </a>
                1. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                2. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                3. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                4. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                ari satrio
            </marquee>
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
@endsection    

@section('content')
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
                <div class="carousel-item active">
                    <img src="assets/img/4.jpg" class="image-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/bg-masthead.jpg" class="image-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/12.jpg" class="image-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/13.jpg" class="image-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/14.jpg" class="image-size" alt="...">
                </div>
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
    <section>
        <div class="jumbotron text-center">
            <div class="bak-name">
                <h1>BADAN AUDIT KEMAHASISWAAN</h1>
            </div>
            <h3>UNIVERSITAS ISLAM INDONESIA</h3>
            <p class="desc">"Mari bersama mewujudkan keuangan KM UII yang transparan, akuntabel, dan profesional".</p>
        </div>
    </section>
    <!-- END Title -->

    <!-- Second Section -->
    <section>
        <div class="my-container container-fluid">
            <div class="row">
                <div class="col-satu">
                    <h1>Kenali lebih dekat</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Pariatur voluptates porro deserunt quibusdam dolores ducimus praesentium.
                            Libero est molestias neque similique error,
                            dolore sunt nihil? Temporibus aut iste dolorum esse! Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Pariatur voluptates porro deserunt quibusdam dolores ducimus praesentium.
                            Libero est molestias neque similique error,
                            dolore sunt nihil? Temporibus aut iste dolorum esse!</p>
                        <a href="#">
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
                                <img src="assets/img/4.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block my-capt">
                                    <h5>Pengurus Harian</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/bg-masthead.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block my-capt">
                                    <h5>Divisi Audit</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/9.JPG" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block my-capt">
                                    <h5>Divisi Pengembangan Sumber Daya Mahasiswa</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/5.JPG" class="d-block w-100" alt="...">
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
                <div class="card">
                    <img src="assets/img/7.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card card-two">
                    <img src="assets/img/9.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <a href="">
                <p>Lihat lainnya</p>
            </a>
        </div>
        <div class="card-right">
            <h3>Event</h3>
            <div class="card-deck">
                <div class="card">
                    <img src="assets/img/bg-masthead.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-two">
                    <img src="assets/img/bg-masthead.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <a href="">
                <p>Lihat lainnya</p>
            </a>
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
    <section class="ftco-section testimony-section" style="margin-bottom: 50px">
        <div class="container-fluid px-md-5">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(assets/img/person_1.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left fa-2x quote-red"></i>
                                    </span>
                                    <p class="desc">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(assets/img/person_2.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left fa-2x quote-red"></i>
                                    </span>
                                    <p class="desc">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(assets/img/person_3.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left fa-2x quote-red"></i>
                                    </span>
                                    <p class="desc">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(assets/img/person_4.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left fa-2x quote-red"></i>
                                    </span>
                                    <p class="desc">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(assets/img/staff-1.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left fa-2x quote-red"></i>
                                    </span>
                                    <p class="desc">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimony -->

@endsection

