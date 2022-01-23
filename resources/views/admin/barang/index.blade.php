@extends('admin.layout.admin')

@section('content')

    <h3>Produk</h3>

<ul>
    @forelse($barangs as $barang)
    <li>
        <h4>Name of barang:{{$barang->name}}</h4>
    </li>

        @empty

        <h3>No products</h3>

    @endforelse
</ul>


@endsection
