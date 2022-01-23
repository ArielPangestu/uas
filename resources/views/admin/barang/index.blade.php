@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

<ul class="container">
    @forelse($barangs as $barang)
    <li class="row">


       <div class="col-md-8">
        <h4>Name of barang:{{$barang->name}}</h4>
        <h4>Category:{{count($barang->category)?$barang->category->name:"N/A"}}</h4>
        @foreach ($barang->images as $image)

          <img src="{{$image->image_path}}" style="max-width: 100px">

        @endforeach
      <a href="{{route('barang.edit',$barang->id)}}" class="btn btn-primary btn-sm ">Edit barang</a>
      <br>

        <form action="{{route('barang.destroy',$barang->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
         </form>

         <div class="col-md-4">

            <form action="/admin/barang/image-upload/{{$barang->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$barang->id}}">
              {{csrf_field()}}

             </form>

        </div>

    </li>

        @empty

        <h3>No products</h3>

    @endforelse
</ul>


@endsection
