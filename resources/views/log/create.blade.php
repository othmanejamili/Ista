<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
    login
@endsection
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">

<style>
    /* Optional CSS for additional styling */
    /* Adjust styles as needed */
                /* For mobile phones: */
                /* Optional CSS for additional styling */
                /* Adjust styles as needed */

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
            </style>
</head>
<body>
@extends('layouts.app')
<div class="container_Form">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('log') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('log.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input  type="text" class="form-control" name="Nom" value="{{old('Nom')}}" placeholder="Nom">
                            @error('Nom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prenom</label>
                            <input  type="Prenom" class="form-control" name="Prenom" value="{{old('Prenom')}}" placeholder="">
                            @error('Prenom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">CIN</label>
                            <input  type="text" class="form-control" name="password" value="{{old('password')}}" placeholder="CIN">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">valider CIN</label>
                            <input  type="text" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="CIN">

                        </div>

                        <div class="mb-3">
                            <button  class="btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>
