@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class = "detail-img" src="{{$project['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$project['name']}}</h2>
            <h3>Status: {{$project['status']}}</h3>
            <h4>Details: {{$project['description']}}</h4>
            <br><br>
            <form action="/add_to_favourites" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$project['id']}}>
            <button class='btn btn-primary'>Add to favourites</button>
            </form>
            <br><br>
            <button class='btn btn-success'>Provide suggestions/feedback</button>
            <br><br>
        </div>
    </div>
</div>

@endsection