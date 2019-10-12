@extends('master')
@section('title','Signup')
@section('content')


    <div class="limiter">
        <div class="container-login100 gradient-login">
            <div class="wrap-regi100 p-l-50 p-r-50 p-t-77 p-b-30" style="margin-top: 150px">
                <form class="login100-form validate-form" method="post" action="{{route('processSignup')}}">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-55">
						Registration
					</span>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input class="input100-regi" type="text" name="firstname" value="{{old('firstname')}}">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input class="input100-regi" type="text" name="lastname" value="{{old('lastname')}}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Birthday</label>
                                <input type="date"   class="input100-regi" name="birthday" value="{{old('birthday')}}">
                            </div>
                            <div class="col-md-6">
                                <label></label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">
                                        <input type="radio" checked="checked" name="gender" value="male"> Male
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">
                                        <input type="radio" name="gender" value="femlae"> Female
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
{{--                            <div class="col-md-6">--}}
{{--                                <label>Age</label>--}}
{{--                                <input class="input100-regi" type="text" name="email" >--}}
{{--                            </div>--}}
                            <div class="col-md-6">
                                <label>Phone No</label>
                                <input class="input100-regi" type="text" name="phone" value="{{old('phone')}}">
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                               <div class="form-group">
                                   <label for="sel1">Email</label>
                                   <input class="input100-regi" type="text" name="email" value="{{old('email')}}">
                               </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="sel1">Password</label>
                                    <input class="input100-regi" type="password" name="pass">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-login100-form-btn p-t-25" style="margin-bottom: 80px">
                                    <button class="login100-form-btn" >
                                        Register
                                    </button>
                                    <small>*By registering you will be recorded in to our system.</small>
                                    @if($errors->any())
                                        <div class="alert alert-danger" style="width: 100%;">
                                            <ul>

                                                @foreach($errors->all() as $error)
                                                    <li>*{{$error}}<br></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@stop