@extends('layout.app2')

@section('title', 'BAK - Article')


@section('content')
<div class="container-fluid mt-5 pt-5 mb-5">

    <!-- Main Article -->
    <div class="d-flex">
        <div class="col col-head">
            <p class="p-2 ml-n3 mt-5">ARTIKEL TERBARU</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col d-flex flex-wrap">
            @foreach ($article_main as $article_main)
            <div class="card m-jt-img m-jt-size-1 border-0"
                style="background-image: url( {{ asset('/uploads/article_event/' . $article_main->image )}} )">
                <div class="m-jt-content mb-5 ml-3">
                    <h3 class="display-6 text-white">{{ $article_main->title}}</h3>
                    <a class="btn btn-danger btn-lg m-btn-1" href="/article-item/{{$article_main->id}}" role="button">Read more</a>
                </div>
            </div>
            @endforeach


            <div class="col m-col d-flex flex-column justify-content-between">
                @foreach ($article_second as $article_second)    
                <div class="row">
                    <div class="col p-0">
                        <div class="card m-jt-img m-jt-size-2 border-0"
                            style="background-image: url( {{ asset('/uploads/article_event/' . $article_second->image )}} )">
                            <div class="m-jt-content mb-2 p-1">
                                <h6 class="display-6 text-white">{{ $article_second->title }}</h6>
                                <a class="btn btn-danger btn-sm m-btn-2" href="/article-item/{{$article_second->id}}" role="button">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End of Main Article -->

    <!-- List Article -->
    <div class="article-1">
        <div class="container-fluid p-0 d-flex justify-content-between mt-5">
            @foreach ($article_row1 as $item)
            <div class="d-flex justify-content-between my-3 list-article">
                <a href="" class="text-decoration-none">
                <div class="d-flex">
                    <img src="{{ asset('/uploads/article_event/' . $item->image )}}" width="100" height="100">
                    <div class="px-2">
                        <h6 style="color: black">{{ $item->title }}</h6>
                    <p><small class="text-muted">Last updated <span>{{ $item->date }}</span></small></p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            
        </div>
        <div class="container-fluid p-0 d-flex justify-content-between">
            @foreach ($article_row2 as $item)
            <div class="d-flex justify-content-between my-3 list-article">
                <a href="" class="text-decoration-none">
                    <div class="d-flex">
                        <img src="{{ asset('/uploads/article_event/' . $item->image )}}" width="100" height="100">
                        <div class="px-2">
                            <h6 style="color: black">{{ $item->title }}</h6>
                            <p><small class="text-muted">Last updated <span>{{ $item->date }}</span></small></p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End of List Article -->



    <!-- List Article Mobile Version-->
    <div class="article-2 mt-5">
        @foreach ($article_mobile as $item)
        <div class="container-fluid p-0 mb-2 d-flex justify-content-between m-box">
            <div class="d-flex justify-content-between list-article">
                <a href="" class="text-decoration-none">
                    <div class="d-flex">
                        <img src="{{ asset('/uploads/article_event/' . $item->image )}}" width="100" height="100">
                        <div class="px-2">
                            <h6 style="color: black">{{ $item->title }}</h6>
                            <p><small class="text-muted">Last updated <span>{{ $item->date }}</span></small></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- End of Article Mobile Version -->


    <!-- Event -->
    <div class="container-fluid event">
        <div class="row m-row-1">
            @foreach ($event_main as $item)
            <div class="col p-0">
                <div class="jumbotron px-0 m-jt-img-2 m-e-size-1"
                    style="background-image: url({{ asset('/uploads/article_event/' . $item->image )}})">
                    <div class="m-jt-content">
                        <a class="btn btn-danger btn-lg text-center" href="#" role="button">HOT EVENT</a>
                        <div class="m-ev-content">
                            <h5 style="color: white">{{ $item->title }}</h5>
                            <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 200px"
                                href="#">KUNJUNGI</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col p-0 m-col-right d-flex flex-column justify-content-between">
                <div class="row m-0 m-row-item">
                    @foreach ($event_row1 as $item)
                    <div class="jumbotron m-jt-img-2 m-e-size-2 p-0"
                        style="background-image: url({{ asset('/uploads/article_event/' . $item->image )}}">
                        <div class="m-jt-content">
                            <a class="btn btn-danger btn-sm mt-3" href="#" role="button">EVENT</a>
                            <div class="text-center mt-5">
                                <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 150px"
                                    href="#">KUNJUNGI</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row m-0 m-row-item">
                    @foreach ($event_row2 as $item)
                    <div class="jumbotron m-jt-img-2 m-e-size-2 p-0"
                        style="background-image: url( {{ asset('/uploads/article_event/' . $item->image )}} )">
                        <div class="m-jt-content">
                            <a class="btn btn-danger btn-sm mt-3" href="#" role="button">EVENT</a>
                            <div class="text-center mt-5">
                                <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 150px"
                                    href="#">KUNJUNGI</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Event Mobile Version -->
    <div class="container-fluid event-2 mt-5">
        <div class="row m-row-1">
            @foreach ($event_main as $item)
            <div class="col p-0">
                <div class="jumbotron px-0 m-jt-img-2 m-e-size-1"
                    style="background-image: url({{ asset('/uploads/article_event/' . $item->image )}})">
                    <div class="m-jt-content">
                        <a class="btn btn-danger btn-lg text-center" href="#" role="button">HOT EVENT</a>
                        <div class="m-ev-content">
                            <h5 style="color: white">{{ $item->title }}</h5>
                            <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 200px"
                                href="#">KUNJUNGI</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="col p-0 m-col-right d-flex flex-column justify-content-between">
                <div class="row m-0 m-row-item">
                    @foreach ($event_row1 as $item)
                    <div class="jumbotron m-jt-img-2 m-e-size-2 p-0"
                        style="height: 180px; background-image: url( {{ asset('/uploads/article_event/' . $item->image ) }} )">
                        <div class="m-jt-content">
                            <a class="btn btn-danger btn-sm text-center mt-3" href="#" role="button">EVENT</a>
                            <div class="m-ev-content">
                                <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 150px"
                                    href="#">KUNJUNGI</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="row m-0 m-row-item">
                    @foreach ($event_row2 as $item)
                    <div class="jumbotron m-jt-img-2 m-e-size-2 p-0"
                        style="height: 180px; background-image: url( {{ asset('/uploads/article_event/' . $item->image ) }} )">
                        <div class="m-jt-content">
                            <a class="btn btn-danger btn-sm text-center mt-3" href="#" role="button">EVENT</a>
                            <div class="m-ev-content">
                                <a class="btn btn-secondary btn-sm py-2 text-center" style="width: 150px"
                                    href="#">KUNJUNGI</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End of Event Mobile Version -->

</div>

@endsection