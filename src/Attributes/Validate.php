<?php declare(strict_types=1);

namespace Floquent\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Validate
{
    public string $name = 'validate';
}