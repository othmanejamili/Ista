<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
ista
    @endsection
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                        padding-top: 90px; /* Adjust according to the navbar height */
                    }
                    .container_Form{
                        padding:0px 0px;
                        width: 100%;
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
            border-bottom: 2px solid #ddd;
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
                    .container_Form{
                        padding: 80px 0px;
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
                }
                         /* Styles for the table */
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

/* Media query for responsiveness */
@media screen and (max-width: 600px) {
    /* Hide the table headers and cells */
    th, td {
        display: none;
    }

    /* Display the table as a block */
    table {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; /* Enables smooth scrolling on iOS devices */
    }

    /* Display table row as a block */
    tr {
        display: block;
        margin-bottom: 10px;
    }

    /* Display table data as a block */
    td {
        display: block;
        text-align: left;
        border: none;
        position: relative;
        padding-left: 50%;
    }

    /* Add content and styling to the data */
    td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 45%;
        padding-left: 10px;
        font-weight: bold;
    }
}
.photo1 img{
	width: 35px;
	height: 35px;

	box-shadow: 0px 0px 10px #777;
	border-radius: 50%;
	
}
            
    </style>
</head>
<body>


    <!-- Navbar -->
@extends('layouts.app')
</nav>
    <br>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

    <div class="container_Form">
        <div class="">
            <table class="table">
                <thead>
                <tr class="p-3 mb-2 bg-secondary text-white">
                        <th>@lang('public.Niveau de Formation')</th>
                        <th>@lang('public.Filière')</th>
                        <th>@lang('public.Type Formation')</th>
                        <th>@lang('public.Mode Formation')</th>
                        <th>@lang('public.Group')</th>
                        <th>@lang('public.Année Formation') </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ista as $ista)
                    <tr>
                        <td>{{$ista->niveau_form}}</td>
                        <td>{{$ista->filier}}</td>
                        <td>{{$ista->type_form}}</td>
                        <td>{{$ista->mode_form}}</td>
                        <td>{{$ista->group}}</td>
                        <td>{{$ista->annee_form}}</td>

                        <td><a href="{{ url('ista/'.$ista->id.'/edit') }}" class="btn btn-success mx-3">Modifier</a>
                        <a  href="{{ url('ista/'.$ista->id) }}"
                        class="btn btn-danger mx-1"
                     onclick="return confirm('Are you sure ?')"
                        >Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <td><a href="{{ url('ista/create') }}" class="btn btn-success">Create ista</a></td>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
