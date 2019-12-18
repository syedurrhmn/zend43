<?php

namespace App\Http\Controllers\Hrms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class loginController extends Controller
{
    use AuthenticatesUsers;
 
    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/hrms';
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:hrms')->except('logout');
    }
 
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('hrms.auth.login');
    }

    /**
    * @param Request $request
    * @return \Illuminate\Http\RedirectResponse
    * @throws \Illuminate\Validation\ValidationException
    */
    
    public function login(Request $request){
        $this->validate($request,[
            'email'   => 'required|email',
            'password' => 'required|min:6'
            ]);
            
            if (Auth::guard('hrms')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->get('remember'))){
                return redirect()->intended(route('hrms.dashboard'));
            }
            
            return back()->withInput($request->only('email', 'remember'));
    }
    
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    
    public function logout(Request $request){
        Auth::guard('hrms')->logout();
        $request->session()->invalidate();
        return redirect()->route('hrms.login');
    }
}