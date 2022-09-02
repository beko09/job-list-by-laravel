<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
     'email' => 'required|email',
     'password' => 'required|confirmed|min:6',
     ],[
     'username.required' => 'الاسم  مطلوب',
     'email.required' => 'الايميل  مطلوب',
     'email.email' => 'ايميل غير صحيح',
     'password.required' => 'كلمة السر  مطلوبة',
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
        //  $fieldType = filter_var($request->login_id,FILTER_VALIDATE_EMAIL)?'email':'username';
        //  if($fieldType== 'email'){
        //  $request->validate(
        //     [
        //  'login_id' => 'required|email|exists:users',
        //  'password' => 'required|min:5',
        //  ]
        //  ,[
        //  'login_id.required' => 'الايميل / اسم المستخدم مطلوبين ',
        //  'login_id.email' => 'الايميل غير صحيح',
        //  'login_id.exists' => 'الايميل غير مسجل ',
        //  'password.required' => 'كلمة السر  مطلوبة',
        //  ]
        // );
        //  }else {
        //  $request->validate(
        //     [
        //  'login_id' => 'required|exists:users|username',
        //  'password' => 'required|min:5',
        //  ]
        //  ,[
        //  'login_id.required' => 'الايميل / اسم المستخدم مطلوبين ',
        //  'login_id.exists' => 'اسم المستخدم غير مسجل ',
        //  'password.required' => 'كلمة السر  مطلوبة',
        //  ]
        // );
        //  }

//          $formFields = array($fieldType=>$request->login_id, 'password'=>$request->password);
//  if(auth()->attempt($formFields)) {
//  $request->session()->regenerate();

//  return redirect('/')->with('message', 'تم تسجيل الدخول');
//  }

//  return redirect()->route('login')->with('message',' اسم المستخدم او كلمة السر خطأ ');
//  }


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