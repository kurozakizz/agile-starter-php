<?php
 
class SimpleTest extends \PHPUnit_Framework_TestCase
{
     public function testSimple1()
     {
      $this->assertEquals(2, 1 + 2);
     }
     public function testSimple2()
     {
      $this->assertEquals(2, 1+1);
     }
}