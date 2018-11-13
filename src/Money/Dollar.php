<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/11
 * Time: 23:19
 */

namespace Money;


class Dollar extends Money
{
    /**
     * Dollar constructor.
     * @param $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}