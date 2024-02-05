<?php

// app/Http/Middleware/RedirectIfNotAuthenticated.php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
