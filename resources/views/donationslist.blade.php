@extends('layout.master')
@section('content')


<div class="custom-project">
    <div class="col-sm-10 offset-sm-1">
    <h2 style="text-align: center; margin-top:30px; margin-bottom: 30px;">Hurray, you have donated Rs.{{$total}} upto now...</h2>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Suggestions</th>
    </tr>
  </thead>
  <tbody>
    @php ($i = 1)
    @foreach($info as $row)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$row->amount}}</td>
      <td>{{$row->date}}</td>
      <td>{{$row->suggestions}}</td>
      @php ($i+=1)
    </tr>
   @endforeach

  </tbody>
</table>
    </div>
</div>
@endsection