<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Centre Gym</title>
    <link rel="stylesheet" href="css/app.css">
    <style>
        .content-div{
            padding: 120px;
            width: 100%;
            height: 640px;
            background-color: rgb(255,255,200);
        }

        .content-div-box{
            position: absolute;
            width: 1100px;
            height: 400px;
        }

        .content-frame{
            position: relative;
            float:left;
            margin:0 33px;
            background-color: rgb(255,255,250);
            width: 300px;
            height: 400px;
            padding: 20px;
        }

        .content-frame h1, .content-frame h3{
            color: rgb(13, 170, 255);
            text-align: center;
        }

        .content-frame h3{
            font-size: 20px;
        }

        .content-frame img{
            margin: 0px 25px;
            width: 200px;
            height: 200px;
        }
    </style>
    <script src="js/app.js"></script>
    <script>
        $('.carousel').caraousel({
            interval:2000;
        })
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Test Centre Gym') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Cari info baru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tryout">Ayo berlatih</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/log">Cek hasilmu</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" style="height: 600px"src="img/home/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 600px" src="img/home/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 600px" src="img/home/slider3.jpg" alt="Third slide">
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

    <div class="content-div">
        <div class="content-div-box">
            <div class="content-frame">
                <h1>Cari Info</h1>
                <h3>Cari info test centre sekarang juga. Ada materi pelajaran juga. Ayo gabung dengan Test Centre Gym</h3>
                <a href="/posts"><img src="img/home/info.png" title="info"></a>
            </div>
            <div class="content-frame">

            </div>
            <div class="content-frame">

            </div>
        </div>
    </div>
    <div class="footer bg-dark footer-dark" style="position: relative;">
        <div class="contact_us">
            <h1 style="60px">Contact Us</h1>
            <img src="" title="">
        </div>
    </div>
</body>
</html>

{{-- @extends('layout.app')
@section('welcomepage')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/home/slider1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/home/slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/home/slider3.jpg" alt="Third slide">
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
@endsection --}}

