<?php

declare(strict_types=1);

namespace Rawilk\Printing\Api\Cups\Types\Primitive;

use Rawilk\Printing\Api\Cups\Enums\TypeTag;
use Rawilk\Printing\Api\Cups\Type;

class Unknown extends Type
{
    protected int $tag = TypeTag::Unknown->value;

    public static function fromBinary(string $binary, int &$offset): array
    {
        $attrName = self::nameFromBinary($binary, $offset);
        $offset += 2; // Value length

        return [$attrName, new static(null)];
    }

    public function encode(): string
    {
        return pack('n', 0);
    }
}
