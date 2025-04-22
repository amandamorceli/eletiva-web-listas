<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleAdmMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // o Closure $next é um callback, uma função que será chamada depois que o middleware fizer o que ele precisa fazer.
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role !== "ADM") {
            return redirect("/login")->withErrors(['acesso' => "Acesso negado ao nível de usuário!"]);
        }
        return $next($request); // o $next($request) é quem passa a requisição adiante (pra próxima etapa da aplicação, que pode ser outro middleware ou o controller).
    }
}
