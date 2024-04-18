<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Edit voitures
    @endsection
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            background-color: #1a1b31;
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
        .photo1 img{
                    width: 40px;
                    height: 40px;
                    
                    box-shadow: 0px 0px 10px #777;
                    border-radius: 50%;
                    
                }
    </style>
</head>
<body>
 <!-- Navbar -->
 @extends('layouts.app')

<div class="container_Form">
    <div class="container">
        <h2>Edit voitures</h2>
        @if(session("success"))
            <div class="alert alert-success">{{session("success")}}</div>
        @endif
        <form action="{{ url('absences/'.$absence->id.'/edit') }}"  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="Nom" value="{{$absence->Nom}}" placeholder="Enter Niveau de Formation">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Prenom" value="{{$absence->Prenom}}" placeholder="Enter Filière">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="CodeDiplome" value="{{$absence->CodeDiplome}}" placeholder="Enter Type Form">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="date_absence" value="{{$absence->date_absence}}" placeholder="Enter Mode Form">
            </div>

            <div class="form-group">
                                
                                <select class="form-control" name="heur_absence">
                                    <option value="2.5">2.5</option>
                                    <option value="5">5</option>
                                    <option value="7.5"> 7.5</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    </div>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
