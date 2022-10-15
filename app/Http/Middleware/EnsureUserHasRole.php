<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * regiter this in kernel
     * ->middlesware('key_use_to_map_it_in_kerner:[arrayParan],anyotherparm')
     */
    public function handle(Request $request, Closure $next, array $role, $anyotherparm = null)
    {
        //  $roleName  = $role['name'];
        $roleParam  = $role['params'];
        foreach ($roleParam as $roleTaken) {
            if ($roleTaken !== 1) {
                return false;
            }
        }



        return $next($request);
    }
}
