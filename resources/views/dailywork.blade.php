@extends('layout.master')
@section('content')

<h1 style="text-align:center; margin:15px;">Announcements</h1>

<div class="list-group">

<style>
  .list-group-item.active{
    background-color: #5cb85c !important;
  }
</style>
  
@foreach($announcements as $a)
  <a href="#" class="list-group-item list-group-item-action {{$a['id']==$announcements[0]['id']?'active':''}} flex-column align-items-start" data-toggle="list">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$a['heading']}}</h5>
      <small>{{$a['date']}}</small>
    </div>
    <p class="mb-1">{{$a['details']}}</p>
  </a>
@endforeach
</div>

<h1 style="text-align:center; margin:15px;">Recent daywise work</h1>

<div class="list-group">

@foreach($dailywork as $a)
  <a href="#" class="list-group-item list-group-item-action {{$a['id']==$dailywork[0]['id']?'active':''}} flex-column align-items-start" data-toggle="list">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$a['heading']}}</h5>
      <small>{{$a['date']}}</small>
    </div>
    <p class="mb-1">{{$a['details']}}</p>
    <small>{{$a['members']}} members were present.</small>
  </a>
@endforeach
  
</div>

@endsection