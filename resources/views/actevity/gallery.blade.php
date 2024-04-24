<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
activity
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
        .image {
            width: 50px;
            height: 60px;
        }
    </style>
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

    </style>
    <style>
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

    <h2>Image Gallery</h2>
    <div class="container_Form">
        <div class="container">
            <table class="table">
                <thead>
                    <tr class="p-3 mb-2 bg-secondary text-white">
                        <th>Image</th>
                        <th>Description</th>
                        <th>Titre</th>
                        <th>Activity</th>
                        <th>Titre Activity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->file_name }}" class="image">
                            </td>
                            <td>{{ $image->description }}</td>
                            <td>{{ $image->titre }}</td>
                            <td>{{ $image->activity }}</td>
                            <td>{{ $image->titre_activity }}</td>
                            <td>
                            <a href="{{ route('activity.edit', $image->id) }}" class="btn btn-success mx-3">Edit</a>

                                <form action="{{ route('image.destroy', $image->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-3" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
