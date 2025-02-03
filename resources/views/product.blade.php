@extends('master')
@section('content')
<style>
.custom-product {
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
}

.carousel {
   margin-bottom: 30px;
   border-radius: 10px;
   overflow: hidden;
   box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.slider-img {
   width: 100%;
   max-height: 500px;
   object-fit: cover;
   transition: transform 0.3s ease;
}

.carousel-item:hover .slider-img {
   transform: scale(1.02);
}

.carousal-caption {
   position: absolute;
   bottom: 20px;
   left: 20px;
   color: white;
   background: rgba(0,0,0,0.6);
   padding: 10px 15px;
   border-radius: 5px;
}

.carousel-control-prev,
.carousel-control-next {
   width: 50px;
   height: 50px;
   background: rgba(0,0,0,0.5);
   border-radius: 50%;
   top: 50%;
   transform: translateY(-50%);
}

.trending-wrapper {
   background-color: #f8f9fa;
   padding: 20px;
   border-radius: 10px;
}

.trending-wrapper h1 {
   text-align: center;
   margin-bottom: 20px;
   color: #333;
}

.trending-item {
   display: inline-block;
   margin: 10px;
   text-align: center;
   transition: transform 0.3s ease;
}

.trending-item:hover {
   transform: scale(1.05);
}

.trending-img {
   width: 200px;
   height: 200px;
   object-fit: cover;
   border-radius: 10px;
   box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}

.trending-item .carousal-caption {
   position: static;
   background: none;
   color: #333;
   padding: 10px 0;
}

@media (max-width: 768px) {
   .slider-img {
       max-height: 300px;
   }

   .carousal-caption {
       position: static;
       background: rgba(0,0,0,0.7);
       color: white;
       margin-top: 10px;
   }

   .trending-item {
       margin: 10px 0;
   }
}
</style>

<div class="container custom-product">
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
           @foreach($products as $item)
               <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
                   <div class="carousal-caption">
                       <h3>{{$item['name']}}</h3>
                       <p>{{$item['description']}}</p>
                   </div>
                </a>
               </div>
           @endforeach
       </div>

       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
       </button>
   </div>

   <div class="trending-wrapper">
       <h1>Trending Products</h1>
       <div>
           @foreach($products as $item)
               <div class="trending-item">
               <a href="detail/{{$item['id']}}">
                   <img class="trending-img" src="{{ $item['gallery'] }}">
                   <div class="carousal-caption">
                       <h3>{{$item['name']}}</h3>
                   </div>
               </a>
               </div>
           @endforeach
       </div>
   </div>
</div>
@endsection