@extends('admin.layout.admin')

@section('content')

    <h3>Produk</h3>

<ul>
    @forelse($barangs as $barang)
    <li>
        <h4>Nama barang:{{$barang->name}}</h4>
    </li>

        @empty

        <h3>Tidak Ada barang</h3>

    @endforelse
</ul>


@endsection
