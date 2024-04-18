<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Create Category
    @endsection
    <meta charset="UTF-8">
    <meta niveau_form="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    background-filier: #ffffff;
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
                    <h5 class="card-title">Create filier</h5>
                    <form action="{{ route('ista.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="niveau_form">Niveau Forme</label>
                            <select name="niveau_form" id="niveau_form" class="form-control @error('Filiere') is-invalid @enderror"  placeholder="Enter niveau_form">
                                <option value="T">T</option>
                                <option value="TS">TS</option>
                                @error('niveau_form')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </select>
 
                        </div>
                        <div class="form-group">
                        <label for="filier">Filiere</label>
                            <select class="form-control" id="filier" name="filier">
                                <option value="Assistant Adminatratif">Assistant Adminatratif</option>
                                <option value="Getion des Entreprises ">Getion Des Entreprises</option>
                                <option value="Dèveloppement Digital">Dèveloppement Digital</option>
                                <option  value="Infrastructure Digitale">Infrastructure Digitale </option>
                                <option  value="Chimie Industrielle (1A)">Chimie Industrielle (1A)</option>
                                <option value="Assistant Adminatratif Option Commerce">Assistant Adminatratif Option Commerce</option>
                                <option value="Assistant Adminatratif Option Comptabilitè">Assistant Adminatratif Option Comptabilitè</option>
                                <option value="Assistant Adminatratif Option Getion">Assistant Adminatratif Option Getion</option>
                                <option value="Dèveloppement Digital Option Web Full Stack">Dèveloppement Digital Option Web Full Stack</option>
                                <option  value="Getion Des Entreprises Option Comptabilitè et Finance">Getion Des Entreprises Option Comptabilitè et Finance</option>
                                <option  value="Getion Des Entreprises Option Commerce et Marketing">Getion Des Entreprises Option Commerce et Marketing</option>
                                <option value="Getion Des Entreprises Option Office Manager">Getion Des Entreprises Option Office Manager</option>
                                <option value="Getion Des Entreprises Option Ressources Humaines">Getion Des Entreprises Option Ressources Humaines</option>
                                <option value="Infrastructure Digitale Option Cyber sécurité">Infrastructure Digitale Option Cyber sécurité</option>
                                <option value="Infrastructure Digitale Option systèmes et Reséaux">Infrastructure Digitale Option systèmes et Reséaux</option>
                                <option  value="Chimie Industrielle (2A)">Chimie Industrielle (2A)</option>

                            </select>

                        </div>
                        <div class="form-group">
                        <label for="type_form">Type Form</label>
                            <select class="form-control" id="type_form" name="type_form">
                                    <option value="Diplomate">Diplomate</option>
                                    <option value="Qualifiant">Qualifiant</option>
                                </select>
                            </div>
                        <div class="form-group">
                        <label for="type_form">Type Form</label>
                            <select class="form-control" id="mode_form" name="mode_form">
                                    <option value="Résidentiel">Résidentiel</option>
                                    <option value="Alterne">Alterne</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="annee_form"> Année Form:</label>
                                <select class="form-control" name="annee_form">
                                    <option value="2022-2023">2022-2023</option>
                                    <option value="2021-2022">2021-2022</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="group">Group</label>
                        <select name="group" id="group" class="form-control @error('group') is-invalid @enderror">
                            <option  value="AA101">AA101</option>
                            <option  value="AA102">AA102</option>
                            <option  value="GE101">GE101</option>
                            <option value="GE102">GE102</option>
                            <option value="GE103">GE103</option>
                            <option value="GE104">GE104</option>
                            <option value="GE105">GE105</option>
                            <option value="DEV101">DEV101</option>
                            <option value="DEV102">DEV102</option>
                            <option value="ID101">ID101</option>
                            <option value="ID102">ID102</option>
                            <option value="CI101">CI101</option>
                            <option value="CI102">CI102</option>
                            <option value="AAOG201">AAOG201</option>
                            <option value="AAOG202">AAOG202</option>
                            <option value="AAOC202">AAOC201</option>
                            <option value="AAOC202">AAOC202</option>
                            <option value="AAOCP202">AAOCP201</option>
                            <option value="AAOCP202">AAOCP202</option>
                            <option value="GEOOM201">GEOOM201</option>
                            <option value="GEOCM201">GEOCM201</option>
                            <option value="GEOCM202">GEOCM202</option>
                            <option value="GEORH201">GEORH201</option>
                            <option value="GEORH201">GEORH201</option>
                            <option value="GEORH202">GEORH202</option>
                            <option value="GEOCF201">GEOCF201</option>
                            <option value="GEOCF202">GEOCF202</option>
                            <option value="DEVOWFS201">DEVOWFS201</option>
                            <option value="DEVOWFS202">DEVOWFS202</option>
                            <option value="IDOSR201">IDOSR201</option>
                            <option value="IDOSR202">IDOSR202</option>
                            <option value="IDOCS201">IDOCS201</option>
                            <option value="CI201">CI201</option>
                            <option value="CI202">CI202</option>
            </select>
                            </div>

<br>

                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </form>
            </div>
        </div>

        <script>
    document.getElementById('filier').addEventListener('change', function () {
        var filierId = this.value;
        var groupSelect = document.getElementById('group');
        groupSelect.innerHTML = ''; // Clear existing options
        var options = {
            'Assistant Adminatratif': ['AA101', 'AA102','GE101'], // Options for Filiere ID 1
            'Getion des Entreprises ': ['GE101', 'GE102', 'GE103', 'GE104', 'GE105'], // Options for Filiere ID 2 (Corrected)
            'Dèveloppement Digital': ['DEV101', 'DEV102'], // Options for Filiere ID 3
            'Infrastructure Digitale': ['ID101', 'ID102'], // Options for Filiere ID 4
            'Chimie Industrielle (1A)': ['CI101', 'CI102'], // Options for Filiere ID 5
            'Assistant Adminatratif Option Getion': ['AAOG201', 'AAOG202'], // Options for Filiere ID 6
            'Assistant Adminatratif Option Commerce': ['AAOC201', 'AAOC202'], // Options for Filiere ID 7
            'Assistant Adminatratif Option Comptabilitè': ['AAOCP201'], // Options for Filiere ID 8
            'Getion Des Entreprises Option Office Manager': ['GEOOM201'], // Options for Filiere ID 9
            'Getion Des Entreprises Option Commerce et Marketing': ['GEOCM201', 'GEOCM202'], // Options for Filiere ID 10
            'Getion Des Entreprises Option Ressources Humaines': ['GEORH201', 'GEORH202'], // Options for Filiere ID 11
            'Getion Des Entreprises Option Comptabilitè et Finance': ['GEOCF201', 'GEOCF202'], // Options for Filiere ID 12
            'Dèveloppement Digital Option Web Full Stack': ['DEVOWFS201', 'DEVOWFS202'], // Options for Filiere ID 13
            'Infrastructure Digitale Option systèmes et Reséaux': ['IDOSR201', 'IDOSR202'], // Options for Filiere ID 14
            'Infrastructure Digitale Option Cyber sécurité': ['IDOCS201', 'IDOCS202'], // Options for Filiere ID 15
            'Chimie Industrielle (2A)': ['CI201', 'CI202'] // Options for Filiere ID 16
            // Add more options for other filieres
        };
        options[filierId].forEach(function (option) {
            var optionElement = document.createElement('option');
            optionElement.value = option;
            optionElement.textContent = option;
            groupSelect.appendChild(optionElement);
        });
    });
</script>
    <!-- Bootstrap JavaScript (optional, for enhanced functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



