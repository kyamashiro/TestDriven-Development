<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/11
 * Time: 23:14
 */

namespace Money;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}
