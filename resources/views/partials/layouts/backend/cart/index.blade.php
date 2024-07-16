@extends('partials.layouts.backend.cart.main')
@section('content')

<table id="cart" class="table table-bordered">
    <h1>Mon Panier</h1>
    @if (session('cart'))
        @php $total = 0 @endphp
        <thead>
            <tr>
                <th>Images</th>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (session('cart') as $id => $details)
                @php $total += $details['prixproduit'] * $details['quantity'] @endphp
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                                <img src="{{ asset('storage/'.$details['imageproduit']) }}" width="50px" height="50px" />
                            </div>
                        </div>
                    </td>
                    <td>{{ $details['nomproduit'] }}</td>
                    <td>{{ $details['quantity'] }}</td>
                    <td data-th="Price">
                        {{ number_format((float)$details['prixproduit'], 2, ',', '') }} FCFA
                    </td>
                    <td data-th="Subtotal" class="text-center">
                        {{ number_format((float)$details['prixproduit'] * $details['quantity'], 2, ',', '') }} FCFA
                    </td>
                    <td class="actions">
                        <form action="{{ route('remove.from.cart', $id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm delete-item">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <strong>Total: {{ number_format((float)$total, 2, ',', '') }} FCFA</strong>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    <button class="btn btn-danger">Checkout</button>
                </td>
            </tr>
        </tfoot>
    </table>
    @else
        <p>Votre panier est vide</p>
    @endif
@endsection

@section('scripts')
<script type="text/javascript">
    $(".delete-item").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Voulez-vous vraiment supprimer cet article ?")) {
            ele.parents("form").submit();
        }
    });
</script>
@endsection
