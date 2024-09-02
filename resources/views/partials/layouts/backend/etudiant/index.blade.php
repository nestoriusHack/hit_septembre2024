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
    <p>Bienvenue à HIT-T SARL-U, votre partenaire dans l'acquisition de compétences professionnelles de qualité !

        Chez HIT-T SARL-U, nous croyons que l'éducation et la formation sont les clés pour ouvrir les portes du succès. Notre plateforme de formation en ligne offre une variété de cours dans des domaines spécialisés, vous permettant d'acquérir les compétences nécessaires pour exceller dans le monde professionnel. Que vous soyez un étudiant en quête de perfectionnement ou un professionnel cherchant à se recycler, nos formations sont conçues pour répondre à vos besoins.

        Inscrivez-vous et payez vos formations en toute sécurité grâce à notre système de paiement en ligne.
        Rejoignez HIT-T SARL-U aujourd'hui et faites le premier pas vers un avenir professionnel brillant et rempli d'opportunités !</p>
    <div>
        <a href="{{ route('preinscription') }}" class="btn btn-primary">Pré-inscription</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Cours en ligne disponibles</a>
    </div>
</div>
<br>
@endsection
