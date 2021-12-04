<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class UnauthorizedException extends HttpException
{
    public static function notLoggedIn(): self
    {
        return new static(403, 'User is not logged in', null, []);
    }
}
