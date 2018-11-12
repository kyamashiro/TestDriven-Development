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
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }

}