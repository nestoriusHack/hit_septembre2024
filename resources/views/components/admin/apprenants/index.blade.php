@extends('base')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Flash Message for Success -->
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
    @endif

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Liste des Apprenants inscrits</h1>
    <p class="mb-4">Ici vous pouvez voir vos apprenants inscrits, modifier ou supprimer leurs informations.</p>

    <!-- DataTable Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listes des Apprenants</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Nationalité</th>
                            <th>Résidence</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Domaine</th>
                            <th>Niveau</th>
                            <th>Preuve de Paiement</th>
                            <th>Photo Passeport</th>
                            <th>Créé à</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Nationalité</th>
                            <th>Résidence</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Domaine</th>
                            <th>Niveau</th>
                            <th>Preuve de Paiement</th>
                            <th>Photo Passeport</th>
                            <th>Créé à</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($preinscriptions as $preinscription)
                        <tr>
                            <td>{{ $preinscription->nom }}</td>
                            <td>{{ $preinscription->prenom }}</td>
                            <td>{{ $preinscription->datenaissance }}</td>
                            <td>{{ $preinscription->nationalite }}</td>
                            <td>{{ $preinscription->adresse }}</td>
                            <td>{{ $preinscription->email }}</td>
                            <td>{{ $preinscription->telephone }}</td>
                            <td>{{ $preinscription->domaine }}</td>
                            <td>{{ $preinscription->niveau }}</td>
                            <td>
                                @if ($preinscription->photo)
                                    <img width="100" src="{{ asset('storage/' . $preinscription->photo) }}" alt="Preuve de Paiement" />
                                @else
                                    Non disponible
                                @endif
                            </td>
                            <td>
                                @if ($preinscription->profile)
                                    <img width="100" src="{{ asset('storage/' . $preinscription->profile) }}" alt="Photo Passeport" />
                                @else
                                    Non disponible
                                @endif
                            </td>
                            <td>{{ $preinscription->created_at->format('d-m-Y') }}</td>
                            <td>
                                {{-- <a href="{{ route('preinscription.edit', $preinscription->id) }}" class="btn btn-warning mb-1">Modifier</a> --}}
                                <form action="{{ route('preinscription.destroy', $preinscription->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet apprenant ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
