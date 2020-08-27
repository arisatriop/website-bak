<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="PzPHBpryooCt8VmzhgSZgmMKPuW8ScmQXz-Q9poBY0A">
    <meta name="description" content="Official Website Badan Audit Kemahasiswaan Universitas Islam Indonesia">
    <meta name="keywords" content="bak, uii, bakuii, bak uii, badan audit, ph bak, audit bak psdm bak, litbang bak, uii, universitas islam indonesia">

    <!-- Icon Title -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logoBAK.png') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-me.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Tambahan -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">-->


    <title> @yield('title') </title>
</head>

<body>

    @yield('header')

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="{{ asset('assets/img/logoBAK.png') }}" width="65" height="65">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse my-nav" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/article">ARTICLE</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#">PROFILE</a>
                        <ul type="none">
                            <li><a href="/ph">Pengurus Harian</a></li>
                            <li><a href="/audit">Divisi Audit</a></li>
                            <li><a href="/psdm">Divisi PSDM</a></li>
                            <li><a href="/litbang">Divisi Litbang</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/document">DOKUMEN</a>
                        {{-- <ul type="none">
                            <li><a href="#">AD ART</a></li>
                            <li><a href="#">Kode Etik</a></li>
                            <li><a href="#">Tata Tertib</a></li>
                            <li><a href="#">Standar Akuntansi Keuangan</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/gallery">GALLERY</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer>
        <div class="container-fluid last">
            <div class="row">
                <div class="col-md-4 left-side">
                    <h3>Hubungi Kami</h3>
                    <div class="address">
                        <i class="fas fa-map-marker-alt fa-sm"></i>
                        <p>Gedung UII Students Convention Center<br>Jl. Kaliurang KM 23, Hargobinangun, Kec. Pakem, Kab.
                            Sleman,
                            Yogyakarta.
                            55582</p>
                    </div>
                    <div class="Phone">
                        <i class="fas fa-phone-alt fa-sm"></i>
                        <p>0852 1234 5678</p>
                    </div>
                    <div class="Email">
                        <i class="fas fa-envelope fa-sm"></i>
                        <p>bak@uii.ac.id</p>
                    </div>
                    <div class="icon">
                        <a href="https://www.instagram.com/bak.uii/" target="_blank"><i class="icon-bottom fab fa-instagram-square fa-4x"></i></a>
                        <a href="https://www.instagram.com/bak.uii/" target="_blank"><i class="icon-bottom fab fa-line fa-4x"></i></a>
                        <a href="https://www.instagram.com/bak.uii/" target="_blank"><i class="icon-bottom fas fa-envelope fa-4x"></i></a>
                        <a href="https://www.instagram.com/bak.uii/" target="_blank"><i class="icon-bottom fab fa-chrome fa-4x"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mid-side">
                    <form action="/inbox" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input class="form-control" id="" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone Number</label>
                                <input class="form-control" id="" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" id="" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="3" placeholder="Type your message here" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bt-kirim-pesan" onclick="return alert('Terima kasih, pesan anda sudah terkirim')">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 right-side">
                    <div class="maps" id="googleMap"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="maps2" id="googleMap2"></div>
                </div>
            </div>
        </div>
        <div class="my-footer">
            <p>Copyright&copy; 2020 <span class="dot"></span> Badan Audit Kemahasiswaan | Universitas Islam Indonesia</p>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!--  -->
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    
    <!-- Tambahan -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Googpe API Maps -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvFfulK6UxqGbdmaNL5QISTJdD4HP6ODg&callback=initMap">
    </script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initMap() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.6113398422, 110.427211232),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
    <!-- Googpe API Maps -->
    
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvFfulK6UxqGbdmaNL5QISTJdD4HP6ODg&callback=initMap2">
    </script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initMap2() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.6113398422, 110.427211232),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>