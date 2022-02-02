@extends('layouts.main')

@section('content')
<div class="container">
         <div class="row">
            @foreach($jam as $jam)
            <div class="col-6 col-sm-3">
                <div class="item-wrapper col-md-auto text-center">
                    <div class="img-wrapper ">
                        <a  href="{{route('cart.edit',$jam->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="">
                            <img src="{{url('images',$jam->image)}}"/>
                </a>
                    </div>
                    <a href="{{route('lihat')}}">
                        <h3>
                            {{$jam->name}}
                        </h3>
                    </a>
                    <h5>
                        Rp.{{number_format($jam->price)}}
                    </h5>
                    <p>
                        {{$jam->deskripsi}}
                    </p>
                </div>
            </div>
       @endforeach

        <compare></compare>
    </div>
@endsection
