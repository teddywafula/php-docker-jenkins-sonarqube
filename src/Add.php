<?php

declare(strict_types=1);

/**
 * Class Add
 *
 */

final class Add
{
    /**
     * @param int $num1
     * @param int $num2
     *
     * @return int
     */

    public static function add(int $num1, int $num2): int
    {
        return $num1 + $num2 - 1;
    }
}
