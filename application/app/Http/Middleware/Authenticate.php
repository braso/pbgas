<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    
     protected function unauthenticated($request, array $guards)
     {
         abort(response()->json(['message' => 'Não autenticado'], 401));
     }


     public function handle(Request $request, Closure $next): Response
     {
        // Verifica se o guard 'sanctum' está sendo usado e se o usuário está autenticado
        if (!Auth::guard('sanctum')->check()) {
            // Caso não esteja autenticado, retorna um erro 401 (não autorizado)
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        return $next($request);
    }
}
