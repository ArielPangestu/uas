@extends('admin.layout.admin')

@section('content')

<div class="navbar">
    <a class="navbar-brand" href="#">Kategori</a>
    <ul class="nav navbar-nav">
        @if(!empty($categories))
        @forelse($categories as $category)
            <li>
                <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
            </li>
        @empty
            <li>Tidak ada barang</li>
        @endforelse
            @endif

    </ul>
    <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">+Tambah Kategori</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

    @if(isset($barangs))

    <h3>Produk</h3>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Produk</th>
    		</tr>
    	</thead>
    	<tbody>
            @forelse($barangs as $barang)
                <tr><td>{{$barang->name}}</td></tr>
                    @empty
                    <tr><td>no data</td></tr>
                    @endforelse
        </tbody>
    </table>
    @endif

@endsection
