@extends('master')
@section('content')
<style>
.custom-product {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.trending-wrapper {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
}

.searched-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 15px;
    border-bottom: 1px solid #e0e0e0;
}

.trending-img {
    max-width: 200px;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.trending-img:hover {
    transform: scale(1.05);
}

.carousal-caption {
    padding: 0 15px;
}

.carousal-caption h2 {
    color: #333;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.carousal-caption h5 {
    color: #666;
    font-size: 1rem;
}

.btn-success, .btn-warning {
    margin: 10px 0;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
}

@media (max-width: 768px) {
    .searched-item {
        flex-direction: column;
        text-align: center;
    }

    .trending-img {
        max-width: 150px;
        margin-bottom: 15px;
    }

    .carousal-caption {
        margin-bottom: 15px;
    }
}
</style>

<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br>
            
            @foreach($products as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="carousal-caption">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removeCart/{{$item->id}}" class="btn btn-warning">Remove From Cart</a>
                    </div>
                </div>
            @endforeach
            
            <a class="btn btn-success" href="/ordernow">Order Now</a>
        </div>
    </div>
</div>
@endsection