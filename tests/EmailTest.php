<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $email = new Email('user@example.com');
        $this->assertInstanceOf(Email::class, $email);
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);
        $email = new Email('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $email = new Email('user@example.com');
        $this->assertEquals('user@example.com', $email->getEmail());
    }
}
