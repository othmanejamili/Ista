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
                    body {
                        padding-top: 70px; /* Adjust according to the navbar height */
                    }
                    .container_Form{
                        padding:70px 70px;
                    }
                    /* Custom CSS for navbar */
                    .custom-navbar {
                        box-shadow: 0 10px 15px -3px rgba(33, 150, 243, .4), 0 4px 6px -4px rgba(33, 150, 243, .4);
                        background-color: #1a1b31;
                        background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
                        width: 100%;
                    }
                    .photo img{
                        width: 60px;
                        height: 60px;
                        
                        box-shadow: 0px 0px 10px #777;
                        border-radius: 50%;
                        
                    }
            </style>
            <style>
.form-container {
  width: 450px;
  height: 430px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 10px;
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
  gap: 15px;
  padding: 50px 40px 20px 40px;
  position: relative;
  top:0px;
  left: 30%;
}

.title {
  text-align: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  margin: 10px 0 30px 0;
  font-size: 28px;
  font-weight: 800;
}

.form {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 18px;
  margin-bottom: 15px;
}

.input {
  width: 100%;
  height: 45px;
  border-radius: 20px;
  border: 2px solid #c0c0c0;
  outline: 0 !important;
  box-sizing: border-box;
  padding: 15px 15px;
  margin: 10px 10px;
}

.page-link {
  text-decoration: underline;
  margin: 0;
  text-align: end;
  color: #747474;
  text-decoration-color: #747474;
}

.page-link-label {
  cursor: pointer;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  font-size: 9px;
  font-weight: 700;
}

.page-link-label:hover {
  color: #000;
}

.form-btn {
  width: 100%;
  padding: 10px 25px;
  margin:20px 10px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  border-radius: 20px;
  border: 0 !important;
  outline: 0 !important;
  background: teal;
  color: white;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.form-btn:hover{
  background:#b2bd00;
}

.form-btn:active {
  box-shadow: none;
}

.sign-up-label {
  margin: 0;
  font-size: 10px;
  color: #747474;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
}

.sign-up-link {
  margin-left: 1px;
  font-size: 11px;
  text-decoration: underline;
  text-decoration-color: teal;
  color: teal;
  cursor: pointer;
  font-weight: 800;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
}

.buttons-container {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  margin-top: 20px;
  gap: 15px;
}

.apple-login-button,
    .google-login-button {
  border-radius: 20px;
  box-sizing: border-box;
  padding: 10px 15px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
        rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  font-size: 11px;
  gap: 5px;
}

.apple-login-button {
  background-color: #000;
  color: #fff;
  border: 2px solid #000;
}

.google-login-button {
  border: 2px solid #747474;
}

.apple-icon,
    .google-icon {
  font-size: 18px;
  margin-bottom: 1px;
}
.col-11{
  position: relative;
            left: 0px;
            top: 0px;
            padding: 2px 00px;
            margin: 10px 10px;
}
@media only screen and (max-width: 524px){
  .form-container {
  width: 350px;
  height: 430px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 10px;
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
  gap: 15px;
  padding: 50px 40px 20px 40px;
  position: relative;
  top:0;
  left: 0;
}


.title {
  text-align: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  margin: 10px 0 30px 0;
  font-size: 28px;
  font-weight: 800;
}

.form {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 18px;
  margin-bottom: 15px;
}

.input {
  width: 100%;
  height: 45px;
  border-radius: 20px;
  border: 2px solid #c0c0c0;
  outline: 0 !important;
  box-sizing: border-box;
  padding: 15px 15px;
  margin: 10px 10px;
}

.page-link {
  text-decoration: underline;
  margin: 0;
  text-align: end;
  color: #747474;
  text-decoration-color: #747474;
}

.page-link-label {
  cursor: pointer;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  font-size: 9px;
  font-weight: 700;
}

.page-link-label:hover {
  color: #000;
}

.form-btn {
  width: 100%;
  padding: 10px 15px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  border-radius: 20px;
  border: 0 !important;
  outline: 0 !important;
  background: teal;
  color: white;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.form-btn:active {
  box-shadow: none;
}

.sign-up-label {
  margin: 0;
  font-size: 10px;
  color: #747474;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
}

.sign-up-link {
  margin-left: 1px;
  font-size: 11px;
  text-decoration: underline;
  text-decoration-color: teal;
  color: teal;
  cursor: pointer;
  font-weight: 800;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
}

.buttons-container {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  margin-top: 20px;
  gap: 15px;
}

.apple-login-button,
    .google-login-button {
  border-radius: 20px;
  box-sizing: border-box;
  padding: 10px 15px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
        rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unipassword", Geneva, Verdana, sans-serif;
  font-size: 11px;
  gap: 5px;
}

.apple-login-button {
  background-color: #000;
  color: #fff;
  border: 2px solid #000;
}

.google-login-button {
  border: 2px solid #747474;
}

.apple-icon,
    .google-icon {
  font-size: 18px;
  margin-bottom: 1px;
}
.col-11{
  position: relative;
            left: 0px;
            top: 0px;
            padding: 2px 00px;
            margin: 10px 10px;
}
}
   /* Optional CSS for additional styling */
        /* Adjust styles as needed */
                    /* For mobile phones: */
                    /* Optional CSS for additional styling */
                    /* Adjust styles as needed */
                    body {
                        padding-top: 70px; /* Adjust according to the navbar height */
                    }
                    .container_Form{
                        padding:70px 80px;
                    }
                    /* Custom CSS for navbar */
                    .custom-navbar {
                        box-shadow: 0 10px 15px -3px rgba(33, 150, 243, .4), 0 4px 6px -4px rgba(33, 150, 243, .4);
                        background-color: #1a1b31;
                        background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
                        width: 100%;
                    }
                    .photo img{
                        width: 60px;
                        height: 60px;
                        box-shadow: 0px 0px 10px #777;
                        border-radius: 50%;
                        
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

<div class="container_Form">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="form-container">
    <p class="title">Welcome back</p>
    <form action="{{ route('log.login') }}" method="POST" id="loginForm">
        @csrf
        <input type="Nom" class="input {{ $errors->has('Nom') ? ' is-invalid' : '' }}" id="Nom"name="Nom" placeholder="Nom">
        @error('Nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="CIN">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <p class="page-link">
        </p>
        <button type="submit" class="form-btn">Log in</button>
    </form>
    <p class="sign-up-label">
        Don't have an account?<span ><a class="sign-up-link" href="https://www.ofppt.ma/">Sign up</a></span>
    </p>
</div>


<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var Nom = document.getElementById('Nom').value;
        var password = document.getElementById('password').value;
        var NomError = document.getElementById('NomError');
        var passwordError = document.getElementById('passwordError');
        var isValid = true;

        if (Nom === '' || !validateNom(Nom)) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('Nom').style.border = '2px solid rgba(199, 13, 13, 0.801)';
            document.getElementById('Nom').style.backgroundColor = 'rgba(255, 121, 121, 0.925)';

            isValid = false;
        } else {
            NomError.innerHTML = '';
            document.getElementById('Nom').style.border = '';
            document.getElementById('Nom').style.backgroundColor = '';
        }
Nom
        if (password === '') {
            event.preventDefault(); // Prevent form submission
            document.getElementById('password').style.border = '2px solid rgba(199, 13, 13, 0.801)';
            document.getElementById('password').style.backgroundColor = 'rgba(255, 121, 121, 0.925)';

            isValid = false;
        } else if (password.length < 8 || (!hasNumericCharacters(password) || hasOnlyNumbers(password)) || (!hasAlphabeticCharacters(password) || hasOnlyAlphabets(password))) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('password').style.border = '2px solid rgba(199, 13, 13, 0.801)';
            document.getElementById('password').style.backgroundColor = 'rgba(255, 121, 121, 0.925)';

            isValid = false;
        } else {
            passwordError.innerHTML = '';
            document.getElementById('password').style.border = '';
            document.getElementById('password').style.backgroundColor = '';
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
        }
    });

    
</script>


</div>
</body>
</html>
