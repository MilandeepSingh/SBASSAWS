@extends('layout.master')
@section('content')

<div class="custom-project">
<!--
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
 -->

<div class="col-sm-11">
<div class="trending-wrapper" style="margin-bottom:{{max(170*sizeof($projects), 200)}}px" align=center>
        @if(sizeof($projects)>0)
        <h4 style="text-align:center; border: 4px outset green; width:30%; margin-bottom:50px;">Your Favorite Projects</h4>
        @foreach($projects as $item)
            <div class="row favourite-list-divider">
                <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
            <img class="trending-image img-thumbnail img-fluid" src = "{{$item->gallery}}">
                
            </a>
        </div>
        <div class="col-sm-6">
                <div class="">
                    <h2>{{$item->name}}</h4>
                    <h5>{{$item->description}}</h5>
                </div>
        </div>
        <div class="col-sm-2">
            <a href="/removefavourite/{{$item->favourite_id}}" class="btn btn-warning">Remove from favourites</a>
        </div>
            </div>
        @endforeach
        @else
        <h4 style="text-align:center;">No project added to favourites</h4>
        @endif
    </div>
</div>
</div>
@endsection