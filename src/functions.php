<?php

namespace Louhos\Xpl;

/**
 * Yoink a private or protected property from an object.
 */
function yoink(object $instance, string $property): mixed
{
    return (fn () => $this->$property)->call($instance);
}

/**
 * Call a private or protected method on an object.
 *
 * @param  mixed  ...$args
 */
function call(object $instance, string $method, ...$args): mixed
{
    return (fn () => $this->$method(...$args))->call($instance);
}
