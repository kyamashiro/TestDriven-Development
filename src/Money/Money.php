<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:25
 */

namespace Money;

class Money implements Expression
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $currency;

    /**
     * Money constructor.
     * @param $amount
     * @param $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $object): bool
    {
        return ($object instanceof Money) && $this->amount === $object->amount && $object->currency() === $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }
}