<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create (){
        return view('pages.register');
    }

     // Create New User
     public function store(Request $request) {
     $formFields = $request->validate([
     'username' => 'required',
     'email' => 'required|email|exists:users,email',
     'password' => 'required|confirmed|min:6',
     ],[
     'username.required' => 'الاسم  مطلوب',
     'email.exists' => 'الايميل مسجل مسبقا ',
     'email.required' => 'الايميل  مطلوب',
     'email.email' => 'ايميل غير صحيح',
     'password.required' => 'كلمة السر  مطلوبة',
     'password.min' => ' يجب ان تكون كلمة السر اكثر من 6 احرف',y
     ]

    );

     // Hash Password
     $formFields['password'] = bcrypt($formFields['password']);

     // Create User
     $user = User::create($formFields);

     // Login
     auth()->login($user);

     return redirect('/')->with('message', 'تم تسجيل المستخدم وتسجيل دخول له');
     }

     // Logout User
     public function logout(Request $request) {
     auth()->logout();

     $request->session()->invalidate();
     $request->session()->regenerateToken();

     return redirect('/')->with('message', 'تم تسجيل الخروج');

     }

     // Show Login Form
     public function login() {
     return view('pages.login');
     }

     // Authenticate User to login
    //  public $login_id, $password;
     public function authenticate(Request $request) {
     $formFields = $request->validate([
     'email' => ['required', 'email'],
     'password' => 'required'
     ],[
     'email.required' => ' الايميل مطلوب',
     'email.email' => 'ايميل غير صحيح',
     'password.required' => ' كلمة السر مطلوب',
     ]);

     if(auth()->attempt($formFields)) {
     $request->session()->regenerate();

     return redirect('/')->with('message', 'تم تسجيل الدخول');
     }

    //  return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
     return redirect()->route('login')->with('message',' الايميل او كلمة السر خطأ ');
     }
}