<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Files</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">
    <link rel="stylesheet" href="{{ asset('css/download.css') }}">
</head>
<body>
    <!-- Navbar -->

@extends('layouts.app')


<div class="container_Form">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
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

<table class="table" id="cvTable">
    <thead>
        <tr class="p-3 mb-2 bg-secondary text-white">
            <th>ID</th>
            <th>@lang('public.Nom')</th>
            <th>@lang('public.Prenom')</th>
            <th>@lang('public.Filière')</th>
            <th>@lang('public.Année')</th>
            <th>@lang('public.Telecharger')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($CVFiles as $CVFile)
            <tr data-filier="{{ $CVFile->filier }}">
                <td>{{ $CVFile->id }}</td>
                <td>{{ $CVFile->nom }}</td>
                <td>{{ $CVFile->prenom }}</td>
                <td>{{ $CVFile->filier }}</td>
                <td>{{ $CVFile->year }}</td>
                <td>
                    <button class="buttonDownload"><a href="{{ route('cv.download', ['id' => $CVFile->id]) }}" style="color:white;">Download</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


</div>
</div>
<script src="{{ asset('js/download.js') }}"></script>


    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
