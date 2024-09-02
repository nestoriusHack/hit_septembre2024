@extends('index')

@section('content')
<div class="container">
<style>
    .img-fluid {
          width: 200px;
          height: 200px;
    }
</style>
        <h1>{{ $formation->nom }}</h1>
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $formation->photo) }}" class="img-fluid" alt="{{ $formation->nom }}">
                <p><strong>Descrption: </strong>{{ $formation->desc }}</p>
                <p><strong>Date: </strong>{{ $formation->date }}</p>
                <p><strong>Prix: </strong>{{ number_format((float) $formation->prix, 2, ',', ' ') }} FCFA</p>
                <p><strong>Catégorie: </strong>{{ $formation->categorie->nom }}</p>
                <a href="{{ asset('storage/' . $formation->doc) }}" class="btn btn-secondary">Télécharger le document</a>
            </div>
        </div>

</div>
<br>
<div class="card-footer bg-transparent">
    <div class="text-center">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('formations.show', $formation->id)) }}" target="_blank">
                    <i class="fa fa-facebook"></i> Facebook
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(route('formations.show', $formation->id)) }}" target="_blank">
                    <i class="fa fa-linkedin"></i> LinkedIn
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('formations.show', $formation->id)) }}" target="_blank">
                    <i class="fa fa-twitter"></i> Twitter
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://api.whatsapp.com/send?text={{ urlencode(route('formations.show', $formation->id)) }}" target="_blank">
                    <i class="fa fa-whatsapp"></i> WhatsApp
                </a>
            </li>
        </ul>
    </div>
@endsection
