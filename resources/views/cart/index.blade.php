@extends('layouts.main')

@section('content')
 <div class="container">
     <div class="row">
    <h3>Cart Item</h3>
    <table class="table table-hover">
    <thead>
        <tr>
                <th>Nama</th>
                <th>Harga</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem->name}}</td>
            <td>{{$cartItem->price}}</td>
            <td> <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <button class="btn btn-sm btn-danger" type="submit" value="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td>Jumlah Barang :  {{Cart::count()}}
                <br>Total Rp. {{Cart::subtotal()}}</td>

        </tr>
    </tbody>
</table>
    <a href="" class="button">Checkout</a>
 </div>
</div>

@endsection
