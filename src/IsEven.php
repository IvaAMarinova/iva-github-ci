<?php

namespace Ivamarinova\IvaGithubCi;

class IsEven
{
    public static function check(int $number): string|bool
    {
        if ($number === 0) {
            return 'zero is neither even nor odd';
        }

        return $number % 2 === 0;
    }
}
