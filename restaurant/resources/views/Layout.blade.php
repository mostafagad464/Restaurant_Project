<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4c940fa885.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
    <!-- **************************************start nav**************************************************** -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 navi shadow ">
        <div class="container">
            <a class="navbar-brand fw-bold logo" href="#">Feliciano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center fw-bold">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Stories</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li><button type="button" class="btn btn-dark p-3 mx-2" style="background-color: #C8A97E;">Book a table</button></li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true">  login</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
@yield('content')

    <footer class="fotr">
    <div class="container">
        <div class="row text-center">
            <div class="col-3 fst_cl">
                <h2 class="my-5">Feliciano</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the<br> countries Vokalia and <br>Consonantia, there live the<br> blind texts.</p>
                <div class="icons-social">
                        <a href="">   <i class="fab fa-facebook"></i> </a>
                        <a href="">   <i class="fab fa-instagram"></i> </a>
                        <a href="">    <i class="fab fa-twitter"></i> </a>
                </div>
            </div>
            <div class="col-3 sst_cl">
                <h2 class="my-5">Open Hours</h2>
                <div class="row">
                    <div class="col-6">
                        <p>Monday</p>
                        <p>Tuesday</p>
                        <p>Wednesday</p>
                        <p>Thursday</p>
                        <p>Friday</p>
                        <p>Saturday</p>
                        <p>Sunday</p>
                    </div>
                    <div class="col-6">
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 02:00</p>
                        <p>9:00 - 02:00</p>
                        <p>9:00 - 02:00</p>
                    </div>
                </div>
            </div>
            <div class="col-3 fst_cl lst">
                <h2 class="my-5">Instagram</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the<br> countries Vokalia and <br>Consonantia, there live the<br> blind texts.</p>
            </div>
            <div class="col-3 fst_cl">
                <h2 class="my-5">Newsletter</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the countries.</p>
            </div>
        </div>
        
    </div>
    <p class="text-center my-5">Copyright ©2021 All rights reserved | This template is made with <a href="" class="lst">yat</a> </p>
</footer>
<!--****************************************** end services**************************************************** -->

<!--****************************************** start footer**************************************************** -->


<!--****************************************** end footer**************************************************** -->
    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>