@extends('layout.master')
@section('content')

<style>
    th, td{
        padding: 10px;
        vertical-align: top;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="img-thumbnail" style="text-align:center; margin-top:16%;">
                <img class = "detail-img" src="{{$project['gallery']}}" alt="">
            </div>
        </div>

        <div class="col" style="margin-top:50px; min-width:300px;">
            <a href="/">Go Back</a>
            <table>
                <tr>
                    <th>Name:</th>
                    <td>{{$project['name']}}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{$project['status']}}</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>{{$project['description']}}</td>
                </tr>
            </table>
            <br><br>
            <form action="/add_to_favourites" method="POST">
                @csrf
                <input type="hidden" name="project_id" value={{$project['id']}}>
            @if ($isthere==0)
            <button class='btn btn-primary'>Add to favourites</button>
            @else
            <button class='btn btn-primary' disabled>Already a favourite</button>
            @endif
            </form>

            <!-- <button style="margin-left: 50px;" class='btn btn-success'>Provide suggestions/feedback</button> -->
            <br><br>
        </div>
    </div>
</div>

@endsection