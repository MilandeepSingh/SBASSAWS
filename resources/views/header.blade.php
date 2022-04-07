<?php
use App\Http\Controllers\ProjectController;
$total=0;
if(Session::has('user')){
  $total = ProjectController::favouriteItem();
}
use App\Http\Controllers\DonateController;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: #81a488;">
  <a class="navbar-brand" href="/"><img  src="https://scontent.fixc9-1.fna.fbcdn.net/v/t1.6435-9/81222014_1426815144146004_4692662086285656064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=aBqgOr0Hj4oAX9HO_7u&_nc_ht=scontent.fixc9-1.fna&oh=00_AT8EsC-CzlX_aVH3eydYKmD-733tkkKGSzF_kJzk-m3NOg&oe=626DF6A9" alt="logo" style="height:35px; margin:0;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/gallery">Gallery</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/dailywork">Daily Work</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/hisabkitab">Hisab Kitab</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/donate">Donate</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/aboutus">About Us</a>
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
      <li class="nav-item active">
      <a class="nav-link" href="/registration">Register</a>
      </li>
      @endif
    </ul>
  </div>
</nav>