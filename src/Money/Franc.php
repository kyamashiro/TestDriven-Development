<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:04
 */

namespace Money;

class Franc
{
    private $amount;

    /**
     * Franc constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}