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
                <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem->name}}</td>
            <td>{{$cartItem->price}}</td>
            <td>{{$cartItem->qty}}</td>
            <td> <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td>Total Rp. {{Cart::subtotal()}}</td>
        </tr>
    </tbody>
</table>
    <a href="" class="button">Checkout</a>
 </div>
</div>

@endsection
