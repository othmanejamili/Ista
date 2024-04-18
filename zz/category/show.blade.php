<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
    Category
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
                        padding:70px 70px;
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        a {
            text-decoration: none;
        }
    </style>

    <!--this for show designe in the pfone  -->
    <style>
                @media only screen and (max-width: 524px) {
                                            /* For mobile phones: */
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
                        table {
                            width: 80%;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 8px;
                            text-align: left;
                            border-bottom: 1px solid #ddd;
                        }
                        th {
                            background-color: #f2f2f2;
                        }
                        tr:hover {
                            background-color: #f5f5f5;
                        }
                        a {
                            text-decoration: none;
                        }
            }
    </style>
</head>
</head>
<body>


    <!-- Navbar -->
    @extends('layouts.app')

    <div class="container_Form">

    <br>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Is Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->is_active}}</td>
                    <td><a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-success mx-3">Modifier</a>
                    <a   href="{{ url('category/'.$category->id) }}"
                     class="btn btn-danger mx-1"
                     onclick="return confirm('Are you sure ?')"
                     >Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            <td><a href="{{ url('category/create') }}" class="btn btn-success">Create Voiture</a></td>
        </table>
    </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
