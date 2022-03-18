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
                <img class="d-block w-100 slider-img" style="background-image: radial-gradient(#0000 85%, #333), url({{$item['gallery']}})">
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


    <div class="trending-wrapper">
        <h3>Trending Projects</h3>
        @foreach($projects as $item)
            <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image w-75" src = "{{$item['gallery']}}">
                <div class="">
                    <h4>{{$item["name"]}}</h4>
                </div>
</a>
            </div>
        @endforeach
    </div>
    
    
</div>

@endsection