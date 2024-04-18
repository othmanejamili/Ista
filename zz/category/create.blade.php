<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Create Category
@endsection
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">

    <!-- Bootstrap CSS -->
    <style>
        /* Optional CSS for additional styling */
        /* Adjust styles as needed */
        body {
            padding-top: 70px; /* Adjust according to the navbar height */
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
        
            .form_container {
                    width: 40%;
                    height: fit-content;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 15px;
                    padding: 50px 40px 20px 40px;
                    background-color: #ffffff;
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
   
    <!-- Navbar -->
    @extends('layouts.app')

<br>

        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        
        <div class="container">
                    <h5 class="card-title">Create Category</h5>
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active">
                                <label class="form-check-label" for="is_active">Is Active</label>
                            </div>
                        </div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" />
                    </form>
                </div>   
        </div>
        </div>
    

    <!-- Bootstrap JavaScript (optional, for enhanced functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
