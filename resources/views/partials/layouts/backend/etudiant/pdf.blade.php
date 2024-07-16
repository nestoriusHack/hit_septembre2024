<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Préinscription PDF</title>
    <style>
        /* Styles CSS pour la mise en page du PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 150px;
        }

        .address {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('images/logosarl.png') }}" class="logo" alt="Logo de l'entreprise">
            <h1>Préinscription</h1>
        </div>

        <div class="address">
            <p>HIT-T FORMATION<br>
            VILLE: Lomé, PAYS: Togo<br>
            Téléphone : +228 90475103<br>
            Email : formationfacile.hitt.tg@gmail.com</p>
        </div>

        <table>
            <tr>
                <th>NOM</th>
                <td>{{ $preinscription->nom }}</td>
            </tr>
            <tr>
                <th>PRENOM</th>
                <td>{{ $preinscription->prenom }}</td>
            </tr>
            <tr>
                <th>DATE DE NAISSANCE</th>
                <td>{{ $preinscription->datenaissance}}</td>
            </tr>
            <tr>
                <th>NATIONALITE</th>
                <td>{{ $preinscription->nationalite }}</td>
            </tr>
            <tr>
                <th>ADRESSE</th>
                <td>{{ $preinscription->adresse }}</td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td>{{ $preinscription->email }}</td>
            </tr>
            <tr>
                <th>TELEPHONE</th>
                <td>{{ $preinscription->telephone }}</td>
            </tr>
            <tr>
                <th>DOMAINE</th>
                <td>{{ $preinscription->domaine }}</td>
            </tr>
            <tr>
                <th>NIVEAU D'ETUDE :</th>
                <td>{{ $preinscription->niveau }}</td>
            </tr>

            <tr>
                <th>JOINDRE UNE PREUVE DE PAIEMENT:</th>
                    <td>
                        @if(!empty($preinscription->photo))
                                <img src="{{ public_path('images/' . $preinscription->photo) }}" alt="Photo de paiement" style="max-width: 150px;">
                        @else
                        Aucune preuve disponible disponible
                        @endif
                    </td>
            </tr>
            <tr>
                <th>JOINDRE UNE PHOTO :</th>
                    <td>
                        @if(!empty($preinscription->profile))
                                <img src="{{ public_path('images/' . $preinscription->profile) }}" alt="Photo de l'étudiant" style="max-width: 150px;">
                        @else
                        Aucune preuve disponible disponible
                        @endif
                    </td>
            </tr>

            <!-- Ajoutez d'autres données de préinscription ici -->
        </table>
    </div>
</body>
</html>
