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
     * 被加算数
     * @var Money
     */
    public $augend;
    /**
     * 加数
     * @var Money
     */
    public $addend;

    /**
     * Sum constructor.
     * @param $augend
     * @param $addend
     */
    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }

    public function plus(Expression $added): Expression
    {
        return new Sum($this, $added);
    }

    public function times(int $multiplier): Expression
    {
        return new Sum($this->augend->times($multiplier), $this->addend->times($multiplier));
    }
}