<?php
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;

// Initialize cart total
$total = 0;

// Check if user is logged in
if (Session::has('user')) {
    $productController = new ProductController();
    $total = $productController->cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand" href="/">E-Comm</a>

    <!-- Toggler Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home<span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Orders</a>
        </li>
      </ul>

      <!-- Search Form -->
      <form action="/search" class="d-flex">
        <input type="text" name="query" class="form-control search-box" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Right-Aligned Links -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart Item ({{ $total }})</a>
        </li>

        @if(session()->has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ session('user')['name'] }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
