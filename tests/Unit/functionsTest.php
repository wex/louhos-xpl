<?php

use function Louhos\Xpl\yoink;

test('yoink works', function () {
    $object = new class
    {
        private string $foo = 'bar'; // @phpstan-ignore property.onlyWritten
    };

    expect(yoink($object, 'foo'))->toBe('bar');
});
