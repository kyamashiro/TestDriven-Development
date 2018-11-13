<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:04
 */

namespace Money;

class Franc extends Money
{
    /**
     * Franc constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return 'CHF';
    }
}