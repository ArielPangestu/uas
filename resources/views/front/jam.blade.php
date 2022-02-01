@extends('layouts.main')

@section('content')
         <div class="row">
            @foreach($jam as $jams)
            <div class="col-6 col-sm-3">
                <div class="item-wrapper col-md-auto text-center">
                    <div class="img-wrapper ">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$jams->image)}}"/>
                </a>
                    </div>
                    <a href="{{route('lihat')}}">
                        <h3>
                            {{$jams->name}}
                        </h3>
                    </a>
                    <h5>
                        Rp.{{ number_format($jams->harga)}}
                    </h5>
                    <p>
                        {{$jams->deskripsi}}
                    </p>
                </div>
            </div>
       @endforeach

        <compare></compare>
    </div>
@endsection
