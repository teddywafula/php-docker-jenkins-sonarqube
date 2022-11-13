<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers \Add
 * @uses \Add
 */
final class AddTest extends TestCase
{
    /**
     * @covers \Add::add
     * @return void
     */
    public function testAdd(): void
    {
        self::assertSame(2, Add::add(1, 1));
    }
}
