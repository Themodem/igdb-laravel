<?php

declare(strict_types=1);

namespace MarcReichel\IGDBLaravel\Exceptions;

use Exception;

class MissingEndpointException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Please provide an endpoint.';
}
