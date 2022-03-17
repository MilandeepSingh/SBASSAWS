@extends('layout.master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <form action="/login" method="POST">
            <div class="form-group">
                
                
                <label for="Name">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                @if ($errors->first('name'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('name') as $message) 
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form-group">
                @csrf

                <label for="EmailAddress">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @if ($errors->first('email'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('email') as $message) 
                                <li>{{ $message }}</li>
                            
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="MobileNumber">Mobile No.</label>
                <input type="tel" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                @if ($errors->first('mobile'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('mobile') as $message) 
                                <li>{{ $message }}</li>
                            
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="VillageName">Village</label>
                <input type="text" name="village" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                @if ($errors->first('village'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('village') as $message) 
                                <li>{{ $message }}</li>
                            
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>


            <div class="form-group">
                <label for="NewPassword">New Password</label>
                <input type="Enter a password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @if ($errors->first('password1'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('password1') as $message) 
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="Re-enter your password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password"><br/>
                @if ($errors->first('password'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('password') as $message) 
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection