<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:25
 */

namespace Money;


abstract class Money
{
    protected $amount;
    protected $currency;

    /**
     * Money constructor.
     * @param $amount
     * @param $currency
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    abstract function times(int $multiplier): Money;

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $object): bool
    {
        return ($object instanceof Money) && $this->amount === $object->amount && get_class($object) === get_class($this);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}