<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function showLogin(){
        return view('login_regi.login');
    }

    public function processLogin(Request $request){
        $validation = $this->validate($request,[
            'email' => 'required|email',
            'pass' => 'required|min:5'
        ]);
        if (auth()->attempt(['email' => $request->email, 'password' => $request->pass])){
           return redirect()->intended(route('home'));

        }
        return back()->withErrors(["msg" => "Invalid Email or Password"])->withInput($request->only('email'));
    }

    public  function  showRegi(){
        return view('login_regi.registration');
    }
    public function processRegi(Request $request){
        $request = $this->validate($request,[
            'firstname' => 'required|max:10',
            'lastname' => 'required|max:10',
            'birthday' => 'required|date',
            'phone' => 'required|max:15',
            'gender' => 'required',
            'email' => 'required|email',
            'pass' => 'required|min:5'
        ]);

       try{
           $user = User::create([
               'first_name' => $request['firstname'],
               'last_name' => $request['lastname'],
               'birthday' => $request['birthday'],
               'phoneno' => $request['phone'],
               'gender' => $request['gender'],
               'email' => $request['email'],
               'password' => bcrypt($request['pass']),
               'email_verification_token' => str_random(5).time(),
           ]);
           auth()->login($user);
           return redirect()->to(route('home'));
       }
       catch (Exception $e){
           return back()->withErrors(['msg' => 'Something went Wrong!']);
       }

    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
