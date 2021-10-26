<?php

namespace App\Exception\Client;

use App\Exception\CoreException;
use Throwable;

class ValidationException extends CoreException implements ClientExceptionInterface
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
