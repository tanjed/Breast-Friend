@extends('master')
@section('title','Login')
@section('content')
<div class="limiter">
    <div class="container-login100 gradient-login">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30" style="margin-top: 150px">

            <form class="login100-form validate-form" method="post" action="{{route('processLogin')}}">
                {{csrf_field()}}
					<span class="login100-form-title p-b-55">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-16">
                    <input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
                </div>

                <a href="#" class="btn-face m-b-10">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-10">
                    <img src="login/images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </a>
                @if($errors->any())
                <div class="alert alert-danger" style="width: 100%;">
                    <ul>

                            @foreach($errors->all() as $error)
                                <li>*{{$error}}<br></li>
                            @endforeach

                    </ul>
                </div>
                @endif

                <div class="text-center w-full p-t-115">
						<span class="txt1">
							Not a member?
						</span>
                    <a class="txt1 bo1 hov1" href="{{route('signUp')}}">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop