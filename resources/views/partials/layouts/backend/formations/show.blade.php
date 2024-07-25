@extends('index')

@section('content')
<div class="container">
    @foreach ($formations as $formation )
        <h1>{{ $formation->nom }}</h1>
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $formation->photo) }}" class="img-fluid" alt="{{ $formation->nom }}">
                <p>{{ $formation->desc }}</p>
                <p><strong>Date: </strong>{{ $formation->date }}</p>
                <p><strong>Prix: </strong>{{ number_format((float) $formation->prix, 2, ',', ' ') }} FCFA</p>
                <p><strong>Catégorie: </strong>{{ $formation->categorie->nom }}</p>
                <a href="{{ asset('storage/' . $formation->doc) }}" class="btn btn-secondary">Télécharger le document</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
