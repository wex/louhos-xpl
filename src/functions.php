<?php

namespace Louhos\Xpl;

/**
 * Yoink a private or protected property from an object.
 */
function yoink(object $instance, string $property): mixed
{
    return (fn () => $this->$property)->call($instance);
}
