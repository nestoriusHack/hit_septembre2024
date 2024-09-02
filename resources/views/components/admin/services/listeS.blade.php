@extends('base')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Listes des services</h1>
    <p class="mb-4">Ici vous pouvez voir vos articles, supprimer, modifier...</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listes des services</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Photo</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Description</th>

                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->nom }}</td>
                            <td>{{ $service->desc }}</td>

                            <td><img width="100" src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->nom }}" /></td>
                            <td><a href="{{ route('formation.edit', $service->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('formation.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                                <script>
                                    document.getElementById('delete-formation-{{ $formation->id }}').onsubmit = function() {
                                        return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?');
                                    };
                                </script>
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
