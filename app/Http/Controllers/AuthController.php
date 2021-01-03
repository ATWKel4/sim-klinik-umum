<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
      if (Auth::guard('admin')->check()) {
        return redirect('/admin/dashboard');
      } else if (Auth::guard('user')->check()) {
        return redirect('/dashboard');
      }
      return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required'
      ]);

      if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect()->intended('/admin/dashboard');
      } else if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect()->intended('/');
      }
    }
  
    public function userLogin(Request $request){
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required'
      ]);

      if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect()->intended('/beranda');
      }else{
        return redirect()->intended('/masuk');
      }
    }

    public function logoutAll()
    {
      if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
      } else if (Auth::guard('user')->check()) {
        Auth::guard('user')->logout();
        return redirect('/masuk');
      }

      return redirect('/');
    }
}
