<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) { // compara no bd as credenciais
            $request->session()->regenerate(); //pegar os dados da aurtenticação e armazenar em sessão
            $user = Auth::user(); // pega o usuário autenticado
            if ($user->role == 'ADM') { // verifica se o usuário é admin
                return redirect()->intended('/home-adm');
            } else {
                return redirect()->intended('/home-cli');
            }
            return redirect()->intended('/produtos');
        }
        return back()->withErrors([
            'login' => 'Credenciais inválidas!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
