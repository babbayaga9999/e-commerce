<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>E-comm project</title>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <style>
       :root {
           --primary-color: #007bff;
           --secondary-color: #6c757d;
           --background-light: #f8f9fa;
       }

       body {
           font-family: 'Arial', sans-serif;
           background-color: var(--background-light);
       }

       .custom-login {
           height: 500px;
           padding-top: 100px;
           display: flex;
           justify-content: center;
           align-items: center;
           background-color: var(--background-light);
       }

       .slider-img {
           height: 400px !important;
           width: 100%;
           object-fit: cover;
           transition: transform 0.3s ease;
       }

       .slider-img:hover {
           transform: scale(1.02);
       }

       .custom-product {
           min-height: 500px;
           padding: 20px;
       }

       .trending-img {
           height: 100px;
           width: 100%;
           object-fit: cover;
           border-radius: 8px;
           transition: transform 0.3s ease;
       }

       .trending-img:hover {
           transform: scale(1.1);
       }

       .trending-item {
           float: left;
           width: 20%;
           padding: 10px;
           text-align: center;
           transition: all 0.3s ease;
       }

       .trending-item:hover {
           background-color: rgba(0,0,0,0.05);
       }

       .trending-wrapper {
           margin: 20px;
           background-color: white;
           border-radius: 10px;
           box-shadow: 0 4px 6px rgba(0,0,0,0.1);
           padding: 20px;
       }

       .detail-img {
           height: 200px;
           width: 100%;
           object-fit: cover;
           border-radius: 8px;
       }

       .search-box {
           width: 500px !important;
           border-radius: 20px;
           padding: 10px 20px;
       }

       .cart-list-divider {
           border-bottom: 1px solid #ccc;
           margin-bottom: 20px;
           padding-bottom: 20px;
           transition: background-color 0.3s ease;
       }

       .cart-list-divider:hover {
           background-color: rgba(0,0,0,0.03);
       }

       @media (max-width: 768px) {
           .trending-item {
               width: 50%;
           }

           .search-box {
               width: 100% !important;
           }

           .slider-img {
               height: 250px !important;
           }
       }
   </style>
</head>
<body>
   {{View::make('header')}}
   @yield('content')
   {{View::make('footer')}}
</body>
</html>