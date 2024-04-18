<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Lauréats
    @endsection
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">

    <style>
        /* Optional CSS for additional styling */
        /* Adjust styles as needed */
                    /* For mobile phones: */
                    /* Optional CSS for additional styling */
                    /* Adjust styles as needed */
                    body {
                        padding-top: 70px; /* Adjust according to the navbar height */
                    }
                    .container_Form{
                        padding: 80px 80px;
                    }
                    /* Custom CSS for navbar */
                    .custom-navbar {
                        box-shadow: 0 10px 15px -3px rgba(33, 150, 243, .4), 0 4px 6px -4px rgba(33, 150, 243, .4);
                        background-color: #1a1b31;
                        background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
                    }
                    .photo img{
                        width: 60px;
                        height: 60px;
                        
                        box-shadow: 0px 0px 10px #777;
                        border-radius: 50%;
                        
                    }
                    .container_form{
                        padding: 15px 15px;
                    }
                    </style>
                    <style>
                        .custum-file-upload {
  height: 200px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: space-between;
  gap: 20px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border: 2px dashed #cacaca;
  background-color: rgba(255, 255, 255, 1);
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0px 48px 35px -48px rgba(0,0,0,0.1);
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .icon svg {
  height: 80px;
  fill: rgba(75, 85, 99, 1);
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: rgba(75, 85, 99, 1);
}

.custum-file-upload input {
  display: none;
}
                    </style>
                    <style>
                        .photo1 img{
	width: 35px;
	height: 35px;

	box-shadow: 0px 0px 10px #777;
	border-radius: 50%;
	
}
                    </style>
</head>
<body>
@extends('layouts.app')

<div class="container_form">
<div class="container">
    <h1 class="mt-5">Upload CV File</h1>

    @if (session('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-3" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cv.upload_cv') }}" method="post" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="pdf_file">Choose PDF File:</label>
            <input type="file" class="form-control-file" id="pdf_file" name="pdf_file">
        </div>
        <div class="form-group">
            <label for="nom">@lang('public.Nom'):</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">@lang('public.Prenom'):</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="filier"> @lang('public.Filière'):</label>
            <select class="form-control" id="filier" name="filier">
                    <option value="Assistant Adminatratif Option Commerce">Assistant Adminatratif Option Commerce</option>
                    <option value="Assistant Adminatratif Option Comptabilitè">Assistant Adminatratif Option Comptabilitè</option>
                    <option value="Assistant Adminatratif Option Getion">Assistant Adminatratif Option Getion</option>
                    <option value="Chimie Industrielle">Chimie Industrielle</option>
                    <option value="Dèveloppement Digital Option Web Full Stack">Dèveloppement Digital Option Web Full Stack</option>
                    <option value="Getion Des Entreprises Option Comptabilitè et Finance">Getion Des Entreprises Option Comptabilitè et Finance</option>
                    <option value="Getion Des Entreprises Option Comptabilitè et Marketing">Getion Des Entreprises Option Comptabilitè et Marketing</option>
                    <option value="Getion Des Entreprises Option Office Manager">Getion Des Entreprises Option Office Manager</option>
                    <option value="Getion Des Entreprises Option Ressources Humaines">Getion Des Entreprises Option Ressources Humaines</option>
                    <option value="Infrastructure Digitale Option Cyber sécurité">Infrastructure Digitale Option Cyber sécurité</option>
                    <option value="Infrastructure Digitale Option systèmes et Reséaux">Infrastructure Digitale Option systèmes et Reséaux</option>
            </select>
        </div>
        <div class="form-group">
            <label for="year"> @lang('public.Année'):</label>
            <select class="form-control" id="year" name="year">
                <option value="2022-2023">2022-2023</option>
                <option value="2021-2022">2021-2022</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Envoyer" />
        </div>    
    </form>
</div>
</div>
<!-- Include your JS files -->

</body>
</html>