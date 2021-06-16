@extends('front.layouts.master')

@section('title')
    Larvel Shop
@endsection

@section('content')
<!-- Page Features -->
<div class="row text-center">

    @foreach ($products as $product)

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('uploads/'.$product->image) }}" alt=""><!-- Image size 500*325 -->
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            </div>
            <div class="card-footer">
                <strong>${{ $product->price }}</strong> &nbsp;
                <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                    Cart</a>
            </div>
        </div>
    </div>

    @endforeach

</div>
<!-- /.row -->
@endsection
