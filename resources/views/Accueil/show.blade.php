<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Accueil
    @endsection
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="icon" type="image/png" href="{{ asset('images/ofppt.png') }}">
<link rel="stylesheet" href="{{ asset('css/accueil.css') }}">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
img {
    vertical-align: middle;
    border-style: none;
}

    </style>
</head>
<body>
@extends('layouts.app')

<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL('images/meet.jpg') }}" class="d-block w-100" style="height: 466px;" alt="...">
      <div class="carousel-caption ">
        <div  class="card m-2 cb1 text-center" style="background-color:rgba(225,225,225, 0.1);">
          <div class="card-body">
            <h5 class="card-title"> Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-outline-light">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL('images/etablisment.jpg') }}" class="d-block w-100" style="height: 466px;" alt="...">
      <div class="carousel-caption ">
	  <div  class="card m-2 cb1 text-center" style="background-color:rgba(225,225,225, 0.1);">
          <div class="card-body">
            <h5 class="card-title"> Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-outline-light">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL('images/coll.jpg') }}" class="d-block w-100" style="height: 466px;" alt="...">
      <div class="carousel-caption ">
	  <div  class="card m-2 cb1 text-center" style="background-color:rgba(225,225,225, 0.1);">
          <div class="card-body">
            <h5 class="card-title"> Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-outline-light">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="content-forms">
        <div class="tm-section-2">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="tm-section-title">@lang('public.TROUVER UNE FORMATION')</h2>
                        <h5 class="tm-color-white tm-section-title">ISTA Mohammedia</h5>
                        <a href="#" class="tm-color-white tm-btn-white-bordered">Subscribe Newletters</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-section tm-position-relative">
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
            <polygon style="fill:#00224F; " points="0,0 100,0 50,60"></polygon>
             
                </svg>
            <div class="container tm-pt-5 tm-pb-4">
                <div class="row text-center">
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                        <i class="fa tm-fa-6x fa-legal tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary1 tm-article-title-1"><b>@lang('public.Formation diplômante')</b></h3>
                        <p class="p1"><b>We are here to assist you in discovering the best accommodations that suit your preferences and budget. Whether you're seeking luxury resorts, charming riads,  budget-friendly guesthouses,.</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary1 tm-font-semibold">@lang('public.Formation diplômante') </a>
                    </article>
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                        <i class="fa tm-fa-6x fa-plane tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary2 tm-article-title-1"><b>@lang('public.Formation qualifiante') </b></h3>
                        <p class="p2"><b>Curious about the enchanting cities of Morocco? Look no further for information and insights! From the vibrant streets of Marrakech to the coastal beauty of Essaouira, Morocco's cities are a treasure trove of history.</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary2 tm-font-semibold"> @lang('public.Formation qualifiante')</a>
                    </article>
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                        <i class="fa tm-fa-6x fa-life-saver tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary3 tm-article-title-1"><b> @lang('public.Cours du soir') </b></h3>
                        <p class="p3"><b>Excited to explore the exciting activities that Morocco has to offer? Look no further for information and inspiration! From cultural immersions to thrilling adventures, Morocco caters to a wide range of interests.</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary3 tm-font-semibold">@lang('public.Cours du soir') </a>
                    </article>
                </div>
            </div>
        </div>
</div>


</div>
</body>
</html>