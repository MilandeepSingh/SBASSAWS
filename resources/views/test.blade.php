@extends('layout.master')
@section('content')

<style>  
  body {
  font-family: "Karla", sans-serif;
  background-color: #fff;
  min-height: 100vh; }

.brand-wrapper {
  padding-top: 7px;
  padding-bottom: 8px; }
  .brand-wrapper .logo {
    height: 25px; }

.login-section-wrapper {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  padding: 15px 100px;
  background-color: #fff; }
  @media (max-width: 991px) {
    .login-section-wrapper {
      padding-left: 50px;
      padding-right: 50px; } }
  @media (max-width: 575px) {
    .login-section-wrapper {
      padding-bottom: 20px;
      min-height: 100vh; } }

.login-wrapper {
  width: 300px;
  max-width: 100%;
  padding-bottom: 24px; }
  @media (max-width: 575px) {
    .login-wrapper {
      width: 100%; } }
  .login-wrapper label {
    font-size: 14px;
    font-weight: bold;
    color: #b0adad; }
  .login-wrapper .form-control {
    border: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    padding: 9px 5px;
    min-height: 40px;
    font-size: 18px;
    font-weight: normal; }
    .login-wrapper .form-control::-webkit-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-moz-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control:-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::placeholder {
      color: #b0adad; }
  .login-wrapper .login-btn {
    padding: 13px 20px;
    background-color: #6b935a;
    border-radius: 0;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 14px; }
    .login-wrapper .login-btn:hover {
      border: 1px solid #6b935a;
      background-color: #fff;
      color: #6b935a; }
  .login-wrapper a.forgot-password-link {
    color: #080808;
    font-size: 14px;
    text-decoration: underline;
    display: inline-block;
    margin-bottom: 54px; }
    @media (max-width: 575px) {
      .login-wrapper a.forgot-password-link {
        margin-bottom: 16px; } }
  .login-wrapper-footer-text {
    font-size: 16px;
    color: #000;
    margin-bottom: 0; }

.login-title {
  font-size: 30px;
  color: #000;
  font-weight: bold;
  margin-bottom: 25px; 
}

.login-img {
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: left;
     object-position: left; }

.footer-link {
  position: absolute;
  bottom: 1rem;
  text-align: center;
  width: 100%; }

</style>

<main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
              <p style="font-weight: bold; font-size: 23px;">
              <img  src="https://scontent.fixc9-1.fna.fbcdn.net/v/t1.6435-9/81222014_1426815144146004_4692662086285656064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=aBqgOr0Hj4oAX9HO_7u&_nc_ht=scontent.fixc9-1.fna&oh=00_AT8EsC-CzlX_aVH3eydYKmD-733tkkKGSzF_kJzk-m3NOg&oe=626DF6A9" alt="logo" class="logo">
              SBASSAWS</p>
          </div>
          <div class="login-wrapper my-auto" style="margin-top:0px !important;">
            <h1 class="login-title">Register</h1>

            <form action="/signup" method="POST">
            <div class="form-group">
                <label for="Name">Full Name</label>
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

                <label for="EmailAddress">Email address</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
                <label for="VillageName">Village</label>
                <input type="text" name="village" value="{{old('village')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
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
                <input type="Enter a password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="Re-enter your password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"><br/>
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
            <p class="login-wrapper-footer-text">Already have an account? <a href="login" class="text-reset">Login here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block" >
          <img src="https://scontent.fixc9-1.fna.fbcdn.net/v/t1.6435-9/188581991_1857963807697800_7541227021871327437_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=CKfpf_HHV0MAX-PElzY&tn=ytc57W7wUDe0u79m&_nc_ht=scontent.fixc9-1.fna&oh=00_AT9IzR1VsxCbZv7gPiZ0u3k6rtjGcHuep4yGMQWcmg5eCA&oe=626BBAE1" alt="login image" class="login-img">
          
        </div>
      </div>
    </div>
  </main>
@endsection