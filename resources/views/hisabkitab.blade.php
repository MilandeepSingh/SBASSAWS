@extends('layout.master')
@section('content')




<h1 style="text-align:center; margin:15px;">We seek transparency</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/253558057_1985695181591328_1093744351044618593_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=7FMl1JFAHqkAX8Sxm39&_nc_ht=scontent.faip2-1.fna&oh=00_AT85YigmmLhHM82Xbgxu6Sf1zeD_p_E9FDKyfURKwYn52A&oe=625150E7" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/241552865_1937168993110614_783500044017283540_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=ohpkt5UBsEoAX91OO6_&_nc_ht=scontent.faip2-1.fna&oh=00_AT97s7T_Bi6AM8Ephb_AhLh_DqjxxiAOqB1fG1iqe2hWjw&oe=6250F303" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/241216630_1937168949777285_7139952716537318420_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=Y9UIIh5fEeAAX_4vmj2&_nc_ht=scontent.faip2-1.fna&oh=00_AT-G6dklQNMeT87ZqTJXwb6PtaCZF2LM5Zzn1uOp0qvpIw&oe=6250C850" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection