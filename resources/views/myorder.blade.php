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
   border-radius: 10px;
   padding: 20px;
   box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.searched-item {
   display: flex;
   align-items: center;
   margin-bottom: 20px;
   padding: 15px;
   border-bottom: 1px solid #e0e0e0;
   transition: background-color 0.3s ease;
}

.searched-item:hover {
   background-color: #f1f3f5;
}

.trending-img {
   max-width: 200px;
   height: 200px;
   object-fit: cover;
   border-radius: 10px;
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
   margin-bottom: 15px;
}

.carousal-caption h5 {
   color: #666;
   font-size: 1rem;
   margin-bottom: 8px;
}

@media (max-width: 768px) {
   .searched-item {
       flex-direction: column;
       text-align: center;
   }

   .trending-img {
       max-width: 150px;
       max-height: 150px;
       margin-bottom: 15px;
   }

   .carousal-caption {
       text-align: center;
   }
}
</style>

<div class="container custom-product">
   <div class="col-sm-10">
       <div class="trending-wrapper">
           <h2>Orders List</h2>
           <div>
               @foreach($orders as $item)
                   <div class="row searched-item cart-list-divider">
                       <div class="col-sm-3">
                           <a href="detail/{{$item->id}}">
                               <img class="trending-img" src="{{ $item->gallery }}">
                           </a>
                       </div>
                       <div class="col-sm-3">
                           <div class="carousal-caption">
                               <h2>{{$item->name}}</h2>
                               <h5>Delivery Status: {{$item->status}}</h5>
                               <h5>Payment Status: {{$item->payment_status}}</h5>
                               <h5>Payment Method: {{$item->payment_method}}</h5>
                               <h5>Delivery Address: {{$item->address}}</h5>
                               <h5>Price: {{$item->price}}</h5>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </div>
</div>
@endsection