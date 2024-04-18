<?php

namespace App\Http\Middleware;

use App\Models\User; // Corrected namespace and use statement

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated and has the correct role
        if (Auth::check() && $this->userHasRole(Auth::id(), $role)) {
            return $next($request); // Allow access to the requested route
        }

        abort(403, 'Unauthorized action.'); // If not authenticated or not the correct role, abort with 403 Forbidden
    }

    // Function to check if the user has the specified role
    private function userHasRole($id, $role)
    {
        // Assuming you have a 'Users' table with a 'user_id' and 'role' column
        $userRole = User::where('id', $id)->latest()->value('role');

        return $userRole === $role;
    }
}
