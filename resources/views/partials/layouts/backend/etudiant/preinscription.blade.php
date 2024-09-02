@extends('partials.layouts.backend.etudiant.__main')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }

    .excel-interface {
        max-width: 800px;
        margin: 30px auto;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px 40px;
    }

    .excel-interface h2 {
        text-align: center;
        color: #444;
        margin-bottom: 20px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 15px;
        margin-bottom: 20px;
    }

    .grid-item label {
        font-weight: bold;
        color: #333;
        width: auto;
    }

    .grid-item input[type="text"],
    .grid-item input[type="email"],
    .grid-item input[type="date"],
    .grid-item input[type="file"],
    .grid-item select {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
        color: #232438;
    }

    .grid-item input::placeholder {
        color: #999;
    }

    .grid-item input:focus,
    .grid-item select:focus {
        outline: none;
        border-color: #776cdb;
        box-shadow: 0 0 5px rgba(119, 108, 219, 0.4);
    }

    button {
        padding: 12px 25px;
        background-color: #776cdb;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        width: 100%;
        display: block;
        margin: 0 auto;
    }

    button:hover {
        background-color: #5e52bb;
    }

    .alert {
        color: #ff0000;
        font-size: 14px;
        margin-top: 5px;
    }

</style>

<section class="pop-cour">
    <div class="excel-interface">
        <h2>FICHE D'INSCRIPTION A LA FORMATION</h2>

        <form id="inscriptionForm" method="POST" action="{{ route('preinscription.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid-container">
                <div class="grid-item"><label for="nom">Nom :</label></div>
                <div class="grid-item"><input type="text" id="name" placeholder="Ex: GANGBAZO" name="nom" required></div>

                <div class="grid-item"><label for="prenom">Prénom(s) :</label></div>
                <div class="grid-item"><input type="text" id="prenom" placeholder="Ex: Nestor" name="prenom" required></div>

                <div class="grid-item"><label for="datenaissance">Date de naissance :</label></div>
                <div class="grid-item"><input type="date" id="datenaissance" name="datenaissance" required></div>

                <div class="grid-item"><label for="nationalite">Nationalité :</label></div>
                <div class="grid-item"><input type="text" id="nationalite" placeholder="Togolaise" name="nationalite" required></div>

                <div class="grid-item"><label for="adresse">Adresse :</label></div>
                <div class="grid-item"><input type="text" id="adresse" placeholder="Lomé" name="adresse" required></div>

                <div class="grid-item"><label for="email">Email :</label></div>
                <div class="grid-item">
                    <input type="email" placeholder="shp@gmail.com" id="email" name="email" required>
                    @error('email')
                        <div class="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="grid-item"><label for="telephone">Téléphone :</label></div>
                <div class="grid-item"><input type="text" id="phone" placeholder="+228 99 XX XX XX" name="telephone" required></div>

                <div class="grid-item"><label for="domaine">Domaine d'inscription :</label></div>
                <div class="grid-item"><input type="text" id="domaine" name="domaine" required></div>

                <div class="grid-item"><label for="niveau">Niveau d'étude :</label></div>
                <div class="grid-item"><input type="text" id="niveau" placeholder="BAC - LICENCE..." name="niveau" required></div>
                {{-- <div class="grid-item">
                    <select name="niveau" id="niveau" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>Ouvrez le menu</option>
                        <option value="bac">BAC</option>
                        <option value="licence">LICENCE</option>
                        <option value="bts">BTS</option>
                        <option value="master">MASTER</option>
                    </select>
                </div> --}}

                <div class="grid-item"><label for="photo">Joindre une preuve de paiement:</label></div>
                <div class="grid-item"><input type="file" name="photo" required></div>

                <div class="grid-item"><label for="profile">Joindre une photo passeport :</label></div>
                <div class="grid-item"><input type="file" name="profile" required></div>
            </div>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</section>
@endsection

