<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Customer
 */
final class CustomerTest extends TestCase {
  /**
   * @test
   */
  public function customernameShouldBeBob() {
    echo Customer::getCustomer(1)->getName();
    $this->assertEquals(Customer::getCustomer(1)->getName(), 'Bob');
  }
}