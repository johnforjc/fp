@extends('layouts.app')

@section('welcomepage')
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
                <div class="image-icon">
                    <a href="/posts"><img src="img/home/info.png" title="info"></a>
                </div>
            </div>
            <div class="content-frame">
                <h1>Ayo Berlatih</h1>
                <h3>Uji Kemampuanmu dalam test centre disini</h3>
                <div class="image-icon">
                    <a href="/tryout"><img src="img/home/tryout.jpg" title="tryout"></a>
                </div>               
            </div>
            <div class="content-frame">
                <h1>Cek Hasilmu</h1>
                <h3>Siap atau tidak, cek hasil tryout test centre mu disini</h3>
                <div class="image-icon">
                    <a href="/log"><img src="img/home/score.jpg" title="score"></a>
                </div>
            </div>
        </div>
    </div>
    @endsection

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

