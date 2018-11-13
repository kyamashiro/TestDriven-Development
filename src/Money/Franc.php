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
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money
    {
        return Money::Franc($this->amount * $multiplier);
    }
}