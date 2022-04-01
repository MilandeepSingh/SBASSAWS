<?php
use App\Http\Controllers\ProjectController;
$total=0;
if(Session::has('user')){
  $total = ProjectController::favouriteItem();
}
use App\Http\Controllers\DonateController;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">SBASSAWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Daily Work</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Hisab Kitab</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/donate">Donate</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us</a>
      </li>
     
    </ul>
    <ul class="navbar-nav justify-content-end">
    <li class="nav-item active">
        <a class="nav-link" href="/favouriteslist">Favourites({{$total}})</a>
      </li>

      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/donationslist">My Donations</a>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      @else
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @endif
    </ul>
  </div>
</nav>