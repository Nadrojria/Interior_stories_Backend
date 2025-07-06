<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// Middleware pour vérifier le rôle de l'utilisateur
// Ce middleware est utilisé pour restreindre l'accès à certaines routes
// en fonction du rôle de l'utilisateur authentifié.
// Il autorise uniquement les utilisateurs ayant le rôle 'admin' ou 'customer'.
// Si l'utilisateur n'est pas autorisé, une erreur 403 est renvoyée.
class checkRole
{
    // La méthode handle est appelée à chaque requête passant par ce middleware
    public function handle(Request $request, Closure $next): Response
    {

        $roles = ['admin', 'customer'];
        $user = $request->user();

        // Vérifie si l'utilisateur existe et possède un rôle autorisé
        if (!$user || !in_array($user->role, $roles)) {
            abort(403, 'Unauthorized');
        }

        // Si l'utilisateur est autorisé, la requête continue
        return $next($request);
    }
}
