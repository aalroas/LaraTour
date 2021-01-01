<?php



namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';


    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }


    protected function credentials(Request $request)
    {
        $admin = admin::where('email',$request->email)->first();
        if (count($admin)) {
            if ($admin->status == 0) { // to show message to admin if he is not active
                return ['email'=>'inactive','password'=>'You are not an active person, please contact Admin'];
            }else{
                return ['email'=>$request->email,'password'=>$request->password,'status'=>1];
            }
        }
        return $request->only($this->username(), 'password');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


    protected function guard()
    {
        return Auth::guard('admin');
    }



    public function logout(Request $request) {
            Auth::logout();
             $request->session()->flush();
            return redirect('/');

        }


}
