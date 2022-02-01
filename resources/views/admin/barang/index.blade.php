@extends('admin.layout.admin')

@section('content')

    <h3 style="width:105%;">Barang</h3>
    <br>
<ul>
    @forelse($barangs as $barang)
        <li>
            <h4>Nama barang : {{$barang->name}}</h4>
        </li>
        <td>
            <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
        @empty
        <h3>Tidak Ada barang</h3>
    @endforelse
</ul>
@endsection
