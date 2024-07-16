@extends('partials.layouts.backend.etudiant.__main')
@section('content')
<style>
    .container {
        text-align: center;
    }

    /* .btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-secondary {
        background-color: #6c757d;
    } */

</style>
<div class="container">
    <h1>Bienvenue sur la page des étudiants</h1>
    <p>Texte d'introduction expliquant les avantages et les fonctionnalités disponibles pour les étudiants.</p>
    <div>
        <a href="{{ route('preinscription') }}" class="btn btn-primary">Pré-inscription</a>
        <a href="lien_cours_en_ligne" class="btn btn-secondary">Cours en ligne disponibles</a>
    </div>
</div>
<br>
@endsection
