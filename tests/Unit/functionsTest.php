<?php

use function Louhos\Xpl\boink;
use function Louhos\Xpl\call;
use function Louhos\Xpl\yoink;

test('yoink', function () {
    $object = new class
    {
        private string $foo = 'bar'; // @phpstan-ignore property.onlyWritten
    };

    expect(yoink($object, 'foo'))->toBe('bar');
});

test('boink', function () {
    $object = new class
    {
        private string $foo = 'bar'; // @phpstan-ignore property.onlyWritten
    };

    boink($object, 'foo', 'baz');

    expect(yoink($object, 'foo'))->toBe('baz');
});

test('call', function () {
    $object = new class
    {
        private function foo(string $bar): string // @phpstan-ignore method.unused
        {
            return $bar;
        }
    };

    expect(call($object, 'foo', 'baz'))->toBe('baz');
});
