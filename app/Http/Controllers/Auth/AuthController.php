<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    public function login_admin()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (in_array($user->role_id, [1, 2, 3])) {
                return redirect('admin/dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        }

        return view('admin.auth.login');
    }
    public function Auth_login_admin(Request $request)
    {
        $remember = !empty($request->remember);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $user = Auth::user();
            if (in_array($user->role_id, [1, 2, 3])) {
                return redirect('admin/dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct email and password');
        }
    }
    public function logout_admin()
    {
        Auth::logout();
        return redirect('admin/login');
    }

}
