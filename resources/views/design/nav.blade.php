<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top custom-navbar">
    <div class="photo">
        <img src="{{ URL('images/ofppt.png')}}" alt="home">
        <h4 class="navbar-brand" href="#">ISTA MOHAMMEDIA</h4>
       

    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">



        <div class="photo1">
    <div class="dropdown">
        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="flagImage" src="{{ app()->getLocale() === 'fr' ? URL('images/fr.jpeg') : URL('images/en.jpeg') }}" alt="">
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="{{ route('setLang', 'en') }}" >English <i><img  src="{{ URL('images/en.jpeg')}}"alt=""></i></a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('setLang', 'fr') }}" >Français <i><img src="{{ URL('images/fr.jpeg')}}"  alt=""></i></a>
            </li>
        </ul>
    </div>
</div>







            <li class="nav-item">
                <a class="nav-link" href="{{ url('Accueil') }}">@lang('public.Accueil')</a>
            </li>

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logi') }}">@lang('public.Se connecter')</a>
            </li>
            @endguest
        

        @auth
            @if(auth()->user()->role === 'admin')
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('Formateur') }}"> @lang('public.Formateur')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('activity') }}">@lang('public.activité') </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('gallery') }}">@lang("public.Galerie") </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{ url('upload') }}">@lang("public.Ajouter activité") </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ista') }}"> Ista</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('download') }}">@lang('public.diplômés')</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('Formateurs') }}"> @lang('public.Formateur')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('istas') }}"> ista</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('upload-cv') }}">@lang('public.diplômés') </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('activity') }}">@lang('public.activité') </a>
            </li>
            @endif
            </ul>
            <div class="dropdown">
            <a class="btn custom-navbar dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->Nom.' '.auth()->user()->Prenom}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ url('logout') }}">@lang('public.Se déconnecter')</a>
                </li>
            </ul>
        </div>

        
        @endauth
        
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
