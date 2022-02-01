@extends('layouts.main')

@section('content')
    <!-- products listing -->
    <div class="row">
        <h5>{{$jam[0]->count}}</h5>
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('jam')}}">
                        <img src="{{asset("storage/$jam->images")}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="Nama" style="color: black;">{{($jam->name)}}</span>
                  <br>
                    <span class="price-tag">Rp.{{ number_format($jam->harga)}}</span>
                    <p style="font-size: 25px; color: black;">{{($jam->deskripsi)}}</p>
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endsection
