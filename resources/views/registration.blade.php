@extends('layout.master')
@section('content')

<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">

    <style>
        body {
  font-family: "Karla", sans-serif;
  background-color: #6b935a;
  min-height: 100vh; }

.brand-wrapper {
  margin-bottom: 19px; }
  .brand-wrapper .logo {
    height: 37px; }

.login-card {
  border: 0;
  border-radius: 27.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden; }
  .login-card-img {
    border-radius: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover; }
  .login-card .card-body {
    padding: 85px 60px 60px; }
    @media (max-width: 422px) {
      .login-card .card-body {
        padding: 35px 24px; } }
  .login-card-description {
    font-size: 25px;
    color: #000;
    font-weight: normal;
    margin-bottom: 23px; }
  .login-card form {
    max-width: 326px; }
  .login-card .form-control {
    border: 1px solid #d5dae2;
    padding: 15px 25px;
    margin-bottom: 20px;
    min-height: 45px;
    font-size: 13px;
    line-height: 15;
    font-weight: normal; }
    .login-card .form-control::-webkit-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-moz-placeholder {
      color: #919aa3; }
    .login-card .form-control:-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::placeholder {
      color: #919aa3; }
  .login-card .login-btn {
    padding: 13px 20px 12px;
    background-color: #000;
    border-radius: 4px;
    font-size: 17px;
    font-weight: bold;
    line-height: 20px;
    color: #fff;
    margin-bottom: 24px; }
    .login-card .login-btn:hover {
      border: 1px solid #000;
      background-color: transparent;
      color: #000; }
  .login-card .forgot-password-link {
    font-size: 14px;
    color: #919aa3;
    margin-bottom: 12px; }
  .login-card-footer-text {
    font-size: 16px;
    color: #0d2366;
    margin-bottom: 60px; }
    @media (max-width: 767px) {
      .login-card-footer-text {
        margin-bottom: 24px; } }
  .login-card-footer-nav a {
    font-size: 14px;
    color: #919aa3; }

.footer-link {
  position: absolute;
  bottom: 1rem;
  text-align: center;
  width: 100%; }

    </style>

</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-7">
            
            <div class="card-body">
            <div class="brand-wrapper">
                <p style="font-weight: bold; font-size: 23px;">
                <img  src="https://scontent.fixc9-1.fna.fbcdn.net/v/t1.6435-9/81222014_1426815144146004_4692662086285656064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=aBqgOr0Hj4oAX9HO_7u&_nc_ht=scontent.fixc9-1.fna&oh=00_AT8EsC-CzlX_aVH3eydYKmD-733tkkKGSzF_kJzk-m3NOg&oe=626DF6A9" alt="logo" class="logo">
                SBASSAWS</p>
              </div>

              <p class="login-card-description">Register yourself.</p>
              <form action="/signup" method="POST">
            <div class="form-group">
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
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

                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email ID">
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
                <input type="tel" name="mobile" value="{{old('mobile')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
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
                <input type="text" name="village" value="{{old('village')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your village or brief address">
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
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password">
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

            <div class="form-group">
                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"><br/>
                @if ($errors->first('confirm_password'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('confirm_password') as $message) 
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

                @if (isset($ohh))
                    <div class="alert alert-danger">
                        <ul>
                            <li>This email is already registered.</li>
                        </ul>
                    </div>
                @endif

            <button type="submit" class="btn btn-block login-btn">Register</button>
            </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Already have an account? <a href="login" class="text-reset">Login here</a></p>
          
                
            </div>
          </div>
          <div class="col-md-5">
            <img src="https://scontent.faip2-1.fna.fbcdn.net/v/t1.6435-9/188581991_1857963807697800_7541227021871327437_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=8gbjSm7fjmgAX-KQcsY&tn=ytc57W7wUDe0u79m&_nc_ht=scontent.faip2-1.fna&oh=00_AT-WxuXjH9IZTuwVBhWhTGXSG8K6-uIxmaQsdzscXV-zhg&oe=626FAF61" alt="login" class="login-card-img">
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body></html>

@endsection





























