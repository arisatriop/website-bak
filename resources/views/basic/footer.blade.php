<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style-me.css" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <title></title>
</head>

<body>

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
                        <a href=""><i class="icon-bottom fab fa-instagram-square fa-4x"></i></a>
                        <a href=""><i class="icon-bottom fab fa-line fa-4x"></i></a>
                        <a href=""><i class="icon-bottom fas fa-envelope fa-4x"></i></a>
                        <a href=""><i class="icon-bottom fab fa-chrome fa-4x"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mid-side">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input class="form-control" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone Number</label>
                                <input class="form-control" id="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="3" placeholder="Type your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bt-kirim-pesan">Send Message</button>
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

    <!-- Googpe API Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
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
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.6113398422, 110.427211232),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap2"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>