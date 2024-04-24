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
            <h5 class="card-title"> Événement</h5>
            <p class="card-text">Activité sur la table de l'Iftar pendant le Ramadan</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL('images/etablisment.jpg') }}" class="d-block w-100" style="height: 466px;" alt="...">
      <div class="carousel-caption ">
	  <div  class="card m-2 cb1 text-center" style="background-color:rgba(225,225,225, 0.1);">
          <div class="card-body">
            <h5 class="card-title"> Événement</h5>
            <p class="card-text">Activité sur la table de l'Iftar pendant le Ramadan</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL('images/coll.jpg') }}" class="d-block w-100" style="height: 466px;" alt="...">
      <div class="carousel-caption ">
	  <div  class="card m-2 cb1 text-center" style="background-color:rgba(225,225,225, 0.1);">
          <div class="card-body">
            <h5 class="card-title"> Événement</h5>
            <p class="card-text">Activité sur la table de l'Iftar pendant le Ramadan</p>
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
                        <a href="https://www.ofppt.ma/fr/inscription-en-ligne" class="tm-color-white tm-btn-white-bordered">@lang("public.Inscription en ligne")</a>
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
                        <p class="p1"><b>@lang("public.Pour approfondir votre compréhension de cette option, nous vous invitons à cliquer sur le lien ci-dessous pour accéder à plus de détails")</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary1 tm-font-semibold">@lang('public.Formation diplômante') </a>
                    </article>
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                        <i class="fa tm-fa-6x fa-plane tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary2 tm-article-title-1"><b>@lang('public.Formation qualifiante') </b></h3>
                        <p class="p2"><b>@lang("public.Pour approfondir votre compréhension de cette option, nous vous invitons à cliquer sur le lien ci-dessous pour accéder à plus de détails")</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary2 tm-font-semibold"> @lang('public.Formation qualifiante')</a>
                    </article>
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                        <i class="fa tm-fa-6x fa-life-saver tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary3 tm-article-title-1"><b> @lang('public.Cours du soir') </b></h3>
                        <p class="p3"><b>@lang("public.Pour approfondir votre compréhension de cette option, nous vous invitons à cliquer sur le lien ci-dessous pour accéder à plus de détails")</b></p>
                        <a href="https://www.myway.ac.ma/ar/filieres" class="text-uppercase tm-color-primary3 tm-font-semibold">@lang('public.Cours du soir') </a>
                    </article>
                </div>
            </div>
        </div>
</div>
<div class="place">
<div class="c1yo0219 dir dir-ltr" style="width:100%;">
<div class="hsb-container" style="display: flex; flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch;">
    <div class="c1rmt9x7 c39h6gc dir dir-ltr">
        <div class="hsb-item lslide" style="width: 265px; margin-right: 10px;">
            <div class="text-center"><img src="https://www.ofppt.ma/themes/custom/ofppt/assets/images/mortarboard.png" alt=""></div>
            <div class="text-center" style="color:#898989;"><h4>+</h4></div>
            <div class="text-center" data-count="400" style="color:#0059a1;"><b><h1>1/2 million</h1></b></div>
            <div class="text-center" style="color:#898989;"><b>Places pédagogiques</b></div>
        </div>
    </div>

    <div class="c1rmt9x7 c39h6gc dir dir-ltr">
    <div class="hsb-item lslide" style="width: 265px; margin-right: 10px;">
        <div class="text-center"><img src="https://www.ofppt.ma/themes/custom/ofppt/assets/images/network.png" alt=""></div>
        <div class="text-center" style="color:#898989;"><h4>+</h4></div>
        <div class="text-center" data-count="400" style="color:#0059a1;"><b><h1>10000</h1></b></div>
        <div class="text-center" style="color:#898989;"><b>Collaborateurs</b></div>
    </div>
    </div>
    <div class="c1rmt9x7 c39h6gc dir dir-ltr">
    <div class="hsb-item lslide" style="width: 265px; margin-right: 10px;">
        <div class="text-center"><img src="https://www.ofppt.ma/themes/custom/ofppt/assets/images/figure_percentage.png" alt=""></div>
        <div class="text-center" style="color:#898989;"><h4>+</h4></div>
        <div class="text-center" data-count="400" style="color:#0059a1;"><b><h1>90</h1></b></div>
        <div class="text-center" style="color:#898989;"><b>% De l'offre publique de formation</b></div>
    </div>
    </div>
    <div class="c1rmt9x7 c39h6gc dir dir-ltr">
    <div class="hsb-item lslide" style="width: 265px; margin-right: 10px;">
        <div class="text-center"><img src="https://www.ofppt.ma/themes/custom/ofppt/assets/images/vignette-formation.png" alt=""></div>
        <div class="text-center" style="color:#898989;"><h4>+</h4></div>
        <div class="text-center" data-count="400" style="color:#0059a1;"><b><h1>480</h1></b></div>
        <div class="text-center" style="color:#898989;"><b>Métiers</b></div>
    </div>
    </div>
    <div class="c1rmt9x7 c39h6gc dir dir-ltr">
    <div class="hsb-item lslide" style="width: 265px; margin-right: 10px;">
        <div class="text-center"><img src="https://www.ofppt.ma/themes/custom/ofppt/assets/images/etablisement.png" alt=""></div>
        <div class="text-center" style="color:#898989;"><h4>+</h4></div>
        <div class="text-center" data-count="400" style="color:#0059a1;"><b><h1>400</h1></b></div>
        <div class="text-center" style="color:#898989;"><b><span >Etablissements</span></b></div>
        </div>      
    </div>
</div>
</div>
</div>

</div>
</body>
</html>