@extends('layout.master')
@section('content')

<div class="custom-project">

    <div class="col-sm-6 offset-sm-3">
        <h2 style="text-align: center; margin-top:30px; margin-bottom: 30px;">Donate for the good cause!!</h2>
    <form action="/donatefinal" method="POST">
        @csrf
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Amount(in INR)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="amount"  placeholder="Enter the donation amount.">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Suggestions</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="suggestions" placeholder="Please give your valuable suggestions here."></textarea>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Payment method</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="payment" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
 <div class="form-group row">
    <div class="col-sm-2 offset-sm-5">
      <button type="submit" class="btn btn-primary">Donate</button>
    </div>
  </div>
</form>
    </div>
</div>
@endsection