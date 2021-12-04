<?php

namespace App\Http\Responses;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;
use Symfony\Component\HttpFoundation\Response;

class LoginResponse implements ContractsLoginResponse
{

    /**
     * Create an HTTP response that represents the object.
     *
     * @param Request $request
     * @return Response
     */
    public function toResponse($request): Response
    {
        if (auth()->user() && auth()->user()->isAdmin()) {
            return redirect()->route('admin.index');
        }
        return redirect()->intended(config('fortify.home'));
    }
}
