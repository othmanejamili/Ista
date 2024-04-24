<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Create formateur
    @endsection
    <meta charset="UTF-8">
    <meta filier="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <style>
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
            background: #1a1b31;
            background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
        }
        .photo img{
            width: 60px;
            height: 60px;
            box-shadow: 0px 0px 10px #777;
            border-radius: 50%;
            
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="submit"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 100%;
        }
        
            .form_container {
                    width: 40%;
                    height: fit-content;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 15px;
                    padding: 50px 40px 20px 40px;
                    background-formateur: #ffffff;
                    box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
                        0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
                        0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
                    border-radius: 11px;
                    font-family: "Inter", sans-serif;
                }
                .col-11 {
                    position: relative;
                    left: 0px;
                    top: 0px;
                    padding: 2px 00px;
                    margin: 10px 10px;
                    width: 95%;
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@extends('layouts.app')
    <br>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="container_Form">
            <div class="container">
                    <h5 class="card-title">Create Formateur</h5>
                    <form action="{{ route('formateur.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="filier">Filiere</label>
                            <select class="form-control @error('Filiere') is-invalid @enderror"  id="filier" name="filier">
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
                            @error('filier')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formateur">Formateur</label>
                            <input type="text" class="form-control @error('formateur') is-invalid @enderror" name="formateur" id="formateur" placeholder="Enter formateur">
                            @error('formateur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="model">Model</label>
                                <input type="text" class="form-control  @error('model') is-invalid @enderror" name="model" id="model"  placeholder="Enter Model">
                                @error('model')
                                 <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="form-group">
                        <label for="ista">ISTA</label>
                                <input type="text" class="form-control  @error('ista') is-invalid @enderror" name="ista" id="ista"  placeholder="Enter ISTA">
                                @error('ista')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </form>
            </div>
        </div>



    <!-- Bootstrap JavaScript (optional, for enhanced functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



