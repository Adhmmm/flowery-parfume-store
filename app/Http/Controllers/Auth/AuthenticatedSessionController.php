<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view admin.
     */
    public function showAdminLoginForm()
    {
        return view('auth.login-admin');
    }

    /**
     * Display the login view customer.
     */
    public function showCustomerLoginForm()
    {
        return view('auth.login-customer');
    }
    /**
     * Handle an incoming authentication request.
     */
    public function loginByRole(Request $request, string $role)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array_merge($credentials, ['role' => $role]))) {
            $request = session()->regenerate();

            return $role === 'admin'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('customer.home');
        }
        return back()->withErrors([
            'email' => 'Login gagal',
            'cek kembali email/password'
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
