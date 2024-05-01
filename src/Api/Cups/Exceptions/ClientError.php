<?php

declare(strict_types=1);

namespace Rawilk\Printing\Api\Cups\Exceptions;

use Exception;

class ClientError extends Exception
{
    public static function invalid(string $message): self
    {
        return new static($message);
    }
}
