@if(!isset($name))
@extends('layout.master')
@section('content')
@endif

@if(isset($name))
<h2>Hello {{$name}}, thank you for donating Rs.{{$amount}}. It encourages us to do even better...</h2>
<h2>Your Donations history: </h2>
@endif
@if(Session::has('justDonated'))
<script src="{{ asset('assets/js/serviceWorker.min.js') }}"></script>
<script src="{{ asset('assets/js/push.min.js') }}"></script>
<script>
Push.create("Thanks {{Session::get('user')['name']}},", {
    body: "We are really grateful...",
    icon: 'https://scontent.fixc9-1.fna.fbcdn.net/v/t1.6435-9/81222014_1426815144146004_4692662086285656064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=aBqgOr0Hj4oAX9HO_7u&_nc_ht=scontent.fixc9-1.fna&oh=00_AT8EsC-CzlX_aVH3eydYKmD-733tkkKGSzF_kJzk-m3NOg&oe=626DF6A9',
    timeout: 4000,
    link: 'http://127.0.0.1:8001/donationslist',
    timeout: 15000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
</script>
@php
Session::forget('justDonated');
@endphp
@endif

<div>
    <div class="col-sm-10 offset-sm-1">
    @if($total>0)
    <h2 style="{{isset($name)?'':'text-align: center;'}} margin-top:30px; margin-bottom: 30px;">Hurray, you have donated Rs.{{$total}} upto now...</h2>
    
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
      <td>{{$row->suggestions??'-'}}</td>
      @php ($i+=1)
    </tr>
   @endforeach

  </tbody>
</table>
@else
    <h2 style="text-align: center; margin-top:30px; margin-bottom: 30px;">You have not made any donation till now. Go to donate menu in order to donate...</h2>
    @endif
    </div>
</div>

@if(!isset($name))
@endsection
@endif