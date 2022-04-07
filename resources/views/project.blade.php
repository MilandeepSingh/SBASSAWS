@extends('layout.master')
@section('content')

<div class="custom-project">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($projects as $item)
            <li data-slide-to="{{$item['id']-1}}" class="{{$item['id']==$projects[0]['id']?'active':''}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($projects as $item)
            <div class="carousel-item {{$item['id']==$projects[0]['id']?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="d-block w-100 slider-img" style="background-image: linear-gradient(to right, #333 0, #0000 3%, #0000 97%, #333 100%), url({{$item['gallery']}}); width:100%; height:100%; background-size: cover;">
                <div class="carousel-caption d-none d-md-block slider-text">
                    
                    <h3>{{$item["name"]}}</h3>
                    <p>{{$item["description"]}}</p>
                </div>
            </a>
            </div>
        @endforeach
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




<div class="container" align='center' style="width:100%;">
<h3 style="border: 4px outset green; width:300px; text-align:center; margin-top:15px; margin-bottom: 15px;">Recent Projects</h3>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >
   @foreach($projects as $item)
  <div class="col mb-4">
            <div class="trending-item">
            <a href="detail/{{$item['id']}}">
            <div class="card trending-image">
            <img class="card-img-top trending-image" style="width:90%; margin-left:5%; height: 80px; margin-top:10px;" src="{{$item['gallery']}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text" style="text-align:center; color:#000;"><b>{{$item['name']}}</b></p>
            </div>
            </div>
            </a>
            </div>
        
  </div>
  @endforeach
 
</div>
</div>
@endsection