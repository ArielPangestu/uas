@extends('layouts.main')

@section('content')

<div class="container">
    <form action="" method="GET">
    <div class="input-group">
        <input class="form-control border-end-0 border rounded-pill" type="text" value="" id="example-search-input">
        <span class="input-group-append">
            <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
 </div>
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
