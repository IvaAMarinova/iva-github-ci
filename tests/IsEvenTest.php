<?php

use Ivamarinova\IvaGithubCi\IsEven;

it('returns true for even numbers', function () {
    expect(IsEven::check(4))->toBeTrue();
});

it('returns false for odd numbers', function () {
    expect(IsEven::check(5))->toBeFalse();
});

it('returns special message for zero', function () {
    expect(IsEven::check(0))->toBe('zero is neither even nor odd');
});
