@extends('layouts.main')

@section('content')
    <!-- products listing -->
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="https://lh3.googleusercontent.com/-h39t2XMtGb0/WSsDM5tLzrI/AAAAAAAAN14/2BtspFeJbU8bbz1vdgOY44qu7d_25PJNwCHM/s1600/20170528_230447.jpg"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">Rp 150.000.000</span>
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
