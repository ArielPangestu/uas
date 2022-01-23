@extends('admin.layout.admin')

@section('content')

    <h3>Tambah Barang</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'barang.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Nama') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('deskripsi', 'Deskripsi') }}
                {{ Form::text('deskripsi', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('harga', 'Harga') }}
                {{ Form::text('harga', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Kategori') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Tipe Jam']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection
