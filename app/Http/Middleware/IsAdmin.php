<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthorizedException;
use Closure;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
{

    public function handle(Request $request, Closure $next, $guard = null)
    {
        $authGuard = Auth::guard($guard);
        if ($authGuard->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }

        /** @var User $authGuardUser */
        $authGuardUser  = $authGuard->user();
        if ($authGuardUser->can(UserPolicy::ADMIN, User::class)) {
            return $next($request);
        }

        throw UnauthorizedException::notLoggedIn();
    }

}
