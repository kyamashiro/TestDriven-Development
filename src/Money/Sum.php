<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/16
 * Time: 0:33
 */

namespace Money;

class Sum implements Expression
{
    /**
     * @var Money
     */
    public $augend;
    /**
     * @var Money
     */
    public $addend;

    /**
     * Sum constructor.
     * @param $augend
     * @param $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);
    }
}