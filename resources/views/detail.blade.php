@extends('master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{ $product['gallery'] }}" alt="Product Image">
    </div>
    <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h2>Name : {{ $product['name'] }}</h2>
        <h3>Price : {{ $product['price'] }}</h3>
        <h4>Category : {{ $product['category'] }}</h4>
        <h4>Description : {{ $product['description'] }}</h4>

        <br><br>
        <form action="{{ url('add_to_cart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button type="submit" class="btn btn-success">Add To Cart</button>
        </form>
        <br><br>

        <form action="{{ url('buy_now') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button type="submit" class="btn btn-primary">Buy Now</button>
        </form>
        <br><br>
    </div>
  </div>
</div>

@endsection
