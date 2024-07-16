<!-- resources/views/preinscription.blade.php -->

@extends('index')

@section('content')
{{-- <div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form action="{{ ('rechercher') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="sf-type">
                            <div class="sf-input">
                                <input type="text" id="sf-box" name="q" placeholder="Rechercher">
                            </div>
                            <div class="sf-list">

                            </div>
                        </div>
                        <div class="sf-submit">
                            <input type="submit" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</br>
<center>
    <section class="pop-cour">
        <div class="excel-interface">
            <h2>FICHE D'INSCRIPTION A LA FORMATION</h2>

            <form id="inscriptionForm"  method="post" action="{{ route('preinscription.store')}}" enctype="multipart/form-data" >
                @csrf
                <div class="grid-container">
                    <div class="grid-item"><label for="nom">Nom :</label></div>
                    <div class="grid-item"><input type="text" id="name" placeholder="Ex: GANGBAZO" name="nom" required></div>

                    <div class="grid-item"><label for="prenom">Prénom(s) :</label></div>
                    <div class="grid-item"><input type="text" id="prenom" placeholder="Ex: Nestor" name="prenom" required></div>

                    <div class="grid-item"><label for="datenaissance">Date de naissance :</label></div>
                    <div class="grid-item"><input type="date" id="date_naissance"  name="datenaissance" required></div>

                    <div class="grid-item"><label for="nationalite">Nationalité :</label></div>
                    <div class="grid-item"><input type="text" id="nationalite" placeholder="Togolaise" name="nationalite" required></div>

                    <div class="grid-item"><label for="adresse">Adresse :</label></div>
                    <div class="grid-item"><input type="text" id="adresse" placeholder="Lomé" name="adresse" required></div>

                    <div class="grid-item"><label for="email">Email :</label></div>
                    <div class="grid-item"><input type="email" placeholder="shp@gmail.com" id="email" name="email" required></div>

                    <div class="grid-item"><label for="telephone">Téléphone :</label></div>
                    <div class="grid-item"><input type="text" id="phone" placeholder="+228 99 XX XX XX" name="telephone" required></div>

                    <div class="grid-item"><label for="domaine">Domaine d'inscription :</label></div>
                    <div class="grid-item"><input type="text" id="" name="domaine" required></div>

                    <div class="grid-item"><label for="domaine">Niveau d'étude :</label></div>
                    <div class="grid-item">
                        <select name="niveau" id="niveau" required>
                            <option value="">selectionnez</option>
                            <option value="bac">BAC</option>
                            <option value="licence">LICENCE</option>
                            <option value="bts">BTS</option>
                            <option value="master">MASTER</option>
                        </select>
                    </div>

                    <div class="grid-item"><label for="domaine">Joindre une preuve de paiement:</label></div>
                    <div class="grid-item"><input type="file" id="" name="photo" required></div>

                    <div class="grid-item"><label for="domaine">Joindre une photo passport</label></div>
                    <div class="grid-item"><input type="file" id="" name="profile" required></div>
                </div>
                <center>

                        <button type="submit">S'inscrire</button>

                </center>
            </form>
        </div>
    </section>
</center>
@endsection
<br>
<style>
        body {
            font-family: Arial, sans-serif;
            font-size: 30px
            background-color: #776cdb;
            margin: 0;
            padding: 0;
        }

        .excel-interface {
            max-width: 600px;
            margin: 0 auto;
            background-image: rgb(160, 213, 243);
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 50px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
            margin-bottom: 20px;
        }

        .grid-item {
            display: flex;
            align-items: center;
        }

        label {
            margin-right: 10px;
        }

        input {
            padding: 18px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            padding: 10px 20px;
            background-color: #e4e5ec;
            text-decoration-color: white;
            border: block;
            border-radius: 15px;
            cursor: pointer;
        }


</style>


