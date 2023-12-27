@extends('layouts.app')

@section('content')
<style>
    body
{
  background-image: radial-gradient(rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0) 40vw), radial-gradient(rgba(0, 128, 0, 0.3), rgba(0, 128, 0, 0) 40vw), radial-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0) 40vw), radial-gradient(rgba(255, 255, 0, 0.3), rgba(255, 255, 0, 0) 40vw), radial-gradient(rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0) 40vw) !important;
    background-position: -40vw 14rem, 50% 10rem, 60vw 14rem, -10vw calc(14rem + 20vw), 30vw calc(14rem + 20vw);
    background-size: 80vw 80vw;
    background-repeat: no-repeat;
}
.login-div {
    background-color: white;
    box-shadow: 0 6px 16px 0 rgb(0 0 0 / 20%);
    padding: 18px !important;
    border-radius: 15px;
    border-left: 2px solid #ff5b52;
}

.login-btn {
    border: none !important;
    background: black !important;
    color: white !important;
    text-transform: uppercase !important;
    border-radius: 20px !important;
    margin-top: 20px !important;
    font-weight: 700 !important;
}
.for-create a {
    color: #57b846;
    text-transform: uppercase;
    font-weight: bold;
}

.login-box-msg {
    font-size: 24px;
  
}
.facebook
{
  background:#1877f2;
  color:white;
  height:35px;
  width:35px;
  display:inline-block;
  border-radius:50%;
  font-size:18px;
  line-height:35px;
  text-align:center;
  margin:0 5px;
}
.google
{
  background:#ED2939;
  color:white;
  height:35px;
  width:35px;
  display:inline-block;
  border-radius:50%;
  font-size:18px;
  line-height:35px;
  text-align:center;
  margin:0 5px;
}
.twiter
{
  background:#1DA1F2;
  color:white;
  height:35px;
  width:35px;
  display:inline-block;
  border-radius:50%;
  font-size:18px;
  line-height:35px;
  text-align:center;
  margin:0 5px;
}
</style>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row p-mb-5">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<style>
    @import url("https://fonts.cdnfonts.com/css/gilroy-bold");
    --body-font: "Gilroy-Bold", sans-serif;
    </style>
<div class="container-fluid" >

                <div class="row p-md-5">
                   
                   <div class="col-md-4 offset-md-4">
                       <div class="pl-md-5 pr-md-5 pb-md-3 pt-md-4 login-div">
                        <!--<h3 class="text-center text-underline"><b>Member</b> Sign In</h3>-->
                        <p class="login-box-msg font-weight-bold text-center">SIGN IN</p><br>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="input mb-3">
                              <input id="email" type="email" name="email" class="form-control" placeholder="Email" style="height: 41px !important;">

                            </div>
                            <div class="input mb-1">
                              <input type="password" class="form-control" name="password" placeholder="Password" style="height: 41px !important;" id="password">
                              <div class="input-append">
                                <div class="input-text">
                                 
                                </div>
                              </div>
                            </div>
                            
                            
                            <p class="text-right for-pass" style="font-size:12px"><a style="color:grey;" href="{{ route('password.request') }}">Forgot Password ?</a></p>
                          
                    
                           <div class="text-center mt-2 mb-3">
                            <center><button type="submit" name="submit_login" class="btn btn-block btn-primary login-btn mb-3">
                            {{ __('Login') }}</button></center>
                           </div>
                         
                           
                           
                           <hr>
                           
                            <p style="color:grey;text-align:center;" class="m-0 p-1">Don’t have an account?</p>
                            <p class="text-center for-create"><a href="signup.php">Sign up Now</a></p>
                          
                     
                           
      
                        </form>
                    
                </div>
                        
                   </div>
                  
                </div>
        </div>

  
</body>
</html>
<!-- partial -->
  
</body>
</html>

@endsection
