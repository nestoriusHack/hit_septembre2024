@extends('partials.layouts.backend.etudiant.__main')
@section('content')

<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: #776cdb;
        box-shadow: 0 0 5px rgba(119, 108, 219, 0.4);
    }

    .btn-primary {
        background-color: #776cdb;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }

    .btn-primary:hover {
        background-color: #5e52bb;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>

<div class="form-container">
    <h2>Modifier Mes Informations</h2>
    <form action="{{ route('preinscription.update', $preinscription->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $preinscription->nom) }}" required>
            @error('nom')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="prenom">Prénom(s) :</label>
            <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $preinscription->prenom) }}" required>
            @error('prenom')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="datenaissance">Date de naissance :</label>
            <input type="date" id="datenaissance" name="datenaissance" value="{{ old('datenaissance', $preinscription->datenaissance) }}" required>
            @error('datenaissance')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nationalite">Nationalité :</label>
            <input type="text" id="nationalite" name="nationalite" value="{{ old('nationalite', $preinscription->nationalite) }}" required>
            @error('nationalite')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" value="{{ old('adresse', $preinscription->adresse) }}" required>
            @error('adresse')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ old('email', $preinscription->email) }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" value="{{ old('telephone', $preinscription->telephone) }}" required>
            @error('telephone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="domaine">Domaine d'inscription :</label>
            <input type="text" id="domaine" name="domaine" value="{{ old('domaine', $preinscription->domaine) }}" required>
            @error('domaine')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="niveau">Niveau d'étude :</label>
            <input type="text"id="niveau" name="niveau" value="{{ old('niveau', $preinscription->niveau) }}" required>
            @error('niveau')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="photo">Joindre une preuve de paiement:</label>
            <input type="file" name="photo">
            @error('photo')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="profile">Joindre une photo passeport :</label>
            <input type="file" name="profile">
            @error('profile')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
