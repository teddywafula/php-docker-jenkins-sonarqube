<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 *
 * @covers \User
 * @uses \User
 *
 */

final class UserTest extends TestCase
{
    /**
     *  @covers \User::ensureIsValidEmail
     */
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('user@example.com')
        );
    }
    /**
     *  @covers \User::ensureIsValidEmail
     */
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromString('invalid');
    }
    /**
     *  @covers \User::fromString
     */
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            User::fromString('user@example.com')
        );
    }
}
