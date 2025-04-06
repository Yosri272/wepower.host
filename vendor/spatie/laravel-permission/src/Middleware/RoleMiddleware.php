<?php

namespace Spatie\Permission\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Spatie\Permission\Guard;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role, $guard = null)
    {
        $authGuard = Auth::guard($guard);

        $user = $authGuard->user();

        // For machine-to-machine Passport clients
        if (! $user && $request->bearerToken() && config('permission.use_passport_client_credentials')) {
            $user = Guard::getPassportClient($guard);
        }

        if (! $user) {
            throw UnauthorizedException::notLoggedIn();
        }

        if (! method_exists($user, 'hasAnyRole')) {
            throw UnauthorizedException::missingTraitHasRoles($user);
        }

<<<<<<< HEAD
        $roles = is_array($role)
            ? $role
            : explode('|', $role);
=======
        $roles = explode('|', self::parseRolesToString($role));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (! $user->hasAnyRole($roles)) {
            throw UnauthorizedException::forRoles($roles);
        }

        return $next($request);
    }

    /**
     * Specify the role and guard for the middleware.
     *
<<<<<<< HEAD
     * @param  array|string  $role
=======
     * @param  array|string|\BackedEnum  $role
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string|null  $guard
     * @return string
     */
    public static function using($role, $guard = null)
    {
<<<<<<< HEAD
        $roleString = is_string($role) ? $role : implode('|', $role);
=======
        $roleString = self::parseRolesToString($role);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $args = is_null($guard) ? $roleString : "$roleString,$guard";

        return static::class.':'.$args;
    }
<<<<<<< HEAD
=======

    /**
     * Convert array or string of roles to string representation.
     *
     * @return string
     */
    protected static function parseRolesToString(array|string|\BackedEnum $role)
    {
        // Convert Enum to its value if an Enum is passed
        if ($role instanceof \BackedEnum) {
            $role = $role->value;
        }

        if (is_array($role)) {
            $role = array_map(fn ($r) => $r instanceof \BackedEnum ? $r->value : $r, $role);

            return implode('|', $role);
        }

        return (string) $role;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
