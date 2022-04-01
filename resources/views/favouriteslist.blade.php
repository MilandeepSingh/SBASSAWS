@extends('layout.master')
@section('content')

<div class="custom-project">
<!--
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
 -->

<div class="col-sm-10">
<div class="trending-wrapper">
        <h4>Result for Projects</h4>
        @foreach($projects as $item)
            <div class="row searched-item favourite-list-divider">
                <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src = "{{$item->gallery}}">
                
            </a>
        </div>
        <div class="col-sm-5">
                <div class="">
                    <h2>{{$item->name}}</h4>
                    <h5>{{$item->description}}</h5>
                </div>
        </div>
        <div class="col-sm-3">
            <a href="/removefavourite/{{$item->favourite_id}}" class="btn btn-warning">Remove from favourites</a>
        </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection