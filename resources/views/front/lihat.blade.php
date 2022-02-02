@extends('layouts.main')

@section('content')
    <!-- products listing -->
    <div class="container">
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="">
                        <img src="{{asset(".../$barang->image")}}"" class="rounded mx-auto d-block" width="100%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="Nama" style="color: black;">{{($barang->name)}}</span>
                  <br>
                    <span class="price-tag">Rp.{{($barang->price)}}</span>
                    <p style="font-size: 25px; color: black;">{{($barang->deskripsi)}}</p>
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <a href="" class="button expanded add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endsection
