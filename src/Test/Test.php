<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/11
 * Time: 23:14
 */

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
